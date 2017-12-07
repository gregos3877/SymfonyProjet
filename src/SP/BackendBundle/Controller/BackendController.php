<?php

namespace SP\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller
{
    public function indexAction()
    {
        return $this->render('SPBackendBundle:Backend:index.html.twig');
    }
}
