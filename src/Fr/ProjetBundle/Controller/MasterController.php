<?php
// src/Fr/ProjetBundle/Controller/MasterController

namespace Fr\ProjetBundle\Controller;

use Fr\LogBundle\Entity\Log;
use Fr\ProjetBundle\Entity\Admin;
//use Fr\ProjetBundle\Controller\BundleController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse;


class MasterController extends Controller
{


  public function addLog()
    {
        $em = $this->getDoctrine()->getManager();
        $log = new Log();

	$user = $this->container->get('security.context')->getToken()->getUser();
        $log->setUsername($user);

	$date = new \DateTime();
	$log->setDate($date);

	$log->setAction('visited');

        $url = $this->container->get('request')->headers->get('referer');
	$log->setUrl($url);

	$em->persist($log);
        $em->flush();
        return;
        }
}