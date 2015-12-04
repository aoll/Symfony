<?php

namespace Fr\TicketsBundle\Controller;

//etendu de MasterController qui est un controller etendu du controller symfony.
//dans Mastercontroller se trouve des methodes proprent a 1 projet
use Fr\ProjetBundle\Controller\MasterController;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Fr\UserBundle\Form\UserType;
use Fr\ReponseBundle\Entity\Reponse;
use Fr\UserBundle\Entity\User;
use Fr\TicketsBundle\Entity\Tickets;
use Fr\ProjetBundle\Entity\Admin;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TicketsController extends MasterController
{
    public function indexAction()
    {
	$this->addLog();
        return $this->render('FrTicketsBundle:Tickets:index.html.twig', array('name' => 'ok'));
    }




    public function newticketsAction(Request $request)
    {

	$this->addLog();
    	 // On crée un objet Advert
    	 $tickets = new Tickets();
	 //$user = new User();

//on recupere l'utilisateur courant 	 
$user = $this->container->get('security.context')->getToken()->getUser();
	  

	 $tickets->setAuthor($user->getUsername());
	 $tickets->setIdAuthor($user->getId());
	 $tickets->setEtat('open');
    // On crée le FormBuilder grâce au service form factory
    $form = $this->get('form.factory')->createBuilder('form', $tickets)
      ->add('objet',     'text')
      ->add('content',   'textarea')
      ->add('save',      'submit')
      ->getForm();



   
// On fait le lien Requête <-> Formulaire
    // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
    $form->handleRequest($request);

    // On vérifie que les valeurs entrées sont correctes
    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
    if ($form->isValid()) {
      // On l'enregistre notre objet $advert dans la base de données, par exemple
      $em = $this->getDoctrine()->getManager();
      $em->persist($tickets);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      // On redirige vers la page de visualisation de l'annonce nouvellement créée
      return $this->redirect($this->generateUrl('fr_tickets_homepage'));
    }

//test
     $tab_tickets_form = array('tickets' => $tickets, 'form' => $form->createView());
     return $this->render('FrTicketsBundle:Tickets:newtickets.html.twig', $tab_tickets_form);


//endtest


 // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule
 //   return $this->render('FrTicketsBundle:Tickets:newtickets.html.twig', array('form' => $form->createView()));
  }



  public function myticketsAction()
  {
	$this->addLog();
	$user = $this->container->get('security.context')->getToken()->getUser();
//	return new Response($user->getUsername());

	$repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrTicketsBundle:Tickets');

      // On récupère l'entité correspondante à colum : author
     $tickets = $repository->findBy(array('author' => $user->getUsername()),  array('id' =>'desc'));

$repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrReponseBundle:Reponse');

$reponse = $repository->findAll();

	 $tabtickets = array('tickets' => $tickets, 'reponse' => $reponse);

	 //$tabreponse = array('reponse' => $reponse);

	 return $this->render('FrTicketsBundle:Tickets:mytickets.html.twig', array('tabtickets' => $tabtickets )); 


  //  return $this->render('FrTicketsBundle:Tickets:mytickets.html.twig', array('tickets' => array('tickets' => $tickets), array('reponse'=> array('reponse' => $reponse))));

     }




 public function closeticketsAction()
  {
	$this->addLog();
	$user = $this->container->get('security.context')->getToken()->getUser();
//	return new Response($user->getUsername());

	$repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('FrTicketsBundle:Tickets')
      ;

      // On récupère l'entité correspondante à colum : categorie
     $tickets = $repository->findBy(array('author' => $user->getUsername()),  array('id' =>'desc'));

    return $this->render('FrTicketsBundle:Tickets:closetickets.html.twig', array('tickets' => $tickets));

     }



     public function etatticketsAction($id, Request $request)
     {
	$this->addLog();
	             //recupere la gestion de repertoire
                        $em = $this->getDoctrine()->getManager();

			      //on recupere le tickets d'id = $id
                        $tickets = $em->getRepository('FrTicketsBundle:Tickets')->find($id);

			      	if (null === $tickets)
                        {
                                throw new NotFoundHttpException("oups not this tickets");
				      	  }

			$user = $this->container->get('security.context')->getToken()->getUser();
			if ($user->getUsername() != $tickets->getAuthor())
			{
				if (!$this->get('security.context')->isGranted('ROLE_ADMIN'))
        			   throw new NotFoundHttpException("are you shure is your tickets");
		      	  }
				

                        $formBuilder = $this->get('form.factory')->createBuilder('form', $tickets);

			             $formBuilder->add('save', 'submit');

                        $form = $formBuilder->getForm();

                         if ($form->handleRequest($request)->isValid()) {
                            $em = $this->getDoctrine()->getManager();
                            $tickets->setEtat('close');
                            $em->persist($tickets);
                            $em->flush();

                            $request->getSession()->getFlashBag()->add('notice', 'done.');
			    

			    if ($user->getUsername() != $tickets->getAuthor())
			    {
				if ($this->get('security.context')->isGranted('ROLE_ADMIN'))
				  return $this->redirect($this->generateUrl('fr_tickets_spool'));
			    }
                            
			    return $this->redirect($this->generateUrl('fr_tickets_my_tickets'));
                            }


                        return $this->render('FrTicketsBundle:Tickets:etattickets.html.twig', array('form' => $form->createView()));
         }




	  public function openticketsAction($id, Request $request)
     	  {
		$this->addLog();
	             //recupere la gestion de repertoire
                        $em = $this->getDoctrine()->getManager();

			      //on recupere le tickets d'id = $id
                        $tickets = $em->getRepository('FrTicketsBundle:Tickets')->find($id);

			      	if (null === $tickets)
                        {
                                throw new NotFoundHttpException("oups not this tickets");
				      	  }

					  			$user = $this->container->get('security.context')->getToken()->getUser();
		if ($user->getUsername() != $tickets->getAuthor())
			{
			if ($this->get('security.context')->isGranted('ROLE_ADMIN'))
			{
							

                        $formBuilder = $this->get('form.factory')->createBuilder('form', $tickets);

			             $formBuilder->add('save', 'submit');

                        $form = $formBuilder->getForm();

                         if ($form->handleRequest($request)->isValid()) {
                            $em = $this->getDoctrine()->getManager();
                            $tickets->setEtat('open');
			    $tickets->setDestinataire('N;');
                            $em->persist($tickets);
                            $em->flush();

                            $request->getSession()->getFlashBag()->add('notice', 'done.');

                            return $this->redirect($this->generateUrl('fr_tickets_spool'));
                            }


                        return $this->render('FrTicketsBundle:Tickets:opentickets.html.twig', array('form' => $form->createView()));
			}

			}









//parti pour les non-admin
			$user = $this->container->get('security.context')->getToken()->getUser();
			if ($user->getUsername() != $tickets->getAuthor())
			{
        			throw new NotFoundHttpException("are you shure is your tickets");
		      	  }
				

                        $formBuilder = $this->get('form.factory')->createBuilder('form', $tickets);

			             $formBuilder->add('save', 'submit');

                        $form = $formBuilder->getForm();

                         if ($form->handleRequest($request)->isValid()) {
                            $em = $this->getDoctrine()->getManager();
                            $tickets->setEtat('open');
                            $em->persist($tickets);
                            $em->flush();

                            $request->getSession()->getFlashBag()->add('notice', 'done.');

                            return $this->redirect($this->generateUrl('fr_tickets_my_tickets'));
                            }


                        return $this->render('FrTicketsBundle:Tickets:opentickets.html.twig', array('form' => $form->createView()));
         }

	 public function spoolAction()
	 {	 
	 	 $this->addLog();
	 	 return $this->render('FrTicketsBundle:Tickets:spool.html.twig');
	}




	 public function adminopenticketsAction()
	 {	 
	 	 $this->addLog();
	 	 		$repository = $this->getDoctrine()
        		->getManager()
        		->getRepository('FrTicketsBundle:Tickets');
			$user = $this->container->get('security.context')->getToken()->getUser();
      			// On récupère l'entité correspondante à colum : categorie
     			$tickets = $repository->findBy(array('destinataire' => $user->getUsername()),  array('id' =>'desc'));


		$repository = $this->getDoctrine()
       			    ->getManager()
       			    ->getRepository('FrReponseBundle:Reponse');

		$reponse = $repository->findAll();

	 	$tabtickets = array('tickets' => $tickets, 'reponse' => $reponse);

			 //$tabreponse = array('reponse' => $reponse);

	 	return $this->render('FrTicketsBundle:Tickets:my_admin_tickets.html.twig', array('tabtickets' => $tabtickets )); 



			
	 
	 	// return $this->render('FrTicketsBundle:Tickets:my_admin_tickets.html.twig', array('tickets' => $tickets));
	}




	public function admin_all_open_ticketsAction()
	{
		$this->addLog();
		$repository = $this->getDoctrine()
        		->getManager()
        		->getRepository('FrTicketsBundle:Tickets');

      			// On récupère l'entité correspondante à colum : categorie
     			$tickets = $repository->findBy(array('etat' => 'open'),  array('id' =>'desc'));




			return $this->render('FrTicketsBundle:Tickets:admin_all_open_tickets.html.twig', array('tickets' => $tickets));

	}



	public function admin_all_close_ticketsAction()
	{
		$this->addLog();
		$repository = $this->getDoctrine()
        		->getManager()
        		->getRepository('FrTicketsBundle:Tickets');

      			// On récupère l'entité correspondante à colum : categorie
     			$tickets = $repository->findBy(array('etat' => 'close'),  array('id' =>'desc'));

			return $this->render('FrTicketsBundle:Tickets:admin_all_close_tickets.html.twig', array('tickets' => $tickets));

	}

	public function admin_destinataireAction($id, Request $request)
	{
		$this->addLog();
		     //recupere la gestion de repertoire
                        $em = $this->getDoctrine()->getManager();

			      //on recupere le tickets d'id = $id
                        $tickets = $em->getRepository('FrTicketsBundle:Tickets')->find($id);

			      	if (null === $tickets){
                                throw new NotFoundHttpException("oups not this tickets");
				      	  }

			
                        $formBuilder = $this->get('form.factory')->createBuilder('form', $tickets);
//->add('destinataire', 'text')
//


/*			$user = $em->getRepository('FrUserBundle:User')->findAll();
			      foreach( $user as $user)
			      {

			      $role = $user->getRoles();
			      foreach($role as $role){
				if ($role == 'ROLE_ADMIN' && !$admin_temp = $em->getRepository('FrProjetBundle:Admin')->findBy(array('username' => $user->getUsername()))){
				$admin = new Admin();			
				$admin->setUsername($user->getUsername());
			//	$em = $this->getDoctrine()->getManager();
				$em->persist($admin);
				$em->flush();
							}
						}
				}
  
*/
    	//->add('destinataire','entity',array('class' => 'Fr\\UserBundle\\Entity\\User'))
						      			$admin = $em->getRepository('FrProjetBundle:Admin')->findAll();
			             $formBuilder
					->add('destinataire','entity',array('class' => 'FrProjetBundle:Admin'))
					->add('save', 'submit');
				
                      $form = $formBuilder->getForm();

                         if ($form->handleRequest($request)->isValid()) {
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($tickets);
                            $em->flush();

                            $request->getSession()->getFlashBag()->add('notice', 'done.');
			   
			   // return new Response('okdest');

                            return $this->redirect($this->generateUrl('fr_tickets_admin_all_open_tickets'));
                            }


                        return $this->render('FrTicketsBundle:Tickets:destinataire.html.twig', array('form' => $form->createView()));
			}		






			public function admin_openAction($id, Request $request)
			{
				$this->addLog();
				     //recupere la gestion de repertoire
                        $em = $this->getDoctrine()->getManager();

			      //on recupere le tickets d'id = $id
                        $tickets = $em->getRepository('FrTicketsBundle:Tickets')->find($id);

			      	if (null === $tickets)
                        {
                                throw new NotFoundHttpException("oups not this tickets");
				      	  }


			if (!$this->get('security.context')->isGranted('ROLE_ADMIN'))
			{
			throw new NotFoundHttpException("you must be admin");
		       }

                        $formBuilder = $this->get('form.factory')->createBuilder('form', $tickets);

			     $formBuilder->add('save', 'submit');

                        $form = $formBuilder->getForm();

                         if ($form->handleRequest($request)->isValid()) {
                            $em = $this->getDoctrine()->getManager();
                            $tickets->setEtat('open');
			    $tickets->setDestinataire('N;');
                            $em->persist($tickets);
                            $em->flush();

                            $request->getSession()->getFlashBag()->add('notice', 'done.');

                            return $this->redirect($this->generateUrl('fr_tickets_admin_all_close_tickets'));
                            }


                        return $this->render('FrTicketsBundle:Tickets:adminopentickets.html.twig', array('form' => $form->createView()));
		
		}



			public function admin_closeAction($id, Request $request)
			{
				$this->addLog();
				     //recupere la gestion de repertoire
                        $em = $this->getDoctrine()->getManager();

			      //on recupere le tickets d'id = $id
                        $tickets = $em->getRepository('FrTicketsBundle:Tickets')->find($id);

			      	if (null === $tickets)
                        {
                                throw new NotFoundHttpException("oups not this tickets");
				      	  }


			if (!$this->get('security.context')->isGranted('ROLE_ADMIN'))
			{
			throw new NotFoundHttpException("you must be admin");
		       }

                        $formBuilder = $this->get('form.factory')->createBuilder('form', $tickets);

			             $formBuilder->add('save', 'submit');

                        $form = $formBuilder->getForm();

                         if ($form->handleRequest($request)->isValid()) {
                            $em = $this->getDoctrine()->getManager();
                            $tickets->setEtat('close');
                            $em->persist($tickets);
                            $em->flush();

                            $request->getSession()->getFlashBag()->add('notice', 'done.');

                            return $this->redirect($this->generateUrl('fr_tickets_spool'));
                            }


                        return $this->render('FrTicketsBundle:Tickets:adminclosetickets.html.twig', array('form' => $form->createView()));
		
		}


}

