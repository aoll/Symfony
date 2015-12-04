<?php

// src/Fr/ReponseBundle/Controller/ReponeController.php

namespace Fr\ReponseBundle\Controller;

//etendu de MasterController qui est un controller etendu du controller symfony.
//dans Mastercontroller se trouve des methodes proprent a 1 projet
use Fr\ProjetBundle\Controller\MasterController;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Fr\UserBundle\Entity\User;
use Fr\ReponseBundle\Entity\Reponse;
use Fr\ReponseBundle\Form\ReponseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ReponseController extends MasterController
{
/*
    public function indexAction($page)
    {
    	//page < 1 mais ne fonctionne pas 
    	if ($page < 0) {
      // On déclenche une exception NotFoundHttpException, cela va afficher
      // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
      	throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    	}


    	  // On récupère le repository
      $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('BIBiodanzaBundle:Advert')
      ;
      $advert = $repository->findOneByCategorie('Acceuil');
      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('BIBiodanzaBundle:Advert:index.html.twig', array(
        'advert' => $advert
      ));

    }



    public function viewAction($id)
    {

        // On récupère le repository
      $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('BIBiodanzaBundle:Advert')
      ;

      // On récupère l'entité correspondante à l'id $id
      $advert = $repository->find($id);

      // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
      // ou null si l'id $id  n'existe pas, d'où ce if :
      if (null === $advert) {
        throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
      }

      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('BIBiodanzaBundle:Advert:view.html.twig', array(
        'advert' => $advert
      ));

    }


   
    public function addAction(Request $request)
  	{

/*
	//V4

	$advert = new Advert();

    // J'ai raccourci cette partie, car c'est plus rapide à écrire !
    $form = $this->get('form.factory')->createBuilder('form', $advert)
      ->add('date',      'date')
      ->add('title',     'text')
      ->add('content',   'textarea')
      ->add('author',    'text')
      ->add('published', 'checkbox')
      ->add('save',      'submit')
      ->getForm()
    ;

    // On fait le lien Requête <-> Formulaire
    // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
    $form->handleRequest($request);

    // On vérifie que les valeurs entrées sont correctes
    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
    if ($form->isValid()) {
      // On l'enregistre notre objet $advert dans la base de données, par exemple
      $em = $this->getDoctrine()->getManager();
      $em->persist($advert);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      // On redirige vers la page de visualisation de l'annonce nouvellement créée
      return $this->redirect($this->generateUrl('bi_biodanza_view', array('id' => $advert->getId())));
    }

    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
    return $this->render('BIBiodanzaBundle:Advert:add.html.twig', array(
      'form' => $form->createView(),
    ));

	// V5	$advert = new Advert();
    
    //$form = $this->get('form.factory')->create(new AdvertType(), $advert);
	//ou plus court pour la creation dans le controleur de base

	$form = $this->createForm(new AdvertType(), $advert);


    if ($form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($advert);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      return $this->redirect($this->generateUrl('bi_biodanza_view', array('id' => $advert->getId())));
    }

    return $this->render('BIBiodanzaBundle:Advert:add.html.twig', array(
      'form' => $form->createView(),
    ));

    }


    public function editAction($id, Request $request)
  	{
  		$em = $this->getDoctrine()->getManager();

    	// On récupère l'annonce $id
    	$advert = $em->getRepository('BIBiodanzaBundle:Advert')->find($id);

    	if (null === $advert) {
    	  throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    	}

    	$form = $this->createForm(new AdvertEditType(), $advert);

    	if ($form->handleRequest($request)->isValid()) {
    	  // Inutile de persister ici, Doctrine connait déjà notre annonce
    	  $em->flush();

    	  $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

      	return $this->redirect($this->generateUrl('bi_biodanza_view', array('id' => $advert->getId())));
    	}

    	return $this->render('BIBiodanzaBundle:Advert:edit.html.twig', array(
      	'form'   => $form->createView(),
      	'advert' => $advert // Je passe également l'annonce à la vue si jamais elle veut l'afficher
    	));
  	}




  	public function deleteAction($id, Request $request)
  	{
  		 $em = $this->getDoctrine()->getManager();

    	// On récupère l'annonce $id
    	$advert = $em->getRepository('BIBiodanzaBundle:Advert')->find($id);

    	if (null === $advert) {
      	throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    	}

    	// On crée un formulaire vide, qui ne contiendra que le champ CSRF
    	// Cela permet de protéger la suppression d'annonce contre cette faille
    	$form = $this->createFormBuilder()->getForm();

    	if ($form->handleRequest($request)->isValid()) {
      		$em->remove($advert);
      		$em->flush();

      	$request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

      	return $this->redirect($this->generateUrl('bi_biodanza_home'));
    	}

    	// Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    	return $this->render('BIBiodanzaBundle:Advert:delete.html.twig', array(
    	  'advert' => $advert,
    	  'form'   => $form->createView()
    	));
  	}

  	public function menuAction()
  	{

    	$repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('BIBiodanzaBundle:Advert')
      ;
      $advert = $repository->findall();
      // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return $this->render('BIBiodanzaBundle:Advert:menu.html.twig', array(
        'advert' => $advert
      ));
  	}	

*/

	public function user_add_reponseAction($id, Request $request)
	{

		$this->addLog();
			$reponse = new Reponse();
    
    //$form = $this->get('form.factory')->create(new AdvertType(), $advert);
	//ou plus court pour la creation dans le controleur de base

	$form = $this->createForm(new ReponseType(), $reponse);
	$reponse->setIdRef($id);
	$user = $this->container->get('security.context')->getToken()->getUser();
	$reponse->setAuthor($user->getUsername());
    if ($form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($reponse);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'reponse posté.');


      //return new Response('okreponse');
      return $this->redirect($this->generateUrl('fr_tickets_my_tickets'));//, array('id' => $advert->getId())));
    }

    return $this->render('FrReponseBundle:Reponse:user_add_reponse.html.twig', array(
      'form' => $form->createView(),
    ));

    }



    	public function admin_add_reponseAction($id, Request $request)
	{
		$this->addLog();
			$reponse = new Reponse();
    
    //$form = $this->get('form.factory')->create(new AdvertType(), $advert);
	//ou plus court pour la creation dans le controleur de base

	$form = $this->createForm(new ReponseType(), $reponse);
	$reponse->setIdRef($id);
	$user = $this->container->get('security.context')->getToken()->getUser();
	$reponse->setAuthor($user->getUsername());
    if ($form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($reponse);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'reponse posté.');


     
      return $this->redirect($this->generateUrl('fr_tickets_admin_open_tickets'));//, array('id' => $advert->getId())));
    }

    return $this->render('FrReponseBundle:Reponse:user_add_reponse.html.twig', array(
      'form' => $form->createView(),
    ));

    }				

}