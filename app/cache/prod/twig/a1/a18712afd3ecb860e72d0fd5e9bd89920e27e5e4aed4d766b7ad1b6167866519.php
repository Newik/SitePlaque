<?php

/* UserBundle:Utilisateur:warning.html.twig */
class __TwigTemplate_bdc61e34ca3b30c0e5facfa2d934ec4a3d8cc709bcb08616a940a47fbd1564f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Utilisateur:warning.html.twig", 1);
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
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "        <div>
            <h2> Vous ne pouvez pas supprimer le profil administrateur ici</h2>
        </br>
        </br>
        <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("accueil_platform");
            echo "\">ACCUEIL</a>
        </div>

    ";
        } else {
            // line 13
            echo "            <div>
                <h1>!!! ATTENTION !!!!</h1><h2> Vous êtes sur le point de supprimer votre profil !!!</h2>
                </b>
                </b>
                <h2> Toutes vos données seront perdues !!!</h2>
                </br>
                </br>
                <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("user_delete");
            echo "\">SUPPRIMER DEFINITIVEMENT LE PROFIL</a>
                </br>
                </br>
                </br>
                <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("accueil_platform");
            echo "\">ACCUEIL</a>
            </div>

    ";
        }
    }

    public function getTemplateName()
    {
        return "UserBundle:Utilisateur:warning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  56 => 20,  47 => 13,  40 => 9,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     {% if is_granted('ROLE_ADMIN') %}*/
/*         <div>*/
/*             <h2> Vous ne pouvez pas supprimer le profil administrateur ici</h2>*/
/*         </br>*/
/*         </br>*/
/*         <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/*         </div>*/
/* */
/*     {% else %}*/
/*             <div>*/
/*                 <h1>!!! ATTENTION !!!!</h1><h2> Vous êtes sur le point de supprimer votre profil !!!</h2>*/
/*                 </b>*/
/*                 </b>*/
/*                 <h2> Toutes vos données seront perdues !!!</h2>*/
/*                 </br>*/
/*                 </br>*/
/*                 <a href="{{ path('user_delete') }}">SUPPRIMER DEFINITIVEMENT LE PROFIL</a>*/
/*                 </br>*/
/*                 </br>*/
/*                 </br>*/
/*                 <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/*             </div>*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
