<?php

/* FrForumBundle:Threads:add.html.twig */
class __TwigTemplate_daa408bfa2d6cfeac7fdcb325db883cb857aeaa872fd811d6c6f52b138c8594f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("FrForumBundle::layout.html.twig", "FrForumBundle:Threads:add.html.twig", 5);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'frforum_body' => array($this, 'block_frforum_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6baa72cec459062d93bc364cb442dfd1dd3d871904eea5eedf60b345051e1515 = $this->env->getExtension("native_profiler");
        $__internal_6baa72cec459062d93bc364cb442dfd1dd3d871904eea5eedf60b345051e1515->enter($__internal_6baa72cec459062d93bc364cb442dfd1dd3d871904eea5eedf60b345051e1515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrForumBundle:Threads:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6baa72cec459062d93bc364cb442dfd1dd3d871904eea5eedf60b345051e1515->leave($__internal_6baa72cec459062d93bc364cb442dfd1dd3d871904eea5eedf60b345051e1515_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe0b56160261c026f2e7315302cbe38504534cd5c71e47b89e1eb5204c959cac = $this->env->getExtension("native_profiler");
        $__internal_fe0b56160261c026f2e7315302cbe38504534cd5c71e47b89e1eb5204c959cac->enter($__internal_fe0b56160261c026f2e7315302cbe38504534cd5c71e47b89e1eb5204c959cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add a threads"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fe0b56160261c026f2e7315302cbe38504534cd5c71e47b89e1eb5204c959cac->leave($__internal_fe0b56160261c026f2e7315302cbe38504534cd5c71e47b89e1eb5204c959cac_prof);

    }

    // line 11
    public function block_frforum_body($context, array $blocks = array())
    {
        $__internal_6261a0af4c5beb8d72fcb873a2f0332d312762a7e136ec2b370098f01f72b683 = $this->env->getExtension("native_profiler");
        $__internal_6261a0af4c5beb8d72fcb873a2f0332d312762a7e136ec2b370098f01f72b683->enter($__internal_6261a0af4c5beb8d72fcb873a2f0332d312762a7e136ec2b370098f01f72b683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frforum_body"));

        // line 12
        echo "
  <h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add a threads"), "html", null, true);
        echo "</h2>
  

  ";
        // line 16
        echo twig_include($this->env, $context, "FrForumBundle:Threads:form.html.twig");
        echo "

  <p>
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("You add a threads"), "html", null, true);
        echo "
  </p>

";
        
        $__internal_6261a0af4c5beb8d72fcb873a2f0332d312762a7e136ec2b370098f01f72b683->leave($__internal_6261a0af4c5beb8d72fcb873a2f0332d312762a7e136ec2b370098f01f72b683_prof);

    }

    public function getTemplateName()
    {
        return "FrForumBundle:Threads:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  68 => 16,  62 => 13,  59 => 12,  53 => 11,  41 => 8,  35 => 7,  11 => 5,);
    }
}
/* {# src/Fr/ForumBundle/Resources/views/Threads/add.html.twig #}*/
/* */
/* */
/* */
/* {% extends "FrForumBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   {{ 'Add a threads'|trans }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frforum_body %}*/
/* */
/*   <h2>{{ 'Add a threads'|trans }}</h2>*/
/*   */
/* */
/*   {{ include("FrForumBundle:Threads:form.html.twig") }}*/
/* */
/*   <p>*/
/*     {{ 'You add a threads'|trans }}*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
