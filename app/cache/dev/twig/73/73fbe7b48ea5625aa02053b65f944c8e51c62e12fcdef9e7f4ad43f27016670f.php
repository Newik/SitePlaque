<?php

/* SitePlaqueBundle:Devis:single.html.twig */
class __TwigTemplate_c310d133f236516c2de511bdd4d51074c2d15104c05b0029864879b819ff8adf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Devis:single.html.twig", 1);
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
        $__internal_bf9f61e58031cb78fe50f82cce420bf1bd7731ee05c4d5a23cd9a8ed13710603 = $this->env->getExtension("native_profiler");
        $__internal_bf9f61e58031cb78fe50f82cce420bf1bd7731ee05c4d5a23cd9a8ed13710603->enter($__internal_bf9f61e58031cb78fe50f82cce420bf1bd7731ee05c4d5a23cd9a8ed13710603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Devis:single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf9f61e58031cb78fe50f82cce420bf1bd7731ee05c4d5a23cd9a8ed13710603->leave($__internal_bf9f61e58031cb78fe50f82cce420bf1bd7731ee05c4d5a23cd9a8ed13710603_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_da8b33f2cbc927746f614a0e0f2fd532d283339c265ee00b3e57ab808c485b5e = $this->env->getExtension("native_profiler");
        $__internal_da8b33f2cbc927746f614a0e0f2fd532d283339c265ee00b3e57ab808c485b5e->enter($__internal_da8b33f2cbc927746f614a0e0f2fd532d283339c265ee00b3e57ab808c485b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<h1>Devis</h1>
    </br>
    <p>Devis numéro ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "id", array()), "html", null, true);
        echo "</p>
    <p> Nom du devis : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "nom", array()), "html", null, true);
        echo "</p>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devis_view", array("id" => $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "id", array()))), "html", null, true);
        echo "\">Voir les détails du devis</a>
    </br>

<div>

    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">accueil</a>

</div>

";
        
        $__internal_da8b33f2cbc927746f614a0e0f2fd532d283339c265ee00b3e57ab808c485b5e->leave($__internal_da8b33f2cbc927746f614a0e0f2fd532d283339c265ee00b3e57ab808c485b5e_prof);

    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Devis:single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  53 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* <h1>Devis</h1>*/
/*     </br>*/
/*     <p>Devis numéro {{ devis.id }}</p>*/
/*     <p> Nom du devis : {{ devis.nom }}</p>*/
/*     <a href="{{ path('devis_view',{'id' :devis.id}) }}">Voir les détails du devis</a>*/
/*     </br>*/
/* */
/* <div>*/
/* */
/*     <a href="{{ path('accueil_platform') }}">accueil</a>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
