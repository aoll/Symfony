<?php

/* FrForumBundle:Categorie:index.html.twig */
class __TwigTemplate_0d89e20c84340294ab67483201912f0a0dc91ded79b9ba4c6610cd8fae26462d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrForumBundle::layout.html.twig", "FrForumBundle:Categorie:index.html.twig", 3);
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
        $__internal_8520ead5fc8b7ab8d59d04874a70a903fa593d3875d1074480b8b615ca706764 = $this->env->getExtension("native_profiler");
        $__internal_8520ead5fc8b7ab8d59d04874a70a903fa593d3875d1074480b8b615ca706764->enter($__internal_8520ead5fc8b7ab8d59d04874a70a903fa593d3875d1074480b8b615ca706764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrForumBundle:Categorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8520ead5fc8b7ab8d59d04874a70a903fa593d3875d1074480b8b615ca706764->leave($__internal_8520ead5fc8b7ab8d59d04874a70a903fa593d3875d1074480b8b615ca706764_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1f126f528d17793ee17dd1dd68c2f69e96fd180edc14e75a081606ffc01ddbf = $this->env->getExtension("native_profiler");
        $__internal_e1f126f528d17793ee17dd1dd68c2f69e96fd180edc14e75a081606ffc01ddbf->enter($__internal_e1f126f528d17793ee17dd1dd68c2f69e96fd180edc14e75a081606ffc01ddbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e1f126f528d17793ee17dd1dd68c2f69e96fd180edc14e75a081606ffc01ddbf->leave($__internal_e1f126f528d17793ee17dd1dd68c2f69e96fd180edc14e75a081606ffc01ddbf_prof);

    }

    // line 9
    public function block_frforum_body($context, array $blocks = array())
    {
        $__internal_3568a4f38edaf2582abc20e440b479798526f939dacf6c59615153563a385caf = $this->env->getExtension("native_profiler");
        $__internal_3568a4f38edaf2582abc20e440b479798526f939dacf6c59615153563a385caf->enter($__internal_3568a4f38edaf2582abc20e440b479798526f939dacf6c59615153563a385caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frforum_body"));

        // line 10
        echo "
  <h2>Forum</h2>

 

";
        // line 16
        echo "          ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "  
 <p>
    <a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("fr_forum_categorie_add");
            echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add a categorie"), "html", null, true);
            echo "
    </a>
</p>
";
        }
        // line 25
        echo "categorie:
<p></p>

";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["categorie"]);
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 29
            echo "

<div class=\"well\">
<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_categorie_view", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "title", array()), "html", null, true);
            echo " </a>


          ";
            // line 35
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 36
                echo "    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_categorie_delete", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\"><i class=\"glyphicon glyphicon-trash\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete a categorie"), "html", null, true);
                echo "</a></p>
    ";
            }
            // line 38
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
  

";
        
        $__internal_3568a4f38edaf2582abc20e440b479798526f939dacf6c59615153563a385caf->leave($__internal_3568a4f38edaf2582abc20e440b479798526f939dacf6c59615153563a385caf_prof);

    }

    public function getTemplateName()
    {
        return "FrForumBundle:Categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  117 => 38,  109 => 36,  107 => 35,  99 => 32,  94 => 29,  90 => 28,  85 => 25,  78 => 21,  73 => 19,  69 => 17,  66 => 16,  59 => 10,  53 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/Fr/ForumBundle/Resources/views/Categorie/index.html.twig #}*/
/* */
/* {% extends "FrForumBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   {{ 'Home'|trans }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frforum_body %}*/
/* */
/*   <h2>Forum</h2>*/
/* */
/*  */
/* */
/* {# on affiche le lien :ajouter une annonce que si il a les droits  #}*/
/*           {% if is_granted('ROLE_ADMIN') %}*/
/*   */
/*  <p>*/
/*     <a href="{{ path('fr_forum_categorie_add') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       {{ 'Add a categorie'|trans }}*/
/*     </a>*/
/* </p>*/
/* {% endif %}*/
/* categorie:*/
/* <p></p>*/
/* */
/* {% for categorie in categorie %}*/
/* */
/* */
/* <div class="well">*/
/* <a href="{{ path('fr_forum_categorie_view', {'id': categorie.id} )}}" class="btn btn-default"> {{ categorie.title }} </a>*/
/* */
/* */
/*           {% if is_granted('ROLE_ADMIN') %}*/
/*     <p><a href="{{ path('fr_forum_categorie_delete', {'id': categorie.id}) }}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>{{ 'Delete a categorie'|trans }}</a></p>*/
/*     {% endif %}*/
/* </div>*/
/* {% endfor %}*/
/* */
/*   */
/* */
/* {% endblock %}*/
/* */
