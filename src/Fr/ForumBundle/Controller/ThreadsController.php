<?php

// src/Fr/ForumBundle/Controller/ThreadsController.php

namespace Fr\ForumBundle\Controller;

//MasterController est le controller qui herite du controller de symfony, c'est\
// dans mastercontroller que se trouve des methodes propre au projet
use Fr\ProjetBundle\Controller\MasterController;


use Fr\ForumBundle\Form\ThreadsEditType;
use Fr\ForumBundle\Form\ThreadsType;
use Fr\ForumBundle\Entity\Threads;
use Fr\ForumBundle\Entity\SousCategorie;
use Fr\ForumBundle\Entity\Categorie;
use Fr\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ThreadsController extends MasterController
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
        ->getRepository('FrForumBundle:Threads')
      ;
      $threads = $repository->findOneByThreads('Acceuil');
      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('FrForumBundle:Threads:index.html.twig', array(
        'categorie' => $threads
      ));
*/

	    return $this->render('FrForumBundle:Threads:index.html.twig');
    }

    


    public function viewAction($id)
    {
    $this->addLog();
        // On récupère le repository
      $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrForumBundle:Threads')
      ;

      // On récupère l'entité correspondante à l'id $id
      $threads = $repository->find($id);
      
      // $threads est donc une instance de Fr\ForumBundle\Entity\Threads
      // ou null si l'id $id  n'existe pas, d'où ce if :
      if (null === $threads) {
        throw new NotFoundHttpException("La categorie d'id ".$id." n'existe pas.");
      }
              $em = $this->getDoctrine()->getManager();

	      // On récupère la threads $id
        $answer = $em->getRepository('FrForumBundle:Answer')->findBy(array('idThreads' => $id));
	

	$commentaire = $em->getRepository('FrForumBundle:Commentaire')->findAll();

	$tab = array('threads' => $threads, 'answer' => $answer, 'commentaire' => $commentaire);
      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('FrForumBundle:Threads:view.html.twig', array('tab' => $tab));

  }


   




    public function add_in_categorieAction($id, Request $request)
  	{
	$this->addLog();
	// V5
	$threads = new Threads();
    
    //$form = $this->get('form.factory')->create(new ThreadsType(), $threads);
	//ou plus court pour la creation dans le controleur de base

	$form = $this->createForm(new ThreadsType(), $threads);

//on recupere l'utilisateur courant
	$user = $this->container->get('security.context')->getToken()->getUser();

	$threads->setAuthor($user->getUsername());
	$date = new \DateTime();
	$threads->setDate($date);


	$threads->setidCategorie($id);
    if ($form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($threads);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Threads bien enregistrée.');

      return $this->redirect($this->generateUrl('fr_forum_categorie_view', array('id' => $threads->getIdCategorie() )));
    }

    return $this->render('FrForumBundle:Threads:add.html.twig', array(
      'form' => $form->createView(),
    ));

    }










  public function addAction($id, Request $request)
  	{
	$this->addLog();
	// V5
	$threads = new Threads();
    
    //$form = $this->get('form.factory')->create(new ThreadsType(), $threads);
	//ou plus court pour la creation dans le controleur de base

	$form = $this->createForm(new ThreadsType(), $threads);

//on recupere l'utilisateur courant
	$user = $this->container->get('security.context')->getToken()->getUser();

	$threads->setAuthor($user->getUsername());
	$date = new \DateTime();
	$threads->setDate($date);

	$em = $this->getDoctrine()->getManager();

    	// On récupère la threads $id
    //	$souscategorie = $em->getRepository('FrForumBundle:SousCategorie')->find($id);


$repository = $this->getDoctrine()->getManager()->getRepository('FrForumBundle:SousCategorie');

        $souscategorie = $repository->find($id);


	$threads->setidCategorie($souscategorie->getIdCategorie());
	$threads->setidSousCategorie($id);
    if ($form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager(); 
      $em->persist($threads);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Threads bien enregistrée.');

      return $this->redirect($this->generateUrl('fr_forum_sous_categorie_view', array('id' => $threads->getIdSousCategorie() )));
    }

    return $this->render('FrForumBundle:Threads:add.html.twig', array(
      'form' => $form->createView(),
    ));

    }



    public function editAction($id, Request $request)
  	{ 
	$this->addLog();
  		$em = $this->getDoctrine()->getManager();

    	// On récupère la threads $id
    	$threads = $em->getRepository('FrForumBundle:Threads')->find($id);

    	if (null === $threads) {
    	  throw new NotFoundHttpException("La threads d'id ".$id." n'existe pas.");
    	}

$form = $this->get('form.factory')->create(new ThreadsEditType(), $threads);    
//	$form = $this->createForm(new ThreadsEditType(), $threads);

    	if ($form->handleRequest($request)->isValid()) {
    	  // Inutile de persister ici, Doctrine connait déjà notre annonce
    	  $em->flush();

    	  $request->getSession()->getFlashBag()->add('notice', 'Threads bien modifiée.');

      	return $this->redirect($this->generateUrl('fr_forum_threads_view', array('id' => $threads->getId())));
    	}

    	return $this->render('FrForumBundle:Threads:edit.html.twig', array('form' => $form->createView(), 'threads' => $threads )); // Je passe également l'annonce à la vue si jamais elle veut l'afficher
    	
  	}




  	public function deleteAction($id, Request $request)
  	{
		$this->addLog();
  		 $em = $this->getDoctrine()->getManager();

    	// On récupère l'annonce $id
    	$threads = $em->getRepository('FrForumBundle:Threads')->find($id);
    	if (null === $threads) {
      	throw new NotFoundHttpException("La threads d'id ".$id." n'existe pas.");
    	}

    	// On crée un formulaire vide, qui ne contiendra que le champ CSRF
    	// Cela permet de protéger la suppression d'annonce contre cette faille
    	$form = $this->createFormBuilder()->getForm();

    //	if ($form->handleRequest($request)->isValid()) {
      	

      	$request->getSession()->getFlashBag()->add('info', "La threads a bien été supprimée.");
		$em->remove($threads);
      		$em->flush(); 

	if($threads->getIdSousCategorie()) { 
  	$souscategorie = $em->getRepository('FrForumBundle:SousCategorie')->find($threads->getIdSousCategorie());
	$repository = $this->getDoctrine()->getManager()->getRepository('FrForumBundle:Threads');
        $threads = $repository->findBy(array('idSousCategorie' => $souscategorie->getId()), array('id' => 'desc'));
        $tab = array('souscategorie' => $souscategorie, 'threads' => $threads);

      	// Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('FrForumBundle:SousCategorie:view.html.twig', array('tab' => $tab));
	}


	// les deux methodes fonctionnent, une est plus courte que l'autre ....
	return $this->redirect($this->generateUrl('fr_forum_categorie_view', array('id' => $threads->getIdCategorie())));
//	}
   }



}