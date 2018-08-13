<?php

namespace JSC\PlatformBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use JSC\PlatformBundle\Entity\News;

class NewAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Nouveautés', array('class' => 'col-md-9'))
                ->add('title', 'text')
                ->add('content', 'textarea', array(
                    'required'=> true, 
                    'attr'    => array('style'=>'height:300px;')
                ))
            ->end()
            ->with('Date de création', array('class' => 'col-md-9'))
                ->add('date', 'datetime', array(
                    'required'=> false, 
                    'widget'  => 'single_text',
                    'attr'    => array('readonly' => true)
                ))
            ->add('image', 'sonata_media_type', array(
                'provider'   => 'sonata.media.provider.image',
                'context'    => 'new',
                'required'   => false,
                'data_class' => 'Application\Sonata\MediaBundle\Entity\Media',
                'label'      => 'Image',
            ))
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('content')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('date')
        ;
    }

    public function create($object) 
    {
        $object->setDate(new \DateTime());
        return parent::create($object);
    }
}