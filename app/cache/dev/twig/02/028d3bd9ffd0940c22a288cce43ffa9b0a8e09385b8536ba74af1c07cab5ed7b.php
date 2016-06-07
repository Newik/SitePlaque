<?php

/* @SitePlaque/Accueil/index.html.twig */
class __TwigTemplate_17c4038cab308fd113d0f00921f3a72ea1051f4212c00c29883b7eb085b65a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Accueil/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8daf0658735ca3b486a5b7581c44812d2692b2f4e8740e447fbc4e0d64d3fa55 = $this->env->getExtension("native_profiler");
        $__internal_8daf0658735ca3b486a5b7581c44812d2692b2f4e8740e447fbc4e0d64d3fa55->enter($__internal_8daf0658735ca3b486a5b7581c44812d2692b2f4e8740e447fbc4e0d64d3fa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitePlaque/Accueil/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8daf0658735ca3b486a5b7581c44812d2692b2f4e8740e447fbc4e0d64d3fa55->leave($__internal_8daf0658735ca3b486a5b7581c44812d2692b2f4e8740e447fbc4e0d64d3fa55_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_35d6f105bf359df0b44b20874d6995c00439d127e99cc55e09e88af2ea7dcc29 = $this->env->getExtension("native_profiler");
        $__internal_35d6f105bf359df0b44b20874d6995c00439d127e99cc55e09e88af2ea7dcc29->enter($__internal_35d6f105bf359df0b44b20874d6995c00439d127e99cc55e09e88af2ea7dcc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    </br>
    <h1>Bienvenue sur ErgoMark</h1>

    ";
        // line 7
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "
              Vous êtes connecté en tant que ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
              </br>
              </br>
                   <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("plaque_platform");
            echo "\">Personnalisez vos plaques</a>
              </br>
              </br>
                  <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("devis_platform");
            echo "\">Visualisez vos devis</a>
               </br>
               </br>
                <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
            echo "\">Réintialiser le mot de passe</a>
                </br>
                </br>
                <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Changer le mot de passe</a>
                </br>
                </br>
               <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Editez votre profil</a>
               </br>
               </br>
               <a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("user_warning");
            echo "\">Supprimez votre profil</a>

               </br>
               </br>
                  <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>



              ";
        } else {
            // line 36
            echo "                  <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>

              </br>

                  <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>

    ";
        }
        // line 43
        echo "

";
        
        $__internal_35d6f105bf359df0b44b20874d6995c00439d127e99cc55e09e88af2ea7dcc29->leave($__internal_35d6f105bf359df0b44b20874d6995c00439d127e99cc55e09e88af2ea7dcc29_prof);

    }

    public function getTemplateName()
    {
        return "@SitePlaque/Accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  113 => 40,  103 => 36,  93 => 31,  86 => 27,  80 => 24,  74 => 21,  68 => 18,  62 => 15,  56 => 12,  50 => 9,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     </br>*/
/*     <h1>Bienvenue sur ErgoMark</h1>*/
/* */
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* */
/*               Vous êtes connecté en tant que {{ app.user.username }}*/
/*               </br>*/
/*               </br>*/
/*                    <a href="{{ path('plaque_platform') }}">Personnalisez vos plaques</a>*/
/*               </br>*/
/*               </br>*/
/*                   <a href="{{ path('devis_platform') }}">Visualisez vos devis</a>*/
/*                </br>*/
/*                </br>*/
/*                 <a href="{{ path('fos_user_resetting_request') }}">Réintialiser le mot de passe</a>*/
/*                 </br>*/
/*                 </br>*/
/*                 <a href="{{ path('fos_user_change_password') }}">Changer le mot de passe</a>*/
/*                 </br>*/
/*                 </br>*/
/*                <a href="{{ path('fos_user_profile_edit') }}">Editez votre profil</a>*/
/*                </br>*/
/*                </br>*/
/*                <a href="{{ path('user_warning') }}">Supprimez votre profil</a>*/
/* */
/*                </br>*/
/*                </br>*/
/*                   <a href="{{ path('fos_user_security_logout') }}">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>*/
/* */
/* */
/* */
/*               {% else %}*/
/*                   <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/* */
/*               </br>*/
/* */
/*                   <a href="{{ path('fos_user_registration_register') }}">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>*/
/* */
/*     {% endif %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
