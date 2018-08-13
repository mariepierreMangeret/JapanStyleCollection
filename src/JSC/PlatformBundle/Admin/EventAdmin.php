<?php

namespace JSC\PlatformBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use JSC\PlatformBundle\Entity\Event;

class EventAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Evènements', array('class' => 'col-md-9'))
                ->add('name', 'text')
                ->add('link', 'text')
                ->add('image', 'sonata_media_type', array(
                    'provider'   => 'sonata.media.provider.image',
                    'context'    => 'event',
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
            ->add('name')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
        ;
    }
}