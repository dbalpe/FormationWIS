<?php
/**
 * Created by PhpStorm.
 * User: devi
 * Date: 09/09/15
 * Time: 11:30
 */

namespace iad\TrainingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestServiceTrainingBundleController extends Controller
{
    public function helloAction()
    {
        return new Response($this->get('hello_world')->hello());
    }
}