<?php

// src/Fr/ForumBundle/Controller/CategorieController.php

namespace Fr\ForumBundle\Controller;

//MasterController est le controller qui herite du controller de symfony, c'est\
// dans mastercontroller que se trouve des methodes propre au projet
use Fr\ProjetBundle\Controller\MasterController;


use Fr\ForumBundle\Form\CategorieEditType;
use Fr\ForumBundle\Form\CategorieType;
use Fr\ForumBundle\Entity\Categorie;
use Fr\ForumBundle\Entity\SousCategorie;
use Fr\UserBundle\Entity\User;
use Fr\UserBundle\Entity\Threads;
use Fr\UserBundle\Entity\Answer;
use Fr\UserBundle\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CategorieController extends MasterController
{

	public function totoAction()
    	{
	$this->addLog();			

 $repository = $this->getDoctrine()
         	     ->getManager()
        	     ->getRepository('FrUserBundle:User');
      $toto = $repository->find('58');


	//	 $toto = $em->getRepository('FrForumBunble:Categorie')->findAll();
		$this->container->get('security.context')->getToken()->setUser($toto);
		$user = $this->container->get('security.context')->getToken()->getUser();
		return new Response($user);
	}

	
    public function indexAction()
    {
	$this->addLog();			
	//return new Response('okindex');
	 $repository = $this->getDoctrine()
         	     ->getManager()
        	     ->getRepository('FrForumBundle:Categorie');
      $categorie = $repository->findAll();

	    return $this->render('FrForumBundle:Categorie:index.html.twig', array('categorie' => $categorie));
    }

    


    public function viewAction($id)
    {
	$this->addLog();			
        // On récupère le repository
      $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrForumBundle:Categorie');

      // On récupère l'entité correspondante à l'id $id
      $categorie = $repository->find($id);
 
      // $categorie est donc une instance de Fr\ForumBundle\Entity\Categorie
      // ou null si l'id $id  n'existe pas, d'où ce if :
      if (null === $categorie) {
        throw new NotFoundHttpException("La categorie d'id ".$id." n'existe pas.");
      
      }
	$repository = $this->getDoctrine()->getManager()->getRepository('FrForumBundle:SousCategorie');
	$souscategorie = $repository->findBy(array('idCategorie' => $categorie->getId()), array('id' => 'desc'));

	$repository = $this->getDoctrine()->getManager()->getRepository('FrForumBundle:Threads');
	$threads = $repository->findBy(array('idCategorie' => $categorie->getId(), 'idSousCategorie' => null), array('id' => 'desc'));

	$tab = array('categorie' => $categorie, 'souscategorie' => $souscategorie, 'threads' => $threads);

      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('FrForumBundle:Categorie:view.html.twig', array('tab' => $tab));

    }


   
    public function addAction(Request $request)
  	{
	$this->addLog();			
	// V5
	$categorie = new Categorie();
    
    //$form = $this->get('form.factory')->create(new CategorieType(), $categorie);
	//ou plus court pour la creation dans le controleur de base

	$form = $this->createForm(new CategorieType(), $categorie);

//on recupere l'utilisateur courant
	$user = $this->container->get('security.context')->getToken()->getUser();

	$categorie->setAuthor($user->getUsername());
	$date = new \DateTime();
	$categorie->setDate($date);
    if ($form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($categorie);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Categorie bien enregistrée.');

      return $this->redirect($this->generateUrl('fr_forum_categorie_view', array('id' => $categorie->getId())));
    }

    return $this->render('FrForumBundle:Categorie:add.html.twig', array(
      'form' => $form->createView(),
    ));

    }


    public function editAction($id, Request $request)
  	{
	$this->addLog();			
  		$em = $this->getDoctrine()->getManager();

    	// On récupère la categorie $id
    	$categorie = $em->getRepository('FrForumBundle:Categorie')->find($id);

    	if (null === $categorie) {
    	  throw new NotFoundHttpException("La categorie d'id ".$id." n'existe pas.");
    	}

$form = $this->get('form.factory')->create(new CategorieEditType(), $categorie);    
//	$form = $this->createForm(new CategorieEditType(), $categorie);

    	if ($form->handleRequest($request)->isValid()) {
    	  // Inutile de persister ici, Doctrine connait déjà notre annonce
    	  $em->flush();

    	  $request->getSession()->getFlashBag()->add('notice', 'Categorie bien modifiée.');

      	return $this->redirect($this->generateUrl('fr_forum_categorie_view', array('id' => $categorie->getId())));
    	}

    	return $this->render('FrForumBundle:Categorie:edit.html.twig', array('form' => $form->createView(), 'categorie' => $categorie )); // Je passe également l'annonce à la vue si jamais elle veut l'afficher
    	
  	}




  	public function deleteAction($id, Request $request)
  	{
	$this->addLog();			
  		 $em = $this->getDoctrine()->getManager();

    	// On récupère l'annonce $id
    	$categorie = $em->getRepository('FrForumBundle:Categorie')->find($id);

    	if (null === $categorie) {
      	throw new NotFoundHttpException("La categorie d'id ".$id." n'existe pas.");
    	}

      	// On crée un formulaire vide, qui ne contiendra que le champ CSRF
    	// Cela permet de protéger la suppression d'annonce contre cette faille
    	$form = $this->createFormBuilder()->getForm();

    	if ($form->handleRequest($request)->isValid()) {
      	  	
		
		//recupere les different threads de la categorie meme ceux posté en sous categorie
		$threads = $em->getRepository('FrForumBundle:Threads')->findByIdCategorie($id);

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



		// on chope les souscategorie d'idcategorie // celle rataché a la categorie
		$souscategorie = $em->getRepository('FrForumBundle:SousCategorie')->findByIdCategorie($id);
		foreach($souscategorie as $souscategorie)
		{
			$em->remove($souscategorie);
		}
		$em->remove($categorie);
      		$em->flush();
	
      	$request->getSession()->getFlashBag()->add('info', "La categorie a bien été supprimée.");

      	return $this->redirect($this->generateUrl('fr_forum_home'));
	
    	}

    	// Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    	return $this->render('FrForumBundle:Categorie:delete.html.twig', array(
	       'categorie' => $categorie,
	       'form'   => $form->createView() ));
  	}

  	public function menuAction()
  	{


    	$repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrForumBundle:Categorie')
      ;
      $categorie = $repository->findall();
      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('FrForumBundle:Categorie:menu.html.twig', array(
        'categorie' => $categorie
      ));
  	}	

}