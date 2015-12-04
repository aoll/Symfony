<?php

/* FrProjetBundle:Projet:set_email.html.twig */
class __TwigTemplate_e348244bd13cc85b0b14885c44aec2b96eb0231d54ec8000a782215e8391383d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrProjetBundle::layout.html.twig", "FrProjetBundle:Projet:set_email.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'frprojet_body' => array($this, 'block_frprojet_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrProjetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8660f3b33527615891297421c25048902e2833df00f726b206ebfe7f5d8081a = $this->env->getExtension("native_profiler");
        $__internal_a8660f3b33527615891297421c25048902e2833df00f726b206ebfe7f5d8081a->enter($__internal_a8660f3b33527615891297421c25048902e2833df00f726b206ebfe7f5d8081a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrProjetBundle:Projet:set_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8660f3b33527615891297421c25048902e2833df00f726b206ebfe7f5d8081a->leave($__internal_a8660f3b33527615891297421c25048902e2833df00f726b206ebfe7f5d8081a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c5be9f587804fd43c4309c2b561bd3cf51fcc07a82f0212064c41b03bfb0e63 = $this->env->getExtension("native_profiler");
        $__internal_9c5be9f587804fd43c4309c2b561bd3cf51fcc07a82f0212064c41b03bfb0e63->enter($__internal_9c5be9f587804fd43c4309c2b561bd3cf51fcc07a82f0212064c41b03bfb0e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Set email"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9c5be9f587804fd43c4309c2b561bd3cf51fcc07a82f0212064c41b03bfb0e63->leave($__internal_9c5be9f587804fd43c4309c2b561bd3cf51fcc07a82f0212064c41b03bfb0e63_prof);

    }

    // line 9
    public function block_frprojet_body($context, array $blocks = array())
    {
        $__internal_9e1b3039f5f96177aafed3b261154fb0a1b0ae82d14e8a7b7a4402cebbc8732f = $this->env->getExtension("native_profiler");
        $__internal_9e1b3039f5f96177aafed3b261154fb0a1b0ae82d14e8a7b7a4402cebbc8732f->enter($__internal_9e1b3039f5f96177aafed3b261154fb0a1b0ae82d14e8a7b7a4402cebbc8732f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frprojet_body"));

        // line 10
        echo "
  <h2>Profile</h2>

";
        // line 13
        echo twig_include($this->env, $context, "FrProjetBundle:Projet:form.html.twig");
        echo "
";
        // line 26
        echo " 
 




";
        
        $__internal_9e1b3039f5f96177aafed3b261154fb0a1b0ae82d14e8a7b7a4402cebbc8732f->leave($__internal_9e1b3039f5f96177aafed3b261154fb0a1b0ae82d14e8a7b7a4402cebbc8732f_prof);

    }

    public function getTemplateName()
    {
        return "FrProjetBundle:Projet:set_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 26,  64 => 13,  59 => 10,  53 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/fr/ProjetBundle/Resources/views/Projet/set_email.html.twig #}*/
/* */
/* {% extends "FrProjetBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*  {{ 'Set email'|trans }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frprojet_body %}*/
/* */
/*   <h2>Profile</h2>*/
/* */
/* {{ include("FrProjetBundle:Projet:form.html.twig") }}*/
/* {#*/
/*   <div class="well">*/
/*    {{ 'name'|trans: {{ user.username }}*/
/*   </div>*/
/*   <div class="well">*/
/*    email: {{ user.email }}*/
/*    <a href="{{ path('fr_projet_set_email', {'id' : user.id}) }}" class="btn btn-default">*/
/*      <i class="glyphicon glyphicon-edit"></i>*/
/*      {{ 'Set email'|trans }}*/
/*      </a>*/
/*   </div>*/
/*   #}*/
/*  */
/*  */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
