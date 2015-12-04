<?php

/* FrForumBundle:Threads:form.html.twig */
class __TwigTemplate_4e32f8c9c404be24c0b3c9528149bc77bdd34912e674514f4a9de0cfb8efc688 extends Twig_Template
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
        $__internal_4ce692584c48dc6eb9b5d11150f05435dbb83eab5a9d547abfca741f42fb63dc = $this->env->getExtension("native_profiler");
        $__internal_4ce692584c48dc6eb9b5d11150f05435dbb83eab5a9d547abfca741f42fb63dc->enter($__internal_4ce692584c48dc6eb9b5d11150f05435dbb83eab5a9d547abfca741f42fb63dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrForumBundle:Threads:form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "

<div class=\"well\">
  ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 12
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group\">
     

";
        // line 18
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label" => "Title"));
        echo "

      ";
        // line 21
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

      <div class=\"col-sm-4\">
        ";
        // line 25
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
     ";
        // line 29
        echo "    <div class=\"form-group\">
      ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Content"));
        echo "
      ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>


  ";
        // line 39
        echo "  ";
        // line 40
        echo "

";
        // line 43
        echo "
  ";
        // line 45
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 50
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  
  ";
        // line 53
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_4ce692584c48dc6eb9b5d11150f05435dbb83eab5a9d547abfca741f42fb63dc->leave($__internal_4ce692584c48dc6eb9b5d11150f05435dbb83eab5a9d547abfca741f42fb63dc_prof);

    }

    public function getTemplateName()
    {
        return "FrForumBundle:Threads:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 53,  99 => 50,  93 => 45,  90 => 43,  86 => 40,  84 => 39,  76 => 33,  71 => 31,  67 => 30,  64 => 29,  57 => 25,  50 => 21,  44 => 18,  35 => 12,  30 => 9,  25 => 6,  22 => 2,);
    }
}
/* {# src/Fr/ForumBundle/Resources/views/Threads/form.html.twig #}*/
/* */
/* {# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,*/
/*    elles, hériteront probablement du layout. Je dis « probablement » car,*/
/*    ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}*/
/* */
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="form-group">*/
/*      */
/* */
/* {#  v2     sans obligation des 3 carateres #}*/
/*       {{ form_label(form.title, "Title") }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.title) }}*/
/* */
/*       <div class="col-sm-4">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/*      {# Idem pour un autre champ. #}*/
/*     <div class="form-group">*/
/*       {{ form_label(form.content, "Content", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.title) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*   {# Génération du label + error + widget pour un champ #}*/
/*   {#{{ form_row(form.date) }}#}*/
/* */
/* */
/* {#  {{ form_row(form.published) }}#}*/
/* */
/*   {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*   {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/*   {# Génération automatique des champs pas encore écrits.*/
/*      Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*      et tous les champs cachés (type « hidden »). #}*/
/*   {{ form_rest(form) }}*/
/*   */
/*   {# Fermeture de la balise <form> du formulaire HTML #}*/
/*   {{ form_end(form) }}*/
/* </div>*/
/* */
