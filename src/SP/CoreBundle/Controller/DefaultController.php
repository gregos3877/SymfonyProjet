<?php

namespace SP\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SPCoreBundle:Default:index.html.twig');
    }
}
