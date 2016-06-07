<?php

/* SitePlaqueBundle:Devis:index.html.twig */
class __TwigTemplate_aaa989a1c8ab5524a822d420d01eee81803f15ce4e59fa1d428ae3059da81b1d extends Twig_Template
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
        $__internal_5f0c54e7a520d90f1b338a4699a90c2987371fd976f4b3cd0bed8cb25b90f8df = $this->env->getExtension("native_profiler");
        $__internal_5f0c54e7a520d90f1b338a4699a90c2987371fd976f4b3cd0bed8cb25b90f8df->enter($__internal_5f0c54e7a520d90f1b338a4699a90c2987371fd976f4b3cd0bed8cb25b90f8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Devis:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f0c54e7a520d90f1b338a4699a90c2987371fd976f4b3cd0bed8cb25b90f8df->leave($__internal_5f0c54e7a520d90f1b338a4699a90c2987371fd976f4b3cd0bed8cb25b90f8df_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1fbbb0972fc820a1895458c4f54a1460cdf66ddc6e50360d35d32034f5280d9 = $this->env->getExtension("native_profiler");
        $__internal_f1fbbb0972fc820a1895458c4f54a1460cdf66ddc6e50360d35d32034f5280d9->enter($__internal_f1fbbb0972fc820a1895458c4f54a1460cdf66ddc6e50360d35d32034f5280d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<h1>Devis</h1>


<h2>Liste des devis</h2>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")));
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
        
        $__internal_f1fbbb0972fc820a1895458c4f54a1460cdf66ddc6e50360d35d32034f5280d9->leave($__internal_f1fbbb0972fc820a1895458c4f54a1460cdf66ddc6e50360d35d32034f5280d9_prof);

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
        return array (  84 => 22,  79 => 19,  72 => 17,  64 => 14,  59 => 12,  55 => 11,  52 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
