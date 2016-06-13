<?php

/* SitePlaqueBundle:PrixUnitaire:edit.html.twig */
class __TwigTemplate_8c7ee4d7cde37498d36ae003acdf63420e31e22923ac5c0898f67da27b38ba60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:PrixUnitaire:edit.html.twig", 1);
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <h2>Modifier le tarif </h2>

<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_prix_edit", array("id" => $this->getAttribute((isset($context["prixunitaire"]) ? $context["prixunitaire"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo " <p>Euros</p>

    <input type=\"submit\" class=\"btn btn-success\">
    <form>

";
    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:PrixUnitaire:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  39 => 9,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <h2>Modifier le tarif </h2>*/
/* */
/* <form action="{{ path('admin_prix_edit', {'id': prixunitaire.id}) }}" method="POST">*/
/* */
/*     {{ form_rest(form) }} <p>Euros</p>*/
/* */
/*     <input type="submit" class="btn btn-success">*/
/*     <form>*/
/* */
/* {% endblock %}*/
