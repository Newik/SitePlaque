<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_14aac127aa7668f30819290e55497c6febd0bf3a7e27bb1120f7d92e530507fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_0877724c52bd0d354ee5dab8655ca1d7b5b760c8ff980d537fb4febbbe444845 = $this->env->getExtension("native_profiler");
        $__internal_0877724c52bd0d354ee5dab8655ca1d7b5b760c8ff980d537fb4febbbe444845->enter($__internal_0877724c52bd0d354ee5dab8655ca1d7b5b760c8ff980d537fb4febbbe444845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0877724c52bd0d354ee5dab8655ca1d7b5b760c8ff980d537fb4febbbe444845->leave($__internal_0877724c52bd0d354ee5dab8655ca1d7b5b760c8ff980d537fb4febbbe444845_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e6d4ccd399c7774f1163b5d61ea35e657530bf1e77f987448b650b41c72e212 = $this->env->getExtension("native_profiler");
        $__internal_9e6d4ccd399c7774f1163b5d61ea35e657530bf1e77f987448b650b41c72e212->enter($__internal_9e6d4ccd399c7774f1163b5d61ea35e657530bf1e77f987448b650b41c72e212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9e6d4ccd399c7774f1163b5d61ea35e657530bf1e77f987448b650b41c72e212->leave($__internal_9e6d4ccd399c7774f1163b5d61ea35e657530bf1e77f987448b650b41c72e212_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
