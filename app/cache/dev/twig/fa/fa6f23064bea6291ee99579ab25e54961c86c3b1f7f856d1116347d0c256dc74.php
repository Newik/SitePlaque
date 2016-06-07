<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_f413ad581a80eb8d861cf4f9bc1f6b31a1fdf1997c1408d177cee2f67a18db43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d9a18318cd25ca5656fcc7e16a15a93d73eba461b8b4380f52cb01c7f3697102 = $this->env->getExtension("native_profiler");
        $__internal_d9a18318cd25ca5656fcc7e16a15a93d73eba461b8b4380f52cb01c7f3697102->enter($__internal_d9a18318cd25ca5656fcc7e16a15a93d73eba461b8b4380f52cb01c7f3697102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a18318cd25ca5656fcc7e16a15a93d73eba461b8b4380f52cb01c7f3697102->leave($__internal_d9a18318cd25ca5656fcc7e16a15a93d73eba461b8b4380f52cb01c7f3697102_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27a618e28142b9a32900baaf906299f9c0b025f014c6251571af56432935ebd7 = $this->env->getExtension("native_profiler");
        $__internal_27a618e28142b9a32900baaf906299f9c0b025f014c6251571af56432935ebd7->enter($__internal_27a618e28142b9a32900baaf906299f9c0b025f014c6251571af56432935ebd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_27a618e28142b9a32900baaf906299f9c0b025f014c6251571af56432935ebd7->leave($__internal_27a618e28142b9a32900baaf906299f9c0b025f014c6251571af56432935ebd7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
