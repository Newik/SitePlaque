<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_827e2aed2f334a10091d6137b02dc2d4778e7df2b002a52b37e48b9c84bc38de extends Twig_Template
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
        $__internal_3649a5a437c1e260abae92a71a41c3a31dd6beddcba0e203260480bc90a24c46 = $this->env->getExtension("native_profiler");
        $__internal_3649a5a437c1e260abae92a71a41c3a31dd6beddcba0e203260480bc90a24c46->enter($__internal_3649a5a437c1e260abae92a71a41c3a31dd6beddcba0e203260480bc90a24c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3649a5a437c1e260abae92a71a41c3a31dd6beddcba0e203260480bc90a24c46->leave($__internal_3649a5a437c1e260abae92a71a41c3a31dd6beddcba0e203260480bc90a24c46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
