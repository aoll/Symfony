<?php

/* ::layout.html.twig */
class __TwigTemplate_ec4f3f6910f5b6715c8741c9f126765a6f9fd0133b28417b78abbf77135d4f5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8e2dc606d08fc8d3a6c8ebc3341956f2dbc771287a69a5bc9b6c2d18a4203cc = $this->env->getExtension("native_profiler");
        $__internal_f8e2dc606d08fc8d3a6c8ebc3341956f2dbc771287a69a5bc9b6c2d18a4203cc->enter($__internal_f8e2dc606d08fc8d3a6c8ebc3341956f2dbc771287a69a5bc9b6c2d18a4203cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo " 
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Projet</h1>
<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fr_projet_setLocale", array("language" => "fr"));
        echo "\">FR</a>
<a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fr_projet_setLocale", array("language" => "en"));
        echo "\">EN</a>
<p><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fr_log_log_back");
        echo "\">Log Back</a></p> 
home
   </div>

    <section class=\"row\" margin: 80px 0 180px; > 
    <div class=\"container\" margin: 80px 0 180px; >
       <ul class=\"nav nav-pills nav-stacked\">
 
          <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fr_projet_home");
        echo "\">Home</a>
\t  ";
        // line 41
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") == false)) {
            // line 42
            echo "\t  ";
            echo " 
\t  <a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">login</a> 
\t  <a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">register</a>
\t  ";
        }
        // line 46
        echo "     ";
        // line 47
        echo "
          ";
        // line 48
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo "     
\t  <a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("fr_projet_admin");
            echo "\">admin</a>
\t  <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("fr_tickets_spool");
            echo "\">spool</a>
\t   <a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fr_log_view_all");
            echo "\">log</a>
                 ";
        }
        // line 52
        echo " 

          ";
        // line 54
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "     
\t  <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("fr_forum_home");
            echo "\">forum</a>
\t  <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("fr_tickets_homepage");
            echo "\">Tickets</a>
\t  <a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("fr_projet_profile");
            echo "\">profile</a>
\t  <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("fr_projet_logout");
            echo "\">logout</a>
";
            // line 60
            echo "          ";
        }
        echo " 
    </div>
  </section> 

   ";
        // line 65
        echo "       ";
        // line 66
        echo "       ";
        // line 67
        echo "         ";
        // line 68
        echo "         ";
        // line 69
        echo "        ";
        // line 70
        echo " ";
        // line 71
        echo "\t 
   ";
        // line 73
        echo "
       ";
        // line 75
        echo " 
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    
    </footer>
  </div>

  ";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "
</body>
</html>
";
        
        $__internal_f8e2dc606d08fc8d3a6c8ebc3341956f2dbc771287a69a5bc9b6c2d18a4203cc->leave($__internal_f8e2dc606d08fc8d3a6c8ebc3341956f2dbc771287a69a5bc9b6c2d18a4203cc_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e911d8bc49ee41c65f152d3be3ee4897ad77845b2b191090fef82bb7ca480cb = $this->env->getExtension("native_profiler");
        $__internal_3e911d8bc49ee41c65f152d3be3ee4897ad77845b2b191090fef82bb7ca480cb->enter($__internal_3e911d8bc49ee41c65f152d3be3ee4897ad77845b2b191090fef82bb7ca480cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fr projet";
        
        $__internal_3e911d8bc49ee41c65f152d3be3ee4897ad77845b2b191090fef82bb7ca480cb->leave($__internal_3e911d8bc49ee41c65f152d3be3ee4897ad77845b2b191090fef82bb7ca480cb_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cdc5509252a2794db4ccbec61d19fc42d2cc34738a8851b5af8acc72b48ea11a = $this->env->getExtension("native_profiler");
        $__internal_cdc5509252a2794db4ccbec61d19fc42d2cc34738a8851b5af8acc72b48ea11a->enter($__internal_cdc5509252a2794db4ccbec61d19fc42d2cc34738a8851b5af8acc72b48ea11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\"> 
  ";
        // line 22
        echo "   
  ";
        
        $__internal_cdc5509252a2794db4ccbec61d19fc42d2cc34738a8851b5af8acc72b48ea11a->leave($__internal_cdc5509252a2794db4ccbec61d19fc42d2cc34738a8851b5af8acc72b48ea11a_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_79b7438412a66ba73a8b71f60edc422c5dcacef8a952f3be3543926c96ed716b = $this->env->getExtension("native_profiler");
        $__internal_79b7438412a66ba73a8b71f60edc422c5dcacef8a952f3be3543926c96ed716b->enter($__internal_79b7438412a66ba73a8b71f60edc422c5dcacef8a952f3be3543926c96ed716b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "        ";
        
        $__internal_79b7438412a66ba73a8b71f60edc422c5dcacef8a952f3be3543926c96ed716b->leave($__internal_79b7438412a66ba73a8b71f60edc422c5dcacef8a952f3be3543926c96ed716b_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_650bd3299fe15bba1ce78184e743970faef635d20834939ff89cf41508de9907 = $this->env->getExtension("native_profiler");
        $__internal_650bd3299fe15bba1ce78184e743970faef635d20834939ff89cf41508de9907->enter($__internal_650bd3299fe15bba1ce78184e743970faef635d20834939ff89cf41508de9907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        // line 92
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_650bd3299fe15bba1ce78184e743970faef635d20834939ff89cf41508de9907->leave($__internal_650bd3299fe15bba1ce78184e743970faef635d20834939ff89cf41508de9907_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 92,  244 => 91,  238 => 90,  231 => 78,  225 => 77,  217 => 22,  214 => 13,  212 => 12,  206 => 11,  194 => 9,  184 => 95,  182 => 90,  174 => 85,  166 => 79,  164 => 77,  160 => 75,  157 => 73,  154 => 71,  152 => 70,  150 => 69,  148 => 68,  146 => 67,  144 => 66,  142 => 65,  134 => 60,  130 => 58,  126 => 57,  122 => 56,  118 => 55,  114 => 54,  110 => 52,  105 => 51,  101 => 50,  97 => 49,  93 => 48,  90 => 47,  88 => 46,  83 => 44,  79 => 43,  75 => 42,  73 => 41,  69 => 40,  58 => 32,  54 => 31,  50 => 30,  42 => 24,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/*  */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}Fr projet{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> */
/*   {#On charge le css depuis le vendor #}*/
/* {#  {% stylesheets*/
/*   '%kernel.root_dir%/../vendor/twitter/bootstrap/less/bootstrap.less'*/
/*   '%kernel.root_dir%/../vendor/twitter/bootstrap/less/responsive.less'*/
/*   'bundles/acmetwig/css/acme-bootstrap.css'*/
/*   filter='lessphp,cssrewrite' */
/*   %} */
/*   <link rel="stylesheet" href="{{ asset_url }}" />*/
/*   {% endstylesheets %} #}   */
/*   {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Projet</h1>*/
/* <a href="{{ path('fr_projet_setLocale', {'language': 'fr'}) }}">FR</a>*/
/* <a href="{{ path('fr_projet_setLocale', {'language': 'en'}) }}">EN</a>*/
/* <p><a href="{{ path('fr_log_log_back') }}">Log Back</a></p> */
/* home*/
/*    </div>*/
/* */
/*     <section class="row" margin: 80px 0 180px; > */
/*     <div class="container" margin: 80px 0 180px; >*/
/*        <ul class="nav nav-pills nav-stacked">*/
/*  */
/*           <a href="{{ path('fr_projet_home') }}">Home</a>*/
/* 	  {% if is_granted('IS_AUTHENTICATED_REMEMBERED') == false  %}*/
/* 	  {#<a href="{{ path('fr_projet_login') }}">login</a>#} */
/* 	  <a href="{{ path('fos_user_security_login') }}">login</a> */
/* 	  <a href="{{ path('fos_user_registration_register') }}">register</a>*/
/* 	  {% endif %}*/
/*      {# on affiche le lien :ajouter une annonce que si il a les droits  #}*/
/* */
/*           {% if is_granted('ROLE_ADMIN') %}     */
/* 	  <a href="{{ path('fr_projet_admin') }}">admin</a>*/
/* 	  <a href="{{ path('fr_tickets_spool') }}">spool</a>*/
/* 	   <a href="{{ path('fr_log_view_all') }}">log</a>*/
/*                  {% endif %} */
/* */
/*           {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}     */
/* 	  <a href="{{ path('fr_forum_home') }}">forum</a>*/
/* 	  <a href="{{ path('fr_tickets_homepage') }}">Tickets</a>*/
/* 	  <a href="{{ path('fr_projet_profile') }}">profile</a>*/
/* 	  <a href="{{ path('fr_projet_logout') }}">logout</a>*/
/* {#	  <a href="{{ path('fos_user_security_logout') }}">logout</a> #}*/
/*           {% endif %} */
/*     </div>*/
/*   </section> */
/* */
/*    {#   <div id="menu" class="col-md-3"> #}*/
/*        {# <h4>Dernières annonces</h4>#}*/
/*        {# <ul class="nav nav-pills nav-stacked">#}*/
/*          {# on affiche le lien :ajouter une annonce que si il a les droits  #}*/
/*          {# {% if is_granted('ROLE_AUTEUR') %}#}*/
/*         {#  <li><a href="{{ path('bi_biodanza_add') }}">Ajouter une annonce</a></li> #}*/
/*  {#           {% endif %}#}*/
/* 	 */
/*    {# </div> #}*/
/* */
/*        {# {{ render(controller("BIBiodanzaBundle:Advert:menu", {'limit': 3})) }} #}*/
/*  */
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     */
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
