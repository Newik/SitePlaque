<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a3e0d8ba30f094c8e05937463f2ce0327ea49a67bf1f614f1be6d88d4576fd01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_8df9514ca7f89974a2d870ed305ca0410dac926673a9393b36b92e5a10dba11c = $this->env->getExtension("native_profiler");
        $__internal_8df9514ca7f89974a2d870ed305ca0410dac926673a9393b36b92e5a10dba11c->enter($__internal_8df9514ca7f89974a2d870ed305ca0410dac926673a9393b36b92e5a10dba11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8df9514ca7f89974a2d870ed305ca0410dac926673a9393b36b92e5a10dba11c->leave($__internal_8df9514ca7f89974a2d870ed305ca0410dac926673a9393b36b92e5a10dba11c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f34773116d55164b3e2074d2c6489b7e0b32a3cb2c1836a078d730a47461ab1 = $this->env->getExtension("native_profiler");
        $__internal_1f34773116d55164b3e2074d2c6489b7e0b32a3cb2c1836a078d730a47461ab1->enter($__internal_1f34773116d55164b3e2074d2c6489b7e0b32a3cb2c1836a078d730a47461ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1f34773116d55164b3e2074d2c6489b7e0b32a3cb2c1836a078d730a47461ab1->leave($__internal_1f34773116d55164b3e2074d2c6489b7e0b32a3cb2c1836a078d730a47461ab1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
