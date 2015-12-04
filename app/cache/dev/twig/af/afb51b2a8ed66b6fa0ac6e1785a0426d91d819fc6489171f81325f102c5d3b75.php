<?php

/* FrReponseBundle::layout.html.twig */
class __TwigTemplate_559bae18a114f5fb2c21af70aa8142e4c76c44dc4776b6de731d4f7247df6340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrReponseBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'frreponse_body' => array($this, 'block_frreponse_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f565984841789a70f0fddebc48878e984d307dc2aef9d986a83fec6672282e55 = $this->env->getExtension("native_profiler");
        $__internal_f565984841789a70f0fddebc48878e984d307dc2aef9d986a83fec6672282e55->enter($__internal_f565984841789a70f0fddebc48878e984d307dc2aef9d986a83fec6672282e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrReponseBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f565984841789a70f0fddebc48878e984d307dc2aef9d986a83fec6672282e55->leave($__internal_f565984841789a70f0fddebc48878e984d307dc2aef9d986a83fec6672282e55_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf9e756425a7fa45aae0e2be26135c02df3667edc3bb2137d732d03ea2d4ad11 = $this->env->getExtension("native_profiler");
        $__internal_bf9e756425a7fa45aae0e2be26135c02df3667edc3bb2137d732d03ea2d4ad11->enter($__internal_bf9e756425a7fa45aae0e2be26135c02df3667edc3bb2137d732d03ea2d4ad11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Tickets - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bf9e756425a7fa45aae0e2be26135c02df3667edc3bb2137d732d03ea2d4ad11->leave($__internal_bf9e756425a7fa45aae0e2be26135c02df3667edc3bb2137d732d03ea2d4ad11_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ade5d8b5af46fd3e574c2e841fd7d1ac24602d7f2c4b18951d7b68f8e97afb3 = $this->env->getExtension("native_profiler");
        $__internal_5ade5d8b5af46fd3e574c2e841fd7d1ac24602d7f2c4b18951d7b68f8e97afb3->enter($__internal_5ade5d8b5af46fd3e574c2e841fd7d1ac24602d7f2c4b18951d7b68f8e97afb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  ";
        // line 13
        echo "
  <hr>
<div class='weel'>
<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fr_tickets_admin_open_tickets");
        echo "\">My user ticket</a>
";
        // line 18
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("fr_tickets_admin_all_open_tickets");
        echo "\">All open user ticket</a>
<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fr_tickets_admin_all_close_tickets");
        echo "\">All close user ticket</a>
</div>
  ";
        // line 22
        echo "  ";
        $this->displayBlock('frreponse_body', $context, $blocks);
        // line 24
        echo "
";
        
        $__internal_5ade5d8b5af46fd3e574c2e841fd7d1ac24602d7f2c4b18951d7b68f8e97afb3->leave($__internal_5ade5d8b5af46fd3e574c2e841fd7d1ac24602d7f2c4b18951d7b68f8e97afb3_prof);

    }

    // line 22
    public function block_frreponse_body($context, array $blocks = array())
    {
        $__internal_b6d2508dbdfa639f0cda751ac05c49577f94764710485060f412515ed5bb59ba = $this->env->getExtension("native_profiler");
        $__internal_b6d2508dbdfa639f0cda751ac05c49577f94764710485060f412515ed5bb59ba->enter($__internal_b6d2508dbdfa639f0cda751ac05c49577f94764710485060f412515ed5bb59ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frreponse_body"));

        // line 23
        echo "  ";
        
        $__internal_b6d2508dbdfa639f0cda751ac05c49577f94764710485060f412515ed5bb59ba->leave($__internal_b6d2508dbdfa639f0cda751ac05c49577f94764710485060f412515ed5bb59ba_prof);

    }

    public function getTemplateName()
    {
        return "FrReponseBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  93 => 22,  85 => 24,  82 => 22,  77 => 19,  72 => 18,  68 => 16,  63 => 13,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/Fr/TicketsBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Tickets - {{ parent() }}*/
/* {% endblock %}*/
/*  */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   {# <h1>exemple</h1> #}*/
/* */
/*   <hr>*/
/* <div class='weel'>*/
/* <a href="{{ path('fr_tickets_admin_open_tickets') }}">My user ticket</a>*/
/* {#<p><a href="{{ path('fr_tickets_admin_close_tickets') }}">My close user ticket</a>#}*/
/* <a href="{{ path('fr_tickets_admin_all_open_tickets') }}">All open user ticket</a>*/
/* <a href="{{ path('fr_tickets_admin_all_close_tickets') }}">All close user ticket</a>*/
/* </div>*/
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block frreponse_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
