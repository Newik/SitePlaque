<?php

/* SitePlaqueBundle:Admin:devis.html.twig */
class __TwigTemplate_d562504d781d7312bd214ad99f7b1885ab2ec832c58937065e76455969e44b86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Admin:devis.html.twig", 1);
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

    <h2>Liste des Devis</h2>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devis"]) ? $context["devis"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["undevis"]) {
            // line 9
            echo "        </br>
        <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["undevis"], "nom", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["undevis"], "utilisateur", array()), "html", null, true);
            echo "</p>
        </br>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "        <p>Aucun Devis n'a été trouvé.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['undevis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <div>

        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">accueil</a>

    </div>

";
    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Admin:devis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  64 => 16,  57 => 14,  49 => 11,  45 => 10,  42 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* */
/*     <h2>Liste des Devis</h2>*/
/* */
/*     {% for undevis in devis %}*/
/*         </br>*/
/*         <p>{{ undevis.nom }}</p>*/
/*         <p>{{ undevis.utilisateur}}</p>*/
/*         </br>*/
/*     {% else %}*/
/*         <p>Aucun Devis n'a été trouvé.</p>*/
/*     {% endfor %}*/
/* */
/*     <div>*/
/* */
/*         <a href="{{ path('accueil_platform') }}">accueil</a>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/