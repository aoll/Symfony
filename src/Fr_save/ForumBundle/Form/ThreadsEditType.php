<?php

namespace Fr\ForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ThreadsEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content', 'text')
            ->add('save', 'submit')
        ;
    }
    

      public function getName()
      {
	return 'fr_forumbundle_threads_edit';
  	}

  	public function getParent()
  	{
		return new ThreadsType();
  	}
    
}
