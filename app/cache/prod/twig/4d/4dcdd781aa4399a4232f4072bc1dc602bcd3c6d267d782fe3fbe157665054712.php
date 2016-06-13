<?php

/* @SitePlaque/Admin/utilisateurs.html.twig */
class __TwigTemplate_4a7ca6c0ce6e93f191259cea0cfeae6474348e049d4c4830023ce6ecf5d173e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Admin/utilisateurs.html.twig", 1);
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

    <h2>Liste des Utilisateurs</h2>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : null));
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
        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_oneuser", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">Voir détail client</a>
        </br>
        </br>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_supprim_client", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">Supprimer client</a>
        </br>
        </br>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "        <p>Aucun Utilisateur n'a été trouvé.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div>

        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">accueil</a>

    </div>

";
    }

    public function getTemplateName()
    {
        return "@SitePlaque/Admin/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  76 => 22,  69 => 20,  60 => 16,  54 => 13,  49 => 11,  45 => 10,  42 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*         <a href="{{ path('admin_oneuser',{'id' : utilisateur.id}) }}">Voir détail client</a>*/
/*         </br>*/
/*         </br>*/
/*         <a href="{{ path('admin_supprim_client',{'id' : utilisateur.id}) }}">Supprimer client</a>*/
/*         </br>*/
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
