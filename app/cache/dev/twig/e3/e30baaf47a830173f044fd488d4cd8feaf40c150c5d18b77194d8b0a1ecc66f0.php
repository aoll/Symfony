<?php

/* FrReponseBundle:Reponse:form.html.twig */
class __TwigTemplate_481353dc93cad81f5a797210c80c733a87c9510c54500e1aaf2310cb1f609f4e extends Twig_Template
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
        $__internal_a1a07be91778cfb8b9598179a3ec36b122bb70fd8baab63acf2fc9d70353fe77 = $this->env->getExtension("native_profiler");
        $__internal_a1a07be91778cfb8b9598179a3ec36b122bb70fd8baab63acf2fc9d70353fe77->enter($__internal_a1a07be91778cfb8b9598179a3ec36b122bb70fd8baab63acf2fc9d70353fe77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrReponseBundle:Reponse:form.html.twig"));

        // line 2
        echo "

<div class=\"well\">
  ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_a1a07be91778cfb8b9598179a3ec36b122bb70fd8baab63acf2fc9d70353fe77->leave($__internal_a1a07be91778cfb8b9598179a3ec36b122bb70fd8baab63acf2fc9d70353fe77_prof);

    }

    public function getTemplateName()
    {
        return "FrReponseBundle:Reponse:form.html.twig";
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
/* {# src/TicketsBundle/Ressources/views/Reponse/form.html.twig #}*/
/* */
/* */
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
