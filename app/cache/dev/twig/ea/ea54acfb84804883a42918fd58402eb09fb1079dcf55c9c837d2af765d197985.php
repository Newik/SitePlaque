<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_7682395a460d51798fd36415ce1de217ecf9d71448e4fe50ac0c1e838178d609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_dd5e58a95e2bad9e1e7a35276248918ae5e96fc5d01f19016d60d694d38b73d2 = $this->env->getExtension("native_profiler");
        $__internal_dd5e58a95e2bad9e1e7a35276248918ae5e96fc5d01f19016d60d694d38b73d2->enter($__internal_dd5e58a95e2bad9e1e7a35276248918ae5e96fc5d01f19016d60d694d38b73d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd5e58a95e2bad9e1e7a35276248918ae5e96fc5d01f19016d60d694d38b73d2->leave($__internal_dd5e58a95e2bad9e1e7a35276248918ae5e96fc5d01f19016d60d694d38b73d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_450e5e403595ed245b482316b23c2387deaaf60dd59dfd0afed15b24177f4d32 = $this->env->getExtension("native_profiler");
        $__internal_450e5e403595ed245b482316b23c2387deaaf60dd59dfd0afed15b24177f4d32->enter($__internal_450e5e403595ed245b482316b23c2387deaaf60dd59dfd0afed15b24177f4d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_450e5e403595ed245b482316b23c2387deaaf60dd59dfd0afed15b24177f4d32->leave($__internal_450e5e403595ed245b482316b23c2387deaaf60dd59dfd0afed15b24177f4d32_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
