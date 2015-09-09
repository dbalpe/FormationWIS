<?php
/**
 * Created by PhpStorm.
 * User: devi
 * Date: 09/09/15
 * Time: 15:22
 */

namespace iad\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Hip\MandrillBundle\Message;
use Hip\MandrillBundle\Dispatcher;

class TestMandrillController extends Controller
{
    public function indexAction()
    {
        $dispatcher = $this->get('hip_mandrill.dispatcher');

        $message = new Message();

        $message
            ->setFromEmail('test@iadfrance.fr')
            ->setFromName('Formation Symfony 2')
            ->addTo('devi.balpe@iadfrance.fr')
            ->setSubject('Formation S2')
            ->setHtml('<html><body><h1>Hello world</h1></body></html>');

        $result = $dispatcher->send($message);

        return new Response('<pre>' . print_r($result, true) . '</pre>');

    }
}