<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_ca4b89ead570a12ce5a76b0a47f7c1682f07c9c51febfbd18ed6ab771c35da4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a3888888c8b08594fa8cce427cdb00a82b26481ee4921d7ef4ac6baaf7edcfe = $this->env->getExtension("native_profiler");
        $__internal_2a3888888c8b08594fa8cce427cdb00a82b26481ee4921d7ef4ac6baaf7edcfe->enter($__internal_2a3888888c8b08594fa8cce427cdb00a82b26481ee4921d7ef4ac6baaf7edcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a3888888c8b08594fa8cce427cdb00a82b26481ee4921d7ef4ac6baaf7edcfe->leave($__internal_2a3888888c8b08594fa8cce427cdb00a82b26481ee4921d7ef4ac6baaf7edcfe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e9fc8b2d5735208cded182c47dac528422d484789c772a886d11d3691727df6 = $this->env->getExtension("native_profiler");
        $__internal_7e9fc8b2d5735208cded182c47dac528422d484789c772a886d11d3691727df6->enter($__internal_7e9fc8b2d5735208cded182c47dac528422d484789c772a886d11d3691727df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_7e9fc8b2d5735208cded182c47dac528422d484789c772a886d11d3691727df6->leave($__internal_7e9fc8b2d5735208cded182c47dac528422d484789c772a886d11d3691727df6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
