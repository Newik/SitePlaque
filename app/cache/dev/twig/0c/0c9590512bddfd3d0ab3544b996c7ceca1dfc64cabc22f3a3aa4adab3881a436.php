<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_344ca8c402fcea85f0e452b8c6dcc3db6e0b003cf31442da361a8891d0c28ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_b4105cc4c3fc0f2379e9fa87785b5f89ebde0b9864c8f02e00cc6f3e17b35059 = $this->env->getExtension("native_profiler");
        $__internal_b4105cc4c3fc0f2379e9fa87785b5f89ebde0b9864c8f02e00cc6f3e17b35059->enter($__internal_b4105cc4c3fc0f2379e9fa87785b5f89ebde0b9864c8f02e00cc6f3e17b35059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4105cc4c3fc0f2379e9fa87785b5f89ebde0b9864c8f02e00cc6f3e17b35059->leave($__internal_b4105cc4c3fc0f2379e9fa87785b5f89ebde0b9864c8f02e00cc6f3e17b35059_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_123de63d81a78b00cca898d2e4571d27e36340bcd193d8b5fb603695b59fc81f = $this->env->getExtension("native_profiler");
        $__internal_123de63d81a78b00cca898d2e4571d27e36340bcd193d8b5fb603695b59fc81f->enter($__internal_123de63d81a78b00cca898d2e4571d27e36340bcd193d8b5fb603695b59fc81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_123de63d81a78b00cca898d2e4571d27e36340bcd193d8b5fb603695b59fc81f->leave($__internal_123de63d81a78b00cca898d2e4571d27e36340bcd193d8b5fb603695b59fc81f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
