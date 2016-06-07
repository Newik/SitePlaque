<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_600f54cbabb61d2f72ee23de43608b695d03bbb047592d4969415f6b72bc5f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_84a41b98c8d2bc0f870951c44e0b06c667fd4b6d5e84802d68eef08151c6338a = $this->env->getExtension("native_profiler");
        $__internal_84a41b98c8d2bc0f870951c44e0b06c667fd4b6d5e84802d68eef08151c6338a->enter($__internal_84a41b98c8d2bc0f870951c44e0b06c667fd4b6d5e84802d68eef08151c6338a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84a41b98c8d2bc0f870951c44e0b06c667fd4b6d5e84802d68eef08151c6338a->leave($__internal_84a41b98c8d2bc0f870951c44e0b06c667fd4b6d5e84802d68eef08151c6338a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f146efa54ee28a889377520bc64a6b4df604d05cb33f4d6131862fccf5e141a = $this->env->getExtension("native_profiler");
        $__internal_3f146efa54ee28a889377520bc64a6b4df604d05cb33f4d6131862fccf5e141a->enter($__internal_3f146efa54ee28a889377520bc64a6b4df604d05cb33f4d6131862fccf5e141a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_3f146efa54ee28a889377520bc64a6b4df604d05cb33f4d6131862fccf5e141a->leave($__internal_3f146efa54ee28a889377520bc64a6b4df604d05cb33f4d6131862fccf5e141a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
