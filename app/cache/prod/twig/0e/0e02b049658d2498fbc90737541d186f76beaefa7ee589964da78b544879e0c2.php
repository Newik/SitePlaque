<?php

/* @SitePlaque/Accueil/index.html.twig */
class __TwigTemplate_cf71de5d9efaab78e6f9e4b7ff55e5c1c7ce723e227513d30218f38d999b41d5 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
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
        return array (  112 => 43,  104 => 40,  94 => 36,  84 => 31,  77 => 27,  71 => 24,  65 => 21,  59 => 18,  53 => 15,  47 => 12,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
