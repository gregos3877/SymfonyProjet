<?php

namespace SP\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('SPCoreBundle:Core:index.html.twig');
    }
}
