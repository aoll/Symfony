<?php

/* FrTicketsBundle:Tickets:opentickets.html.twig */
class __TwigTemplate_f54b919486a71f8e13415487606d20d87d19696bc21b853c5ec4f54bc51efd42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrTicketsBundle::layout.html.twig", "FrTicketsBundle:Tickets:opentickets.html.twig", 3);
        $this->blocks = array(
            'frtickets_body' => array($this, 'block_frtickets_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrTicketsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b08c0cd9132ababc06a3b81c8c5e5a33c346db8fd360f6b4780297e513102437 = $this->env->getExtension("native_profiler");
        $__internal_b08c0cd9132ababc06a3b81c8c5e5a33c346db8fd360f6b4780297e513102437->enter($__internal_b08c0cd9132ababc06a3b81c8c5e5a33c346db8fd360f6b4780297e513102437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrTicketsBundle:Tickets:opentickets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b08c0cd9132ababc06a3b81c8c5e5a33c346db8fd360f6b4780297e513102437->leave($__internal_b08c0cd9132ababc06a3b81c8c5e5a33c346db8fd360f6b4780297e513102437_prof);

    }

    // line 5
    public function block_frtickets_body($context, array $blocks = array())
    {
        $__internal_e2902726b9c72b40c24f7bb55a3a326990d8247641c426de90262e098b6ed3ee = $this->env->getExtension("native_profiler");
        $__internal_e2902726b9c72b40c24f7bb55a3a326990d8247641c426de90262e098b6ed3ee->enter($__internal_e2902726b9c72b40c24f7bb55a3a326990d8247641c426de90262e098b6ed3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frtickets_body"));

        // line 6
        echo "<h1>tickets</h1>

";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("open the ticket?"), "html", null, true);
        echo "

";
        // line 10
        echo twig_include($this->env, $context, "FrTicketsBundle:Tickets:form.html.twig");
        echo "



";
        
        $__internal_e2902726b9c72b40c24f7bb55a3a326990d8247641c426de90262e098b6ed3ee->leave($__internal_e2902726b9c72b40c24f7bb55a3a326990d8247641c426de90262e098b6ed3ee_prof);

    }

    public function getTemplateName()
    {
        return "FrTicketsBundle:Tickets:opentickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  44 => 8,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/Fr/TicketsBundle/Ressources/views/Tickets/opentickets.html.twig #}*/
/* */
/* {% extends "FrTicketsBundle::layout.html.twig" %}*/
/* */
/* {% block frtickets_body %}*/
/* <h1>tickets</h1>*/
/* */
/* {{ 'open the ticket?'|trans }}*/
/* */
/* {{ include("FrTicketsBundle:Tickets:form.html.twig") }}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
