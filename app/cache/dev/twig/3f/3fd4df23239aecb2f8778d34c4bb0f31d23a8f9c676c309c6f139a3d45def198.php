<?php

/* ::base.html.twig */
class __TwigTemplate_fa4dc236cb9ec3049b37718e24fc402c6e2f9ed3ee78b46f4bd4d7b2933cb85d extends Twig_Template
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
        $__internal_f0e898b918306f4bf11f9b606147ee67beefe0df3d5927bed6d19249d6e1728a = $this->env->getExtension("native_profiler");
        $__internal_f0e898b918306f4bf11f9b606147ee67beefe0df3d5927bed6d19249d6e1728a->enter($__internal_f0e898b918306f4bf11f9b606147ee67beefe0df3d5927bed6d19249d6e1728a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            echo "\">Liste de Devis</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("admin_listeUser");
            echo "\">Liste des Utilisateurs </a></li>
                </ul>

                ";
        } else {
            // line 24
            echo "            <ul class=\"nav nav-tabs nav-justified\">
                    <li role=\"presentation\"><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("accueil_platform");
            echo "\">Accueil</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("plaque_creation");
            echo "\">Création plaque</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("devis_platform");
            echo "\">Devis</a></li>
            </ul>
            ";
        }
        // line 31
        echo "            <div class=\"row\">
                <table style=\"width:100%\">
                    <tr>
                        <td><img src=";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("image/cg.png"), "html", null, true);
        echo " alt=\"cotegauche\" /></td>

                        <td valign=\"top\"></br>";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        echo "</td>

                        <td style= \"float : right\"><img src=";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("image/cd.png"), "html", null, true);
        echo " alt=\"cotedroit\" /></td>
                    </tr>
                </table>
            </div>

            <div class=\"row\">
                <div class=\"col-md-10\"><img src=";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("image/foot.png"), "html", null, true);
        echo " alt=\"Photo de montagne\"/></div>
            </div>





        <!-- Bootstrap -->

        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "


    </body>
</html>
";
        
        $__internal_f0e898b918306f4bf11f9b606147ee67beefe0df3d5927bed6d19249d6e1728a->leave($__internal_f0e898b918306f4bf11f9b606147ee67beefe0df3d5927bed6d19249d6e1728a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_679b90a55468b14582be64ab3da7f01a8c5db13f5f5e8bc00492d4656e16c01b = $this->env->getExtension("native_profiler");
        $__internal_679b90a55468b14582be64ab3da7f01a8c5db13f5f5e8bc00492d4656e16c01b->enter($__internal_679b90a55468b14582be64ab3da7f01a8c5db13f5f5e8bc00492d4656e16c01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ERGOMARK";
        
        $__internal_679b90a55468b14582be64ab3da7f01a8c5db13f5f5e8bc00492d4656e16c01b->leave($__internal_679b90a55468b14582be64ab3da7f01a8c5db13f5f5e8bc00492d4656e16c01b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bb69541d9ed6cd36838bfbca3e2412133b0265e5f3c28ef8524112c55949248f = $this->env->getExtension("native_profiler");
        $__internal_bb69541d9ed6cd36838bfbca3e2412133b0265e5f3c28ef8524112c55949248f->enter($__internal_bb69541d9ed6cd36838bfbca3e2412133b0265e5f3c28ef8524112c55949248f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">";
        
        $__internal_bb69541d9ed6cd36838bfbca3e2412133b0265e5f3c28ef8524112c55949248f->leave($__internal_bb69541d9ed6cd36838bfbca3e2412133b0265e5f3c28ef8524112c55949248f_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_33a8c6a6f9c9f99dd041048e8e84fe76eb2f4cc350d1f8db1d2687f738e3f505 = $this->env->getExtension("native_profiler");
        $__internal_33a8c6a6f9c9f99dd041048e8e84fe76eb2f4cc350d1f8db1d2687f738e3f505->enter($__internal_33a8c6a6f9c9f99dd041048e8e84fe76eb2f4cc350d1f8db1d2687f738e3f505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_33a8c6a6f9c9f99dd041048e8e84fe76eb2f4cc350d1f8db1d2687f738e3f505->leave($__internal_33a8c6a6f9c9f99dd041048e8e84fe76eb2f4cc350d1f8db1d2687f738e3f505_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f3e4ddaa8c151fca7a2559d3c5230e1f5537ea83c576672f6efc7c40db02947 = $this->env->getExtension("native_profiler");
        $__internal_7f3e4ddaa8c151fca7a2559d3c5230e1f5537ea83c576672f6efc7c40db02947->enter($__internal_7f3e4ddaa8c151fca7a2559d3c5230e1f5537ea83c576672f6efc7c40db02947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f3e4ddaa8c151fca7a2559d3c5230e1f5537ea83c576672f6efc7c40db02947->leave($__internal_7f3e4ddaa8c151fca7a2559d3c5230e1f5537ea83c576672f6efc7c40db02947_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_494731f8ff5ed4d82ebb0b4b9b16c29672ebcf3e0f22a12b9ef03d5cbe4689a3 = $this->env->getExtension("native_profiler");
        $__internal_494731f8ff5ed4d82ebb0b4b9b16c29672ebcf3e0f22a12b9ef03d5cbe4689a3->enter($__internal_494731f8ff5ed4d82ebb0b4b9b16c29672ebcf3e0f22a12b9ef03d5cbe4689a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_494731f8ff5ed4d82ebb0b4b9b16c29672ebcf3e0f22a12b9ef03d5cbe4689a3->leave($__internal_494731f8ff5ed4d82ebb0b4b9b16c29672ebcf3e0f22a12b9ef03d5cbe4689a3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 54,  193 => 53,  182 => 36,  168 => 6,  156 => 5,  144 => 55,  141 => 54,  139 => 53,  127 => 44,  118 => 38,  113 => 36,  108 => 34,  103 => 31,  97 => 28,  93 => 27,  87 => 26,  83 => 25,  80 => 24,  73 => 20,  69 => 19,  63 => 18,  59 => 17,  55 => 15,  53 => 14,  48 => 12,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
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
/*                     <li role="presentation"><a href="{{ path('admin_listedevis') }}">Liste de Devis</a></li>*/
/*                     <li role="presentation"><a href="{{ path('admin_listeUser') }}">Liste des Utilisateurs </a></li>*/
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
