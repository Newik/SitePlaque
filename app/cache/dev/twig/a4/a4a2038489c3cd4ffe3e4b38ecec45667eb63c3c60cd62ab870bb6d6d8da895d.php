<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_68e46c7139c62fb273943459e67fc9b9c2901f81163ae8f2dbc0754207094e56 extends Twig_Template
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
        $__internal_0725a8b60770d4edf76049c8f3b078e1ca5e62c72e45400d6b82bc67177fe345 = $this->env->getExtension("native_profiler");
        $__internal_0725a8b60770d4edf76049c8f3b078e1ca5e62c72e45400d6b82bc67177fe345->enter($__internal_0725a8b60770d4edf76049c8f3b078e1ca5e62c72e45400d6b82bc67177fe345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0725a8b60770d4edf76049c8f3b078e1ca5e62c72e45400d6b82bc67177fe345->leave($__internal_0725a8b60770d4edf76049c8f3b078e1ca5e62c72e45400d6b82bc67177fe345_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
