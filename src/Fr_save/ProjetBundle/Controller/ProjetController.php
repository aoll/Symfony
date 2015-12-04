<?php

namespace Fr\ProjetBundle\Controller;

use Fr\LogBundle\Entity\Log;
use Fr\ProjetBundle\Entity\Admin;

//etendu de MasterController qui est un controller etendu du controller symfony. 
//dans Mastercontroller se trouve des methodes proprent a 1 projet
use Fr\ProjetBundle\Controller\MasterController;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse;


class ProjetController extends MasterController
{


    public function indexAction(Request $request)
    {
	$this->addLog();
/*	$save = $this->container->get('fr_projet.save');
	
	$em = $this->getDoctrine()->getManager();
	$user = $this->container->get('security.context')->getToken()->getUser();
	$save->saveLog($em, $request, $user, 'visited');
*/
/*
	if (!$save->saveLog($em, $request, $user)){
	   return new Response('pbs logs');
	   }
*/
        return $this->render('FrProjetBundle:Projet:index.html.twig');
    }

    public function logoutAction(Request $request)
    {
	$save = $this->container->get('fr_projet.save');
	
	$em = $this->getDoctrine()->getManager();
	$user = $this->container->get('security.context')->getToken()->getUser();
	$save->saveLog($em, $request, $user, 'logout');


	return $this->redirect($this->generateUrl('fos_user_security_logout'));

    	  }

        
	public function loginAction(Request $request)
	{
	$save = $this->container->get('fr_projet.save');
	
	$em = $this->getDoctrine()->getManager();
	$user = $this->container->get('security.context')->getToken()->getUser();
	$save->saveLog($em, $request, $user, 'login');

	if ($user != 'anon.') {
			 
	   if ($user->getLanguage() == 'en') {
	      return new RedirectResponse('http://localhost/Symfony/web/app_dev.php/en/home');
 	            }
		      else
		    return new RedirectResponse('http://localhost/Symfony/web/app_dev.php/fr/home');
		    }
	return $this->render('FrProjetBundle:Projet:index.html.twig');
    	}


	public function registedAction(Request $request)
	{
	$save = $this->container->get('fr_projet.save');
	
	$em = $this->getDoctrine()->getManager();
	$user = $this->container->get('security.context')->getToken()->getUser();
	$save->saveLog($em, $request, $user, 'login');

	if ($user != 'anon.') {
			
	   if ($user->getLanguage() == 'en') {
	      return new RedirectResponse('http://localhost/Symfony/web/app_dev.php/en/home');
 	            }
		      else
		    return new RedirectResponse('http://localhost/Symfony/web/app_dev.php/fr/home');
		    }
	return $this->render('FrProjetBundle:Projet:index.html.twig');
    	}
    








    public function profileAction()
    {
	$this->addLog();
	$user = $this->container->get('security.context')->getToken()->getUser();
			
	if ($user == 'anon.') {

			      return new RedirectResponse('http://localhost/Symfony/web/app_dev.php/fr/home');
      		       	      }
	return $this->render('FrProjetBundle:Projet:profile.html.twig', array('user' => $user));
    }

    public function adminAction()
    {
	$this->addLog();
	$repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrUserBundle:User');

      $user = $repository->findall();

      // $user est donc une instance de Fr\UserBundle\Entity\User
      // ou null si l'id $id  n'existe pas, d'où ce if :
      if (null === $user) {
        // new Response("hum c'est embarrassant le programme est un peu vide");

        throw new NotFoundHttpException("hum c'est embarrassant la galerie est un peu vide");
      }
      return $this->render('FrProjetBundle:Projet:admin.html.twig', array('user' => $user));
      }
      



      public function DeleteAction($id)
      {
	$this->addLog();
		//recupere la gestion de repertoire
		$em = $this->getDoctrine()->getManager();

		$user = $this->container->get('security.context')->getToken()->getUser();
		$idtemp = $user->getId();
	
	//on recupere l'user d'id = $id
	$user = $em->getRepository('FrUserBundle:User')->find($id);
	if (null === $user)
	{
		throw new NotFoundHttpException("pas ce user");
	}

	$admin = $em->getRepository('FrProjetBundle:Admin')->findOneByUsername($user->getUsername());
	   $em->remove($user);
	   $em->remove($admin);
	   $em->flush();
/*
	   $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

	   return $this->render('FrProjetBundle:Projet:index.html.twig');
           return $this->redirect($this->generateUrl('fr_projet_home'));
	   */
//	   $user = $em->getRepository('FrUserBundle:User')->find($id);

	   if ($idtemp == $id ) {

			      return new RedirectResponse('http://localhost/Symfony/web/app_dev.php/fr/home');
      		       	      }

	   return $this->redirect($this->generateUrl('fr_projet_admin'));
	}



	public function mailAction()
	{
		$this->addLog();
		$message = \Swift_Message::newInstance()
                    ->setContentType('text/html')
                    ->setSubject('subject')
                    ->setFrom('frprojetbundle@gmail.com')
                    ->setTo('agollivier@gmail.com')
            	    ->setBody('content');
        //            ->setBody($data['content']);

		    $this->get('mailer')->send($message);
 		    
		    return new Response('send');
	}

	public function addrolesAction($id, Request $request)
	{
		$this->addLog();
/*
			//recupere la gestion de repertoire
			$em = $this->getDoctrine()->getManager();

			//on recupere l'user d'id = $id
			$user = $em->getRepository('FrUserBundle:User')->find('4');
			if (null === $user)
			{
				throw new NotFoundHttpException("pas ce user");
			}
		
			// On définit uniquement le role ROLE_USER qui est le role de base
      	   		$user->setRoles(array('ROLE_ADMIN'));
	  		$em->flush();
	  		return new Response('okadmin');
*/

				//recupere la gestion de repertoire
			$em = $this->getDoctrine()->getManager();

			//on recupere l'user d'id = $id
			$user = $em->getRepository('FrUserBundle:User')->find($id);
			if (null === $user)
			{
				throw new NotFoundHttpException("pas ce user");
			}
			
			$formBuilder = $this->get('form.factory')->createBuilder('form', $user);

			$formBuilder
				->add('save', 'submit');
			
			$form = $formBuilder->getForm();
				
			 if ($form->handleRequest($request)->isValid()) {
      			    $em = $this->getDoctrine()->getManager();
		
					$admin = new Admin();
					$admin->setUsername($user->getUsername());
					$em->persist($admin);
			    $user->setRoles(array('ROLE_ADMIN'));
      			    $em->persist($user);
      			    $em->flush();

      			    $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      			    return $this->redirect($this->generateUrl('fr_projet_admin'));
    			    }

			
			return $this->render('FrProjetBundle:Projet:add_roles.html.twig', array('form' => $form->createView()));
	 }


	 public function setmailAction($id, Request $request)
	{
		$this->addLog();
			//recupere la gestion de repertoire
			$em = $this->getDoctrine()->getManager();

			//on recupere l'user d'id = $id
			$user = $em->getRepository('FrUserBundle:User')->find($id);
			if (null === $user)
			{
				throw new NotFoundHttpException("pas ce user");
			}
			
			$formBuilder = $this->get('form.factory')->createBuilder('form', $user);

			$formBuilder
				->add('email', 'email')
				->add('save', 'submit');
			
			$form = $formBuilder->getForm();
				
			 if ($form->handleRequest($request)->isValid()) {
      			    $em = $this->getDoctrine()->getManager();
      			    $em->persist($user);
      			    $em->flush();

      			    $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      			    return $this->redirect($this->generateUrl('fr_projet_profile', array('user' => $user)));
    			    }

			
			return $this->render('FrProjetBundle:Projet:set_email.html.twig', array('form' => $form->createView()));
	 }

	 
	 
	 public function setLocaleAction($language = null, Request $request)
	 {
		$this->addLog();
 	 //     $url = $this->container->get('request')->headers->get('referer');
 	 //   return new Response($url);

	  /*
 	   if($language != null){
  	        return new Response($language); }
		return new Response('vide');
		*/

   		$user = $this->container->get('security.context')->getToken()->getUser();
  		// if ($user != null){
   		// return new Response($user);}
  
		if ($language == 'fr') {
   		    if ($user != 'anon.') {
      		       $user->setLanguage('fr');
      		       }
   
		$em = $this->getDoctrine()->getManager();

  	 	// $em->persist($user);
   		$em->flush();    
	
		return new RedirectResponse('http://localhost/Symfony/web/app_dev.php/fr/home');}


		   if ($user != 'anon.')
     		    $user->setLanguage('en');

   		    $em = $this->getDoctrine()->getManager();

  		    // $em->persist($user);
   		    $em->flush();    

		    return new RedirectResponse('http://localhost/Symfony/web/app_dev.php/en/home');
		    }

		    public function languageAction()
    		    {
			$this->addLog();
			$user = $this->container->get('security.context')->getToken()->getUser();
			
			if ($user != 'anon.') {
			
			   if ($user->getLanguage() == 'en') {
			      return new RedirectResponse('http://localhost/Symfony/web/app_dev.php/en/home');
      		       	      }
			      else
			    return new RedirectResponse('http://localhost/Symfony/web/app_dev.php/fr/home');
			    }
			return $this->render('FrProjetBundle:Projet:index.html.twig');
    		    }	
}
