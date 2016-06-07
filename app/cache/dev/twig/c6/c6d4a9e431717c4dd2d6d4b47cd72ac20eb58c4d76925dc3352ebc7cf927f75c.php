<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0c2ce594df1d4801f4f0622950354493be443ebd161a496920ccbdbc84219dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8f487857fa5e98811d69a16c3ea89bc4436ac5c1af8bd154636dcb8477f05a30 = $this->env->getExtension("native_profiler");
        $__internal_8f487857fa5e98811d69a16c3ea89bc4436ac5c1af8bd154636dcb8477f05a30->enter($__internal_8f487857fa5e98811d69a16c3ea89bc4436ac5c1af8bd154636dcb8477f05a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f487857fa5e98811d69a16c3ea89bc4436ac5c1af8bd154636dcb8477f05a30->leave($__internal_8f487857fa5e98811d69a16c3ea89bc4436ac5c1af8bd154636dcb8477f05a30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65c39f3f47acdc8c386ca63416792842739fde2faf17652371ef7b6ed45c5bc6 = $this->env->getExtension("native_profiler");
        $__internal_65c39f3f47acdc8c386ca63416792842739fde2faf17652371ef7b6ed45c5bc6->enter($__internal_65c39f3f47acdc8c386ca63416792842739fde2faf17652371ef7b6ed45c5bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_65c39f3f47acdc8c386ca63416792842739fde2faf17652371ef7b6ed45c5bc6->leave($__internal_65c39f3f47acdc8c386ca63416792842739fde2faf17652371ef7b6ed45c5bc6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
