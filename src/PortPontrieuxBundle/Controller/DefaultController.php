<?php

namespace PortPontrieuxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortPontrieuxBundle:Default:index.html.twig');
    }
}
