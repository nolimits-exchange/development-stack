<?php

namespace Thepixeldeveloper\Nolimitsexchange\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class UploadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod(Request::METHOD_POST)
            ->add('name', TextType::class)
            ->add('description', TextareaType::class)
            ->add('coaster', FileType::class)
            ->add('screenshot', FileType::class)
            ->add('upload', SubmitType::class, ['label' => 'Upload']);
    }
}
