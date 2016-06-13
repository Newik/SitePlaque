<?php

/* @SitePlaque/Devis/index.html.twig */
class __TwigTemplate_fad44dee77bc706dd514bf414ec56855aadfcc3194fc9998da1c5558ec2791c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Devis/index.html.twig", 1);
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
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["undevis"], "plaques", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["plaque"]) {
                // line 17
                echo "
             <p> lié à la plaque numéro ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["plaque"], "id", array()), "html", null, true);
                echo "</p>

         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plaque'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "    <p>Aucun devis n'a été trouvé.</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['undevis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
<div>
    </br>
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">accueil</a>
    </br>
</div>

";
    }

    public function getTemplateName()
    {
        return "@SitePlaque/Devis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  86 => 24,  79 => 22,  67 => 18,  64 => 17,  60 => 16,  55 => 14,  50 => 12,  46 => 11,  43 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
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
/*          {% for plaque in undevis.plaques %}*/
/* */
/*              <p> lié à la plaque numéro {{ plaque.id }}</p>*/
/* */
/*          {% endfor %}*/
/* {% else %}*/
/*     <p>Aucun devis n'a été trouvé.</p>*/
/* {% endfor %}*/
/* */
/* <div>*/
/*     </br>*/
/*     <a href="{{ path('accueil_platform') }}">accueil</a>*/
/*     </br>*/
/* </div>*/
/* */
/* {% endblock %}*/
