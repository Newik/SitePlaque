<?php

/* @SitePlaque/Plaque/edit.html.twig */
class __TwigTemplate_cb002d29400d1b098a15c5f8e93140d721836ca3d7dfe5857d1a387246b280c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Plaque/edit.html.twig", 1);
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
        $__internal_c59b99b8a554ed285aa331fea1c3bfbc883ae6fb02203293926e01768e1e26bd = $this->env->getExtension("native_profiler");
        $__internal_c59b99b8a554ed285aa331fea1c3bfbc883ae6fb02203293926e01768e1e26bd->enter($__internal_c59b99b8a554ed285aa331fea1c3bfbc883ae6fb02203293926e01768e1e26bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitePlaque/Plaque/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c59b99b8a554ed285aa331fea1c3bfbc883ae6fb02203293926e01768e1e26bd->leave($__internal_c59b99b8a554ed285aa331fea1c3bfbc883ae6fb02203293926e01768e1e26bd_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_68a6e6336ca383183304020c34f8418a705bea47e35d227f445f8cbe8aa13d34 = $this->env->getExtension("native_profiler");
        $__internal_68a6e6336ca383183304020c34f8418a705bea47e35d227f445f8cbe8aa13d34->enter($__internal_68a6e6336ca383183304020c34f8418a705bea47e35d227f445f8cbe8aa13d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <div>Modifiez votre plaque</div>
<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plaque_edit", array("id" => $this->getAttribute((isset($context["plaque"]) ? $context["plaque"] : $this->getContext($context, "plaque")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <input type=\"submit\">
    <form>

";
        
        $__internal_68a6e6336ca383183304020c34f8418a705bea47e35d227f445f8cbe8aa13d34->leave($__internal_68a6e6336ca383183304020c34f8418a705bea47e35d227f445f8cbe8aa13d34_prof);

    }

    public function getTemplateName()
    {
        return "@SitePlaque/Plaque/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block content %}*/
/* */
/*     <div>Modifiez votre plaque</div>*/
/* <form action="{{ path('plaque_edit', {'id':plaque.id}) }}" method="POST">*/
/* */
/*     {{ form_rest(form) }}*/
/* */
/*     <input type="submit">*/
/*     <form>*/
/* */
/* {% endblock %}*/
