<?php

namespace JSC\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('attr' => array('placeholder' => 'Nom'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez saisir un nom")),
                )
            ))
            ->add('email', EmailType::class, array('attr' => array('placeholder' => 'Email'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez saisir un mail")),
                    new Email(array("message" => "Votre adresse mail n'est pas valide")),
                )
            ))
            ->add('phone', TextType::class, array('attr' => array('placeholder' => 'Numéro de téléphone'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez saisir un numéro de téléphone")),
                )
            ))
            ->add('subject', TextType::class, array('attr' => array('placeholder' => 'Titre du message'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez saisir un titre")),
                )
            ))
            ->add('message', TextareaType::class, array('attr' => array('placeholder' => 'Message'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez saisir un message")),
                )
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'error_bubbling' => true
        ));
    }

    public function getName()
    {
        return 'contact';
    }
}