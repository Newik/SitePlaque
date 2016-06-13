<?php

/* UserBundle:Utilisateur:client.html.twig */
class __TwigTemplate_88f8f325b3d3305f9fd855996e6eba711d599e8797ea8daba4e391e514de5a38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Utilisateur:client.html.twig", 1);
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
    <h2>Client</h2>

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateur"]) ? $context["utilisateur"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["unutilisateur"]) {
            // line 8
            echo "
        <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["unutilisateur"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unutilisateur"], "prenom", array()), "html", null, true);
            echo "  </p>


        <p>Identifiant : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["unutilisateur"], "id", array()), "html", null, true);
            echo " </p>
        <p>Raison sociale : ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["unutilisateur"], "raisonSociale", array()), "html", null, true);
            echo " </p>
        <p>Siret: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["unutilisateur"], "siret", array()), "html", null, true);
            echo " </p>
        <p>Adresse : ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["unutilisateur"], "adresse", array()), "html", null, true);
            echo " </p>
        <p>Code postal : ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["unutilisateur"], "codePostale", array()), "html", null, true);
            echo " </p>
        <p>Ville : ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["unutilisateur"], "ville", array()), "html", null, true);
            echo " </p>
        <p>Téléphone : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["unutilisateur"], "tel", array()), "html", null, true);
            echo " </p>
        <p>E-mail : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["unutilisateur"], "email", array()), "html", null, true);
            echo " </p>
        <p>dernière connexion : ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unutilisateur"], "lastLogin", array()), "Y-m-d"), "html", null, true);
            echo " </p>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unutilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">ACCUEIL</a>

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Utilisateur:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  93 => 24,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <h2>Client</h2>*/
/* */
/*     {% for unutilisateur in utilisateur %}*/
/* */
/*         <p>{{ unutilisateur.nom }} {{ unutilisateur.prenom }}  </p>*/
/* */
/* */
/*         <p>Identifiant : {{ unutilisateur.id }} </p>*/
/*         <p>Raison sociale : {{ unutilisateur.raisonSociale }} </p>*/
/*         <p>Siret: {{ unutilisateur.siret }} </p>*/
/*         <p>Adresse : {{ unutilisateur.adresse }} </p>*/
/*         <p>Code postal : {{ unutilisateur.codePostale }} </p>*/
/*         <p>Ville : {{ unutilisateur.ville }} </p>*/
/*         <p>Téléphone : {{ unutilisateur.tel }} </p>*/
/*         <p>E-mail : {{ unutilisateur.email }} </p>*/
/*         <p>dernière connexion : {{ unutilisateur.lastLogin |date('Y-m-d') }} </p>*/
/* */
/* */
/*     {% endfor %}*/
/* */
/*         <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/* */
/* {% endblock%}*/
