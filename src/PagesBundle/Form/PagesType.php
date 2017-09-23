<?php

namespace PagesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PagesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
                //->add('contenu');
                //->add('contenu','textarea', array('attr' => array('class' => 'ckeditor')));
                ->add('contenu', 'textarea', array('attr' => array('class' => 'ckeditor')))
                ->add('Valider','submit');
        //class="btn btn-primary"
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PagesBundle\Entity\Pages'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pagesbundle_pages';
    }


}
