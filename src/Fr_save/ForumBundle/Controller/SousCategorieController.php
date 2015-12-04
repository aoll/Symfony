<?php

// src/Fr/ForumBundle/Controller/SousCategorieController.php

namespace Fr\ForumBundle\Controller;

//MasterController est le controller qui herite du controller de symfony, c'est\
// dans mastercontroller que se trouve des methodes propre au projet
use Fr\ProjetBundle\Controller\MasterController;


use Fr\ForumBundle\Form\SousCategorieEditType;
use Fr\ForumBundle\Form\SousCategorieType;
use Fr\ForumBundle\Entity\SousCategorie;
use Fr\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class SousCategorieController extends MasterController
{
    public function indexAction()
    {
    $this->addLog();
    /*	//page < 1 mais ne fonctionne pas 
    	if ($page < 0) {
      // On déclenche une exception NotFoundHttpException, cela va afficher
      // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
      	throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    	}

    	  // On récupère le repository
      $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrForumBundle:SousCategorie')
      ;
      $souscategorie = $repository->findOneBySousCategorie('Acceuil');
      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('FrForumBundle:SousCategorie:index.html.twig', array(
        'categorie' => $souscategorie
      ));
*/

	    return $this->render('FrForumBundle:SousCategorie:index.html.twig');
    }

    


    public function viewAction($id)
    {
    $this->addLog();
/*
        // On récupère le repository
      $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrForumBundle:SousCategorie')
      ;

      // On récupère l'entité correspondante à l'id $id
      $souscategorie = $repository->find($id);

      // $souscategorie est donc une instance de Fr\ForumBundle\Entity\SousCategorie
      // ou null si l'id $id  n'existe pas, d'où ce if :
      if (null === $souscategorie) {
        throw new NotFoundHttpException("La categorie d'id ".$id." n'existe pas.");
      }

      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('FrForumBundle:SousCategorie:view.html.twig', array('souscategorie' => $souscategorie));
*/

   // On récupère le repository
      $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrForumBundle:SousCategorie');

      // On récupère l'entité correspondante à l'id $id
      $souscategorie = $repository->find($id);

      // $categorie est donc une instance de Fr\ForumBundle\Entity\Categorie
      // ou null si l'id $id  n'existe pas, d'où ce if :
      if (null === $souscategorie) {
        throw new NotFoundHttpException("La souscategorie d'id ".$id." n'existe pas.");

      }
      $repository = $this->getDoctrine()->getManager()->getRepository('FrForumBundle:Threads');

        $threads = $repository->findBy(array('idSousCategorie' => $souscategorie->getId()), array('id' => 'desc'));

        $tab = array('souscategorie' => $souscategorie, 'threads' => $threads);

      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('FrForumBundle:SousCategorie:view.html.twig', array('tab' => $tab));



    }


   


    public function addAction($id, Request $request)
  	{
		$this->addLog();
	// V5
	$souscategorie = new SousCategorie();
    
    //$form = $this->get('form.factory')->create(new SousCategorieType(), $souscategorie);
	//ou plus court pour la creation dans le controleur de base

	$form = $this->createForm(new SousCategorieType(), $souscategorie);

//on recupere l'utilisateur courant
	$user = $this->container->get('security.context')->getToken()->getUser();

	$souscategorie->setAuthor($user->getUsername());
	$date = new \DateTime();
	$souscategorie->setDate($date);


	$souscategorie->setidCategorie($id);
    if ($form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($souscategorie);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'SousCategorie bien enregistrée.');

      return $this->redirect($this->generateUrl('fr_forum_sous_categorie_view', array('id' => $souscategorie->getId() )));
    }

    return $this->render('FrForumBundle:SousCategorie:add.html.twig', array(
      'form' => $form->createView(),
    ));

    }


    public function editAction($id, Request $request)
  	{ 
	  $this->addLog();
  		$em = $this->getDoctrine()->getManager();

    	// On récupère la souscategorie $id
    	$souscategorie = $em->getRepository('FrForumBundle:SousCategorie')->find($id);

    	if (null === $souscategorie) {
    	  throw new NotFoundHttpException("La souscategorie d'id ".$id." n'existe pas.");
    	}

$form = $this->get('form.factory')->create(new SousCategorieEditType(), $souscategorie);    
//	$form = $this->createForm(new SousCategorieEditType(), $souscategorie);

    	if ($form->handleRequest($request)->isValid()) {
    	  // Inutile de persister ici, Doctrine connait déjà notre annonce
    	  $em->flush();

    	  $request->getSession()->getFlashBag()->add('notice', 'SousCategorie bien modifiée.');

      	return $this->redirect($this->generateUrl('fr_forum_sous_categorie_view', array('id' => $souscategorie->getId())));
    	}

    	return $this->render('FrForumBundle:SousCategorie:edit.html.twig', array('form' => $form->createView(), 'souscategorie' => $souscategorie )); // Je passe également l'annonce à la vue si jamais elle veut l'afficher
    	
  	}




  	public function deleteAction($id, Request $request)
  	{
	$this->addLog();

	 $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $souscategorie = $em->getRepository('FrForumBundle:SousCategorie')->find($id);

	if (null === $souscategorie) {
	throw new NotFoundHttpException("La sous categorie d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {


                //recupere les different threads de la categorie meme ceux posté en sous categorie
                $threads = $em->getRepository('FrForumBundle:Threads')->findByIdSousCategorie($id);

                foreach($threads as $threads){

                                 $answer = $em->getRepository('FrForumBundle:Answer')->findByIdThreads($threads->getId());
                                 $commentaire = $em->getRepository('FrForumBundle:Commentaire')->findByIdThreads($threads->getId());



                                 foreach($answer as $answer) {
                                                 $em->remove($answer);
                                 }
                                 foreach($commentaire as $commentaire) {
                                                 $em->remove($commentaire);
                                 }
                       $em->remove($threads);
			}
	        $em->remove($souscategorie);
                $em->flush();

        $request->getSession()->getFlashBag()->add('info', "La sous categorie a bien été supprimée.");

        //return $this->redirect($this->generateUrl('fr_forum_home'));
	return $this->redirect($this->generateUrl('fr_forum_categorie_view', array('id' => $souscategorie->getidCategorie())));	
        }

	// Si la requête est en GET, on affiche une page de confirmation avant de supprimer
	return $this->render('FrForumBundle:SousCategorie:delete.html.twig', array(
	       'souscategorie' => $souscategorie,
               'form'   => $form->createView() ));
	}

  










	public function menuAction()
  	{


    	$repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrForumBundle:SousCategorie')
      ;
      $souscategorie = $repository->findall();
      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('FrForumBundle:SousCategorie:menu.html.twig', array(
        'souscategorie' => $souscategorie
      ));
  	}	

}