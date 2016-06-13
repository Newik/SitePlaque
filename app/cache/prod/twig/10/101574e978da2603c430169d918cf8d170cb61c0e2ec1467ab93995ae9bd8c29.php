<?php

/* SitePlaqueBundle:Devis:single.html.twig */
class __TwigTemplate_1143b3e70d3d2d1bfa7005ddf938f3ebbf79ed8b8fa6a8a7a987add474c400b0 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Devis</h1>
<div>
    </br>
    <p>Devis numéro ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : null), "id", array()), "html", null, true);
        echo "</p>
    <p> Nom du devis : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : null), "nom", array()), "html", null, true);
        echo "</p>
    <p>Lié à la plaque numéro ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plaque"]) ? $context["plaque"] : null), "id", array()), "html", null, true);
        echo " nommée ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plaque"]) ? $context["plaque"] : null), "nom", array()), "html", null, true);
        echo "</p>
    </br>
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devis_view", array("id" => $this->getAttribute((isset($context["devis"]) ? $context["devis"] : null), "id", array()))), "html", null, true);
        echo "\">Voir les détails du devis</a>
    </br>

</div>


    <div>

    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">accueil</a>

</div>

";
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
        return array (  63 => 20,  52 => 12,  45 => 10,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* <h1>Devis</h1>*/
/* <div>*/
/*     </br>*/
/*     <p>Devis numéro {{ devis.id }}</p>*/
/*     <p> Nom du devis : {{ devis.nom }}</p>*/
/*     <p>Lié à la plaque numéro {{ plaque.id}} nommée {{ plaque.nom }}</p>*/
/*     </br>*/
/*     <a href="{{ path('devis_view',{'id' :devis.id}) }}">Voir les détails du devis</a>*/
/*     </br>*/
/* */
/* </div>*/
/* */
/* */
/*     <div>*/
/* */
/*     <a href="{{ path('accueil_platform') }}">accueil</a>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
