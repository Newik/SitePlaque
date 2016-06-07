<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1969b1e62da369f32d07bf1c8ab6258f12fb92510ee12143002e90d4a0ad3efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4b1ee4e2967fe803af9b188070f2f378360740ccd0c61fafaa7bb1bd32c05182 = $this->env->getExtension("native_profiler");
        $__internal_4b1ee4e2967fe803af9b188070f2f378360740ccd0c61fafaa7bb1bd32c05182->enter($__internal_4b1ee4e2967fe803af9b188070f2f378360740ccd0c61fafaa7bb1bd32c05182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b1ee4e2967fe803af9b188070f2f378360740ccd0c61fafaa7bb1bd32c05182->leave($__internal_4b1ee4e2967fe803af9b188070f2f378360740ccd0c61fafaa7bb1bd32c05182_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2998df5b35109b52ba1899546060b0da07273ebf9a3a96b69c6bcadd7ec9e2f2 = $this->env->getExtension("native_profiler");
        $__internal_2998df5b35109b52ba1899546060b0da07273ebf9a3a96b69c6bcadd7ec9e2f2->enter($__internal_2998df5b35109b52ba1899546060b0da07273ebf9a3a96b69c6bcadd7ec9e2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2998df5b35109b52ba1899546060b0da07273ebf9a3a96b69c6bcadd7ec9e2f2->leave($__internal_2998df5b35109b52ba1899546060b0da07273ebf9a3a96b69c6bcadd7ec9e2f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
