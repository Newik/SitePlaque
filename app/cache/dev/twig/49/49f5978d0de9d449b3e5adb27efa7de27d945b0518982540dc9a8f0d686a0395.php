<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_e011cd955450776d4dcb2042c59b4f7e199a4c454c101d5c55f8d3f54eb3e8e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_db8bbf22ca1633d7bfa9ec64f5a6abd90a6381722586e464b3753822cbdcfa54 = $this->env->getExtension("native_profiler");
        $__internal_db8bbf22ca1633d7bfa9ec64f5a6abd90a6381722586e464b3753822cbdcfa54->enter($__internal_db8bbf22ca1633d7bfa9ec64f5a6abd90a6381722586e464b3753822cbdcfa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db8bbf22ca1633d7bfa9ec64f5a6abd90a6381722586e464b3753822cbdcfa54->leave($__internal_db8bbf22ca1633d7bfa9ec64f5a6abd90a6381722586e464b3753822cbdcfa54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90799a19e9c083cc2e74428216581af653bc551bcfb6d0abf874fba49d086dc0 = $this->env->getExtension("native_profiler");
        $__internal_90799a19e9c083cc2e74428216581af653bc551bcfb6d0abf874fba49d086dc0->enter($__internal_90799a19e9c083cc2e74428216581af653bc551bcfb6d0abf874fba49d086dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_90799a19e9c083cc2e74428216581af653bc551bcfb6d0abf874fba49d086dc0->leave($__internal_90799a19e9c083cc2e74428216581af653bc551bcfb6d0abf874fba49d086dc0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
