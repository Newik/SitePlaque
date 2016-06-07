<?php

/* SitePlaqueBundle:Devis:index.html.twig */
class __TwigTemplate_5b496476439f03c85344afdbf1ef9356070e2b5e179100124c3981ddecacae8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Devis:index.html.twig", 1);
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


<h2>Liste des devis</h2>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devis"]) ? $context["devis"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["undevis"]) {
            // line 10
            echo "    </br>
    <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["undevis"], "nom", array()), "html", null, true);
            echo "</p>
    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devis_view", array("id" => $this->getAttribute($context["undevis"], "id", array()))), "html", null, true);
            echo "\">Voir les détails du devis</a>
    </br>
    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devis_supprime", array("id" => $this->getAttribute($context["undevis"], "id", array()))), "html", null, true);
            echo "\">Supprimer le devis</a>
    </br>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "    <p>Aucun devis n'a été trouvé.</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['undevis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
<div>

    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">accueil</a>

</div>

";
    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Devis:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  70 => 19,  63 => 17,  55 => 14,  50 => 12,  46 => 11,  43 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* <h1>Devis</h1>*/
/* */
/* */
/* <h2>Liste des devis</h2>*/
/* {% for undevis in devis %}*/
/*     </br>*/
/*     <p>{{ undevis.nom }}</p>*/
/*     <a href="{{ path('devis_view',{'id' : undevis.id}) }}">Voir les détails du devis</a>*/
/*     </br>*/
/*     <a href="{{ path('devis_supprime',{'id': undevis.id}) }}">Supprimer le devis</a>*/
/*     </br>*/
/* {% else %}*/
/*     <p>Aucun devis n'a été trouvé.</p>*/
/* {% endfor %}*/
/* */
/* <div>*/
/* */
/*     <a href="{{ path('accueil_platform') }}">accueil</a>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
