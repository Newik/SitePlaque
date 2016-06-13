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
        <h2>Devis : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : null), "nom", array()), "html", null, true);
        echo "</h2>

            <div>

                </br>
                Montant : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : null), "total", array()), "html", null, true);
        echo " Euro(s)
                </br>
                </br>
                ";
        // line 13
        if ($this->getAttribute((isset($context["devis"]) ? $context["devis"] : null), "plaques", array(), "any", true, true)) {
            // line 14
            echo "
                            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["devis"]) ? $context["devis"] : null), "plaques", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["laplaque"]) {
                // line 16
                echo "
                                <p> Identifiant de la plaque ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["laplaque"], "id", array()), "html", null, true);
                echo " </p>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laplaque'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                    ";
        } else {
            // line 21
            echo "                           <p> null </p>
                ";
        }
        // line 23
        echo "            </div>

    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("devis_platform");
        echo "\">Retour à la liste des devis</a>
    </br>
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">ACCUEIL</a>



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
        return array (  85 => 27,  80 => 25,  76 => 23,  72 => 21,  69 => 20,  60 => 17,  57 => 16,  53 => 15,  50 => 14,  48 => 13,  42 => 10,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*         <h2>Devis : {{ devis.nom }}</h2>*/
/* */
/*             <div>*/
/* */
/*                 </br>*/
/*                 Montant : {{ devis.total}} Euro(s)*/
/*                 </br>*/
/*                 </br>*/
/*                 {% if devis.plaques is defined %}*/
/* */
/*                             {% for laplaque in devis.plaques %}*/
/* */
/*                                 <p> Identifiant de la plaque {{ laplaque.id }} </p>*/
/* */
/*                             {% endfor %}*/
/*                     {% else %}*/
/*                            <p> null </p>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*     <a href="{{ path('devis_platform') }}">Retour à la liste des devis</a>*/
/*     </br>*/
/*     <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/* */
/* */
/* */
/* {% endblock %}*/
