<?php

namespace Wfl\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        
        return $this->render('WflBaseBundle:Default:index2.html.twig' );
    }
}
 //array('name' => $name)