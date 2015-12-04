<?php

/* FrProjetBundle::layout.html.twig */
class __TwigTemplate_4217977031e54fb488ce8de4983e4b182f36f9a4ffd47cb790e49b790fc1828a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrProjetBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'frprojet_body' => array($this, 'block_frprojet_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Projet - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
        // line 12
        echo "  ";
        // line 13
        echo "
  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('frprojet_body', $context, $blocks);
        // line 19
        echo "
";
    }

    // line 17
    public function block_frprojet_body($context, array $blocks = array())
    {
        // line 18
        echo "  ";
    }

    public function getTemplateName()
    {
        return "FrProjetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  61 => 17,  56 => 19,  53 => 17,  48 => 13,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  11 => 3,);
    }
}
/* {# src/Fr/ProjetBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Projet - {{ parent() }}*/
/* {% endblock %}*/
/*  */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   {# <h1>exemple</h1> #}*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block frprojet_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
