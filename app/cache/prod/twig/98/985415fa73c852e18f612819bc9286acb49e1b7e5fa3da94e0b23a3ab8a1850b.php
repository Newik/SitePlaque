<?php

/* :admin/Utilisateur:edit.html.twig */
class __TwigTemplate_a893a64849eed1d953238314cbe30406cb2233f8c0902a986f587ba28817680a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/Utilisateur:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id", array())) {
            // line 5
            echo "        ";
            $this->displayParentBlock("title", $context, $blocks);
            echo " - Modification du client ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            $this->displayParentBlock("title", $context, $blocks);
            echo " - Ajout d'un client
    ";
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <form action=\"";
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modification_client", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id", array()))), "html", null, true);
            echo "
    ";
        } else {
            // line 13
            echo $this->env->getExtension('routing')->getPath("inscription_client");
        }
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "nomClient", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "prenomClient", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "raisonSociale", array()), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "siret", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email", array()), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "tel", array()), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "login", array()), 'row');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "mdp", array()), 'row');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        <input type=\"submit\" id=\"submit\" value=\"";
        // line 26
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id", array())) {
            echo "Valider";
        } else {
            echo "Ajouter";
        }
        echo "\" name=\"submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return ":admin/Utilisateur:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 26,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  68 => 14,  61 => 13,  54 => 12,  51 => 11,  43 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {% if client.id %}*/
/*         {{ parent() }} - Modification du client {{ client.id }}*/
/*     {% else %}*/
/*         {{ parent() }} - Ajout d'un client*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <form action="{% if client.id %}{{ path('modification_client', { 'id':client.id }) }}*/
/*     {% else %}{{ path('inscription_client') }}{% endif %}" method="post" {{ form_enctype(form) }}>*/
/*         {{ form_errors(form) }}*/
/* */
/*         {{ form_row(client.nomClient) }}*/
/*         {{ form_row(client.prenomClient) }}*/
/*         {{ form_row(client.raisonSociale) }}*/
/*         {{ form_row(client.siret) }}*/
/*         {{ form_row(client.email) }}*/
/*         {{ form_row(client.tel) }}*/
/*         {{ form_row(client.login) }}*/
/*         {{ form_row(client.mdp) }}*/
/*         {{ form_rest(form) }}*/
/* */
/*         <input type="submit" id="submit" value="{% if client.id %}{{ 'Valider'}}{% else %}{{ 'Ajouter'}}{% endif %}" name="submit" />*/
/*     </form>*/
/* {% endblock %}*/
