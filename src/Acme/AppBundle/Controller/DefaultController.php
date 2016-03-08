<?php

namespace Acme\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Method({"GET","HEAD"})
     *
     */
    public function indexAction(){
        $items = [
            [
                'name' => "Google",
                'url' => 'http://google.fr',
                'created' => new \DateTime()
            ],
            [
                'name' => "Facebook",
                'url' => 'http://facebook.fr',
                'created' => new \DateTime()
            ],
            [
                'name' => "Twitter",
                'url' => 'http://twitter.com',
                'created' => new \DateTime()
            ],
        ];

        return $this->render('AcmeAppBundle:Default:index.html.twig', ['links' => $items]);
    }
}
