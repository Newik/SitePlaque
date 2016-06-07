<?php

/* @SitePlaque/Plaque/index.html.twig */
class __TwigTemplate_10b27313e2207cbd49eefd22180694b1f5ebf8cc540962590887d493c36939cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Plaque/index.html.twig", 1);
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
        $__internal_4e28bbd27e5aa3a8a49ae1b530ad50b7fc3e4aa6ef01cfd4a1adde2b9654fcd0 = $this->env->getExtension("native_profiler");
        $__internal_4e28bbd27e5aa3a8a49ae1b530ad50b7fc3e4aa6ef01cfd4a1adde2b9654fcd0->enter($__internal_4e28bbd27e5aa3a8a49ae1b530ad50b7fc3e4aa6ef01cfd4a1adde2b9654fcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitePlaque/Plaque/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e28bbd27e5aa3a8a49ae1b530ad50b7fc3e4aa6ef01cfd4a1adde2b9654fcd0->leave($__internal_4e28bbd27e5aa3a8a49ae1b530ad50b7fc3e4aa6ef01cfd4a1adde2b9654fcd0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_35cea24157660195a92863b1e76eb8cfb227989758bd1d8ddd3e64eec50616fe = $this->env->getExtension("native_profiler");
        $__internal_35cea24157660195a92863b1e76eb8cfb227989758bd1d8ddd3e64eec50616fe->enter($__internal_35cea24157660195a92863b1e76eb8cfb227989758bd1d8ddd3e64eec50616fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<h1>Vos Plaques</h1>


    <h2>Liste des plaques</h2>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plaques"]) ? $context["plaques"] : $this->getContext($context, "plaques")));
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
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">ACCUEIL</a>

</div>


";
        
        $__internal_35cea24157660195a92863b1e76eb8cfb227989758bd1d8ddd3e64eec50616fe->leave($__internal_35cea24157660195a92863b1e76eb8cfb227989758bd1d8ddd3e64eec50616fe_prof);

    }

    public function getTemplateName()
    {
        return "@SitePlaque/Plaque/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  95 => 27,  89 => 23,  82 => 21,  73 => 17,  68 => 15,  63 => 13,  59 => 12,  55 => 11,  52 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
