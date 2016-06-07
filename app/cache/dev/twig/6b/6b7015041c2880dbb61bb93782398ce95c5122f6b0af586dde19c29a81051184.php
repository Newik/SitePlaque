<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_c31918b9337b6359ee902ab82fb38b9d0e4377197e6ea79d1c65eda121572f1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_5993cf056ab1be9d783a0c79d8d0c01ba3c91f35fbcc4c4b498ecf5d19c882c9 = $this->env->getExtension("native_profiler");
        $__internal_5993cf056ab1be9d783a0c79d8d0c01ba3c91f35fbcc4c4b498ecf5d19c882c9->enter($__internal_5993cf056ab1be9d783a0c79d8d0c01ba3c91f35fbcc4c4b498ecf5d19c882c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5993cf056ab1be9d783a0c79d8d0c01ba3c91f35fbcc4c4b498ecf5d19c882c9->leave($__internal_5993cf056ab1be9d783a0c79d8d0c01ba3c91f35fbcc4c4b498ecf5d19c882c9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ffcff37621ee246c18365fdf07894781fb7757b7af153e50d74fdeac3423b15 = $this->env->getExtension("native_profiler");
        $__internal_8ffcff37621ee246c18365fdf07894781fb7757b7af153e50d74fdeac3423b15->enter($__internal_8ffcff37621ee246c18365fdf07894781fb7757b7af153e50d74fdeac3423b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8ffcff37621ee246c18365fdf07894781fb7757b7af153e50d74fdeac3423b15->leave($__internal_8ffcff37621ee246c18365fdf07894781fb7757b7af153e50d74fdeac3423b15_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
