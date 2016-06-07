<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2e0add9f406d096dbf039ccf0238c631787c0f99ab7b1eb365253a4790b648b1 extends Twig_Template
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
        $__internal_a8ee22868c5e8cc60516def9661011e575dc6b605070f2908512e346291b5283 = $this->env->getExtension("native_profiler");
        $__internal_a8ee22868c5e8cc60516def9661011e575dc6b605070f2908512e346291b5283->enter($__internal_a8ee22868c5e8cc60516def9661011e575dc6b605070f2908512e346291b5283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a8ee22868c5e8cc60516def9661011e575dc6b605070f2908512e346291b5283->leave($__internal_a8ee22868c5e8cc60516def9661011e575dc6b605070f2908512e346291b5283_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
