<?php

/* FrTicketsBundle:Tickets:newtickets.html.twig */
class __TwigTemplate_d4fd7f135a9d6bc345b5403e8533cd83f3adc270d2fd291932b0daff4c320c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrTicketsBundle:Tickets:newtickets.html.twig", 3);
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
        $__internal_24f193656b179731dfa2bb2f1532e68e38572d16300ef0e66218497f831ec202 = $this->env->getExtension("native_profiler");
        $__internal_24f193656b179731dfa2bb2f1532e68e38572d16300ef0e66218497f831ec202->enter($__internal_24f193656b179731dfa2bb2f1532e68e38572d16300ef0e66218497f831ec202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrTicketsBundle:Tickets:newtickets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f193656b179731dfa2bb2f1532e68e38572d16300ef0e66218497f831ec202->leave($__internal_24f193656b179731dfa2bb2f1532e68e38572d16300ef0e66218497f831ec202_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f356b61a9b331d164aceba0823e23b1164d9f65686463d47094d4b91b3cbee31 = $this->env->getExtension("native_profiler");
        $__internal_f356b61a9b331d164aceba0823e23b1164d9f65686463d47094d4b91b3cbee31->enter($__internal_f356b61a9b331d164aceba0823e23b1164d9f65686463d47094d4b91b3cbee31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "FrTicketsBundle:Tickets:form.html.twig");
        echo "


";
        
        $__internal_f356b61a9b331d164aceba0823e23b1164d9f65686463d47094d4b91b3cbee31->leave($__internal_f356b61a9b331d164aceba0823e23b1164d9f65686463d47094d4b91b3cbee31_prof);

    }

    public function getTemplateName()
    {
        return "FrTicketsBundle:Tickets:newtickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/Fr/TicketsBundle/Ressources/views/Tickets/newtickets.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* {{ include("FrTicketsBundle:Tickets:form.html.twig") }}*/
/* */
/* */
/* {% endblock %}*/
/* */
