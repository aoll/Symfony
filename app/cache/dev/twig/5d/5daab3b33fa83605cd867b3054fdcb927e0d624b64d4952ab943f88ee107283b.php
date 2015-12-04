<?php

/* email/register_check.email.twig */
class __TwigTemplate_9eb19e60667a8c6ee1371a9015215b885abc3f804349eb7164626185596a1506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_040a9f372dde14bbff0483b454056b22bd8ba74259814ec048708a56f35fef61 = $this->env->getExtension("native_profiler");
        $__internal_040a9f372dde14bbff0483b454056b22bd8ba74259814ec048708a56f35fef61->enter($__internal_040a9f372dde14bbff0483b454056b22bd8ba74259814ec048708a56f35fef61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/register_check.email.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('body_html', $context, $blocks);
        // line 23
        echo " ";
        
        $__internal_040a9f372dde14bbff0483b454056b22bd8ba74259814ec048708a56f35fef61->leave($__internal_040a9f372dde14bbff0483b454056b22bd8ba74259814ec048708a56f35fef61_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_516b3df862d90e3986e00b5e8c5bebecc59a1923eebf7000f4ce452457a07129 = $this->env->getExtension("native_profiler");
        $__internal_516b3df862d90e3986e00b5e8c5bebecc59a1923eebf7000f4ce452457a07129->enter($__internal_516b3df862d90e3986e00b5e8c5bebecc59a1923eebf7000f4ce452457a07129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Validate your account";
        
        $__internal_516b3df862d90e3986e00b5e8c5bebecc59a1923eebf7000f4ce452457a07129->leave($__internal_516b3df862d90e3986e00b5e8c5bebecc59a1923eebf7000f4ce452457a07129_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d97e0db7545b143ac9c9ada089cf8da85ae0f8a4397c3bd82b510374a8b41a32 = $this->env->getExtension("native_profiler");
        $__internal_d97e0db7545b143ac9c9ada089cf8da85ae0f8a4397c3bd82b510374a8b41a32->enter($__internal_d97e0db7545b143ac9c9ada089cf8da85ae0f8a4397c3bd82b510374a8b41a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 5
        echo "Hello ";
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array());
        echo " !

You can confirm your register by accessing ";
        // line 7
        echo (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"));
        echo "

Greetings,
:D :D :D
";
        
        $__internal_d97e0db7545b143ac9c9ada089cf8da85ae0f8a4397c3bd82b510374a8b41a32->leave($__internal_d97e0db7545b143ac9c9ada089cf8da85ae0f8a4397c3bd82b510374a8b41a32_prof);

    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ef72bd8a9763d1ab133821cc9b363d3371e073114cc63ae3ff01fee4c9643ec1 = $this->env->getExtension("native_profiler");
        $__internal_ef72bd8a9763d1ab133821cc9b363d3371e073114cc63ae3ff01fee4c9643ec1->enter($__internal_ef72bd8a9763d1ab133821cc9b363d3371e073114cc63ae3ff01fee4c9643ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 20
        echo "youhou

";
        
        $__internal_ef72bd8a9763d1ab133821cc9b363d3371e073114cc63ae3ff01fee4c9643ec1->leave($__internal_ef72bd8a9763d1ab133821cc9b363d3371e073114cc63ae3ff01fee4c9643ec1_prof);

    }

    public function getTemplateName()
    {
        return "email/register_check.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  80 => 14,  68 => 7,  62 => 5,  56 => 3,  44 => 1,  37 => 23,  35 => 14,  32 => 13,  30 => 3,  27 => 2,  25 => 1,);
    }
}
/* {% block subject %}Validate your account{% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* Hello {{ user.username }} !*/
/* */
/* You can confirm your register by accessing {{ confirmationUrl }}*/
/* */
/* Greetings,*/
/* :D :D :D*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_html %}*/
/* {#*/
/*     You can of course render the html directly here.*/
/*     Including a template as done here allows keeping things DRY by using*/
/*     the template inheritance in it*/
/* #}*/
/* youhou*/
/* */
/* {#{% include 'email/register_check.html.twig' %}#}*/
/* {% endblock %} */
