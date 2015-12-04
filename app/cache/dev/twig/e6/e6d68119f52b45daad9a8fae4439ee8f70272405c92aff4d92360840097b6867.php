<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4412e6ba27982dd2822d1d8fbf1e1c7621881b026491018df63251891342e663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76b6f28f5d5b0b892b143cd4e98c58b172ec15833cdde0b4b7a9ad35d8ba835c = $this->env->getExtension("native_profiler");
        $__internal_76b6f28f5d5b0b892b143cd4e98c58b172ec15833cdde0b4b7a9ad35d8ba835c->enter($__internal_76b6f28f5d5b0b892b143cd4e98c58b172ec15833cdde0b4b7a9ad35d8ba835c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76b6f28f5d5b0b892b143cd4e98c58b172ec15833cdde0b4b7a9ad35d8ba835c->leave($__internal_76b6f28f5d5b0b892b143cd4e98c58b172ec15833cdde0b4b7a9ad35d8ba835c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c9a332044bba789c3d0f3b11b3364468792ada4c9b9de22f18d75bb60009a92 = $this->env->getExtension("native_profiler");
        $__internal_1c9a332044bba789c3d0f3b11b3364468792ada4c9b9de22f18d75bb60009a92->enter($__internal_1c9a332044bba789c3d0f3b11b3364468792ada4c9b9de22f18d75bb60009a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1c9a332044bba789c3d0f3b11b3364468792ada4c9b9de22f18d75bb60009a92->leave($__internal_1c9a332044bba789c3d0f3b11b3364468792ada4c9b9de22f18d75bb60009a92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae5541924b2feca45daa544f903e036153767ff5a91670c21c4ab7cfd210f895 = $this->env->getExtension("native_profiler");
        $__internal_ae5541924b2feca45daa544f903e036153767ff5a91670c21c4ab7cfd210f895->enter($__internal_ae5541924b2feca45daa544f903e036153767ff5a91670c21c4ab7cfd210f895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ae5541924b2feca45daa544f903e036153767ff5a91670c21c4ab7cfd210f895->leave($__internal_ae5541924b2feca45daa544f903e036153767ff5a91670c21c4ab7cfd210f895_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_60eab07c4c9716fdf5c8d7496857e235c306c2b457e1342cde329533b7ac76e3 = $this->env->getExtension("native_profiler");
        $__internal_60eab07c4c9716fdf5c8d7496857e235c306c2b457e1342cde329533b7ac76e3->enter($__internal_60eab07c4c9716fdf5c8d7496857e235c306c2b457e1342cde329533b7ac76e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_60eab07c4c9716fdf5c8d7496857e235c306c2b457e1342cde329533b7ac76e3->leave($__internal_60eab07c4c9716fdf5c8d7496857e235c306c2b457e1342cde329533b7ac76e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
