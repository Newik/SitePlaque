<?php

/* base.html.twig */
class __TwigTemplate_c3102f4ee8ac0e4e728aed20dfc48174eec01d2ad3bf88737fe837b903f2c1ea extends Twig_Template
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
        $__internal_fb130b4ed1944cc26a9a7f2f97ec66375e437a41952a429b3422167f24d0e6b3 = $this->env->getExtension("native_profiler");
        $__internal_fb130b4ed1944cc26a9a7f2f97ec66375e437a41952a429b3422167f24d0e6b3->enter($__internal_fb130b4ed1944cc26a9a7f2f97ec66375e437a41952a429b3422167f24d0e6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fb130b4ed1944cc26a9a7f2f97ec66375e437a41952a429b3422167f24d0e6b3->leave($__internal_fb130b4ed1944cc26a9a7f2f97ec66375e437a41952a429b3422167f24d0e6b3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_726b69deb9c5fcfe4693e8bf5130aa9676834f6a0a2f54f5940836a83943c4bf = $this->env->getExtension("native_profiler");
        $__internal_726b69deb9c5fcfe4693e8bf5130aa9676834f6a0a2f54f5940836a83943c4bf->enter($__internal_726b69deb9c5fcfe4693e8bf5130aa9676834f6a0a2f54f5940836a83943c4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ERGOMARK";
        
        $__internal_726b69deb9c5fcfe4693e8bf5130aa9676834f6a0a2f54f5940836a83943c4bf->leave($__internal_726b69deb9c5fcfe4693e8bf5130aa9676834f6a0a2f54f5940836a83943c4bf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a271408bf77c960e8890fbc7c87c90a1f58c108e85ec504b1e7507f380b21c3c = $this->env->getExtension("native_profiler");
        $__internal_a271408bf77c960e8890fbc7c87c90a1f58c108e85ec504b1e7507f380b21c3c->enter($__internal_a271408bf77c960e8890fbc7c87c90a1f58c108e85ec504b1e7507f380b21c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">";
        
        $__internal_a271408bf77c960e8890fbc7c87c90a1f58c108e85ec504b1e7507f380b21c3c->leave($__internal_a271408bf77c960e8890fbc7c87c90a1f58c108e85ec504b1e7507f380b21c3c_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_d008fc754c35785bf21c2ae5a1794fa646b2fccad0c9b2bacf2cf7f179c81d5b = $this->env->getExtension("native_profiler");
        $__internal_d008fc754c35785bf21c2ae5a1794fa646b2fccad0c9b2bacf2cf7f179c81d5b->enter($__internal_d008fc754c35785bf21c2ae5a1794fa646b2fccad0c9b2bacf2cf7f179c81d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d008fc754c35785bf21c2ae5a1794fa646b2fccad0c9b2bacf2cf7f179c81d5b->leave($__internal_d008fc754c35785bf21c2ae5a1794fa646b2fccad0c9b2bacf2cf7f179c81d5b_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_993f3cd98b4c20ef9ee87934aed1e5a0bf302b9d22a81895a67fd8ae98bfcbf6 = $this->env->getExtension("native_profiler");
        $__internal_993f3cd98b4c20ef9ee87934aed1e5a0bf302b9d22a81895a67fd8ae98bfcbf6->enter($__internal_993f3cd98b4c20ef9ee87934aed1e5a0bf302b9d22a81895a67fd8ae98bfcbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_993f3cd98b4c20ef9ee87934aed1e5a0bf302b9d22a81895a67fd8ae98bfcbf6->leave($__internal_993f3cd98b4c20ef9ee87934aed1e5a0bf302b9d22a81895a67fd8ae98bfcbf6_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf184d89bf1d7c98cb396562dac8fdff3f29413bf207ef70c1efe4edcd9ef41a = $this->env->getExtension("native_profiler");
        $__internal_bf184d89bf1d7c98cb396562dac8fdff3f29413bf207ef70c1efe4edcd9ef41a->enter($__internal_bf184d89bf1d7c98cb396562dac8fdff3f29413bf207ef70c1efe4edcd9ef41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bf184d89bf1d7c98cb396562dac8fdff3f29413bf207ef70c1efe4edcd9ef41a->leave($__internal_bf184d89bf1d7c98cb396562dac8fdff3f29413bf207ef70c1efe4edcd9ef41a_prof);

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
