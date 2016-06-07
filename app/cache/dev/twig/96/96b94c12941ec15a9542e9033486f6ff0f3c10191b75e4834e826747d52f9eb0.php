<?php

/* @SitePlaque/Plaque/delete.html.twig */
class __TwigTemplate_c8643458c84a83a257f0a959cf5584abab6cab2c4a99c382e8a6fe08f7a678e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Plaque/delete.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e56cb29385fab97178a3403f10d92486fcc8ae498e0d4d8d6efafeb870b2a8db = $this->env->getExtension("native_profiler");
        $__internal_e56cb29385fab97178a3403f10d92486fcc8ae498e0d4d8d6efafeb870b2a8db->enter($__internal_e56cb29385fab97178a3403f10d92486fcc8ae498e0d4d8d6efafeb870b2a8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitePlaque/Plaque/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e56cb29385fab97178a3403f10d92486fcc8ae498e0d4d8d6efafeb870b2a8db->leave($__internal_e56cb29385fab97178a3403f10d92486fcc8ae498e0d4d8d6efafeb870b2a8db_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_be66f1d0ed58b4d69db21d38cc9a00037d03025bdc5aa0ffd498d6fcdfffd119 = $this->env->getExtension("native_profiler");
        $__internal_be66f1d0ed58b4d69db21d38cc9a00037d03025bdc5aa0ffd498d6fcdfffd119->enter($__internal_be66f1d0ed58b4d69db21d38cc9a00037d03025bdc5aa0ffd498d6fcdfffd119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "


        <h2> Plaque supprimée !!! </h2>



";
        
        $__internal_be66f1d0ed58b4d69db21d38cc9a00037d03025bdc5aa0ffd498d6fcdfffd119->leave($__internal_be66f1d0ed58b4d69db21d38cc9a00037d03025bdc5aa0ffd498d6fcdfffd119_prof);

    }

    public function getTemplateName()
    {
        return "@SitePlaque/Plaque/delete.html.twig";
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
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* */
/* */
/*         <h2> Plaque supprimée !!! </h2>*/
/* */
/* */
/* */
/* {% endblock%}*/
