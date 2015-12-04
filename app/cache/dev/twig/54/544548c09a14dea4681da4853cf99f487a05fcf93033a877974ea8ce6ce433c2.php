<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_eb7a0fd1c257589c3da178b68791f090cba21537ae1dd429e35dc83971aa8e5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e398d5a0f28f734c4d79a1b3aaa09ad5187d6bfa6b1d816f553ce681ca811cb0 = $this->env->getExtension("native_profiler");
        $__internal_e398d5a0f28f734c4d79a1b3aaa09ad5187d6bfa6b1d816f553ce681ca811cb0->enter($__internal_e398d5a0f28f734c4d79a1b3aaa09ad5187d6bfa6b1d816f553ce681ca811cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e398d5a0f28f734c4d79a1b3aaa09ad5187d6bfa6b1d816f553ce681ca811cb0->leave($__internal_e398d5a0f28f734c4d79a1b3aaa09ad5187d6bfa6b1d816f553ce681ca811cb0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93234d07585436f9eb65826d1a9232d39b71d982deb1710e9d8d9081c407a8f3 = $this->env->getExtension("native_profiler");
        $__internal_93234d07585436f9eb65826d1a9232d39b71d982deb1710e9d8d9081c407a8f3->enter($__internal_93234d07585436f9eb65826d1a9232d39b71d982deb1710e9d8d9081c407a8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_93234d07585436f9eb65826d1a9232d39b71d982deb1710e9d8d9081c407a8f3->leave($__internal_93234d07585436f9eb65826d1a9232d39b71d982deb1710e9d8d9081c407a8f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FrUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
