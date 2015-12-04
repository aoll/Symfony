<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0d2db846b0ffa69e3a21294b02293e809b1c0f9e6541369c57cff8c8efaeba66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e27767750f9ec3330d7ff88c2cde7b408bf8dbbec24ec277efab1b2c9b502e43 = $this->env->getExtension("native_profiler");
        $__internal_e27767750f9ec3330d7ff88c2cde7b408bf8dbbec24ec277efab1b2c9b502e43->enter($__internal_e27767750f9ec3330d7ff88c2cde7b408bf8dbbec24ec277efab1b2c9b502e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e27767750f9ec3330d7ff88c2cde7b408bf8dbbec24ec277efab1b2c9b502e43->leave($__internal_e27767750f9ec3330d7ff88c2cde7b408bf8dbbec24ec277efab1b2c9b502e43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5cb6ed58251d0c575b74bdfa2eea447eb55bbcaf0c006a04acbfeec086fee1f8 = $this->env->getExtension("native_profiler");
        $__internal_5cb6ed58251d0c575b74bdfa2eea447eb55bbcaf0c006a04acbfeec086fee1f8->enter($__internal_5cb6ed58251d0c575b74bdfa2eea447eb55bbcaf0c006a04acbfeec086fee1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5cb6ed58251d0c575b74bdfa2eea447eb55bbcaf0c006a04acbfeec086fee1f8->leave($__internal_5cb6ed58251d0c575b74bdfa2eea447eb55bbcaf0c006a04acbfeec086fee1f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
