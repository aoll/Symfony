<?php

namespace Fr\ReponseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FrReponseBundle:Default:index.html.twig', array('name' => $name));
    }
}
