<?php

/* @SitePlaque/Devis/view.html.twig */
class __TwigTemplate_07c70893b2ffe424f30a9a72851ec2ab19f92824184054dcc732f335cd1c8cf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Devis/view.html.twig", 1);
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
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devis"]) ? $context["devis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ledevis"]) {
            // line 6
            echo "
        <h2>Devis :  ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["ledevis"], "nom", array()), "html", null, true);
            echo "</h2>

        <div>
            Identifiant : ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["ledevis"], "id", array()), "html", null, true);
            echo "
            </br>
            Montant : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["ledevis"], "total", array()), "html", null, true);
            echo " Euros
            </br>

        </div>

        <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("devis_platform");
            echo "\">Retour à la liste des devis</a>
        </br>
        <a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("accueil_platform");
            echo "\">ACCUEIL</a>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ledevis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SitePlaque/Devis/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  65 => 19,  60 => 17,  52 => 12,  47 => 10,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     {% for ledevis in devis %}*/
/* */
/*         <h2>Devis :  {{ ledevis.nom }}</h2>*/
/* */
/*         <div>*/
/*             Identifiant : {{ ledevis.id }}*/
/*             </br>*/
/*             Montant : {{ ledevis.total }} Euros*/
/*             </br>*/
/* */
/*         </div>*/
/* */
/*         <a href="{{ path('devis_platform') }}">Retour à la liste des devis</a>*/
/*         </br>*/
/*         <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/* */
/*     {% endfor%}*/
/* */
/* {% endblock %}*/
