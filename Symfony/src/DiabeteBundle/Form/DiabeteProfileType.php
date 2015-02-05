<?php

namespace DiabeteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;

class DiabeteProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('facteurSensibiliteInsuline', 'text', array('label'  => 'Facteur Sensibilite Insuline'))
			->add('ratioInsulineGlucide', 'text', array('label'  => 'Ratio Insuline Glucide'))
			
			->add('glycemieCible', 'text', array('label'  => 'Glycemie Cible'));
			
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DiabeteBundle\Entity\DiabeteProfile',
        ));
    }

    public function getName()
    {
        return 'diabeteProfile';
    }
}
