<?php

/* admin/Utilisateur/index.html.twig */
class __TwigTemplate_b3e8f933773484a6f386bce524d6d18c4002acaebe1816648dc8698f817b649b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "    <h1>Liste des clients</h1>

    <table>
        <thead>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Entreprise</th>
        <th>Siret</th>
        <th>Téléphone</th>
        </thead>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayUtilisateurs"]) ? $context["arrayUtilisateurs"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            echo " <!-- for qui va lister les colonnes du tableau -->
        <body>
        <tr id=\"row-";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "Id", array()), "html", null, true);
            echo "\">
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</td>
            <td >";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "raisonSociale", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "siret", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "tel", array()), "html", null, true);
            echo "</td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "            <tr><td>Aucun client n'a été trouvé.</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </body>
    </table>

";
    }

    public function getTemplateName()
    {
        return "admin/Utilisateur/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  74 => 22,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  38 => 12,  26 => 2,  20 => 1,);
    }
}
/* {% block body %}*/
/*     <h1>Liste des clients</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*         <th>Nom</th>*/
/*         <th>Prénom</th>*/
/*         <th>Entreprise</th>*/
/*         <th>Siret</th>*/
/*         <th>Téléphone</th>*/
/*         </thead>*/
/*         {% for utilisateur in arrayUtilisateurs %} <!-- for qui va lister les colonnes du tableau -->*/
/*         <body>*/
/*         <tr id="row-{{ utilisateur.Id }}">*/
/*             <td>{{ utilisateur.nom }}</td>*/
/*             <td>{{ utilisateur.prenom }}</td>*/
/*             <td >{{ utilisateur.raisonSociale }}</td>*/
/*             <td>{{ utilisateur.siret }}</td>*/
/*             <td>{{ utilisateur.tel }}</td>*/
/*         </tr>*/
/*         {% else %}*/
/*             <tr><td>Aucun client n'a été trouvé.</td></tr>*/
/*         {% endfor %}*/
/*         </body>*/
/*     </table>*/
/* */
/* {% endblock %}*/
