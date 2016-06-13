<?php

/* SitePlaqueBundle:Plaque:index.html.twig */
class __TwigTemplate_10cdc21b74e625f4ba8b2f02842d13815c281ec56a37dc03fcb98f229afa4606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Plaque:index.html.twig", 1);
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
<h1>Vos Plaques</h1>


    <h2>Liste des plaques</h2>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plaques"]) ? $context["plaques"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plaque"]) {
            // line 10
            echo "            </br>
            <p> Nom : ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["plaque"], "nom", array()), "html", null, true);
            echo "</p>
            <p> Créée par : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["plaque"], "utilisateur", array()), "html", null, true);
            echo "</p>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plaque_single", array("id" => $this->getAttribute($context["plaque"], "id", array()))), "html", null, true);
            echo "\">Voir les détails de la plaque</a>
            </br>
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plaque_edit", array("id" => $this->getAttribute($context["plaque"], "id", array()))), "html", null, true);
            echo "\">Modifier la plaque</a>
            </br>
            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plaque_supprime", array("id" => $this->getAttribute($context["plaque"], "id", array()))), "html", null, true);
            echo "\">Supprimer la plaque</a>
            </br>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "    <p>Aucune plaque n'a été trouvée pour votre session.</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plaque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "

<div>
    </br>
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("plaque_creation");
        echo "\">Ajouter une plaque</a>
    </br>
    </br>
    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("devis_all_plaques");
        echo "\">Faire un devis pour l'ensemble de vos plaques</a>
    </br>
    </br>
    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">ACCUEIL</a>

</div>


";
    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Plaque:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  92 => 30,  86 => 27,  80 => 23,  73 => 21,  64 => 17,  59 => 15,  54 => 13,  50 => 12,  46 => 11,  43 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* <h1>Vos Plaques</h1>*/
/* */
/* */
/*     <h2>Liste des plaques</h2>*/
/*         {% for plaque in plaques %}*/
/*             </br>*/
/*             <p> Nom : {{ plaque.nom }}</p>*/
/*             <p> Créée par : {{ plaque.utilisateur }}</p>*/
/*             <a href="{{ path('plaque_single',{'id' : plaque.id}) }}">Voir les détails de la plaque</a>*/
/*             </br>*/
/*             <a href="{{ path('plaque_edit',{'id' : plaque.id}) }}">Modifier la plaque</a>*/
/*             </br>*/
/*             <a href="{{ path('plaque_supprime',{'id': plaque.id}) }}">Supprimer la plaque</a>*/
/*             </br>*/
/* */
/*         {% else %}*/
/*     <p>Aucune plaque n'a été trouvée pour votre session.</p>*/
/* {% endfor %}*/
/* */
/* */
/* <div>*/
/*     </br>*/
/*     <a href="{{ path('plaque_creation') }}">Ajouter une plaque</a>*/
/*     </br>*/
/*     </br>*/
/*     <a href="{{ path('devis_all_plaques') }}">Faire un devis pour l'ensemble de vos plaques</a>*/
/*     </br>*/
/*     </br>*/
/*     <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/* */
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
