<?php

/* UserBundle:Utilisateur:warning.html.twig */
class __TwigTemplate_8ad71f0d82fb12779e9545400a11e01275f5abec9cc024226641473a84f9a55c extends Twig_Template
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
        $__internal_8b5d2d9e74590ad91171eec104c260d59aecf40d27ed1956efb3a28a22841b80 = $this->env->getExtension("native_profiler");
        $__internal_8b5d2d9e74590ad91171eec104c260d59aecf40d27ed1956efb3a28a22841b80->enter($__internal_8b5d2d9e74590ad91171eec104c260d59aecf40d27ed1956efb3a28a22841b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Utilisateur:warning.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b5d2d9e74590ad91171eec104c260d59aecf40d27ed1956efb3a28a22841b80->leave($__internal_8b5d2d9e74590ad91171eec104c260d59aecf40d27ed1956efb3a28a22841b80_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b75a46da172bed0a17864a3161984d66c11d342c4ce0f05cac7039dae3707fd9 = $this->env->getExtension("native_profiler");
        $__internal_b75a46da172bed0a17864a3161984d66c11d342c4ce0f05cac7039dae3707fd9->enter($__internal_b75a46da172bed0a17864a3161984d66c11d342c4ce0f05cac7039dae3707fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b75a46da172bed0a17864a3161984d66c11d342c4ce0f05cac7039dae3707fd9->leave($__internal_b75a46da172bed0a17864a3161984d66c11d342c4ce0f05cac7039dae3707fd9_prof);

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
