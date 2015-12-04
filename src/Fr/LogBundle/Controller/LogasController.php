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
use Fr\LogBundle\Entity\Logas;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class LogasController extends MasterController
{

	public function logasAction($id, Request $request)
    	{
		$this->addLog();

		//return new Response($id);

		$em = $this->getDoctrine()->getManager();
		$logas = new Logas();

		
		$useradmin = $this->container->get('security.context')->getToken()->getUser();
		$logas->setAdmin($useradmin);
	//	return new Response($useradmin);

		$user = $em->getRepository('FrUserBundle:User')->find($id);
		$user->setEnabled(1);
		$logas->setUsername($user);
		//return new Response($user);
       
		$em->persist($logas);
        	$em->flush();
		$this->container->get('security.context')->getToken()->setUser($user);
		//return new Response($user);
		$user = $this->container->get('security.context')->getToken()->getUser();
			//return new Response($user);
		$session = $request->getSession();
		$session->set('admin', $logas->getAdmin());

		
		return $this->redirect($this->generateUrl('fr_projet_login'));//, array('user' => $user)));
	
	}
	
	public function logbackAction(Request $request)
	{

		$this->addLog();

		$session = $request->getSession();
		
		$em = $this->getDoctrine()->getManager();
	
		

		$userback = $session->get('admin');
		if ($userback) {
		$user = $em->getRepository('FrUserBundle:User')->find($userback);
		$this->container->get('security.context')->getToken()->setUser($user);
		
//		$logas = $em->getRepository('FrLogBundle:Logas')->findByOne(array('admin' => $session->get('admin')));
//		$em->remove($logas);
	//	$em->flush();
		$session->set('admin', null);
		}
		return $this->redirect($this->generateUrl('fr_projet_login'));

	}
}