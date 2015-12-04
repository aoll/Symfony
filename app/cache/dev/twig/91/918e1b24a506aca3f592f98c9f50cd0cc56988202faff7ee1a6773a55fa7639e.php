<?php

/* FrTicketsBundle:Tickets:spool.html.twig */
class __TwigTemplate_f4b8ece4485e81595321f4b5d123ce14335d617e393f6844670df36f2629cd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrTicketsBundle::layout.html.twig", "FrTicketsBundle:Tickets:spool.html.twig", 3);
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
        $__internal_93587a0449ab4cbb4ea04c4cc45472f0f101eedccc36074efbf51b958f278dda = $this->env->getExtension("native_profiler");
        $__internal_93587a0449ab4cbb4ea04c4cc45472f0f101eedccc36074efbf51b958f278dda->enter($__internal_93587a0449ab4cbb4ea04c4cc45472f0f101eedccc36074efbf51b958f278dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrTicketsBundle:Tickets:spool.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93587a0449ab4cbb4ea04c4cc45472f0f101eedccc36074efbf51b958f278dda->leave($__internal_93587a0449ab4cbb4ea04c4cc45472f0f101eedccc36074efbf51b958f278dda_prof);

    }

    // line 5
    public function block_frtickets_body($context, array $blocks = array())
    {
        $__internal_03248f07220ce35332287e0ce63109869134803c4ce8092ff699247fe0bf2415 = $this->env->getExtension("native_profiler");
        $__internal_03248f07220ce35332287e0ce63109869134803c4ce8092ff699247fe0bf2415->enter($__internal_03248f07220ce35332287e0ce63109869134803c4ce8092ff699247fe0bf2415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frtickets_body"));

        // line 6
        echo "
";
        // line 11
        echo "

";
        
        $__internal_03248f07220ce35332287e0ce63109869134803c4ce8092ff699247fe0bf2415->leave($__internal_03248f07220ce35332287e0ce63109869134803c4ce8092ff699247fe0bf2415_prof);

    }

    public function getTemplateName()
    {
        return "FrTicketsBundle:Tickets:spool.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/Fr/TicketsBundle/Ressources/views/Tickets/spool.html.twig #}*/
/* */
/* {% extends "FrTicketsBundle::layout.html.twig" %}*/
/* */
/* {% block frtickets_body %}*/
/* */
/* {#<p><a href="{{ path('fr_tickets_admin_open_tickets') }}">{{ 'My user ticket'|trans }}</a></p>#}*/
/* {#<p><a href="{{ path('fr_tickets_admin_close_tickets') }}">{{ 'My close user ticket'|trans }}</a></p>#}*/
/* {#<p><a href="{{ path('fr_tickets_admin_all_open_tickets') }}">{{ 'All open user ticket'|trans }}</a></p>#}*/
/* {#<p><a href="{{ path('fr_tickets_admin_all_close_tickets') }}">{{ 'All close user ticket'|trans }}</a></p>#}*/
/* */
/* */
/* {% endblock %}*/
/* */
