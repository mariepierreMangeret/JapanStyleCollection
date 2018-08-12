<?php

namespace JSC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JSC\PlatformBundle\Entity\News;
use JSC\PlatformBundle\Entity\Event;
use JSC\PlatformBundle\Entity\Model;
use JSC\PlatformBundle\Entity\Brand;
use JSC\PlatformBundle\Entity\Contact;
use JSC\PlatformBundle\Form\ContactType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Tools\Pagination\Paginator;

class PlatformController extends Controller
{
    public function indexAction(Request $request)
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

      // Envoyer formulaire de contact par email 
      $form = $this->createForm('JSC\PlatformBundle\Form\ContactType',null,array(
          // To set the action use $this->generateUrl('route_identifier')
          'action' => $this->generateUrl('jsc_platform_home'),
          'method' => 'POST'
      ));
      if ($request->isMethod('POST')) {
        $form->handleRequest($request);

          if($form->isValid()){


            $message = (new \Swift_Message('Formulaire de contact'))
              ->setFrom('japanstylecollection@gmail.com')
              ->setTo('japanstylecollection@gmail.com')
              ->setBody(
                  $this->renderView(
                      // app/Resources/views/emails/contact.html.twig
                      'emails/contact.html.twig',
                      array(
                        'name'     => $form["name"]->getData(),
                        'email'    => $form["email"]->getData(),
                        'phone'    => $form["phone"]->getData(),
                        'subject'  => $form["subject"]->getData(),
                        'message'  => $form["message"]->getData()
                    )
                  ),
                  'text/html'
              )
            ;
          
            $this->get('mailer')->send($message);
            unset($form);
            $form = $this->createForm('JSC\PlatformBundle\Form\ContactType',null,array(
                // To set the action use $this->generateUrl('route_identifier')
                'action' => $this->generateUrl('jsc_platform_home'),
                'method' => 'POST'
            ));
          }
      }

      return $this->render(
      	'JSCPlatformBundle::index.html.twig',array(
      	'news'		=> $news,
        'events'  => $events,
        'models'  => $models,
        'brands'  => $brands,
        'form' => $form->createView(),
      ));
    }
}
