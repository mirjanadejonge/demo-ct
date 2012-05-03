<?php

namespace CT\DemoHotelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('CTDemoHotelBundle:Default:index.html.twig', array('name' => $name));
    }
}
