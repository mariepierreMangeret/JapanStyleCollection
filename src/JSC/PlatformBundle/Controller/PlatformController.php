<?php

namespace JSC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JSC\PlatformBundle\Entity\News;
use JSC\PlatformBundle\Entity\Event;
use JSC\PlatformBundle\Entity\Model;
use JSC\PlatformBundle\Entity\Brand;
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

      $nbEventPerPage = 4;

      $events = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('JSCPlatformBundle:Event')
        ->myEventsIndex($nbEventPerPage);

      $models = $this
      ->getDoctrine()
      ->getManager()
      ->getRepository('JSCPlatformBundle:Model')
      ->myModelsIndex();

      $brands = $this
      ->getDoctrine()
      ->getManager()
      ->getRepository('JSCPlatformBundle:Brand')
      ->myBrandsIndex();


      return $this->render(
      	'JSCPlatformBundle::index.html.twig',array(
      	'news'		=> $news,
        'events'  => $events,
        'models'  => $models,
        'brands'  => $brands,
      ));
    }
}
