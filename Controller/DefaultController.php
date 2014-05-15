<?php

namespace Garethp\ItsFiveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GarethpItsFiveBundle:Default:index.html.twig', array('name' => $name));
    }
}
