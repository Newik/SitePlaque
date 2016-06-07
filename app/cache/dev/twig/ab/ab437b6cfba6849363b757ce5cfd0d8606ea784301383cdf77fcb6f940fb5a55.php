<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cac06a18e948c5046c515167f39558236b819bb5e6fcbff5a8bf3d9f6fd9d00a extends Twig_Template
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
        $__internal_caa2d441c006fbebfe4614c0a436d5cca213ee61b04f621d5c0860a8e2a9dbc0 = $this->env->getExtension("native_profiler");
        $__internal_caa2d441c006fbebfe4614c0a436d5cca213ee61b04f621d5c0860a8e2a9dbc0->enter($__internal_caa2d441c006fbebfe4614c0a436d5cca213ee61b04f621d5c0860a8e2a9dbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_caa2d441c006fbebfe4614c0a436d5cca213ee61b04f621d5c0860a8e2a9dbc0->leave($__internal_caa2d441c006fbebfe4614c0a436d5cca213ee61b04f621d5c0860a8e2a9dbc0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
