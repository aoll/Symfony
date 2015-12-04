<?php

// src/Fr/LogBundle/Controller/LogController.php

namespace Fr\LogBundle\Controller;

//etendu de MasterController qui est un controller etendu du controller symfony.
//dans Mastercontroller se trouve des methodes proprent a 1 projet
use Fr\ProjetBundle\Controller\MasterController;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Fr\ForumBundle\Form\AnswerEditType;
use Fr\ForumBundle\Form\AnswerType;
use Fr\ForumBundle\Entity\Answer;
use Fr\ForumBundle\Entity\Threads;
use Fr\ForumBundle\Entity\SousCategorie;
use Fr\ForumBundle\Entity\Categorie;
use Fr\UserBundle\Entity\User;
use Fr\LogBundle\Entity\Log;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class LogController extends MasterController
{

	public function viewallaction()
    	{
		$this->addLog();
		$em = $this->getDoctrine()->getManager();
		$log = $em->getRepository('FrLogBundle:Log')->findBy(array(), array('id' => 'desc'));
		return $this->render('FrProjetBundle:Projet:log_view_all.html.twig', array('log' => $log));
	
	}

    public function indexAction()
    {
    /*	//page < 1 mais ne fonctionne pas 
    	if ($page < 0) {
      // On déclenche une exception NotFoundHttpException, cela va afficher
      // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
      	throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    	}

    	  // On récupère le repository
      $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrForumBundle:Answer')
      ;
      $threads = $repository->findOneByAnswer('Acceuil');
      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('FrForumBundle:Answer:index.html.twig', array(
        'categorie' => $threads
      ));
*/

	    return $this->render('FrForumBundle:Answer:index.html.twig');
    }

    
/*

    public function viewAction($id)
    {

        // On récupère le repository
      $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrForumBundle:Answer')
      ;

      // On récupère l'entité correspondante à l'id $id
      $threads = $repository->find($id);
      
      // $threads est donc une instance de Fr\ForumBundle\Entity\Threads
      // ou null si l'id $id  n'existe pas, d'où ce if :
      if (null === $threads) {
        throw new NotFoundHttpException("La categorie d'id ".$id." n'existe pas.");
      }

      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('FrForumBundle:Threads:view.html.twig', array('threads' => $threads));

  }


   




    public function add_in_categorieAction($id, Request $request)
  	{

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









 
  public function addAction(Request $request)
  	{

	// V5

			$log = new Log();
    
	$user = $this->container->get('security.context')->getToken()->getUser(); 

	$log->setUsername($user->getUsername());

	$date = new \DateTime();

	$log->setDate($date);

//	$url = $this->container->get('request')->headers->get('referer');
    
	$url =  $request->getUri();
    

	$log->setUrl($url);

	$em = $this->getDoctrine()->getManager();   
      $em->persist($log);
      $em->flush();	
	
       return new Response('ok$urllog');

   // return $this->render('FrForumBundle:Answer:add.html.twig', array(
 

    }

    




































    public function editAction($id, Request $request)
  	{ 
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



/*
  	public function deleteAction($id, Request $request)
  	{
	
	
  		 $em = $this->getDoctrine()->getManager();

    	// On récupère l'annonce $id
    	$answer = $em->getRepository('FrForumBundle:Answer')->find($id);
	
		$int = $answer->getIdThreads();
//	$repository = $this->getDoctrine()->getManager()->getRepository('FrForumBundle:Threads');
//	 $threads = $repository->findBy(array('id' => $answer->getIdThreads()));

	// return new Response($threads->getId());
	// $int = $threads->getId();
    	if (null === $answer) {
      	throw new NotFoundHttpException("answer d'id ".$id." n'existe pas.");
    	}

    	// On crée un formulaire vide, qui ne contiendra que le champ CSRF
    	// Cela permet de protéger la suppression d'annonce contre cette faille
    	$form = $this->createFormBuilder()->getForm();

    	if ($form->handleRequest($request)->isValid()) {
      	
	 
	
	$em->remove($answer);
      		$em->flush(); 

		 $threads = $repository->findBy($int);
		 $answer = $em->getRepository('FrForumBundle:Answer')->findBy(array('idThreads' => $id));

        $tab = array('threads' => $threads, 'answer' =>	$answer);

*/
/*
      	$request->getSession()->getFlashBag()->add('info', "La reponse a bien été supprimée.");
	

	$answer = $em->getRepository('FrForumBundle:Answer')->findAll();    	


        $tab = array('threads' => $threads, 'answer' => $answer);

*/		

 /*    // Le render ne change pas, on passait avant un tableau, maintenant un objet
     // return $this->render('FrForumBundle:Threads:view.html.twig', array('tab' => $tab));

    // return $this->render('FrForumBundle:Threads:view.html.twig', array('tab' => $tab));

      //	return $this->redirect($this->generateUrl('fr_forum_threads_view', ));
    	}

    	// Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    	return $this->render('FrForumBundle:Answer:delete.html.twig', array(
	       'answer' => $answer,
	       'form'   => $form->createView() ));
  	}




  	public function menuAction()
  	{


    	$repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrForumBundle:Threads')
      ;
      $threads = $repository->findall();
      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('FrForumBundle:Threads:menu.html.twig', array(
        'threads' => $threads
      ));
  	}
*/
 

	   public function deleteAction($id, Request $request)
        {
                 $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
//        $threads = $em->getRepository('FrForumBundle:Threads')->find($id);

        $answer = $em->getRepository('FrForumBundle:Answer')->find($id);

        if (null === $answer) {
        throw new NotFoundHttpException("La reponse d'id ".$id." n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {

        $em->remove($answer);
                $em->flush();
        $request->getSession()->getFlashBag()->add('info', "La reponse a bien été supprimée.");


                $threads = $em->getRepository('FrForumBundle:Threads')->find($answer->getIdThreads());



$repository = $this->getDoctrine()->getManager()->getRepository('FrForumBundle:Answer');

        $answer = $repository->findBy(array('idThreads' => $threads->getId()), array('id' => 'desc'));



        $tab = array('threads' => $threads, 'answer' => $answer);

      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('FrForumBundle:Threads:view.html.twig', array('tab' => $tab));



        //return $this->redirect($this->generateUrl('fr_forum_home'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('FrForumBundle:Answer:delete.html.twig', array(
               'answer' => $answer,
               'form'   => $form->createView() ));
        }

	

}