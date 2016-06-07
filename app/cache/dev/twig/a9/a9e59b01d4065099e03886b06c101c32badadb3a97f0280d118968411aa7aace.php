<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_f1b1fba074093090d592b9b9d0bc74662af22d5d6eec0809778f069236c037f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_45cacb2c53e287d567e491298a7af2750e35972807ae379376062fa071506bc9 = $this->env->getExtension("native_profiler");
        $__internal_45cacb2c53e287d567e491298a7af2750e35972807ae379376062fa071506bc9->enter($__internal_45cacb2c53e287d567e491298a7af2750e35972807ae379376062fa071506bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45cacb2c53e287d567e491298a7af2750e35972807ae379376062fa071506bc9->leave($__internal_45cacb2c53e287d567e491298a7af2750e35972807ae379376062fa071506bc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e2816b2b0192fa8f2e2b65aa0cb891ae35344ac2bde67d4c559c89b4bd34ca3 = $this->env->getExtension("native_profiler");
        $__internal_4e2816b2b0192fa8f2e2b65aa0cb891ae35344ac2bde67d4c559c89b4bd34ca3->enter($__internal_4e2816b2b0192fa8f2e2b65aa0cb891ae35344ac2bde67d4c559c89b4bd34ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_4e2816b2b0192fa8f2e2b65aa0cb891ae35344ac2bde67d4c559c89b4bd34ca3->leave($__internal_4e2816b2b0192fa8f2e2b65aa0cb891ae35344ac2bde67d4c559c89b4bd34ca3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
