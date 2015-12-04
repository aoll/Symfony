<?php

//src/Fr/UserBundle/Controller/UserController.php

namespace Fr\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class UserController extends Controller
{
	public function indexAction()
	{
		return new Response('slt');
	}
	
	public function loginAction(Request $request)
  	{
    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
       if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
       	  return $this->redirectToRoute('fr_projet_acceuil');
       }
    
    // Le service authentication_utils permet de récupérer le nom d'utilisateur
    // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
    // (mauvais mot de passe par exemple)
      $authenticationUtils = $this->get('security.authentication_utils');

      return $this->render('FrUserBundle:Security:login.html.twig', array(
      	     'last_username' => $authenticationUtils->getLastUsername(),
      	     'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }

  //enristré l'inscription dans la table log 

  public function registedaction(Request $request)
  {
	 $save = $this->container->get('fr_projet.save');

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRespository('FrUserBundle:User')->findAll();
        $save->saveLog($em, $request, 'moi', 'registration');

	return new Response('okregistration');
   }

}
