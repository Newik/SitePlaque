<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_d96caa522ade2c05f6b35a6497974609c0d156af4f63b3427937dd43a5905702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_e7d3436d7650e984c9a6de435e5b36e24cfb83b16a3a65148ce256525dc621c9 = $this->env->getExtension("native_profiler");
        $__internal_e7d3436d7650e984c9a6de435e5b36e24cfb83b16a3a65148ce256525dc621c9->enter($__internal_e7d3436d7650e984c9a6de435e5b36e24cfb83b16a3a65148ce256525dc621c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d3436d7650e984c9a6de435e5b36e24cfb83b16a3a65148ce256525dc621c9->leave($__internal_e7d3436d7650e984c9a6de435e5b36e24cfb83b16a3a65148ce256525dc621c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fc49a77a7e7144135b9837f2d887924f577a6dff82701dcc3f2066d68d59c55 = $this->env->getExtension("native_profiler");
        $__internal_4fc49a77a7e7144135b9837f2d887924f577a6dff82701dcc3f2066d68d59c55->enter($__internal_4fc49a77a7e7144135b9837f2d887924f577a6dff82701dcc3f2066d68d59c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_4fc49a77a7e7144135b9837f2d887924f577a6dff82701dcc3f2066d68d59c55->leave($__internal_4fc49a77a7e7144135b9837f2d887924f577a6dff82701dcc3f2066d68d59c55_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
