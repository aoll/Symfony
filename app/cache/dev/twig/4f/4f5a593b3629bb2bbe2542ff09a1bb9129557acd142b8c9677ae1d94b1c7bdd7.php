<?php

/* FrProjetBundle:Projet:form.html.twig */
class __TwigTemplate_2cf79ac00e1d6a69945ce43c83622b204843aeed01c634f1f80b588426bcce4d extends Twig_Template
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
        $__internal_f20f69ad516b14e8421996ed3288491db798ee2b35873b516f50f2e96b9ef29a = $this->env->getExtension("native_profiler");
        $__internal_f20f69ad516b14e8421996ed3288491db798ee2b35873b516f50f2e96b9ef29a->enter($__internal_f20f69ad516b14e8421996ed3288491db798ee2b35873b516f50f2e96b9ef29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrProjetBundle:Projet:form.html.twig"));

        // line 2
        echo "

<div class=\"well\">
  ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_f20f69ad516b14e8421996ed3288491db798ee2b35873b516f50f2e96b9ef29a->leave($__internal_f20f69ad516b14e8421996ed3288491db798ee2b35873b516f50f2e96b9ef29a_prof);

    }

    public function getTemplateName()
    {
        return "FrProjetBundle:Projet:form.html.twig";
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
/* {# src/ProjetBundle/Ressources/views/Projet/form.html.twig #}*/
/* */
/* */
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
