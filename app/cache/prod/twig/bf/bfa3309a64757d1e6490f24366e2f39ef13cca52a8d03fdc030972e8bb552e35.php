<?php

/* @SitePlaque/Plaque/add.html.twig */
class __TwigTemplate_90bd2e959bd1a30faa66e65a33393f152afdd56e7c07a2a7f672d3513adf5308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Plaque/add.html.twig", 1);
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
    <h1>Choisissez les paramètres de votre plaque</h1>


    <h2>Création de votre plaque</h2>

    <!--formulaire de la plaque -->

    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("plaque_creation");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">

        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'row');
        echo "

        <input type=\"submit\" class=\"btn btn-success\" />
    </form>


";
    }

    public function getTemplateName()
    {
        return "@SitePlaque/Plaque/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  44 => 14,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <h1>Choisissez les paramètres de votre plaque</h1>*/
/* */
/* */
/*     <h2>Création de votre plaque</h2>*/
/* */
/*     <!--formulaire de la plaque -->*/
/* */
/*     <form action="{{ path('plaque_creation') }}" method="post" {{ form_enctype(form) }}>*/
/* */
/*         {{ form_errors(form) }}*/
/*         {{ form_row(form) }}*/
/* */
/*         <input type="submit" class="btn btn-success" />*/
/*     </form>*/
/* */
/* */
/* {% endblock %}*/
