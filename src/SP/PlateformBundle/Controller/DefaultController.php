<?php

namespace SP\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SPPlateformBundle:Default:index.html.twig');
    }
}
