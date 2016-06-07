<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_877feeac25dc1c0e3e529774cd640d979c0da0e2c6337f5345e943017e139568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_5d91fcf6fda9aa2f04007837c6c9d7f69137d379333dc044b4996309735e4c44 = $this->env->getExtension("native_profiler");
        $__internal_5d91fcf6fda9aa2f04007837c6c9d7f69137d379333dc044b4996309735e4c44->enter($__internal_5d91fcf6fda9aa2f04007837c6c9d7f69137d379333dc044b4996309735e4c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d91fcf6fda9aa2f04007837c6c9d7f69137d379333dc044b4996309735e4c44->leave($__internal_5d91fcf6fda9aa2f04007837c6c9d7f69137d379333dc044b4996309735e4c44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f09e50b887e907819e0db5b7549b3618b25fcf92cba702e0e63ebd7be19385a = $this->env->getExtension("native_profiler");
        $__internal_4f09e50b887e907819e0db5b7549b3618b25fcf92cba702e0e63ebd7be19385a->enter($__internal_4f09e50b887e907819e0db5b7549b3618b25fcf92cba702e0e63ebd7be19385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_4f09e50b887e907819e0db5b7549b3618b25fcf92cba702e0e63ebd7be19385a->leave($__internal_4f09e50b887e907819e0db5b7549b3618b25fcf92cba702e0e63ebd7be19385a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
