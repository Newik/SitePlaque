<?php

/* @SitePlaque/Devis/single.html.twig */
class __TwigTemplate_4509b0feb8e439120a88e06559fbde6f6ebb39048e3ed8b018b195ac69523dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Devis/single.html.twig", 1);
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
<h1>Devis</h1>
    </br>
    <p>Devis numéro ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : null), "id", array()), "html", null, true);
        echo "</p>
    <p> Nom du devis : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : null), "nom", array()), "html", null, true);
        echo "</p>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devis_view", array("id" => $this->getAttribute((isset($context["devis"]) ? $context["devis"] : null), "id", array()))), "html", null, true);
        echo "\">Voir les détails du devis</a>
    </br>

<div>

    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">accueil</a>

</div>

";
    }

    public function getTemplateName()
    {
        return "@SitePlaque/Devis/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  44 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
