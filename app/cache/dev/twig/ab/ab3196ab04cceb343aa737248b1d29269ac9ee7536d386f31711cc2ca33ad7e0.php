<?php

/* @SitePlaque/Admin/devis.html.twig */
class __TwigTemplate_12b8b783174688776ae199d92562da99becd9c34411a0b0f00ca13094e547bd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Admin/devis.html.twig", 1);
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
        $__internal_b80ffcd0c45d689a8568fb53b9eb5a0d89cfee473d9399eb4d91bec863897b80 = $this->env->getExtension("native_profiler");
        $__internal_b80ffcd0c45d689a8568fb53b9eb5a0d89cfee473d9399eb4d91bec863897b80->enter($__internal_b80ffcd0c45d689a8568fb53b9eb5a0d89cfee473d9399eb4d91bec863897b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitePlaque/Admin/devis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b80ffcd0c45d689a8568fb53b9eb5a0d89cfee473d9399eb4d91bec863897b80->leave($__internal_b80ffcd0c45d689a8568fb53b9eb5a0d89cfee473d9399eb4d91bec863897b80_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_430e6143d729efcbafb27665fc5cea93863ad75e7943fee204f7030363dd5dd3 = $this->env->getExtension("native_profiler");
        $__internal_430e6143d729efcbafb27665fc5cea93863ad75e7943fee204f7030363dd5dd3->enter($__internal_430e6143d729efcbafb27665fc5cea93863ad75e7943fee204f7030363dd5dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <h2>Liste des Devis</h2>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")));
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
        
        $__internal_430e6143d729efcbafb27665fc5cea93863ad75e7943fee204f7030363dd5dd3->leave($__internal_430e6143d729efcbafb27665fc5cea93863ad75e7943fee204f7030363dd5dd3_prof);

    }

    public function getTemplateName()
    {
        return "@SitePlaque/Admin/devis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  73 => 16,  66 => 14,  58 => 11,  54 => 10,  51 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
