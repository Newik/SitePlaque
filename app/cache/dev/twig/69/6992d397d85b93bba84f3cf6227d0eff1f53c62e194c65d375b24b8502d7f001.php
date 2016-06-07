<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_fe041fae9b98da1aed3524207715d57af830c7d2b71901503441e472d39269c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f13eb889a56ae9c6e7cc7516cd039889a329089783587cef3ee7cd65eafb4cb3 = $this->env->getExtension("native_profiler");
        $__internal_f13eb889a56ae9c6e7cc7516cd039889a329089783587cef3ee7cd65eafb4cb3->enter($__internal_f13eb889a56ae9c6e7cc7516cd039889a329089783587cef3ee7cd65eafb4cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f13eb889a56ae9c6e7cc7516cd039889a329089783587cef3ee7cd65eafb4cb3->leave($__internal_f13eb889a56ae9c6e7cc7516cd039889a329089783587cef3ee7cd65eafb4cb3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31df0640b7ea7c56bb2f77d08bb20a6a98ca257d56a95aab039c62bd98307ca4 = $this->env->getExtension("native_profiler");
        $__internal_31df0640b7ea7c56bb2f77d08bb20a6a98ca257d56a95aab039c62bd98307ca4->enter($__internal_31df0640b7ea7c56bb2f77d08bb20a6a98ca257d56a95aab039c62bd98307ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_31df0640b7ea7c56bb2f77d08bb20a6a98ca257d56a95aab039c62bd98307ca4->leave($__internal_31df0640b7ea7c56bb2f77d08bb20a6a98ca257d56a95aab039c62bd98307ca4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
