<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_25a619e4a61b1df2119ce02ab2ded2b92c9871a85c02c64af11a1ad4015f6e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_4961efc0becacc1363d861ad59d4004eca699603d910fcf87325010b397f06e0 = $this->env->getExtension("native_profiler");
        $__internal_4961efc0becacc1363d861ad59d4004eca699603d910fcf87325010b397f06e0->enter($__internal_4961efc0becacc1363d861ad59d4004eca699603d910fcf87325010b397f06e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4961efc0becacc1363d861ad59d4004eca699603d910fcf87325010b397f06e0->leave($__internal_4961efc0becacc1363d861ad59d4004eca699603d910fcf87325010b397f06e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_086d442390ad01be8bb5cd192c19fba713f537d22a28f5e5b79c94cc0aecf710 = $this->env->getExtension("native_profiler");
        $__internal_086d442390ad01be8bb5cd192c19fba713f537d22a28f5e5b79c94cc0aecf710->enter($__internal_086d442390ad01be8bb5cd192c19fba713f537d22a28f5e5b79c94cc0aecf710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_086d442390ad01be8bb5cd192c19fba713f537d22a28f5e5b79c94cc0aecf710->leave($__internal_086d442390ad01be8bb5cd192c19fba713f537d22a28f5e5b79c94cc0aecf710_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
