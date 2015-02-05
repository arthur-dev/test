<?php

namespace DiabeteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GlucometerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('dsn', 'text', array('label'  => 'Serial Number', 'required' => true))
		;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DiabeteBundle\Entity\Glucometer',
        ));
    }

    public function getName()
    {
        return 'glucometer';
    }
}
