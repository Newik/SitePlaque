<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_56ac1eb214d426ac3b8ff3ea9e000ae1d27377be1b985e7336949258ba8395da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_444a86f3dff080caa832d2f82ce24ed960c298fb16daca993613840eec66db29 = $this->env->getExtension("native_profiler");
        $__internal_444a86f3dff080caa832d2f82ce24ed960c298fb16daca993613840eec66db29->enter($__internal_444a86f3dff080caa832d2f82ce24ed960c298fb16daca993613840eec66db29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_444a86f3dff080caa832d2f82ce24ed960c298fb16daca993613840eec66db29->leave($__internal_444a86f3dff080caa832d2f82ce24ed960c298fb16daca993613840eec66db29_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_572798a5fe3b4764225199771b4237d1fb9826f25b3a2c10bf0a80664029a63e = $this->env->getExtension("native_profiler");
        $__internal_572798a5fe3b4764225199771b4237d1fb9826f25b3a2c10bf0a80664029a63e->enter($__internal_572798a5fe3b4764225199771b4237d1fb9826f25b3a2c10bf0a80664029a63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_572798a5fe3b4764225199771b4237d1fb9826f25b3a2c10bf0a80664029a63e->leave($__internal_572798a5fe3b4764225199771b4237d1fb9826f25b3a2c10bf0a80664029a63e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
