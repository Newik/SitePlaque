<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_54444c8d1184c8c9f343563a01ba1503c2e75139550d594899c99a3d197bd63a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95ee3f615ae325a79904656eb21b7f39cd409d03df08ef4f9445d8e56dd86764 = $this->env->getExtension("native_profiler");
        $__internal_95ee3f615ae325a79904656eb21b7f39cd409d03df08ef4f9445d8e56dd86764->enter($__internal_95ee3f615ae325a79904656eb21b7f39cd409d03df08ef4f9445d8e56dd86764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_95ee3f615ae325a79904656eb21b7f39cd409d03df08ef4f9445d8e56dd86764->leave($__internal_95ee3f615ae325a79904656eb21b7f39cd409d03df08ef4f9445d8e56dd86764_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
