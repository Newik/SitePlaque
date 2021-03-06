<?php

/* base.html.twig */
class __TwigTemplate_eb4aa9af28b81ec65e26053d84aabadbffdb431e9a8898cff75ff2df9b52b92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
    <body>
           <div class=\"row\">
                <div class=\"col-md-12\"><img src=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("image/haut2.png"), "html", null, true);
        echo " alt=\"Photo de montagne\" /></div>
            </div>
            ";
        // line 14
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "
                <ul class=\"nav nav-tabs nav-justified\">
                    <li role=\"presentation\"><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("accueil_platform");
            echo "\">Accueil</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("admin_listedevis");
            echo "\">Liste des Devis</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("admin_listeUser");
            echo "\">Liste des Utilisateurs </a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("admin_prix_list");
            echo "\">Changer les tarifs </a></li>
                </ul>

                ";
        } else {
            // line 25
            echo "            <ul class=\"nav nav-tabs nav-justified\">
                    <li role=\"presentation\"><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("accueil_platform");
            echo "\">Accueil</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("plaque_creation");
            echo "\">Création plaque</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("devis_platform");
            echo "\">Devis</a></li>
            </ul>
            ";
        }
        // line 32
        echo "            <div class=\"row\">
                <table style=\"width:100%\">
                    <tr>
                        <td><img src=";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("image/cg.png"), "html", null, true);
        echo " alt=\"cotegauche\" /></td>

                        <td valign=\"top\"></br>";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        echo "</td>

                        <td style= \"float : right\"><img src=";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("image/cd.png"), "html", null, true);
        echo " alt=\"cotedroit\" /></td>
                    </tr>
                </table>
            </div>

            <div class=\"row\">
                <div class=\"col-md-10\"><img src=";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("image/foot.png"), "html", null, true);
        echo " alt=\"Photo de montagne\"/></div>
            </div>





        <!-- Bootstrap -->

        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "


    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ERGOMARK";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 55,  173 => 54,  168 => 37,  160 => 6,  154 => 5,  145 => 56,  142 => 55,  140 => 54,  128 => 45,  119 => 39,  114 => 37,  109 => 35,  104 => 32,  98 => 29,  94 => 28,  88 => 27,  84 => 26,  81 => 25,  74 => 21,  70 => 20,  66 => 19,  60 => 18,  56 => 17,  52 => 15,  50 => 14,  45 => 12,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}ERGOMARK{% endblock %}</title>*/
/*         {% block stylesheets %} <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}">{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     </head>*/
/*     <body>*/
/*            <div class="row">*/
/*                 <div class="col-md-12"><img src={{ asset('image/haut2.png')}} alt="Photo de montagne" /></div>*/
/*             </div>*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*                 <ul class="nav nav-tabs nav-justified">*/
/*                     <li role="presentation"><a href="{{ path('accueil_platform') }}">Accueil</a></li>*/
/*                     <li role="presentation"><a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*                     <li role="presentation"><a href="{{ path('admin_listedevis') }}">Liste des Devis</a></li>*/
/*                     <li role="presentation"><a href="{{ path('admin_listeUser') }}">Liste des Utilisateurs </a></li>*/
/*                     <li role="presentation"><a href="{{ path('admin_prix_list') }}">Changer les tarifs </a></li>*/
/*                 </ul>*/
/* */
/*                 {% else %}*/
/*             <ul class="nav nav-tabs nav-justified">*/
/*                     <li role="presentation"><a href="{{ path('accueil_platform') }}">Accueil</a></li>*/
/*                     <li role="presentation"><a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*                     <li role="presentation"><a href="{{ path('plaque_creation') }}">Création plaque</a></li>*/
/*                     <li role="presentation"><a href="{{ path('devis_platform') }}">Devis</a></li>*/
/*             </ul>*/
/*             {% endif %}*/
/*             <div class="row">*/
/*                 <table style="width:100%">*/
/*                     <tr>*/
/*                         <td><img src={{ asset('image/cg.png')}} alt="cotegauche" /></td>*/
/* */
/*                         <td valign="top"></br>{% block content %}{% endblock %}</td>*/
/* */
/*                         <td style= "float : right"><img src={{ asset('image/cd.png')}} alt="cotedroit" /></td>*/
/*                     </tr>*/
/*                 </table>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col-md-10"><img src={{ asset('image/foot.png')}} alt="Photo de montagne"/></div>*/
/*             </div>*/
/* */
/* */
/* */
/* */
/* */
/*         <!-- Bootstrap -->*/
/* */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/* */
/* */
/* */
/*     </body>*/
/* </html>*/
/* */
