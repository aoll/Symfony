<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_4c2b411f87f3dbef7f1396bcd0b0ee9d9cf487330046dc0d4defd603b3c0e0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrProjetBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'frprojet_body' => array($this, 'block_frprojet_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrProjetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bef055e11b98ad23fa612c3b5c2e0bd5e0cb5acbbf501ab7588ee476e148b61 = $this->env->getExtension("native_profiler");
        $__internal_6bef055e11b98ad23fa612c3b5c2e0bd5e0cb5acbbf501ab7588ee476e148b61->enter($__internal_6bef055e11b98ad23fa612c3b5c2e0bd5e0cb5acbbf501ab7588ee476e148b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bef055e11b98ad23fa612c3b5c2e0bd5e0cb5acbbf501ab7588ee476e148b61->leave($__internal_6bef055e11b98ad23fa612c3b5c2e0bd5e0cb5acbbf501ab7588ee476e148b61_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2333c8f8cdcb97cc9e01111fed48e3a5b17b408e8de51493355110a410717dce = $this->env->getExtension("native_profiler");
        $__internal_2333c8f8cdcb97cc9e01111fed48e3a5b17b408e8de51493355110a410717dce->enter($__internal_2333c8f8cdcb97cc9e01111fed48e3a5b17b408e8de51493355110a410717dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2333c8f8cdcb97cc9e01111fed48e3a5b17b408e8de51493355110a410717dce->leave($__internal_2333c8f8cdcb97cc9e01111fed48e3a5b17b408e8de51493355110a410717dce_prof);

    }

    // line 9
    public function block_frprojet_body($context, array $blocks = array())
    {
        $__internal_e214c1288cd14d43561ca81c6cc563499028f57df6661a45627985f13782ec1e = $this->env->getExtension("native_profiler");
        $__internal_e214c1288cd14d43561ca81c6cc563499028f57df6661a45627985f13782ec1e->enter($__internal_e214c1288cd14d43561ca81c6cc563499028f57df6661a45627985f13782ec1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frprojet_body"));

        // line 10
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Check your new email for validate your inscription", array(), "FOSUserBundle"), "html", null, true);
        echo " </p>
";
        
        $__internal_e214c1288cd14d43561ca81c6cc563499028f57df6661a45627985f13782ec1e->leave($__internal_e214c1288cd14d43561ca81c6cc563499028f57df6661a45627985f13782ec1e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends "FrProjetBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
/* {% block frprojet_body %}*/
/* <p>{{ 'Check your new email for validate your inscription'|trans }} </p>*/
/* {% endblock %}*/
/* */
