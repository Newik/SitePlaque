<?php

/* admin/Utilisateur/index.html.twig */
class __TwigTemplate_5ab64d0af5d86bb421833e9e15932509a4e1721c915b6afa6060e0630535ea1b extends Twig_Template
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
        $__internal_2c2aee592d7c4eb4c322ebc8fef1b536e70197052bab32ba8a0dab3ae1107898 = $this->env->getExtension("native_profiler");
        $__internal_2c2aee592d7c4eb4c322ebc8fef1b536e70197052bab32ba8a0dab3ae1107898->enter($__internal_2c2aee592d7c4eb4c322ebc8fef1b536e70197052bab32ba8a0dab3ae1107898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/Utilisateur/index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_2c2aee592d7c4eb4c322ebc8fef1b536e70197052bab32ba8a0dab3ae1107898->leave($__internal_2c2aee592d7c4eb4c322ebc8fef1b536e70197052bab32ba8a0dab3ae1107898_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_b3c43b4d2fe9f44f3ed0967dc26ec5028c5410b9cbeff15792cea18b7553052a = $this->env->getExtension("native_profiler");
        $__internal_b3c43b4d2fe9f44f3ed0967dc26ec5028c5410b9cbeff15792cea18b7553052a->enter($__internal_b3c43b4d2fe9f44f3ed0967dc26ec5028c5410b9cbeff15792cea18b7553052a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3c43b4d2fe9f44f3ed0967dc26ec5028c5410b9cbeff15792cea18b7553052a->leave($__internal_b3c43b4d2fe9f44f3ed0967dc26ec5028c5410b9cbeff15792cea18b7553052a_prof);

    }

    public function getTemplateName()
    {
        return "admin/Utilisateur/index.html.twig";
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
