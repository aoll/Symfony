<?php

/* FrForumBundle:SousCategorie:view.html.twig */
class __TwigTemplate_93c7adeda2086ed02f1f4ae602127494a536e1ade7f1364ba8025bc28520432f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("FrForumBundle::layout.html.twig", "FrForumBundle:SousCategorie:view.html.twig", 5);
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
        $__internal_98e03709372bffb66bbf055f1440ae7c8bf61f20f9afdd60e8915cc50210950c = $this->env->getExtension("native_profiler");
        $__internal_98e03709372bffb66bbf055f1440ae7c8bf61f20f9afdd60e8915cc50210950c->enter($__internal_98e03709372bffb66bbf055f1440ae7c8bf61f20f9afdd60e8915cc50210950c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrForumBundle:SousCategorie:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e03709372bffb66bbf055f1440ae7c8bf61f20f9afdd60e8915cc50210950c->leave($__internal_98e03709372bffb66bbf055f1440ae7c8bf61f20f9afdd60e8915cc50210950c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d495c59593da66596d7db68dce9a3a87d36be490928e57bcc0e852eaea1e2426 = $this->env->getExtension("native_profiler");
        $__internal_d495c59593da66596d7db68dce9a3a87d36be490928e57bcc0e852eaea1e2426->enter($__internal_d495c59593da66596d7db68dce9a3a87d36be490928e57bcc0e852eaea1e2426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lower categorie"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d495c59593da66596d7db68dce9a3a87d36be490928e57bcc0e852eaea1e2426->leave($__internal_d495c59593da66596d7db68dce9a3a87d36be490928e57bcc0e852eaea1e2426_prof);

    }

    // line 11
    public function block_frforum_body($context, array $blocks = array())
    {
        $__internal_a67b28bbce863928293e7f1eab531cf73e4f14249cb46f2cac9a132cc1391c12 = $this->env->getExtension("native_profiler");
        $__internal_a67b28bbce863928293e7f1eab531cf73e4f14249cb46f2cac9a132cc1391c12->enter($__internal_a67b28bbce863928293e7f1eab531cf73e4f14249cb46f2cac9a132cc1391c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frforum_body"));

        // line 12
        echo "



<h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "souscategorie", array()), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "souscategorie", array()), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "souscategorie", array()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

<p></p>
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "threads", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["threads"]) {
            // line 21
            echo "
 <p>
<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_threads_view", array("id" => $this->getAttribute($context["threads"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["threads"], "title", array()), "html", null, true);
            echo "</a>
</p>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['threads'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "



<p>
    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_threads_add", array("id" => $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "souscategorie", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
     ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add a threads"), "html", null, true);
        echo "
      </a>
</p>


<p>
<div class=\"weel\">

    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_categorie_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "souscategorie", array()), "idcategorie", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back"), "html", null, true);
        echo "
    </a>

    ";
        // line 47
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_sous_categorie_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "souscategorie", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit a lower categorie"), "html", null, true);
            echo "
    </a>

    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_sous_categorie_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "souscategorie", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete a lower categorie"), "html", null, true);
            echo "
    </a>
    ";
        }
        // line 58
        echo "</div>
 </p>

";
        
        $__internal_a67b28bbce863928293e7f1eab531cf73e4f14249cb46f2cac9a132cc1391c12->leave($__internal_a67b28bbce863928293e7f1eab531cf73e4f14249cb46f2cac9a132cc1391c12_prof);

    }

    public function getTemplateName()
    {
        return "FrForumBundle:SousCategorie:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 58,  150 => 55,  145 => 53,  139 => 50,  133 => 48,  131 => 47,  125 => 44,  120 => 42,  109 => 34,  104 => 32,  97 => 27,  85 => 23,  81 => 21,  77 => 20,  69 => 17,  65 => 16,  59 => 12,  53 => 11,  41 => 8,  35 => 7,  11 => 5,);
    }
}
/* {# src/Fr/ForumBundle/Resources/view/SousCategorie/view.html.twig #}*/
/* */
/* */
/* */
/* {% extends "FrForumBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*  {{ 'Lower categorie'|trans }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frforum_body %}*/
/* */
/* */
/* */
/* */
/* <h2>{{ tab.souscategorie.title }}</h2>*/
/*   <i>Par {{ tab.souscategorie.author }}, le {{ tab.souscategorie.date|date('d/m/Y') }}</i>*/
/* */
/* <p></p>*/
/* {% for threads in tab.threads %}*/
/* */
/*  <p>*/
/* <a href="{{ path('fr_forum_threads_view', {'id': threads.id}) }}">{{ threads.title }}</a>*/
/* </p>*/
/* */
/*  {% endfor %}*/
/* */
/* */
/* */
/* */
/* <p>*/
/*     <a href="{{ path('fr_forum_threads_add', {'id': tab.souscategorie.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*      {{ 'Add a threads'|trans }}*/
/*       </a>*/
/* </p>*/
/* */
/* */
/* <p>*/
/* <div class="weel">*/
/* */
/*     <a href="{{ path('fr_forum_categorie_view', {'id': tab.souscategorie.idcategorie}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       {{ 'Back'|trans }}*/
/*     </a>*/
/* */
/*     {% if is_granted('ROLE_ADMIN') %}*/
/*     <a href="{{ path('fr_forum_sous_categorie_edit', {'id': tab.souscategorie.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       {{ 'Edit a lower categorie'|trans }}*/
/*     </a>*/
/* */
/*     <a href="{{ path('fr_forum_sous_categorie_delete', {'id': tab.souscategorie.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       {{ 'Delete a lower categorie'|trans }}*/
/*     </a>*/
/*     {% endif %}*/
/* </div>*/
/*  </p>*/
/* */
/* {% endblock %}*/
/* */
