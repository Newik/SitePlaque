<?php

/* @SitePlaque/Devis/index.html.twig */
class __TwigTemplate_6a4db80533684a16ba7bef5f5b1f6dbb6d4730d0c7f0c59903810344981a9b93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Devis/index.html.twig", 1);
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
        $__internal_fd29c3ae0c487da432a0315a77d54df26d7d40853ae57bd8870df804ea6df849 = $this->env->getExtension("native_profiler");
        $__internal_fd29c3ae0c487da432a0315a77d54df26d7d40853ae57bd8870df804ea6df849->enter($__internal_fd29c3ae0c487da432a0315a77d54df26d7d40853ae57bd8870df804ea6df849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitePlaque/Devis/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd29c3ae0c487da432a0315a77d54df26d7d40853ae57bd8870df804ea6df849->leave($__internal_fd29c3ae0c487da432a0315a77d54df26d7d40853ae57bd8870df804ea6df849_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e87a3fd1681e0525d5bf3f1b54c3835c28fdf4b7b92eca37084f7a6f40e8ce61 = $this->env->getExtension("native_profiler");
        $__internal_e87a3fd1681e0525d5bf3f1b54c3835c28fdf4b7b92eca37084f7a6f40e8ce61->enter($__internal_e87a3fd1681e0525d5bf3f1b54c3835c28fdf4b7b92eca37084f7a6f40e8ce61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<h1>Devis</h1>


<h2>Liste des devis</h2>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devis"]) ? $context["devis"] : $this->getContext($context, "devis")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["undevis"]) {
            // line 10
            echo "    </br>
    <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["undevis"], "nom", array()), "html", null, true);
            echo "</p>
    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devis_view", array("id" => $this->getAttribute($context["undevis"], "id", array()))), "html", null, true);
            echo "\">Voir les détails du devis</a>
    </br>
    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devis_supprime", array("id" => $this->getAttribute($context["undevis"], "id", array()))), "html", null, true);
            echo "\">Supprimer le devis</a>
    </br>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "    <p>Aucun devis n'a été trouvé.</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['undevis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
<div>

    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">accueil</a>

</div>

";
        
        $__internal_e87a3fd1681e0525d5bf3f1b54c3835c28fdf4b7b92eca37084f7a6f40e8ce61->leave($__internal_e87a3fd1681e0525d5bf3f1b54c3835c28fdf4b7b92eca37084f7a6f40e8ce61_prof);

    }

    public function getTemplateName()
    {
        return "@SitePlaque/Devis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  79 => 19,  72 => 17,  64 => 14,  59 => 12,  55 => 11,  52 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* <h1>Devis</h1>*/
/* */
/* */
/* <h2>Liste des devis</h2>*/
/* {% for undevis in devis %}*/
/*     </br>*/
/*     <p>{{ undevis.nom }}</p>*/
/*     <a href="{{ path('devis_view',{'id' : undevis.id}) }}">Voir les détails du devis</a>*/
/*     </br>*/
/*     <a href="{{ path('devis_supprime',{'id': undevis.id}) }}">Supprimer le devis</a>*/
/*     </br>*/
/* {% else %}*/
/*     <p>Aucun devis n'a été trouvé.</p>*/
/* {% endfor %}*/
/* */
/* <div>*/
/* */
/*     <a href="{{ path('accueil_platform') }}">accueil</a>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
