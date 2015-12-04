<?php

/* FrProjetBundle:Projet:log_view_all.html.twig */
class __TwigTemplate_cda52d904d4b0295242126ac03c3bc3871cd828c1953dafa84c6cad90493d21e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FrProjetBundle::layout.html.twig", "FrProjetBundle:Projet:log_view_all.html.twig", 3);
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
        $__internal_7b9eb7670a62e6e5bcb4092fd19b7f649ec779440c2f822436db677416d24e43 = $this->env->getExtension("native_profiler");
        $__internal_7b9eb7670a62e6e5bcb4092fd19b7f649ec779440c2f822436db677416d24e43->enter($__internal_7b9eb7670a62e6e5bcb4092fd19b7f649ec779440c2f822436db677416d24e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrProjetBundle:Projet:log_view_all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b9eb7670a62e6e5bcb4092fd19b7f649ec779440c2f822436db677416d24e43->leave($__internal_7b9eb7670a62e6e5bcb4092fd19b7f649ec779440c2f822436db677416d24e43_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0faa5bdb6febfa231013aa3b8040605b2ea9f070559d00a7d50490f5f4b0395 = $this->env->getExtension("native_profiler");
        $__internal_f0faa5bdb6febfa231013aa3b8040605b2ea9f070559d00a7d50490f5f4b0395->enter($__internal_f0faa5bdb6febfa231013aa3b8040605b2ea9f070559d00a7d50490f5f4b0395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Log - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f0faa5bdb6febfa231013aa3b8040605b2ea9f070559d00a7d50490f5f4b0395->leave($__internal_f0faa5bdb6febfa231013aa3b8040605b2ea9f070559d00a7d50490f5f4b0395_prof);

    }

    // line 9
    public function block_frprojet_body($context, array $blocks = array())
    {
        $__internal_7db3463c8007fdd3beb4cf6ca1b450ffa5609b559d40684202dc6cca43d682bf = $this->env->getExtension("native_profiler");
        $__internal_7db3463c8007fdd3beb4cf6ca1b450ffa5609b559d40684202dc6cca43d682bf->enter($__internal_7db3463c8007fdd3beb4cf6ca1b450ffa5609b559d40684202dc6cca43d682bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frprojet_body"));

        // line 10
        echo "
  <h2>Log</h2>

  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["log"]);
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 14
            echo "<p>  <div class=\"well\">
   ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("name"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "username", array()), "html", null, true);
            echo "
   action: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "action", array()), "html", null, true);
            echo "
  url: ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "url", array()), "html", null, true);
            echo "
   date: ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "date", array())), "html", null, true);
            echo "
   </div>
</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "

";
        
        $__internal_7db3463c8007fdd3beb4cf6ca1b450ffa5609b559d40684202dc6cca43d682bf->leave($__internal_7db3463c8007fdd3beb4cf6ca1b450ffa5609b559d40684202dc6cca43d682bf_prof);

    }

    public function getTemplateName()
    {
        return "FrProjetBundle:Projet:log_view_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  83 => 18,  79 => 17,  75 => 16,  69 => 15,  66 => 14,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/Fr/ProjetBundle/Resources/views/Projet/log_view_all.html.twig #}*/
/* */
/* {% extends "FrProjetBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Log - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block frprojet_body %}*/
/* */
/*   <h2>Log</h2>*/
/* */
/*   {% for log in log %}*/
/* <p>  <div class="well">*/
/*    {{ 'name'|trans }}: {{ log.username }}*/
/*    action: {{ log.action }}*/
/*   url: {{ log.url }}*/
/*    date: {{ log.date|date() }}*/
/*    </div>*/
/* </p>*/
/*     {% endfor %}*/
/* */
/* */
/* {% endblock %}*/
/* */
