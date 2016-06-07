<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5e401a95acf14a58cec9933b357fcd3cc0fe1f4b8e88e59f1c4ad543a8a5b53e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b7db0e7ce1e9000f66ceb17a4421827dbcb3cbfd46a8835c8e5d7f524780d5bf = $this->env->getExtension("native_profiler");
        $__internal_b7db0e7ce1e9000f66ceb17a4421827dbcb3cbfd46a8835c8e5d7f524780d5bf->enter($__internal_b7db0e7ce1e9000f66ceb17a4421827dbcb3cbfd46a8835c8e5d7f524780d5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7db0e7ce1e9000f66ceb17a4421827dbcb3cbfd46a8835c8e5d7f524780d5bf->leave($__internal_b7db0e7ce1e9000f66ceb17a4421827dbcb3cbfd46a8835c8e5d7f524780d5bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d1530af7e09a51de8e2d7f8226fc556998b5a5f9107593e4ea0a523cc53db16 = $this->env->getExtension("native_profiler");
        $__internal_3d1530af7e09a51de8e2d7f8226fc556998b5a5f9107593e4ea0a523cc53db16->enter($__internal_3d1530af7e09a51de8e2d7f8226fc556998b5a5f9107593e4ea0a523cc53db16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_3d1530af7e09a51de8e2d7f8226fc556998b5a5f9107593e4ea0a523cc53db16->leave($__internal_3d1530af7e09a51de8e2d7f8226fc556998b5a5f9107593e4ea0a523cc53db16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
