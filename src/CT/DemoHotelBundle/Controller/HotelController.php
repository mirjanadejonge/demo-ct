<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HotelController
 *
 * @author Mir
 */
namespace CT\DemoHotelBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HotelController extends Controller
{
    //put your code here
    
    public function searchAction()
    {
        $request = $this->getRequest();
        if ($request->getMethod()=='POST'){
            
            return $this->redirect($this->generateUrl('CTDemoHotelBundle_room_list',array('hotel_id'=>$request->get('hotel'))));
        }
        
       $em = $this->getDoctrine()->getEntityManager();
              
       $hotels = $em->getRepository('CTDemoHotelBundle:Hotel')->findAll();
        
        if (!$hotels){
            throw $this->createNotFoundException('Geen hotel gevonden.');
        }
        
        return $this->render('CTDemoHotelBundle:Hotel:search.html.twig',array('hotels'=>$hotels));
        
    }
}

?>
