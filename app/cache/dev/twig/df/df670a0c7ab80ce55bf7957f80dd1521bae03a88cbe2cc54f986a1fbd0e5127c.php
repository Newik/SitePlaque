<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_6b29c4172b99e1c5a4f11417c4959229e03127238d4a71f85406038ef77000d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_4ba3a9e39c6c3098327a46895867a62a59eabe9961079e80576d7d2dd0eb577f = $this->env->getExtension("native_profiler");
        $__internal_4ba3a9e39c6c3098327a46895867a62a59eabe9961079e80576d7d2dd0eb577f->enter($__internal_4ba3a9e39c6c3098327a46895867a62a59eabe9961079e80576d7d2dd0eb577f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba3a9e39c6c3098327a46895867a62a59eabe9961079e80576d7d2dd0eb577f->leave($__internal_4ba3a9e39c6c3098327a46895867a62a59eabe9961079e80576d7d2dd0eb577f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c391c551737a31bb2315608bc7c2ad42b66ed944a0118626c59ee1e2873ea922 = $this->env->getExtension("native_profiler");
        $__internal_c391c551737a31bb2315608bc7c2ad42b66ed944a0118626c59ee1e2873ea922->enter($__internal_c391c551737a31bb2315608bc7c2ad42b66ed944a0118626c59ee1e2873ea922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_c391c551737a31bb2315608bc7c2ad42b66ed944a0118626c59ee1e2873ea922->leave($__internal_c391c551737a31bb2315608bc7c2ad42b66ed944a0118626c59ee1e2873ea922_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
