<?php

/* FrProjetBundle:Projet:add_roles.html.twig */
class __TwigTemplate_d03a49a6a19b68fbcb4bdf769537d6f4f50e601cbc83ba6ac8218538232f5f8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrProjetBundle::layout.html.twig", "FrProjetBundle:Projet:add_roles.html.twig", 3);
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
        $__internal_818c900147b1bcfa9f8a66c46688b2a1da1089fc814b5459a7a38a7753a37753 = $this->env->getExtension("native_profiler");
        $__internal_818c900147b1bcfa9f8a66c46688b2a1da1089fc814b5459a7a38a7753a37753->enter($__internal_818c900147b1bcfa9f8a66c46688b2a1da1089fc814b5459a7a38a7753a37753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrProjetBundle:Projet:add_roles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818c900147b1bcfa9f8a66c46688b2a1da1089fc814b5459a7a38a7753a37753->leave($__internal_818c900147b1bcfa9f8a66c46688b2a1da1089fc814b5459a7a38a7753a37753_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5eafadad87b85b742c9d60ef1c4b1cf96f7de32af4b05d41d59bfdd6432d2941 = $this->env->getExtension("native_profiler");
        $__internal_5eafadad87b85b742c9d60ef1c4b1cf96f7de32af4b05d41d59bfdd6432d2941->enter($__internal_5eafadad87b85b742c9d60ef1c4b1cf96f7de32af4b05d41d59bfdd6432d2941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add roles"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5eafadad87b85b742c9d60ef1c4b1cf96f7de32af4b05d41d59bfdd6432d2941->leave($__internal_5eafadad87b85b742c9d60ef1c4b1cf96f7de32af4b05d41d59bfdd6432d2941_prof);

    }

    // line 9
    public function block_frprojet_body($context, array $blocks = array())
    {
        $__internal_33816a78a3c2c69a1bd2d6418ece7ec9a43cb86954709ef8d55c125fdf141bf7 = $this->env->getExtension("native_profiler");
        $__internal_33816a78a3c2c69a1bd2d6418ece7ec9a43cb86954709ef8d55c125fdf141bf7->enter($__internal_33816a78a3c2c69a1bd2d6418ece7ec9a43cb86954709ef8d55c125fdf141bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frprojet_body"));

        // line 10
        echo "
  <h2>admin</h2>

";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("save the upgrade?"), "html", null, true);
        echo "

";
        // line 15
        echo twig_include($this->env, $context, "FrProjetBundle:Projet:form.html.twig");
        echo "

 

";
        
        $__internal_33816a78a3c2c69a1bd2d6418ece7ec9a43cb86954709ef8d55c125fdf141bf7->leave($__internal_33816a78a3c2c69a1bd2d6418ece7ec9a43cb86954709ef8d55c125fdf141bf7_prof);

    }

    public function getTemplateName()
    {
        return "FrProjetBundle:Projet:add_roles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  63 => 13,  58 => 10,  52 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/fr/ProjetBundle/Resources/views/Projet/add_roles.html.twig #}*/
/* */
/* {% extends "FrProjetBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* {{ 'add roles'|trans }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frprojet_body %}*/
/* */
/*   <h2>admin</h2>*/
/* */
/* {{ 'save the upgrade?'|trans }}*/
/* */
/* {{ include("FrProjetBundle:Projet:form.html.twig") }}*/
/* */
/*  */
/* */
/* {% endblock %}*/
/* */
