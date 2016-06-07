<?php

/* @SitePlaque/Devis/single.html.twig */
class __TwigTemplate_9e9d2dfa4c90c54b5ab0c265787a36646eef0106910fdef16cacb5642c18377d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Devis/single.html.twig", 1);
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
        $__internal_179885bf23c80eea5a53f176712936915d1f693b4cbcd0d4ce4c82fd7a6d1966 = $this->env->getExtension("native_profiler");
        $__internal_179885bf23c80eea5a53f176712936915d1f693b4cbcd0d4ce4c82fd7a6d1966->enter($__internal_179885bf23c80eea5a53f176712936915d1f693b4cbcd0d4ce4c82fd7a6d1966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitePlaque/Devis/single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_179885bf23c80eea5a53f176712936915d1f693b4cbcd0d4ce4c82fd7a6d1966->leave($__internal_179885bf23c80eea5a53f176712936915d1f693b4cbcd0d4ce4c82fd7a6d1966_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_12d146f4926d56dea92df65892614b7c32fc06bf02b115ee98bf6485fe37f02c = $this->env->getExtension("native_profiler");
        $__internal_12d146f4926d56dea92df65892614b7c32fc06bf02b115ee98bf6485fe37f02c->enter($__internal_12d146f4926d56dea92df65892614b7c32fc06bf02b115ee98bf6485fe37f02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<h1>Devis</h1>
    </br>
    <p>Devis numéro ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "id", array()), "html", null, true);
        echo "</p>
    <p> Nom du devis : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "nom", array()), "html", null, true);
        echo "</p>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devis_view", array("id" => $this->getAttribute((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")), "id", array()))), "html", null, true);
        echo "\">Voir les détails du devis</a>
    </br>

<div>

    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">accueil</a>

</div>

";
        
        $__internal_12d146f4926d56dea92df65892614b7c32fc06bf02b115ee98bf6485fe37f02c->leave($__internal_12d146f4926d56dea92df65892614b7c32fc06bf02b115ee98bf6485fe37f02c_prof);

    }

    public function getTemplateName()
    {
        return "@SitePlaque/Devis/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  53 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* <h1>Devis</h1>*/
/*     </br>*/
/*     <p>Devis numéro {{ devis.id }}</p>*/
/*     <p> Nom du devis : {{ devis.nom }}</p>*/
/*     <a href="{{ path('devis_view',{'id' :devis.id}) }}">Voir les détails du devis</a>*/
/*     </br>*/
/* */
/* <div>*/
/* */
/*     <a href="{{ path('accueil_platform') }}">accueil</a>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
