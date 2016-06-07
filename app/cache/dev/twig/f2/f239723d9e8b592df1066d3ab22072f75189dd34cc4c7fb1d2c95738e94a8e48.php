<?php

/* :admin/Utilisateur:index.html.twig */
class __TwigTemplate_7a89c204c58641fbfd226d503e4916978bb8126b62958cdeaac12ea7c24a37ac extends Twig_Template
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
        $__internal_83ae5c32db4160c866b5b4e3c2cd2845bb095e6d76ead0c4d198dfa56d83fa3b = $this->env->getExtension("native_profiler");
        $__internal_83ae5c32db4160c866b5b4e3c2cd2845bb095e6d76ead0c4d198dfa56d83fa3b->enter($__internal_83ae5c32db4160c866b5b4e3c2cd2845bb095e6d76ead0c4d198dfa56d83fa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/Utilisateur:index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_83ae5c32db4160c866b5b4e3c2cd2845bb095e6d76ead0c4d198dfa56d83fa3b->leave($__internal_83ae5c32db4160c866b5b4e3c2cd2845bb095e6d76ead0c4d198dfa56d83fa3b_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_35e7e5ac48e23eaeb1f0b5e7337a21c5999defaf27f92a42618e0405dfa95e00 = $this->env->getExtension("native_profiler");
        $__internal_35e7e5ac48e23eaeb1f0b5e7337a21c5999defaf27f92a42618e0405dfa95e00->enter($__internal_35e7e5ac48e23eaeb1f0b5e7337a21c5999defaf27f92a42618e0405dfa95e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayUtilisateurs"]) ? $context["arrayUtilisateurs"] : $this->getContext($context, "arrayUtilisateurs")));
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
        
        $__internal_35e7e5ac48e23eaeb1f0b5e7337a21c5999defaf27f92a42618e0405dfa95e00->leave($__internal_35e7e5ac48e23eaeb1f0b5e7337a21c5999defaf27f92a42618e0405dfa95e00_prof);

    }

    public function getTemplateName()
    {
        return ":admin/Utilisateur:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  83 => 22,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  47 => 12,  35 => 2,  23 => 1,);
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
