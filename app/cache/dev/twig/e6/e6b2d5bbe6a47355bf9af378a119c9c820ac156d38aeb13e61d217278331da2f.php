<?php

/* FrForumBundle:SousCategorie:delete.html.twig */
class __TwigTemplate_d8a815fab63d354ec7185fb47564bfe3312fd5e0f3440a132cac566d9bdc0359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrForumBundle::layout.html.twig", "FrForumBundle:SousCategorie:delete.html.twig", 3);
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
        $__internal_283cb4f38e6b04b66ea8b8cde7ad679cd6f66182e5dd4d38bfa35a1e04b13330 = $this->env->getExtension("native_profiler");
        $__internal_283cb4f38e6b04b66ea8b8cde7ad679cd6f66182e5dd4d38bfa35a1e04b13330->enter($__internal_283cb4f38e6b04b66ea8b8cde7ad679cd6f66182e5dd4d38bfa35a1e04b13330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrForumBundle:SousCategorie:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_283cb4f38e6b04b66ea8b8cde7ad679cd6f66182e5dd4d38bfa35a1e04b13330->leave($__internal_283cb4f38e6b04b66ea8b8cde7ad679cd6f66182e5dd4d38bfa35a1e04b13330_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fefdf1174bbb1412d095e9babef5690903fad5bdf256cf857dee23ccca3caa6 = $this->env->getExtension("native_profiler");
        $__internal_0fefdf1174bbb1412d095e9babef5690903fad5bdf256cf857dee23ccca3caa6->enter($__internal_0fefdf1174bbb1412d095e9babef5690903fad5bdf256cf857dee23ccca3caa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "   ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete a lower categorie"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0fefdf1174bbb1412d095e9babef5690903fad5bdf256cf857dee23ccca3caa6->leave($__internal_0fefdf1174bbb1412d095e9babef5690903fad5bdf256cf857dee23ccca3caa6_prof);

    }

    // line 9
    public function block_frforum_body($context, array $blocks = array())
    {
        $__internal_14dbd0e4a559b5a958ff8df35eee729c962936ddc351c7097abc34ee85eca6a0 = $this->env->getExtension("native_profiler");
        $__internal_14dbd0e4a559b5a958ff8df35eee729c962936ddc351c7097abc34ee85eca6a0->enter($__internal_14dbd0e4a559b5a958ff8df35eee729c962936ddc351c7097abc34ee85eca6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frforum_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete a lower categorie"), "html", null, true);
        echo "</h2>

  <p>
   ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
        echo " \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["souscategorie"]) ? $context["souscategorie"] : $this->getContext($context, "souscategorie")), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_sous_categorie_delete", array("id" => $this->getAttribute((isset($context["souscategorie"]) ? $context["souscategorie"] : $this->getContext($context, "souscategorie")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_forum_sous_categorie_view", array("id" => $this->getAttribute((isset($context["souscategorie"]) ? $context["souscategorie"] : $this->getContext($context, "souscategorie")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
     ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back"), "html", null, true);
        echo "    </a>
    ";
        // line 23
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 25
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_14dbd0e4a559b5a958ff8df35eee729c962936ddc351c7097abc34ee85eca6a0->leave($__internal_14dbd0e4a559b5a958ff8df35eee729c962936ddc351c7097abc34ee85eca6a0_prof);

    }

    public function getTemplateName()
    {
        return "FrForumBundle:SousCategorie:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  90 => 23,  86 => 21,  81 => 19,  76 => 18,  68 => 14,  62 => 11,  59 => 10,  53 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/Fr/ForumBundle/Resources/views/SousCategorie/delete.html.twig #}*/
/* */
/* {% extends "FrForumBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*    {{ 'Delete a lower categorie'|trans }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frforum_body %}*/
/* */
/*   <h2>{{ 'Delete a lower categorie'|trans }}</h2>*/
/* */
/*   <p>*/
/*    {{ 'Delete'|trans }} "{{ souscategorie.title }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id de l'annonce dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('fr_forum_sous_categorie_delete', {'id': souscategorie.id}) }}" method="post">*/
/*     <a href="{{ path('fr_forum_sous_categorie_view', {'id': souscategorie.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*      {{ 'Back'|trans }}    </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
