<?php

/* FrTicketsBundle:Tickets:etattickets.html.twig */
class __TwigTemplate_a562616d0ab7300557975a7eea5dd30581df5154a5a2d82ac8217fe8f7949cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrTicketsBundle::layout.html.twig", "FrTicketsBundle:Tickets:etattickets.html.twig", 3);
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
        $__internal_511ec8eb1a46e2ece982da7d59f0296a84abc5ef50e9e33e1bc9c4cc6e522102 = $this->env->getExtension("native_profiler");
        $__internal_511ec8eb1a46e2ece982da7d59f0296a84abc5ef50e9e33e1bc9c4cc6e522102->enter($__internal_511ec8eb1a46e2ece982da7d59f0296a84abc5ef50e9e33e1bc9c4cc6e522102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrTicketsBundle:Tickets:etattickets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_511ec8eb1a46e2ece982da7d59f0296a84abc5ef50e9e33e1bc9c4cc6e522102->leave($__internal_511ec8eb1a46e2ece982da7d59f0296a84abc5ef50e9e33e1bc9c4cc6e522102_prof);

    }

    // line 5
    public function block_frtickets_body($context, array $blocks = array())
    {
        $__internal_d5e7fcc58985c0da48ca6d5d37831e7c60a1c7358557347963dc089385ec1046 = $this->env->getExtension("native_profiler");
        $__internal_d5e7fcc58985c0da48ca6d5d37831e7c60a1c7358557347963dc089385ec1046->enter($__internal_d5e7fcc58985c0da48ca6d5d37831e7c60a1c7358557347963dc089385ec1046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frtickets_body"));

        // line 6
        echo "<h1>tickets</h1>

";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("close the ticket?"), "html", null, true);
        echo "

";
        // line 10
        echo twig_include($this->env, $context, "FrTicketsBundle:Tickets:form.html.twig");
        echo "



";
        
        $__internal_d5e7fcc58985c0da48ca6d5d37831e7c60a1c7358557347963dc089385ec1046->leave($__internal_d5e7fcc58985c0da48ca6d5d37831e7c60a1c7358557347963dc089385ec1046_prof);

    }

    public function getTemplateName()
    {
        return "FrTicketsBundle:Tickets:etattickets.html.twig";
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
/* {# src/Fr/TicketsBundle/Ressources/views/Tickets/etattickets.html.twig #}*/
/* */
/* {% extends "FrTicketsBundle::layout.html.twig" %}*/
/* */
/* {% block frtickets_body %}*/
/* <h1>tickets</h1>*/
/* */
/* {{ 'close the ticket?'|trans }}*/
/* */
/* {{ include("FrTicketsBundle:Tickets:form.html.twig") }}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
