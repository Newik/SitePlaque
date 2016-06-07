<?php

/* @User/Gestion/index.html.twig */
class __TwigTemplate_632f17039c04be6b98641ceadc2d567b45b326f696c079309cf16d23f540a7d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@User/Gestion/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fc7a790aca60f62bbbd4509c31e215d7a79ec3a2f610b4af6e8f4e5596224ad = $this->env->getExtension("native_profiler");
        $__internal_5fc7a790aca60f62bbbd4509c31e215d7a79ec3a2f610b4af6e8f4e5596224ad->enter($__internal_5fc7a790aca60f62bbbd4509c31e215d7a79ec3a2f610b4af6e8f4e5596224ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Gestion/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc7a790aca60f62bbbd4509c31e215d7a79ec3a2f610b4af6e8f4e5596224ad->leave($__internal_5fc7a790aca60f62bbbd4509c31e215d7a79ec3a2f610b4af6e8f4e5596224ad_prof);

    }

    public function getTemplateName()
    {
        return "@User/Gestion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* */
/* */
/* */
