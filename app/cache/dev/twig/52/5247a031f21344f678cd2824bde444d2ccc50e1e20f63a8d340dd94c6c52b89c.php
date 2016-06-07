<?php

/* SitePlaqueBundle:Plaque:succes.html.twig */
class __TwigTemplate_8470fbc669b8d2f59a0a182655b2cfdff2b040296e36292f061739abd2144d99 extends Twig_Template
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
        $__internal_2bf3a0b52773962edb8832122510715a72770301b61d0b2ec39bf779f15b7b02 = $this->env->getExtension("native_profiler");
        $__internal_2bf3a0b52773962edb8832122510715a72770301b61d0b2ec39bf779f15b7b02->enter($__internal_2bf3a0b52773962edb8832122510715a72770301b61d0b2ec39bf779f15b7b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Plaque:succes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bf3a0b52773962edb8832122510715a72770301b61d0b2ec39bf779f15b7b02->leave($__internal_2bf3a0b52773962edb8832122510715a72770301b61d0b2ec39bf779f15b7b02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d30cabad380a89a8bfd82ba8fe49be1f8b805698f576f807262e8a04d0cbdaf = $this->env->getExtension("native_profiler");
        $__internal_6d30cabad380a89a8bfd82ba8fe49be1f8b805698f576f807262e8a04d0cbdaf->enter($__internal_6d30cabad380a89a8bfd82ba8fe49be1f8b805698f576f807262e8a04d0cbdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6d30cabad380a89a8bfd82ba8fe49be1f8b805698f576f807262e8a04d0cbdaf->leave($__internal_6d30cabad380a89a8bfd82ba8fe49be1f8b805698f576f807262e8a04d0cbdaf_prof);

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
        return array (  56 => 15,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
