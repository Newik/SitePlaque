<?php

/* SitePlaqueBundle:Plaque:edit.html.twig */
class __TwigTemplate_dfc4a44bc447660179f2dba8ceab25c328cc1a28f593f09d748fa129f43a3250 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Plaque:edit.html.twig", 1);
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
        $__internal_78395a24f947641e69bc0ece22f233e54df588c5e3fcb160e7907b2488fee8a3 = $this->env->getExtension("native_profiler");
        $__internal_78395a24f947641e69bc0ece22f233e54df588c5e3fcb160e7907b2488fee8a3->enter($__internal_78395a24f947641e69bc0ece22f233e54df588c5e3fcb160e7907b2488fee8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Plaque:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78395a24f947641e69bc0ece22f233e54df588c5e3fcb160e7907b2488fee8a3->leave($__internal_78395a24f947641e69bc0ece22f233e54df588c5e3fcb160e7907b2488fee8a3_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c999c1d3df83d5b9dd5639c506883f00080d04736f58b203b9fa65de2928e2c6 = $this->env->getExtension("native_profiler");
        $__internal_c999c1d3df83d5b9dd5639c506883f00080d04736f58b203b9fa65de2928e2c6->enter($__internal_c999c1d3df83d5b9dd5639c506883f00080d04736f58b203b9fa65de2928e2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c999c1d3df83d5b9dd5639c506883f00080d04736f58b203b9fa65de2928e2c6->leave($__internal_c999c1d3df83d5b9dd5639c506883f00080d04736f58b203b9fa65de2928e2c6_prof);

    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Plaque:edit.html.twig";
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
