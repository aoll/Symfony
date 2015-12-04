<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ce3c73357e923501745e230788fd1282ee74097688ad6820efadf9c95ab4932d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'frprojet_body' => array($this, 'block_frprojet_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_065b934369905a4f236b07701f2a2851624d909d1e4a18a5607def47f67b2e9f = $this->env->getExtension("native_profiler");
        $__internal_065b934369905a4f236b07701f2a2851624d909d1e4a18a5607def47f67b2e9f->enter($__internal_065b934369905a4f236b07701f2a2851624d909d1e4a18a5607def47f67b2e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('frprojet_body', $context, $blocks);
        // line 10
        echo "

";
        
        $__internal_065b934369905a4f236b07701f2a2851624d909d1e4a18a5607def47f67b2e9f->leave($__internal_065b934369905a4f236b07701f2a2851624d909d1e4a18a5607def47f67b2e9f_prof);

    }

    // line 3
    public function block_frprojet_body($context, array $blocks = array())
    {
        $__internal_0cb64c8caf8bdb1d639468657307454ad4c588fe82edf75e0a53e7ef3ec52935 = $this->env->getExtension("native_profiler");
        $__internal_0cb64c8caf8bdb1d639468657307454ad4c588fe82edf75e0a53e7ef3ec52935->enter($__internal_0cb64c8caf8bdb1d639468657307454ad4c588fe82edf75e0a53e7ef3ec52935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frprojet_body"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password is set", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fr_projet_profile");
        echo "\"class=\"btn btn-default\">
<i class=\"glyphicon glyphicon-edit\"></i>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("back to the profile", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>

";
        
        $__internal_0cb64c8caf8bdb1d639468657307454ad4c588fe82edf75e0a53e7ef3ec52935->leave($__internal_0cb64c8caf8bdb1d639468657307454ad4c588fe82edf75e0a53e7ef3ec52935_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  48 => 5,  43 => 4,  37 => 3,  28 => 10,  26 => 3,  23 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block frprojet_body %}*/
/* <p>{{ 'Password is set'|trans }}</p>*/
/* <a href="{{ path('fr_projet_profile') }}"class="btn btn-default">*/
/* <i class="glyphicon glyphicon-edit"></i>*/
/* {{ 'back to the profile'|trans }}</a>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
