<?php

/* SitePlaqueBundle:Devis:multi.html.twig */
class __TwigTemplate_d1ac2ade9f7b59a2425cc932e2b1fabcba3577451ca0136aa57e9b41efbc1b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Devis:multi.html.twig", 1);
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
        </br>
        <p> Plaques liées au devis :</p>
            </br>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plaques"]) ? $context["plaques"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["laplaque"]) {
            // line 14
            echo "            <p> plaque numéro ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["laplaque"], "id", array()), "html", null, true);
            echo " nommée ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["laplaque"], "nom", array()), "html", null, true);
            echo "  </p>
            </br>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laplaque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devis_view", array("id" => $this->getAttribute((isset($context["devis"]) ? $context["devis"] : null), "id", array()))), "html", null, true);
        echo "\">Voir les détails du devis</a>
        </br>

    </div>


    <div>

        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">accueil</a>

    </div>

";
    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Devis:multi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  65 => 18,  52 => 14,  48 => 13,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <h1>Devis</h1>*/
/*     <div>*/
/*         </br>*/
/*         <p>Devis numéro {{ devis.id }}</p>*/
/*         <p> Nom du devis : {{ devis.nom }}</p>*/
/*         </br>*/
/*         <p> Plaques liées au devis :</p>*/
/*             </br>*/
/*             {% for laplaque in plaques %}*/
/*             <p> plaque numéro {{ laplaque.id }} nommée {{ laplaque.nom }}  </p>*/
/*             </br>*/
/* */
/*             {% endfor %}*/
/*         <a href="{{ path('devis_view',{'id' :devis.id}) }}">Voir les détails du devis</a>*/
/*         </br>*/
/* */
/*     </div>*/
/* */
/* */
/*     <div>*/
/* */
/*         <a href="{{ path('accueil_platform') }}">accueil</a>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
