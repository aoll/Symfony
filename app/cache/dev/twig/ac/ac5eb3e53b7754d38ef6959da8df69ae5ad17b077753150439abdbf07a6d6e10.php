<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_90c537ca59bd81272b00bd0f3740eb48f2c66792a1fc8f7332e788685da870f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fef7747c665768ad816e6a562a5b8512eb52b1d62d083df1bf64a66b01d6c79c = $this->env->getExtension("native_profiler");
        $__internal_fef7747c665768ad816e6a562a5b8512eb52b1d62d083df1bf64a66b01d6c79c->enter($__internal_fef7747c665768ad816e6a562a5b8512eb52b1d62d083df1bf64a66b01d6c79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fef7747c665768ad816e6a562a5b8512eb52b1d62d083df1bf64a66b01d6c79c->leave($__internal_fef7747c665768ad816e6a562a5b8512eb52b1d62d083df1bf64a66b01d6c79c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_258d1ad3262cdc74a930beae8a0a951ca238aa7876746576190c626b0db11548 = $this->env->getExtension("native_profiler");
        $__internal_258d1ad3262cdc74a930beae8a0a951ca238aa7876746576190c626b0db11548->enter($__internal_258d1ad3262cdc74a930beae8a0a951ca238aa7876746576190c626b0db11548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_258d1ad3262cdc74a930beae8a0a951ca238aa7876746576190c626b0db11548->leave($__internal_258d1ad3262cdc74a930beae8a0a951ca238aa7876746576190c626b0db11548_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
