<?php

// src/Fr/ForumBundle/Form/SousCategorieEditType.php

namespace Fr\ForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SousCategorieEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //builder->remove('date');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fr_forumbundle_advert_edit';
    }

    public function getParent()
    {
        return new SousCategorieType();
    }
}
