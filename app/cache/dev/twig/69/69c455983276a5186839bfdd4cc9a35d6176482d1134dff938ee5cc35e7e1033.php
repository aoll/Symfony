<?php

/* FrTicketsBundle:Tickets:mytickets.html.twig */
class __TwigTemplate_e160ddab80234983c200ce63d7c42b81bbfdafe8f674369786c9e02d36c78329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrTicketsBundle:Tickets:mytickets.html.twig", 3);
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
        $__internal_cd1a810db2b3f9e49fd559db8238fb3bede86b705f81fc976bb6313c3fb5f514 = $this->env->getExtension("native_profiler");
        $__internal_cd1a810db2b3f9e49fd559db8238fb3bede86b705f81fc976bb6313c3fb5f514->enter($__internal_cd1a810db2b3f9e49fd559db8238fb3bede86b705f81fc976bb6313c3fb5f514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrTicketsBundle:Tickets:mytickets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd1a810db2b3f9e49fd559db8238fb3bede86b705f81fc976bb6313c3fb5f514->leave($__internal_cd1a810db2b3f9e49fd559db8238fb3bede86b705f81fc976bb6313c3fb5f514_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_333bd3f0e058c7e6410cb4e0cd1d8c14333b8bf8436b85145e83721cb5329368 = $this->env->getExtension("native_profiler");
        $__internal_333bd3f0e058c7e6410cb4e0cd1d8c14333b8bf8436b85145e83721cb5329368->enter($__internal_333bd3f0e058c7e6410cb4e0cd1d8c14333b8bf8436b85145e83721cb5329368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("My open tickets"), "html", null, true);
        echo "</h1>

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tabtickets"]) ? $context["tabtickets"] : $this->getContext($context, "tabtickets")), "tickets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 10
            echo "
";
            // line 11
            if (($this->getAttribute($context["tickets"], "etat", array()) === "open")) {
                echo " ";
                // line 12
                echo "<div class=\"well\">
  objet: ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "objet", array()), "html", null, true);
                echo "

<p> ";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("content"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "content", array()), "html", null, true);
                echo " </p>


 
Reponses:
<p></p>
";
                // line 22
                echo "
\t    ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tabtickets"]) ? $context["tabtickets"] : $this->getContext($context, "tabtickets")), "reponse", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 24
                    echo "
";
                    // line 25
                    if (($this->getAttribute($context["reponse"], "idref", array()) == $this->getAttribute($context["tickets"], "id", array()))) {
                        // line 26
                        echo "<div class=\"well\">
";
                        // line 27
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("By"), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "author", array()), "html", null, true);
                        echo " 
<p>";
                        // line 28
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("content"), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["reponse"], "content", array()), "html", null, true);
                        echo " </p>
</div>
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_reponse_user_add_reponse", array("id" => $this->getAttribute($context["tickets"], "id", array()))), "html", null, true);
                echo "\">set reponse</a>
<a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_tickets_etat_tickets", array("id" => $this->getAttribute($context["tickets"], "id", array()))), "html", null, true);
                echo "\">close ticket</a>
</div>
";
            }
            // line 36
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
";
        
        $__internal_333bd3f0e058c7e6410cb4e0cd1d8c14333b8bf8436b85145e83721cb5329368->leave($__internal_333bd3f0e058c7e6410cb4e0cd1d8c14333b8bf8436b85145e83721cb5329368_prof);

    }

    public function getTemplateName()
    {
        return "FrTicketsBundle:Tickets:mytickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 38,  119 => 36,  113 => 33,  108 => 32,  96 => 28,  90 => 27,  87 => 26,  85 => 25,  82 => 24,  78 => 23,  75 => 22,  64 => 15,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  46 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/Fr/TicketsBundle/Ressources/views/Tickets/mytickets.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <h1>{{ 'My open tickets'|trans }}</h1>*/
/* */
/* {# on recupere les tickets contenu dans le tableau tickets contenu dans le tableau tabtickets #}*/
/* {% for tickets in tabtickets.tickets %}*/
/* */
/* {% if tickets.etat is sameas('open') %} {# on cherche les tickets ouvert #}*/
/* <div class="well">*/
/*   objet: {{ tickets.objet }}*/
/* */
/* <p> {{ 'content'|trans }}: {{ tickets.content }} </p>*/
/* */
/* */
/*  */
/* Reponses:*/
/* <p></p>*/
/* {# on recupere les reponse contenu dans le tableau reponse contenu dans le tableau tabtickets #}*/
/* */
/* 	    {% for reponse in tabtickets.reponse %}*/
/* */
/* {% if reponse.idref == tickets.id %}*/
/* <div class="well">*/
/* {{ 'By'|trans }}: {{ reponse.author }} */
/* <p>{{ 'content'|trans }}: {{ reponse.content }} </p>*/
/* </div>*/
/* {% endif %}*/
/* {% endfor %}*/
/* <a href="{{ path('fr_reponse_user_add_reponse', {'id': tickets.id}) }}">set reponse</a>*/
/* <a href="{{ path('fr_tickets_etat_tickets', {'id': tickets.id}) }}">close ticket</a>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% endfor %}*/
/* */
/* {% endblock %}*/
/* */
