<?php

namespace JSC\PlatformBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use JSC\PlatformBundle\Entity\Model;

class ModelAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Marques', array('class' => 'col-md-9'))
                ->add('name', 'text')
                ->add('priority', 'text')
                ->add('position', 'text')
                ->add('urlFacebook', 'text', array (
                    'required'   => false,
                ))
                ->add('urlTwitter', 'text', array (
                    'required'   => false,
                ))
                ->add('urlInstagram', 'text', array (
                    'required'   => false,
                ))
                ->add('image', 'sonata_media_type', array(
                    'provider'   => 'sonata.media.provider.image',
                    'context'    => 'brand',
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