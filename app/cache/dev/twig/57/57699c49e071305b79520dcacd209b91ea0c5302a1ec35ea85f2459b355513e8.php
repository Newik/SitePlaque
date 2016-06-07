<?php

/* @SitePlaque/Plaque/add.html.twig */
class __TwigTemplate_e2c027e1c66240ef4ba7758e5aaeb6f2ac262738497b891d95f58d1d53e8888d extends Twig_Template
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
        $__internal_ec8aaf4ec5c722c6e1a5bb0a004e0e5282e5782578bd814a9f6936c0440c9160 = $this->env->getExtension("native_profiler");
        $__internal_ec8aaf4ec5c722c6e1a5bb0a004e0e5282e5782578bd814a9f6936c0440c9160->enter($__internal_ec8aaf4ec5c722c6e1a5bb0a004e0e5282e5782578bd814a9f6936c0440c9160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitePlaque/Plaque/add.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec8aaf4ec5c722c6e1a5bb0a004e0e5282e5782578bd814a9f6936c0440c9160->leave($__internal_ec8aaf4ec5c722c6e1a5bb0a004e0e5282e5782578bd814a9f6936c0440c9160_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_be8eec16263853ddbc16adc503a961ab15dba456966b03312985bd6c87bd39a6 = $this->env->getExtension("native_profiler");
        $__internal_be8eec16263853ddbc16adc503a961ab15dba456966b03312985bd6c87bd39a6->enter($__internal_be8eec16263853ddbc16adc503a961ab15dba456966b03312985bd6c87bd39a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <h1>Choisissez les paramètres de votre plaque</h1>


    <h2>Création de votre plaque</h2>

    <!--formulaire de la plaque -->

    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("plaque_creation");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
        echo "

        <input type=\"submit\" class=\"btn btn-success\" />
    </form>


";
        
        $__internal_be8eec16263853ddbc16adc503a961ab15dba456966b03312985bd6c87bd39a6->leave($__internal_be8eec16263853ddbc16adc503a961ab15dba456966b03312985bd6c87bd39a6_prof);

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
        return array (  64 => 17,  60 => 16,  53 => 14,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
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
