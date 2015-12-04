<?php

/* FrTicketsBundle:Tickets:form.html.twig */
class __TwigTemplate_b16d990bbc7df5e571d4e89eb020fb032404a822720107d6453e5f064a8b4391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdd14081281df01bf18047f29cd3cb7700c27d03eca46fad44f8100b83a564e7 = $this->env->getExtension("native_profiler");
        $__internal_fdd14081281df01bf18047f29cd3cb7700c27d03eca46fad44f8100b83a564e7->enter($__internal_fdd14081281df01bf18047f29cd3cb7700c27d03eca46fad44f8100b83a564e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrTicketsBundle:Tickets:form.html.twig"));

        // line 2
        echo "

<div class=\"well\">
  ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_fdd14081281df01bf18047f29cd3cb7700c27d03eca46fad44f8100b83a564e7->leave($__internal_fdd14081281df01bf18047f29cd3cb7700c27d03eca46fad44f8100b83a564e7_prof);

    }

    public function getTemplateName()
    {
        return "FrTicketsBundle:Tickets:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  22 => 2,);
    }
}
/* {# src/TicketsBundle/Ressources/views/Tickets/form.html.twig #}*/
/* */
/* */
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
