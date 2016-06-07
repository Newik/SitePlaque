<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_22b7a068f1f184351bf43d297fbed73168cbd58dd5f9d9c3302c0dcc32d9bb31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_539bf4b7761b71ab97f588f9d3e82fd5385a844c20a842e3b34e7e520e11743f = $this->env->getExtension("native_profiler");
        $__internal_539bf4b7761b71ab97f588f9d3e82fd5385a844c20a842e3b34e7e520e11743f->enter($__internal_539bf4b7761b71ab97f588f9d3e82fd5385a844c20a842e3b34e7e520e11743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_539bf4b7761b71ab97f588f9d3e82fd5385a844c20a842e3b34e7e520e11743f->leave($__internal_539bf4b7761b71ab97f588f9d3e82fd5385a844c20a842e3b34e7e520e11743f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a8aee368ad8da64ac284d0e6bcf73f62f52456ea0e274b2a899d7653abe8df8 = $this->env->getExtension("native_profiler");
        $__internal_5a8aee368ad8da64ac284d0e6bcf73f62f52456ea0e274b2a899d7653abe8df8->enter($__internal_5a8aee368ad8da64ac284d0e6bcf73f62f52456ea0e274b2a899d7653abe8df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5a8aee368ad8da64ac284d0e6bcf73f62f52456ea0e274b2a899d7653abe8df8->leave($__internal_5a8aee368ad8da64ac284d0e6bcf73f62f52456ea0e274b2a899d7653abe8df8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
