<?php

/* FrTicketsBundle:Tickets:index.html.twig */
class __TwigTemplate_a172947c59865b9684968a45fee74c38b195c9707d0b04824144688f153bcc2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrTicketsBundle:Tickets:index.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0654e9b5fecabb8a147efad0f716e483b0296dd76e1debf446f021b7c863a82e = $this->env->getExtension("native_profiler");
        $__internal_0654e9b5fecabb8a147efad0f716e483b0296dd76e1debf446f021b7c863a82e->enter($__internal_0654e9b5fecabb8a147efad0f716e483b0296dd76e1debf446f021b7c863a82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrTicketsBundle:Tickets:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0654e9b5fecabb8a147efad0f716e483b0296dd76e1debf446f021b7c863a82e->leave($__internal_0654e9b5fecabb8a147efad0f716e483b0296dd76e1debf446f021b7c863a82e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a943835816db947311c1c569c9e64a96ed15fb490e5f2cd71501c00f3623a3d7 = $this->env->getExtension("native_profiler");
        $__internal_a943835816db947311c1c569c9e64a96ed15fb490e5f2cd71501c00f3623a3d7->enter($__internal_a943835816db947311c1c569c9e64a96ed15fb490e5f2cd71501c00f3623a3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<p><a href=\"";
        echo $this->env->getExtension('routing')->getPath("fr_tickets_new_tickets");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New ticket"), "html", null, true);
        echo "</a></p>
<p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fr_tickets_my_tickets");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("My open ticket"), "html", null, true);
        echo "</a></p>
<p><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fr_tickets_close_tickets");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("My close ticket"), "html", null, true);
        echo "</a></p>


";
        
        $__internal_a943835816db947311c1c569c9e64a96ed15fb490e5f2cd71501c00f3623a3d7->leave($__internal_a943835816db947311c1c569c9e64a96ed15fb490e5f2cd71501c00f3623a3d7_prof);

    }

    public function getTemplateName()
    {
        return "FrTicketsBundle:Tickets:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  47 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/Fr/TicketsBundle/Ressources/views/Tickets/index.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <p><a href="{{ path('fr_tickets_new_tickets') }}">{{ 'New ticket'|trans }}</a></p>*/
/* <p><a href="{{ path('fr_tickets_my_tickets') }}">{{ 'My open ticket'|trans }}</a></p>*/
/* <p><a href="{{ path('fr_tickets_close_tickets') }}">{{ 'My close ticket'|trans }}</a></p>*/
/* */
/* */
/* {% endblock %}*/
/* */
