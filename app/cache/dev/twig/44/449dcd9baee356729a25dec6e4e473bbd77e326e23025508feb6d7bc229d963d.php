<?php

/* FrProjetBundle:Projet:index.html.twig */
class __TwigTemplate_819a22d661c6073031e04666494aef72c98e008b19763deabee47393830246e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrProjetBundle::layout.html.twig", "FrProjetBundle:Projet:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'frprojet_body' => array($this, 'block_frprojet_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrProjetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae089d4bf2fed4f3b7729baec09cc60eaadcdb9608492d540bb85e29c55b3720 = $this->env->getExtension("native_profiler");
        $__internal_ae089d4bf2fed4f3b7729baec09cc60eaadcdb9608492d540bb85e29c55b3720->enter($__internal_ae089d4bf2fed4f3b7729baec09cc60eaadcdb9608492d540bb85e29c55b3720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrProjetBundle:Projet:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae089d4bf2fed4f3b7729baec09cc60eaadcdb9608492d540bb85e29c55b3720->leave($__internal_ae089d4bf2fed4f3b7729baec09cc60eaadcdb9608492d540bb85e29c55b3720_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63c46307cc96b17b9659bed2950a01da3f7813d64f07812a111401a1835f2480 = $this->env->getExtension("native_profiler");
        $__internal_63c46307cc96b17b9659bed2950a01da3f7813d64f07812a111401a1835f2480->enter($__internal_63c46307cc96b17b9659bed2950a01da3f7813d64f07812a111401a1835f2480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_63c46307cc96b17b9659bed2950a01da3f7813d64f07812a111401a1835f2480->leave($__internal_63c46307cc96b17b9659bed2950a01da3f7813d64f07812a111401a1835f2480_prof);

    }

    // line 9
    public function block_frprojet_body($context, array $blocks = array())
    {
        $__internal_8ecbd5c6a026e3c62fd2cbf97a961ee3830e52e2e0b64ab60231df879774b41c = $this->env->getExtension("native_profiler");
        $__internal_8ecbd5c6a026e3c62fd2cbf97a961ee3830e52e2e0b64ab60231df879774b41c->enter($__internal_8ecbd5c6a026e3c62fd2cbf97a961ee3830e52e2e0b64ab60231df879774b41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frprojet_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo "</h2>

  ";
        // line 14
        echo " 




";
        
        $__internal_8ecbd5c6a026e3c62fd2cbf97a961ee3830e52e2e0b64ab60231df879774b41c->leave($__internal_8ecbd5c6a026e3c62fd2cbf97a961ee3830e52e2e0b64ab60231df879774b41c_prof);

    }

    public function getTemplateName()
    {
        return "FrProjetBundle:Projet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  62 => 11,  59 => 10,  53 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BI/BiodanzaBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "FrProjetBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   {{ 'Home'|trans }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frprojet_body %}*/
/* */
/*   <h2>{{ 'Home'|trans }}</h2>*/
/* */
/*   {# On vérifie qu'une image soit bien associée à l'annonce #}*/
/*  */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
