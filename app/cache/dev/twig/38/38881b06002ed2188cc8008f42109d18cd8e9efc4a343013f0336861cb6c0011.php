<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_1bd6d8ab0585660e806cbce0b4a32e142bcbbf55fdd93440555b88e2121b18f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_bf5285ee968ae0aa6fc6876f9ec702a5379655630715d31ae9dd8c15803b364d = $this->env->getExtension("native_profiler");
        $__internal_bf5285ee968ae0aa6fc6876f9ec702a5379655630715d31ae9dd8c15803b364d->enter($__internal_bf5285ee968ae0aa6fc6876f9ec702a5379655630715d31ae9dd8c15803b364d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf5285ee968ae0aa6fc6876f9ec702a5379655630715d31ae9dd8c15803b364d->leave($__internal_bf5285ee968ae0aa6fc6876f9ec702a5379655630715d31ae9dd8c15803b364d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fee69dd45c0b4f2047465547df3cf13ead6dc680eedbc8907172d5ab56625869 = $this->env->getExtension("native_profiler");
        $__internal_fee69dd45c0b4f2047465547df3cf13ead6dc680eedbc8907172d5ab56625869->enter($__internal_fee69dd45c0b4f2047465547df3cf13ead6dc680eedbc8907172d5ab56625869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fee69dd45c0b4f2047465547df3cf13ead6dc680eedbc8907172d5ab56625869->leave($__internal_fee69dd45c0b4f2047465547df3cf13ead6dc680eedbc8907172d5ab56625869_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
