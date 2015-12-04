<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_6b247f58cbd19b3070f181890418bc898e0918c2d66fcd4d502a618b907b4e13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("FrProjetBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrProjetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcf6c4dd89f2aa16f63bbe003150c2832f4163300dd4e767428de24f692da4e9 = $this->env->getExtension("native_profiler");
        $__internal_dcf6c4dd89f2aa16f63bbe003150c2832f4163300dd4e767428de24f692da4e9->enter($__internal_dcf6c4dd89f2aa16f63bbe003150c2832f4163300dd4e767428de24f692da4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcf6c4dd89f2aa16f63bbe003150c2832f4163300dd4e767428de24f692da4e9->leave($__internal_dcf6c4dd89f2aa16f63bbe003150c2832f4163300dd4e767428de24f692da4e9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a50bb716e338b657a230e0789706192c6c2e6fc1772414a883a321dba5aff8e7 = $this->env->getExtension("native_profiler");
        $__internal_a50bb716e338b657a230e0789706192c6c2e6fc1772414a883a321dba5aff8e7->enter($__internal_a50bb716e338b657a230e0789706192c6c2e6fc1772414a883a321dba5aff8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 11
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
";
            // line 13
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
  ";
        // line 17
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_a50bb716e338b657a230e0789706192c6c2e6fc1772414a883a321dba5aff8e7->leave($__internal_a50bb716e338b657a230e0789706192c6c2e6fc1772414a883a321dba5aff8e7_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7123994e0f5e26150f2e995ba4eee308a46d81416dc36b7fbf18d55aac15c9f9 = $this->env->getExtension("native_profiler");
        $__internal_7123994e0f5e26150f2e995ba4eee308a46d81416dc36b7fbf18d55aac15c9f9->enter($__internal_7123994e0f5e26150f2e995ba4eee308a46d81416dc36b7fbf18d55aac15c9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "  ";
        
        $__internal_7123994e0f5e26150f2e995ba4eee308a46d81416dc36b7fbf18d55aac15c9f9->leave($__internal_7123994e0f5e26150f2e995ba4eee308a46d81416dc36b7fbf18d55aac15c9f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  75 => 17,  67 => 19,  64 => 17,  61 => 15,  54 => 13,  49 => 11,  44 => 10,  41 => 8,  35 => 7,  11 => 4,);
    }
}
/* {# src/OC/UserBundle/Resources/views/layout.html.twig #}*/
/* */
/* {# On étend notre layout #}*/
/* {% extends "FrProjetBundle::layout.html.twig" %}*/
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/* */
/*   {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/*   {% for key, message in app.session.flashbag.all() %}*/
/*     <div class="alert alert-{{ key }}">*/
/* {#      {{ message|trans({}, 'FOSUserBundle') }}#}*/
/*     </div>*/
/*   {% endfor %}*/
/* */
/*   {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
