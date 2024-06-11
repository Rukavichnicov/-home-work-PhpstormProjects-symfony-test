<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('author', null, [
                'label' => 'Ваше имя',
                'row_attr' => [
                    'class' => 'input-group',
                ],
            ])
            ->add('text', null, [
                'label' => 'Текст',
                'row_attr' => [
                    'class' => 'input-group',
                ],
            ])
            ->add('email', EmailType::class, [
                'row_attr' => [
                    'class' => 'input-group',
                ],
            ])
            ->add('photo', FileType::class, [
                'required'    => false,
                'mapped'      => false,
                'label'       => 'Фото',
                'constraints' => [
                    new Image(['maxSize' => '1024k'])
                ],
                'row_attr' => [
                    'class' => 'input-group',
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Отправить',
                'row_attr' => [
                    'class' => 'input-group',

                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
