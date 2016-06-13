<?php

/* SitePlaqueBundle:PrixUnitaire:index.html.twig */
class __TwigTemplate_be9c02f9ba7961f9bcdfc028343b8b8d2a6fa63ad15e143787227ea890b49746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:PrixUnitaire:index.html.twig", 1);
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
    <h2>Liste des tarifs </h2>

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prix"]) ? $context["prix"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["leprix"]) {
            // line 8
            echo "        </br>
        <p> Intitulé : ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["leprix"], "libelle", array()), "html", null, true);
            echo "</p>
        <p> Prix : ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["leprix"], "prix", array()), "html", null, true);
            echo "</p>

        </br>
        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_prix_edit", array("id" => $this->getAttribute($context["leprix"], "id", array()))), "html", null, true);
            echo "\">Modifier le tarif</a>
        </br>


    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "        <p>Aucun prix n'a été trouvé</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leprix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "

    <div>
        </br>
        </br>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">ACCUEIL</a>

    </div>


";
    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:PrixUnitaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  71 => 20,  64 => 18,  54 => 13,  48 => 10,  44 => 9,  41 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <h2>Liste des tarifs </h2>*/
/* */
/*     {% for leprix in prix %}*/
/*         </br>*/
/*         <p> Intitulé : {{ leprix.libelle }}</p>*/
/*         <p> Prix : {{ leprix.prix }}</p>*/
/* */
/*         </br>*/
/*         <a href="{{ path('admin_prix_edit',{'id': leprix.id}) }}">Modifier le tarif</a>*/
/*         </br>*/
/* */
/* */
/*     {% else %}*/
/*         <p>Aucun prix n'a été trouvé</p>*/
/*     {% endfor %}*/
/* */
/* */
/*     <div>*/
/*         </br>*/
/*         </br>*/
/*         <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
