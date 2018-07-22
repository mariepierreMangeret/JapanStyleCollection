<?php

namespace JSC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlatformController extends Controller
{
    public function indexAction()
    {
        return $this->render('JSCPlatformBundle::index.html.twig');
    }
}
