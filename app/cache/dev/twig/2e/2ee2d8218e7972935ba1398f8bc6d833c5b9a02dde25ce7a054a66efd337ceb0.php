<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_817e5d011d474ee39b408e219d309cef6ccf087589579050af1bd0084edfed27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6780aacaf3ed57260311bd13e14cb5496ccf6f2d803c3734719276a83fe34221 = $this->env->getExtension("native_profiler");
        $__internal_6780aacaf3ed57260311bd13e14cb5496ccf6f2d803c3734719276a83fe34221->enter($__internal_6780aacaf3ed57260311bd13e14cb5496ccf6f2d803c3734719276a83fe34221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6780aacaf3ed57260311bd13e14cb5496ccf6f2d803c3734719276a83fe34221->leave($__internal_6780aacaf3ed57260311bd13e14cb5496ccf6f2d803c3734719276a83fe34221_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e758d9aa3b1be90f34d0077509c37f4bce7ec418fb21c7c133eeb71fb7295505 = $this->env->getExtension("native_profiler");
        $__internal_e758d9aa3b1be90f34d0077509c37f4bce7ec418fb21c7c133eeb71fb7295505->enter($__internal_e758d9aa3b1be90f34d0077509c37f4bce7ec418fb21c7c133eeb71fb7295505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e758d9aa3b1be90f34d0077509c37f4bce7ec418fb21c7c133eeb71fb7295505->leave($__internal_e758d9aa3b1be90f34d0077509c37f4bce7ec418fb21c7c133eeb71fb7295505_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
