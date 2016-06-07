<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e177fa471d750132a15821948d7a3a2c9aaa82e81b8bc93f22fbc24c6c3a8668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_1dbcc61d2b3f7e8136fc1c6daeca7ba963e6c06dbaf0e1d2caa9dd029e3fb13b = $this->env->getExtension("native_profiler");
        $__internal_1dbcc61d2b3f7e8136fc1c6daeca7ba963e6c06dbaf0e1d2caa9dd029e3fb13b->enter($__internal_1dbcc61d2b3f7e8136fc1c6daeca7ba963e6c06dbaf0e1d2caa9dd029e3fb13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dbcc61d2b3f7e8136fc1c6daeca7ba963e6c06dbaf0e1d2caa9dd029e3fb13b->leave($__internal_1dbcc61d2b3f7e8136fc1c6daeca7ba963e6c06dbaf0e1d2caa9dd029e3fb13b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5387654f8350a528d7290376322183c6af7a1cbeaa94f534ec803ed2de72a327 = $this->env->getExtension("native_profiler");
        $__internal_5387654f8350a528d7290376322183c6af7a1cbeaa94f534ec803ed2de72a327->enter($__internal_5387654f8350a528d7290376322183c6af7a1cbeaa94f534ec803ed2de72a327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5387654f8350a528d7290376322183c6af7a1cbeaa94f534ec803ed2de72a327->leave($__internal_5387654f8350a528d7290376322183c6af7a1cbeaa94f534ec803ed2de72a327_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
