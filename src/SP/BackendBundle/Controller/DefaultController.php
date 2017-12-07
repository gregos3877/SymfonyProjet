<?php

namespace SP\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SPBackendBundle:Default:index.html.twig');
    }
}
