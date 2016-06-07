<?php

/* @SitePlaque/Plaque/succes.html.twig */
class __TwigTemplate_45fd1602f959812fb3a3dcba5a7afbe82214deafcfdd7441ce62e5c1d393f4ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Plaque/succes.html.twig", 1);
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
        $__internal_bfa66e4134436088e4cb97c4d7e94da659a7b0034f2844b5e60fe09a17ebc96b = $this->env->getExtension("native_profiler");
        $__internal_bfa66e4134436088e4cb97c4d7e94da659a7b0034f2844b5e60fe09a17ebc96b->enter($__internal_bfa66e4134436088e4cb97c4d7e94da659a7b0034f2844b5e60fe09a17ebc96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitePlaque/Plaque/succes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfa66e4134436088e4cb97c4d7e94da659a7b0034f2844b5e60fe09a17ebc96b->leave($__internal_bfa66e4134436088e4cb97c4d7e94da659a7b0034f2844b5e60fe09a17ebc96b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd9117320b7e5879527870e3e2ffd8a3e7b80a9902cd12cca9a8ac1927a0aec8 = $this->env->getExtension("native_profiler");
        $__internal_bd9117320b7e5879527870e3e2ffd8a3e7b80a9902cd12cca9a8ac1927a0aec8->enter($__internal_bd9117320b7e5879527870e3e2ffd8a3e7b80a9902cd12cca9a8ac1927a0aec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_bd9117320b7e5879527870e3e2ffd8a3e7b80a9902cd12cca9a8ac1927a0aec8->leave($__internal_bd9117320b7e5879527870e3e2ffd8a3e7b80a9902cd12cca9a8ac1927a0aec8_prof);

    }

    public function getTemplateName()
    {
        return "@SitePlaque/Plaque/succes.html.twig";
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
