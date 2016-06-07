<?php

/* SitePlaqueBundle:Admin:devis.html.twig */
class __TwigTemplate_e6719597f6551d44168c0d5eb822845fb734895d55772dc105b050d49a8df3c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Admin:devis.html.twig", 1);
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
        $__internal_33a3bdf1c1841ec5be898e0d44c01c7aae5a347d4886833378fe6ad41aadf6fb = $this->env->getExtension("native_profiler");
        $__internal_33a3bdf1c1841ec5be898e0d44c01c7aae5a347d4886833378fe6ad41aadf6fb->enter($__internal_33a3bdf1c1841ec5be898e0d44c01c7aae5a347d4886833378fe6ad41aadf6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Admin:devis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33a3bdf1c1841ec5be898e0d44c01c7aae5a347d4886833378fe6ad41aadf6fb->leave($__internal_33a3bdf1c1841ec5be898e0d44c01c7aae5a347d4886833378fe6ad41aadf6fb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_873df42844fa63bf2efec02a7a93a8b8be451d8e57e7098f06ea970ea97e3a59 = $this->env->getExtension("native_profiler");
        $__internal_873df42844fa63bf2efec02a7a93a8b8be451d8e57e7098f06ea970ea97e3a59->enter($__internal_873df42844fa63bf2efec02a7a93a8b8be451d8e57e7098f06ea970ea97e3a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_873df42844fa63bf2efec02a7a93a8b8be451d8e57e7098f06ea970ea97e3a59->leave($__internal_873df42844fa63bf2efec02a7a93a8b8be451d8e57e7098f06ea970ea97e3a59_prof);

    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Admin:devis.html.twig";
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
