<?php

/* SitePlaqueBundle:Plaque:index.html.twig */
class __TwigTemplate_514d801a3e271a4037a11354763ca80f0501443548c2f7454f7cc5120b8474b3 extends Twig_Template
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
        $__internal_84f406aa89b8f15a666f1481f286a6af37bbd6df3d81c6b7920e0610a3ff3782 = $this->env->getExtension("native_profiler");
        $__internal_84f406aa89b8f15a666f1481f286a6af37bbd6df3d81c6b7920e0610a3ff3782->enter($__internal_84f406aa89b8f15a666f1481f286a6af37bbd6df3d81c6b7920e0610a3ff3782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Plaque:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84f406aa89b8f15a666f1481f286a6af37bbd6df3d81c6b7920e0610a3ff3782->leave($__internal_84f406aa89b8f15a666f1481f286a6af37bbd6df3d81c6b7920e0610a3ff3782_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_daae8854d4c985a931af168410902de96343425ea2cfda4b12436a12c43e225e = $this->env->getExtension("native_profiler");
        $__internal_daae8854d4c985a931af168410902de96343425ea2cfda4b12436a12c43e225e->enter($__internal_daae8854d4c985a931af168410902de96343425ea2cfda4b12436a12c43e225e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_daae8854d4c985a931af168410902de96343425ea2cfda4b12436a12c43e225e->leave($__internal_daae8854d4c985a931af168410902de96343425ea2cfda4b12436a12c43e225e_prof);

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
