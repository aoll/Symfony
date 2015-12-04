<?php

/* FrProjetBundle:Projet:profile.html.twig */
class __TwigTemplate_0922d037a089cbbcd1a00e9f5e69da9b25c923d4d383c369de900572aa334eb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrProjetBundle::layout.html.twig", "FrProjetBundle:Projet:profile.html.twig", 3);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo " Profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_frprojet_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Profile</h2>

  <div class=\"well\">
   ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("name"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "
  </div>
  
  <div class=\"well\">
    email: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "
  </div>
 
  <div class=\"well\">
    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_projet_set_email", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Set email"), "html", null, true);
        echo "
    </a>
  
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Set password"), "html", null, true);
        echo "</a>

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fr_projet_delete_user", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete profile"), "html", null, true);
        echo "</a>
  </div>


";
    }

    public function getTemplateName()
    {
        return "FrProjetBundle:Projet:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 33,  85 => 31,  80 => 29,  75 => 27,  69 => 24,  64 => 22,  57 => 18,  48 => 14,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 3,);
    }
}
/* {# src/fr/ProjetBundle/Resources/views/Advert/profile.html.twig #}*/
/* */
/* {% extends "FrProjetBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*  Profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frprojet_body %}*/
/* */
/*   <h2>Profile</h2>*/
/* */
/*   <div class="well">*/
/*    {{ 'name'|trans }}: {{ user.username }}*/
/*   </div>*/
/*   */
/*   <div class="well">*/
/*     email: {{ user.email }}*/
/*   </div>*/
/*  */
/*   <div class="well">*/
/*     <a href="{{ path('fr_projet_set_email', {'id' : user.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       {{ 'Set email'|trans }}*/
/*     </a>*/
/*   */
/*     <a href="{{ path('fos_user_change_password') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       {{ 'Set password'|trans }}</a>*/
/* */
/*     <a href="{{ path('fr_projet_delete_user', {'id' : user.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       {{ 'Delete profile'|trans }}</a>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
