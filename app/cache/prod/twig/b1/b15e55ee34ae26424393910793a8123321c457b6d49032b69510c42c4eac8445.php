<?php

/* SitePlaqueBundle:Plaque:succes.html.twig */
class __TwigTemplate_8f8998c30f6479b2e84f3e25c218712364c1b7d008c984980a7acccd01a19959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Plaque:succes.html.twig", 1);
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

              <h2>Plaque ajoutée avec succès</h2>

        </div>

        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("plaque_platform");
        echo "\">Retour à la liste de plaques</a>
        </br>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">ACCUEIL</a>


";
    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Plaque:succes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* */
/* */
/*         <div>*/
/* */
/*               <h2>Plaque ajoutée avec succès</h2>*/
/* */
/*         </div>*/
/* */
/*         <a href="{{ path('plaque_platform') }}">Retour à la liste de plaques</a>*/
/*         </br>*/
/*         <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/* */
/* */
/* {% endblock%}*/
