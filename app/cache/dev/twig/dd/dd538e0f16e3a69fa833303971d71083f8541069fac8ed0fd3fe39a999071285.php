<?php

/* FrProjetBundle::layout.html.twig */
class __TwigTemplate_498f4d464a63ac431038573b4536cb682d7512482c7b1d6b6b8d3bb6a21590fa extends Twig_Template
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
        $__internal_1781ddf1ab345434e5d9f0a09cb54698b4c3077eb3e95c27be3dda3ffe0c8d9b = $this->env->getExtension("native_profiler");
        $__internal_1781ddf1ab345434e5d9f0a09cb54698b4c3077eb3e95c27be3dda3ffe0c8d9b->enter($__internal_1781ddf1ab345434e5d9f0a09cb54698b4c3077eb3e95c27be3dda3ffe0c8d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1781ddf1ab345434e5d9f0a09cb54698b4c3077eb3e95c27be3dda3ffe0c8d9b->leave($__internal_1781ddf1ab345434e5d9f0a09cb54698b4c3077eb3e95c27be3dda3ffe0c8d9b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_55eb7557be959f630df7e2e1aa131bd08822ca61333c7b759ab5cf79bcb1d652 = $this->env->getExtension("native_profiler");
        $__internal_55eb7557be959f630df7e2e1aa131bd08822ca61333c7b759ab5cf79bcb1d652->enter($__internal_55eb7557be959f630df7e2e1aa131bd08822ca61333c7b759ab5cf79bcb1d652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Projet - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_55eb7557be959f630df7e2e1aa131bd08822ca61333c7b759ab5cf79bcb1d652->leave($__internal_55eb7557be959f630df7e2e1aa131bd08822ca61333c7b759ab5cf79bcb1d652_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5be1e52597f4a25d6c5209f580d2a32ba2ea080cce4efd6b368da05c3d103d90 = $this->env->getExtension("native_profiler");
        $__internal_5be1e52597f4a25d6c5209f580d2a32ba2ea080cce4efd6b368da05c3d103d90->enter($__internal_5be1e52597f4a25d6c5209f580d2a32ba2ea080cce4efd6b368da05c3d103d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5be1e52597f4a25d6c5209f580d2a32ba2ea080cce4efd6b368da05c3d103d90->leave($__internal_5be1e52597f4a25d6c5209f580d2a32ba2ea080cce4efd6b368da05c3d103d90_prof);

    }

    // line 17
    public function block_frprojet_body($context, array $blocks = array())
    {
        $__internal_de1d94be126ba8ae400f33385bfbed09e262ac78a81c1ebb7501e7fe08e58d81 = $this->env->getExtension("native_profiler");
        $__internal_de1d94be126ba8ae400f33385bfbed09e262ac78a81c1ebb7501e7fe08e58d81->enter($__internal_de1d94be126ba8ae400f33385bfbed09e262ac78a81c1ebb7501e7fe08e58d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frprojet_body"));

        // line 18
        echo "  ";
        
        $__internal_de1d94be126ba8ae400f33385bfbed09e262ac78a81c1ebb7501e7fe08e58d81->leave($__internal_de1d94be126ba8ae400f33385bfbed09e262ac78a81c1ebb7501e7fe08e58d81_prof);

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
        return array (  85 => 18,  79 => 17,  71 => 19,  68 => 17,  63 => 13,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
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
