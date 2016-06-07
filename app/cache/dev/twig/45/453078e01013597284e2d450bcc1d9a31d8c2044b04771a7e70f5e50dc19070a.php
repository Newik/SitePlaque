<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_90c4864d1771d9dc161498c5345e06752439f79554cd5660f6fc2b50113c83bd extends Twig_Template
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
        $__internal_7e2551bb594ff33ad2f4d40027e3ac58c7183dafc26f627aa29ea6ba2602be1b = $this->env->getExtension("native_profiler");
        $__internal_7e2551bb594ff33ad2f4d40027e3ac58c7183dafc26f627aa29ea6ba2602be1b->enter($__internal_7e2551bb594ff33ad2f4d40027e3ac58c7183dafc26f627aa29ea6ba2602be1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_7e2551bb594ff33ad2f4d40027e3ac58c7183dafc26f627aa29ea6ba2602be1b->leave($__internal_7e2551bb594ff33ad2f4d40027e3ac58c7183dafc26f627aa29ea6ba2602be1b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
