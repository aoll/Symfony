<?php

/* FrReponseBundle:Reponse:user_add_reponse.html.twig */
class __TwigTemplate_3ff6ed61f745c2952f791a418bc558c8d72272de70bebfc3a86e470871b6e771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("FrReponseBundle::layout.html.twig", "FrReponseBundle:Reponse:user_add_reponse.html.twig", 5);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'frreponse_body' => array($this, 'block_frreponse_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrReponseBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6823a4a638e10f764c7f78150f8c0067fd6fb1ed307d2e2964c7b7b9b1818b5 = $this->env->getExtension("native_profiler");
        $__internal_f6823a4a638e10f764c7f78150f8c0067fd6fb1ed307d2e2964c7b7b9b1818b5->enter($__internal_f6823a4a638e10f764c7f78150f8c0067fd6fb1ed307d2e2964c7b7b9b1818b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrReponseBundle:Reponse:user_add_reponse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6823a4a638e10f764c7f78150f8c0067fd6fb1ed307d2e2964c7b7b9b1818b5->leave($__internal_f6823a4a638e10f764c7f78150f8c0067fd6fb1ed307d2e2964c7b7b9b1818b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_49d8f039b42879215fbfd17eaf7eecfe7d0a187591a863282dc372891ac7d5e5 = $this->env->getExtension("native_profiler");
        $__internal_49d8f039b42879215fbfd17eaf7eecfe7d0a187591a863282dc372891ac7d5e5->enter($__internal_49d8f039b42879215fbfd17eaf7eecfe7d0a187591a863282dc372891ac7d5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_49d8f039b42879215fbfd17eaf7eecfe7d0a187591a863282dc372891ac7d5e5->leave($__internal_49d8f039b42879215fbfd17eaf7eecfe7d0a187591a863282dc372891ac7d5e5_prof);

    }

    // line 11
    public function block_frreponse_body($context, array $blocks = array())
    {
        $__internal_fbda036b908c87fc74cbb970aa46786210d0f43cc282e86cd2447d24ec36119d = $this->env->getExtension("native_profiler");
        $__internal_fbda036b908c87fc74cbb970aa46786210d0f43cc282e86cd2447d24ec36119d->enter($__internal_fbda036b908c87fc74cbb970aa46786210d0f43cc282e86cd2447d24ec36119d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frreponse_body"));

        // line 12
        echo "
  <h2>Answer</h2>
  

  ";
        // line 16
        echo twig_include($this->env, $context, "FrReponseBundle:Reponse:form.html.twig");
        echo "

  <p>
    Vous repondez a un ticket,  une fois valide elle sera publie.
  </p>

";
        
        $__internal_fbda036b908c87fc74cbb970aa46786210d0f43cc282e86cd2447d24ec36119d->leave($__internal_fbda036b908c87fc74cbb970aa46786210d0f43cc282e86cd2447d24ec36119d_prof);

    }

    public function getTemplateName()
    {
        return "FrReponseBundle:Reponse:user_add_reponse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  57 => 12,  51 => 11,  41 => 8,  35 => 7,  11 => 5,);
    }
}
/* {# src/Fr/ReponseBundle/Resources/views/Reponse/user_add_reponse.html.twig #}*/
/* */
/* */
/* */
/* {% extends "FrReponseBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajouter une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frreponse_body %}*/
/* */
/*   <h2>Answer</h2>*/
/*   */
/* */
/*   {{ include("FrReponseBundle:Reponse:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous repondez a un ticket,  une fois valide elle sera publie.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
