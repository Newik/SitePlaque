<?php

/* SitePlaqueBundle:Admin:utilisateurs.html.twig */
class __TwigTemplate_fb8d5bc8f4be8a376a13e11edf8ee30d9a438a9b54e8eb50e4e3cc65890386e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Admin:utilisateurs.html.twig", 1);
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
        $__internal_2cb4011630bb03bc47111690f36bb6bbd73b86a2cad466e64bdfd9c85f3e0929 = $this->env->getExtension("native_profiler");
        $__internal_2cb4011630bb03bc47111690f36bb6bbd73b86a2cad466e64bdfd9c85f3e0929->enter($__internal_2cb4011630bb03bc47111690f36bb6bbd73b86a2cad466e64bdfd9c85f3e0929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Admin:utilisateurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cb4011630bb03bc47111690f36bb6bbd73b86a2cad466e64bdfd9c85f3e0929->leave($__internal_2cb4011630bb03bc47111690f36bb6bbd73b86a2cad466e64bdfd9c85f3e0929_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a39780f446a612d5bd431cded8d16d76675c645d2fbd7960369a8e0fb9e7b2fb = $this->env->getExtension("native_profiler");
        $__internal_a39780f446a612d5bd431cded8d16d76675c645d2fbd7960369a8e0fb9e7b2fb->enter($__internal_a39780f446a612d5bd431cded8d16d76675c645d2fbd7960369a8e0fb9e7b2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <h2>Liste des Utilisateurs</h2>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 9
            echo "        </br>
        <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</p>
        </br>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "        <p>Aucun Utilisateur n'a été trouvé.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
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
        
        $__internal_a39780f446a612d5bd431cded8d16d76675c645d2fbd7960369a8e0fb9e7b2fb->leave($__internal_a39780f446a612d5bd431cded8d16d76675c645d2fbd7960369a8e0fb9e7b2fb_prof);

    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Admin:utilisateurs.html.twig";
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
/*     <h2>Liste des Utilisateurs</h2>*/
/* */
/*     {% for utilisateur in utilisateurs %}*/
/*         </br>*/
/*         <p>{{ utilisateur.nom }}</p>*/
/*         <p>{{ utilisateur.prenom }}</p>*/
/*         </br>*/
/*     {% else %}*/
/*         <p>Aucun Utilisateur n'a été trouvé.</p>*/
/*     {% endfor %}*/
/* */
/*     <div>*/
/* */
/*         <a href="{{ path('accueil_platform') }}">accueil</a>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
