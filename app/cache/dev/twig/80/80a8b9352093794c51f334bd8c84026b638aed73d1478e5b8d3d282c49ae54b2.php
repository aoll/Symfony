<?php

/* FrForumBundle::layout.html.twig */
class __TwigTemplate_919b6ce9ce5ca5de5ea0fea2d0cee3a6c054912e86f869df303c5e88b44400e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "FrForumBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'frforum_body' => array($this, 'block_frforum_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c0527fed41d3cae9d455b35d74e57b86eeab0b80f78078aff457d5891ddab44 = $this->env->getExtension("native_profiler");
        $__internal_9c0527fed41d3cae9d455b35d74e57b86eeab0b80f78078aff457d5891ddab44->enter($__internal_9c0527fed41d3cae9d455b35d74e57b86eeab0b80f78078aff457d5891ddab44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrForumBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c0527fed41d3cae9d455b35d74e57b86eeab0b80f78078aff457d5891ddab44->leave($__internal_9c0527fed41d3cae9d455b35d74e57b86eeab0b80f78078aff457d5891ddab44_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3e21bf402f76f65354ffb2ef6a51a6cb4d0da369e1a2c12991268ef500e5d8e = $this->env->getExtension("native_profiler");
        $__internal_e3e21bf402f76f65354ffb2ef6a51a6cb4d0da369e1a2c12991268ef500e5d8e->enter($__internal_e3e21bf402f76f65354ffb2ef6a51a6cb4d0da369e1a2c12991268ef500e5d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  FrForum - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e3e21bf402f76f65354ffb2ef6a51a6cb4d0da369e1a2c12991268ef500e5d8e->leave($__internal_e3e21bf402f76f65354ffb2ef6a51a6cb4d0da369e1a2c12991268ef500e5d8e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b11ce852d49b16492d4a12c2483e82a93bc56ac64def61b6ca24261ce0e1ccec = $this->env->getExtension("native_profiler");
        $__internal_b11ce852d49b16492d4a12c2483e82a93bc56ac64def61b6ca24261ce0e1ccec->enter($__internal_b11ce852d49b16492d4a12c2483e82a93bc56ac64def61b6ca24261ce0e1ccec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  ";
        // line 13
        echo "
  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('frforum_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_b11ce852d49b16492d4a12c2483e82a93bc56ac64def61b6ca24261ce0e1ccec->leave($__internal_b11ce852d49b16492d4a12c2483e82a93bc56ac64def61b6ca24261ce0e1ccec_prof);

    }

    // line 17
    public function block_frforum_body($context, array $blocks = array())
    {
        $__internal_9898d2d42a66757fb0e6ad1f4927b614e736b139354f85b4b62dbbc9cf88f2ed = $this->env->getExtension("native_profiler");
        $__internal_9898d2d42a66757fb0e6ad1f4927b614e736b139354f85b4b62dbbc9cf88f2ed->enter($__internal_9898d2d42a66757fb0e6ad1f4927b614e736b139354f85b4b62dbbc9cf88f2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frforum_body"));

        // line 18
        echo "  ";
        
        $__internal_9898d2d42a66757fb0e6ad1f4927b614e736b139354f85b4b62dbbc9cf88f2ed->leave($__internal_9898d2d42a66757fb0e6ad1f4927b614e736b139354f85b4b62dbbc9cf88f2ed_prof);

    }

    public function getTemplateName()
    {
        return "FrForumBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  79 => 17,  71 => 19,  68 => 17,  63 => 13,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/FR/<FrForumBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   FrForum - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   {# <h1>Annonces</h1> #}*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block frforum_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
