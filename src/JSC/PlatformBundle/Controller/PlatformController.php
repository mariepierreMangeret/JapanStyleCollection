<?php

namespace JSC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JSC\PlatformBundle\Entity\News;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\Tools\Pagination\Paginator;

class PlatformController extends Controller
{
    public function indexAction()
    {
    	$nbPerPage = 3;

        $news = $this
          ->getDoctrine()
          ->getManager()
          ->getRepository('JSCPlatformBundle:News')
          ->myNewsIndex($nbPerPage);

        return $this->render(
        	'JSCPlatformBundle::index.html.twig',array(
        	'news'		=> $news,
        ));
    }
}
