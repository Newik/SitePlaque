<?php

/* SitePlaqueBundle:Plaque:single.html.twig */
class __TwigTemplate_633c281f1b20228537211d0cbaa8096230adca3303a5baf80c0ed4cce7c51eba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Plaque:single.html.twig", 1);
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
        $__internal_352d5229e0b742b3ee5b4a6bae59639dcd0c96a1f234c3a9d5d2bb7b65186a79 = $this->env->getExtension("native_profiler");
        $__internal_352d5229e0b742b3ee5b4a6bae59639dcd0c96a1f234c3a9d5d2bb7b65186a79->enter($__internal_352d5229e0b742b3ee5b4a6bae59639dcd0c96a1f234c3a9d5d2bb7b65186a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Plaque:single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_352d5229e0b742b3ee5b4a6bae59639dcd0c96a1f234c3a9d5d2bb7b65186a79->leave($__internal_352d5229e0b742b3ee5b4a6bae59639dcd0c96a1f234c3a9d5d2bb7b65186a79_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5ffa085c8ae036cbb99db2ced173d6115352810043f23c6867db6c885947acda = $this->env->getExtension("native_profiler");
        $__internal_5ffa085c8ae036cbb99db2ced173d6115352810043f23c6867db6c885947acda->enter($__internal_5ffa085c8ae036cbb99db2ced173d6115352810043f23c6867db6c885947acda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plaque"]) ? $context["plaque"] : $this->getContext($context, "plaque")));
        foreach ($context['_seq'] as $context["_key"] => $context["laplaque"]) {
            // line 6
            echo "
            <h2>Plaque :  ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["laplaque"], "nom", array()), "html", null, true);
            echo "</h2>

            <div>
                    Identifiant : ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["laplaque"], "id", array()), "html", null, true);
            echo "
                    </br>
                    Longeur : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["laplaque"], "largeur", array()), "html", null, true);
            echo " cm(s)
                    </br>
                    Largueur : ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["laplaque"], "longueur", array()), "html", null, true);
            echo " cm(s))
                    </br>
                    Nombre de trous : ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["laplaque"], "nombreTrous", array()), "html", null, true);
            echo "
                    </br>
                    Longueur texte : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["laplaque"], "longueurMarquage", array()), "html", null, true);
            echo " cm(s))
                    </br>
                    Largueur texte : ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["laplaque"], "largeurMarquage", array()), "html", null, true);
            echo " cm(s))
                    </br>
                    Date Création : ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["laplaque"], "dateCreation", array()), "Y-m-d"), "html", null, true);
            echo "
                    </br>

            </div>

            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devis_ajout", array("id" => $this->getAttribute($context["laplaque"], "id", array()))), "html", null, true);
            echo "\">Ajoutez cette plaque a un devis</a>
            </br>
            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plaque_supprime", array("id" => $this->getAttribute($context["laplaque"], "id", array()))), "html", null, true);
            echo "\">Supprimer cette plaque</a>
            </br>
            <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("plaque_platform");
            echo "\">Retour à la liste de plaques</a>
            </br>
            <a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("accueil_platform");
            echo "\">ACCUEIL</a>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laplaque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
";
        
        $__internal_5ffa085c8ae036cbb99db2ced173d6115352810043f23c6867db6c885947acda->leave($__internal_5ffa085c8ae036cbb99db2ced173d6115352810043f23c6867db6c885947acda_prof);

    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Plaque:single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 36,  109 => 33,  104 => 31,  99 => 29,  94 => 27,  86 => 22,  81 => 20,  76 => 18,  71 => 16,  66 => 14,  61 => 12,  56 => 10,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     {% for laplaque in plaque %}*/
/* */
/*             <h2>Plaque :  {{ laplaque.nom }}</h2>*/
/* */
/*             <div>*/
/*                     Identifiant : {{ laplaque.id }}*/
/*                     </br>*/
/*                     Longeur : {{ laplaque.largeur }} cm(s)*/
/*                     </br>*/
/*                     Largueur : {{ laplaque.longueur }} cm(s))*/
/*                     </br>*/
/*                     Nombre de trous : {{ laplaque.nombreTrous }}*/
/*                     </br>*/
/*                     Longueur texte : {{ laplaque.longueurMarquage }} cm(s))*/
/*                     </br>*/
/*                     Largueur texte : {{ laplaque.largeurMarquage }} cm(s))*/
/*                     </br>*/
/*                     Date Création : {{ laplaque.dateCreation |date('Y-m-d') }}*/
/*                     </br>*/
/* */
/*             </div>*/
/* */
/*             <a href="{{ path('devis_ajout',{'id':laplaque.id}) }}">Ajoutez cette plaque a un devis</a>*/
/*             </br>*/
/*             <a href="{{ path('plaque_supprime',{'id':laplaque.id}) }}">Supprimer cette plaque</a>*/
/*             </br>*/
/*             <a href="{{ path('plaque_platform') }}">Retour à la liste de plaques</a>*/
/*             </br>*/
/*             <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/* */
/*     {% endfor%}*/
/* */
/* {% endblock%}*/
/* */
