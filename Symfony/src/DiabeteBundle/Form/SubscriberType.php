<?php

namespace DiabeteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;

class SubscriberType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('gender', 'choice', array(
										'choices'   => array('0' => 'Masculin', '1' => 'Féminin'),
										'label'  => 'Sexe', 
			))
			->add('lastname', 'text', array('label'  => 'Nom'))
			->add('firstname', 'text', array('label'  => 'Prénom'))
			->add('birthday', 'birthday', array(
											'widget' => 'choice',
											'format' => 'dd-MM-yyyy',
											'label' => 'Date de naissance'
			))
			->add('address', 'textarea', array('label'  => 'Adresse'))
			->add('postalCode', 'text', array('label'  => 'Code postal'))
			->add('city', 'text', array('label'  => 'Ville'))
			->add('phone', 'text', array('label'  => 'Tel. domicile'))
			->add('cellPhone', 'text', array('label'  => 'Tel. Portable'))
			->add('socialSecurityNumber', 'text', array('label'  => 'Numéro de sécurité sociale'))
			->add('doctor', 'entity', array(
									'class' => 'DiabeteBundle:Doctor',
									'required'  => false,
									'expanded' => false,
									'multiple' => false,
									'query_builder' => function(EntityRepository $er) {
										return $er->createQueryBuilder('r')
											->orderBy('r.lastname', 'ASC');
									},
								))
			;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DiabeteBundle\Entity\Subscriber',
        ));
    }

    public function getName()
    {
        return 'subscriber';
    }
}
