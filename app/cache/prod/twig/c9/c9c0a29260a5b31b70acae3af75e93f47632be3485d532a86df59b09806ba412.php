<?php

/* FrProjetBundle:Projet:index.html.twig */
class __TwigTemplate_6eab20165ca80388e821b2e7c670e876ab01b2f09d25284ddbd266640c02e80e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_frprojet_body($context, array $blocks = array())
    {
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
        return array (  52 => 14,  47 => 11,  44 => 10,  41 => 9,  32 => 6,  29 => 5,  11 => 3,);
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
