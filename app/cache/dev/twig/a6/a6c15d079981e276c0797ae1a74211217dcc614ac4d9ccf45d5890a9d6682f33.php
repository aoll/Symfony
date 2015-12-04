<?php

/* FrTicketsBundle:Tickets:closetickets.html.twig */
class __TwigTemplate_b6ebf97f57725e79a43bca25005e2d8bfb0dac3eea047fa2ac8d09c82d6d5b68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrTicketsBundle:Tickets:closetickets.html.twig", 3);
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
        $__internal_9ba451c969de7e3dc6f1088fda8d93f806e19ad85dfb44e8571c0b7ac33f92cc = $this->env->getExtension("native_profiler");
        $__internal_9ba451c969de7e3dc6f1088fda8d93f806e19ad85dfb44e8571c0b7ac33f92cc->enter($__internal_9ba451c969de7e3dc6f1088fda8d93f806e19ad85dfb44e8571c0b7ac33f92cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrTicketsBundle:Tickets:closetickets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ba451c969de7e3dc6f1088fda8d93f806e19ad85dfb44e8571c0b7ac33f92cc->leave($__internal_9ba451c969de7e3dc6f1088fda8d93f806e19ad85dfb44e8571c0b7ac33f92cc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_436e2f09db2f40dbf181921981740acdd98db57d551c38f67d9b11d6681f7e1e = $this->env->getExtension("native_profiler");
        $__internal_436e2f09db2f40dbf181921981740acdd98db57d551c38f67d9b11d6681f7e1e->enter($__internal_436e2f09db2f40dbf181921981740acdd98db57d551c38f67d9b11d6681f7e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("My close tickets"), "html", null, true);
        echo "</h1>


";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["tickets"]);
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 10
            echo "
";
            // line 11
            if (($this->getAttribute($context["tickets"], "etat", array()) === "close")) {
                echo " 
<div class=\"well\">
  objet: ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "objet", array()), "html", null, true);
                echo "

<p> content: ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "content", array()), "html", null, true);
                echo " </p>

<a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_tickets_open_tickets", array("id" => $this->getAttribute($context["tickets"], "id", array()))), "html", null, true);
                echo "\">Open ticket</a>
</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "

";
        
        $__internal_436e2f09db2f40dbf181921981740acdd98db57d551c38f67d9b11d6681f7e1e->leave($__internal_436e2f09db2f40dbf181921981740acdd98db57d551c38f67d9b11d6681f7e1e_prof);

    }

    public function getTemplateName()
    {
        return "FrTicketsBundle:Tickets:closetickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  69 => 17,  64 => 15,  59 => 13,  54 => 11,  51 => 10,  47 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/Fr/TicketsBundle/Ressources/views/Tickets/closetickets.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <h1>{{ 'My close tickets'|trans }}</h1>*/
/* */
/* */
/* {% for tickets in tickets %}*/
/* */
/* {% if tickets.etat is sameas('close') %} */
/* <div class="well">*/
/*   objet: {{ tickets.objet }}*/
/* */
/* <p> content: {{ tickets.content }} </p>*/
/* */
/* <a href="{{ path('fr_tickets_open_tickets', {'id': tickets.id}) }}">Open ticket</a>*/
/* </div>*/
/* {% endif %}*/
/* {% endfor %}*/
/* */
/* */
/* {% endblock %}*/
/* */
