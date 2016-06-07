<?php

/* SitePlaqueBundle:Plaque:add.html.twig */
class __TwigTemplate_f50399daf850c470241c7db5d50c960da6e3c50fb7470a39ce6bc941af1134c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Plaque:add.html.twig", 1);
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
        $__internal_a116d9790bc4a2d137983acfa7cbd484c812b7357d0cf7fb0892d2f340b7fadb = $this->env->getExtension("native_profiler");
        $__internal_a116d9790bc4a2d137983acfa7cbd484c812b7357d0cf7fb0892d2f340b7fadb->enter($__internal_a116d9790bc4a2d137983acfa7cbd484c812b7357d0cf7fb0892d2f340b7fadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Plaque:add.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a116d9790bc4a2d137983acfa7cbd484c812b7357d0cf7fb0892d2f340b7fadb->leave($__internal_a116d9790bc4a2d137983acfa7cbd484c812b7357d0cf7fb0892d2f340b7fadb_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_67bf03ef3ad8772c6aab558fad3944db18253d420aa9130ea3588d12ff7d30ff = $this->env->getExtension("native_profiler");
        $__internal_67bf03ef3ad8772c6aab558fad3944db18253d420aa9130ea3588d12ff7d30ff->enter($__internal_67bf03ef3ad8772c6aab558fad3944db18253d420aa9130ea3588d12ff7d30ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_67bf03ef3ad8772c6aab558fad3944db18253d420aa9130ea3588d12ff7d30ff->leave($__internal_67bf03ef3ad8772c6aab558fad3944db18253d420aa9130ea3588d12ff7d30ff_prof);

    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Plaque:add.html.twig";
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
