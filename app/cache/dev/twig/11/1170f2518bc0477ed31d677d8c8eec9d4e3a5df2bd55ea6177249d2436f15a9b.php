<?php

/* FrTicketsBundle::layout.html.twig */
class __TwigTemplate_0096a79615e4093f35d8cbc0dde377f811e617edc07a771c0c0007e533a77ca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrTicketsBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'frtickets_body' => array($this, 'block_frtickets_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cba702c6e9558b2adfe014e8952d2d23615ab2a913d14f4891b41355250daa37 = $this->env->getExtension("native_profiler");
        $__internal_cba702c6e9558b2adfe014e8952d2d23615ab2a913d14f4891b41355250daa37->enter($__internal_cba702c6e9558b2adfe014e8952d2d23615ab2a913d14f4891b41355250daa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrTicketsBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cba702c6e9558b2adfe014e8952d2d23615ab2a913d14f4891b41355250daa37->leave($__internal_cba702c6e9558b2adfe014e8952d2d23615ab2a913d14f4891b41355250daa37_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a96abbe2937ee3fe43d483550fdcae9dcd7f0b92192df9eae8b83cc6b011a5e = $this->env->getExtension("native_profiler");
        $__internal_2a96abbe2937ee3fe43d483550fdcae9dcd7f0b92192df9eae8b83cc6b011a5e->enter($__internal_2a96abbe2937ee3fe43d483550fdcae9dcd7f0b92192df9eae8b83cc6b011a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Tickets - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2a96abbe2937ee3fe43d483550fdcae9dcd7f0b92192df9eae8b83cc6b011a5e->leave($__internal_2a96abbe2937ee3fe43d483550fdcae9dcd7f0b92192df9eae8b83cc6b011a5e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_16a3f7d2b53ee17a30e163b05720742a3171ec163e81052f21965d4153c3ff88 = $this->env->getExtension("native_profiler");
        $__internal_16a3f7d2b53ee17a30e163b05720742a3171ec163e81052f21965d4153c3ff88->enter($__internal_16a3f7d2b53ee17a30e163b05720742a3171ec163e81052f21965d4153c3ff88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->displayBlock('frtickets_body', $context, $blocks);
        // line 24
        echo "
";
        
        $__internal_16a3f7d2b53ee17a30e163b05720742a3171ec163e81052f21965d4153c3ff88->leave($__internal_16a3f7d2b53ee17a30e163b05720742a3171ec163e81052f21965d4153c3ff88_prof);

    }

    // line 22
    public function block_frtickets_body($context, array $blocks = array())
    {
        $__internal_f5e49f025f474754767c25140ecbae7b22e15ba5295d94c7a1f96a121a70f34b = $this->env->getExtension("native_profiler");
        $__internal_f5e49f025f474754767c25140ecbae7b22e15ba5295d94c7a1f96a121a70f34b->enter($__internal_f5e49f025f474754767c25140ecbae7b22e15ba5295d94c7a1f96a121a70f34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frtickets_body"));

        // line 23
        echo "  ";
        
        $__internal_f5e49f025f474754767c25140ecbae7b22e15ba5295d94c7a1f96a121a70f34b->leave($__internal_f5e49f025f474754767c25140ecbae7b22e15ba5295d94c7a1f96a121a70f34b_prof);

    }

    public function getTemplateName()
    {
        return "FrTicketsBundle::layout.html.twig";
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
/*   {% block frtickets_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
