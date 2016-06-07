<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8c2451a8c4ae672db7a7834d7c9eb8b35a1228a7cc609fb86b4c8e1ed3855600 extends Twig_Template
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
        $__internal_0e9759bf9d0d693d18c521ae0b44b452668aef3ff878536b1f15b9944ba0d4fd = $this->env->getExtension("native_profiler");
        $__internal_0e9759bf9d0d693d18c521ae0b44b452668aef3ff878536b1f15b9944ba0d4fd->enter($__internal_0e9759bf9d0d693d18c521ae0b44b452668aef3ff878536b1f15b9944ba0d4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0e9759bf9d0d693d18c521ae0b44b452668aef3ff878536b1f15b9944ba0d4fd->leave($__internal_0e9759bf9d0d693d18c521ae0b44b452668aef3ff878536b1f15b9944ba0d4fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
