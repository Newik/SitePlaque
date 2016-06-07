<?php

/* SitePlaqueBundle:Devis:view.html.twig */
class __TwigTemplate_fcf35940c0d4b11de8e74556e0a4ad611616ddd687687949cffb2fc55fce92b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Devis:view.html.twig", 1);
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
        $__internal_8d46ca485a53a5a1ff2132e2d03efe8f53268d47cb8960e2b6225861c1e854d4 = $this->env->getExtension("native_profiler");
        $__internal_8d46ca485a53a5a1ff2132e2d03efe8f53268d47cb8960e2b6225861c1e854d4->enter($__internal_8d46ca485a53a5a1ff2132e2d03efe8f53268d47cb8960e2b6225861c1e854d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Devis:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d46ca485a53a5a1ff2132e2d03efe8f53268d47cb8960e2b6225861c1e854d4->leave($__internal_8d46ca485a53a5a1ff2132e2d03efe8f53268d47cb8960e2b6225861c1e854d4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8cc94d78e436c4b7ed136aded6d9434e3566793e62e9b8cfec9928c4e2a6bf4 = $this->env->getExtension("native_profiler");
        $__internal_c8cc94d78e436c4b7ed136aded6d9434e3566793e62e9b8cfec9928c4e2a6bf4->enter($__internal_c8cc94d78e436c4b7ed136aded6d9434e3566793e62e9b8cfec9928c4e2a6bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")));
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
        
        $__internal_c8cc94d78e436c4b7ed136aded6d9434e3566793e62e9b8cfec9928c4e2a6bf4->leave($__internal_c8cc94d78e436c4b7ed136aded6d9434e3566793e62e9b8cfec9928c4e2a6bf4_prof);

    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Devis:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  74 => 19,  69 => 17,  61 => 12,  56 => 10,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
