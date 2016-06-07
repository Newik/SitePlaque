<?php

/* @User/Utilisateur/warning.html.twig */
class __TwigTemplate_c10d61bb83650552dc208d0452109f88e10f948f55776062116994852e3508a2 extends Twig_Template
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
        $__internal_1d835bb49729e1b0d3d02107462b5a1b694bc3515d43797b08ce51fca8157b68 = $this->env->getExtension("native_profiler");
        $__internal_1d835bb49729e1b0d3d02107462b5a1b694bc3515d43797b08ce51fca8157b68->enter($__internal_1d835bb49729e1b0d3d02107462b5a1b694bc3515d43797b08ce51fca8157b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Utilisateur/warning.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d835bb49729e1b0d3d02107462b5a1b694bc3515d43797b08ce51fca8157b68->leave($__internal_1d835bb49729e1b0d3d02107462b5a1b694bc3515d43797b08ce51fca8157b68_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f29511c17448bf102cb71b7c54979341ec96a3bef964b3f0df5c0ddd25b6cf0d = $this->env->getExtension("native_profiler");
        $__internal_f29511c17448bf102cb71b7c54979341ec96a3bef964b3f0df5c0ddd25b6cf0d->enter($__internal_f29511c17448bf102cb71b7c54979341ec96a3bef964b3f0df5c0ddd25b6cf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f29511c17448bf102cb71b7c54979341ec96a3bef964b3f0df5c0ddd25b6cf0d->leave($__internal_f29511c17448bf102cb71b7c54979341ec96a3bef964b3f0df5c0ddd25b6cf0d_prof);

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
        return array (  57 => 16,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
