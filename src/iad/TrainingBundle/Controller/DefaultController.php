<?php

namespace iad\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('iadTrainingBundle:Default:index.html.twig', array('name' => $name));
    }
}
