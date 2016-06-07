<?php

/* @User/Utilisateur/warning.html.twig */
class __TwigTemplate_cf1758835412a74f7f7b69e6c9ed896a82e5e58ec6657496500f95c3319d620b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@User/Utilisateur/warning.html.twig", 1);
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
        echo "
    <div>
        <h1>!!! ATTENTION !!!!</h1><h2> Vous êtes sur le point de supprimer votre profil !!!</h2>
        </b>
        </b>
        <h2> Toutes vos données seront perdues !!!</h2>
        </br>
        </br>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("user_delete");
        echo "\">SUPPRIMER DEFINITIVEMENT LE PROFIL</a>
        </br>
        </br>
        </br>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">ACCUEIL</a>
    </div>


";
    }

    public function getTemplateName()
    {
        return "@User/Utilisateur/warning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <div>*/
/*         <h1>!!! ATTENTION !!!!</h1><h2> Vous êtes sur le point de supprimer votre profil !!!</h2>*/
/*         </b>*/
/*         </b>*/
/*         <h2> Toutes vos données seront perdues !!!</h2>*/
/*         </br>*/
/*         </br>*/
/*         <a href="{{ path('user_delete') }}">SUPPRIMER DEFINITIVEMENT LE PROFIL</a>*/
/*         </br>*/
/*         </br>*/
/*         </br>*/
/*         <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
