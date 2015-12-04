<?php

/* FrForumBundle:Categorie:view.html.twig */
class __TwigTemplate_542234aaf5f47fd39f8d3d7d73ea236964ab5f6e0cf7093111602d9c5c85d580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("FrForumBundle::layout.html.twig", "FrForumBundle:Categorie:view.html.twig", 5);
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
        $__internal_8eaa6102b9e34803b962aaf628ede812832d593f996e372565d91bf6ea180877 = $this->env->getExtension("native_profiler");
        $__internal_8eaa6102b9e34803b962aaf628ede812832d593f996e372565d91bf6ea180877->enter($__internal_8eaa6102b9e34803b962aaf628ede812832d593f996e372565d91bf6ea180877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrForumBundle:Categorie:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eaa6102b9e34803b962aaf628ede812832d593f996e372565d91bf6ea180877->leave($__internal_8eaa6102b9e34803b962aaf628ede812832d593f996e372565d91bf6ea180877_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c110ad7faabb0b5a7930091bf7b8ae4a6658019e5353581537608dc6c3aa5dd = $this->env->getExtension("native_profiler");
        $__internal_9c110ad7faabb0b5a7930091bf7b8ae4a6658019e5353581537608dc6c3aa5dd->enter($__internal_9c110ad7faabb0b5a7930091bf7b8ae4a6658019e5353581537608dc6c3aa5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "  Categorie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9c110ad7faabb0b5a7930091bf7b8ae4a6658019e5353581537608dc6c3aa5dd->leave($__internal_9c110ad7faabb0b5a7930091bf7b8ae4a6658019e5353581537608dc6c3aa5dd_prof);

    }

    // line 11
    public function block_frforum_body($context, array $blocks = array())
    {
        $__internal_da61d0c84e3402ccbe65e061edb59b1aaa503851545aa13773e4d4c1dacc88d0 = $this->env->getExtension("native_profiler");
        $__internal_da61d0c84e3402ccbe65e061edb59b1aaa503851545aa13773e4d4c1dacc88d0->enter($__internal_da61d0c84e3402ccbe65e061edb59b1aaa503851545aa13773e4d4c1dacc88d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frforum_body"));

        // line 12
        echo "

<div class=\"well\">
<h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "categorie", array()), "title", array()), "html", null, true);
        echo "</h2>
  <i>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("By"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "categorie", array()), "author", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "categorie", array()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
</div>

<p></p>
<div class=\"row\">

<div class=\"col-sm-4\">
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "souscategorie", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["souscategorie"]) {
            // line 24
            echo "
<p> 
<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_sous_categorie_view", array("id" => $this->getAttribute($context["souscategorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["souscategorie"], "title", array()), "html", null, true);
            echo "</a> 
</p>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souscategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>

<div class=\"col-sm-4\">
threads:

";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "threads", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["threads"]) {
            // line 36
            echo "
 <p>
<a href=\"";
            // line 38
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
        // line 42
        echo "</div>
</div>


  

  <p>
    <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fr_forum_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back"), "html", null, true);
        echo "
    </a>

    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_threads_add_in_categorie", array("id" => $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "categorie", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add a threads"), "html", null, true);
        echo "
    </a>
  </p>

  ";
        // line 60
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 61
            echo "  <p>
    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_sous_categorie_add", array("id" => $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "categorie", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      ";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add a lower categorie"), "html", null, true);
            echo "
    </a>


    <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_categorie_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "categorie", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      ";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit a categorie"), "html", null, true);
            echo "
    </a>

    <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_categorie_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "categorie", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete a categorie"), "html", null, true);
            echo "
    </a>
  </p>
  ";
        }
        
        $__internal_da61d0c84e3402ccbe65e061edb59b1aaa503851545aa13773e4d4c1dacc88d0->leave($__internal_da61d0c84e3402ccbe65e061edb59b1aaa503851545aa13773e4d4c1dacc88d0_prof);

    }

    public function getTemplateName()
    {
        return "FrForumBundle:Categorie:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 75,  187 => 73,  181 => 70,  176 => 68,  169 => 64,  164 => 62,  161 => 61,  159 => 60,  152 => 56,  147 => 54,  141 => 51,  136 => 49,  127 => 42,  115 => 38,  111 => 36,  107 => 35,  100 => 30,  88 => 26,  84 => 24,  80 => 23,  66 => 16,  62 => 15,  57 => 12,  51 => 11,  41 => 8,  35 => 7,  11 => 5,);
    }
}
/* {# src/Fr/ForumBundle/Resources/view/Categorie/view.html.twig #}*/
/* */
/* */
/* */
/* {% extends "FrForumBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Categorie - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frforum_body %}*/
/* */
/* */
/* <div class="well">*/
/* <h2>{{ tab.categorie.title }}</h2>*/
/*   <i>{{ 'By'|trans}} {{ tab.categorie.author }}, {{ tab.categorie.date|date('d/m/Y') }}</i>*/
/* </div>*/
/* */
/* <p></p>*/
/* <div class="row">*/
/* */
/* <div class="col-sm-4">*/
/* {% for souscategorie in tab.souscategorie %}*/
/* */
/* <p> */
/* <a href="{{ path('fr_forum_sous_categorie_view', {'id': souscategorie.id}) }}">{{ souscategorie.title }}</a> */
/* </p>*/
/* */
/*  {% endfor %}*/
/* </div>*/
/* */
/* <div class="col-sm-4">*/
/* threads:*/
/* */
/* {% for threads in tab.threads %}*/
/* */
/*  <p>*/
/* <a href="{{ path('fr_forum_threads_view', {'id': threads.id}) }}">{{ threads.title }}</a> */
/* </p>*/
/* */
/*  {% endfor %}*/
/* </div>*/
/* </div>*/
/* */
/* */
/*   */
/* */
/*   <p>*/
/*     <a href="{{ path('fr_forum_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       {{ 'Back'|trans }}*/
/*     </a>*/
/* */
/*     <a href="{{ path('fr_forum_threads_add_in_categorie', {'id': tab.categorie.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       {{ 'Add a threads'|trans }}*/
/*     </a>*/
/*   </p>*/
/* */
/*   {% if is_granted('ROLE_ADMIN') %}*/
/*   <p>*/
/*     <a href="{{ path('fr_forum_sous_categorie_add', {'id': tab.categorie.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       {{ 'Add a lower categorie'|trans }}*/
/*     </a>*/
/* */
/* */
/*     <a href="{{ path('fr_forum_categorie_edit', {'id': tab.categorie.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       {{ 'Edit a categorie'|trans }}*/
/*     </a>*/
/* */
/*     <a href="{{ path('fr_forum_categorie_delete', {'id': tab.categorie.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       {{ 'Delete a categorie'|trans }}*/
/*     </a>*/
/*   </p>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
