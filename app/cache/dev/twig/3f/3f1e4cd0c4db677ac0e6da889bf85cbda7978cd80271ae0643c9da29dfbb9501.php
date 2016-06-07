<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_10a864463fb58d635ea12e611da1995042bfdf9ac53073de2ec9d3bea731cc17 extends Twig_Template
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
        $__internal_5613ab4cf0b815ce0156f0011ee6678cb32f9457db1cfb31e0c87bcaf34ec63c = $this->env->getExtension("native_profiler");
        $__internal_5613ab4cf0b815ce0156f0011ee6678cb32f9457db1cfb31e0c87bcaf34ec63c->enter($__internal_5613ab4cf0b815ce0156f0011ee6678cb32f9457db1cfb31e0c87bcaf34ec63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5613ab4cf0b815ce0156f0011ee6678cb32f9457db1cfb31e0c87bcaf34ec63c->leave($__internal_5613ab4cf0b815ce0156f0011ee6678cb32f9457db1cfb31e0c87bcaf34ec63c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
