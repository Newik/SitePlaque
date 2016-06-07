<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_06d781492c78c149a4b8adfb31bd75bad76af06bd9bf233599f533d1cd68a227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_e1a7b877ddde8d046b0498af0c4758abbf168f9c8f4e7443c46d8688ab3b279a = $this->env->getExtension("native_profiler");
        $__internal_e1a7b877ddde8d046b0498af0c4758abbf168f9c8f4e7443c46d8688ab3b279a->enter($__internal_e1a7b877ddde8d046b0498af0c4758abbf168f9c8f4e7443c46d8688ab3b279a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1a7b877ddde8d046b0498af0c4758abbf168f9c8f4e7443c46d8688ab3b279a->leave($__internal_e1a7b877ddde8d046b0498af0c4758abbf168f9c8f4e7443c46d8688ab3b279a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09ee0f851865a6c340475375e0aaf9c0cf22216cad36223665c521c5dcdef8ed = $this->env->getExtension("native_profiler");
        $__internal_09ee0f851865a6c340475375e0aaf9c0cf22216cad36223665c521c5dcdef8ed->enter($__internal_09ee0f851865a6c340475375e0aaf9c0cf22216cad36223665c521c5dcdef8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_09ee0f851865a6c340475375e0aaf9c0cf22216cad36223665c521c5dcdef8ed->leave($__internal_09ee0f851865a6c340475375e0aaf9c0cf22216cad36223665c521c5dcdef8ed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
