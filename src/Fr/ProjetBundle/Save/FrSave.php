<?php
// src/Fr/ProjetBundle/Save/FrSave.php

namespace Fr\ProjetBundle\Save;

use Doctrine\ORM\EntityManager;
use Fr\LogBundle\Entity\Log;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse;


class FrSave extends Controller
{
	private $em;

 
  public function __construct(EntityManager $em)
  {

    $this->em = $em;
  }

	/**
	 *@return bool
	 */
	public function saveLog($em, Request $request, $username, $action=null)
	{
		//$em = $this->em;
		
		$log = new Log();

	//	$request->getSession();

		$date = new \DateTime();
		$log->setDate($date);

//		$url = $this->container->get('request')->headers->get('referer');
		$url =  $request->getUri();

	//	$user = $this->container->get('security.context')->getToken()->getUser();
		$user = $request->getHost();
		$log->setUsername($username);
		if (!$action){
		   $log->setAction('Page visité'); }
		   else{
			$log->setAction($action); }

		$log->setUrl($url);
		$em->persist($log);
      		$em->flush();
		     
		     return strlen('ok') < 5;
	}
}















/*



//      $url = $this->container->get('request')->headers->get('referer');
//	$url =  $request->getUri();


//	
*/

