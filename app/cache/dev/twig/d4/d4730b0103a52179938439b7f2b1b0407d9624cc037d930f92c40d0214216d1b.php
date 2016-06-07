<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_ab4ebfebb8d913f97bf7d907f0cba6fa573579be3a7d61e594a6443999965f1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_e2574e4c7ce261d13462b6a068ad4c441c515fef353d869badc247765b59ea23 = $this->env->getExtension("native_profiler");
        $__internal_e2574e4c7ce261d13462b6a068ad4c441c515fef353d869badc247765b59ea23->enter($__internal_e2574e4c7ce261d13462b6a068ad4c441c515fef353d869badc247765b59ea23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2574e4c7ce261d13462b6a068ad4c441c515fef353d869badc247765b59ea23->leave($__internal_e2574e4c7ce261d13462b6a068ad4c441c515fef353d869badc247765b59ea23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73ff03b18ce45882de732257e640cba123024b6c4d4c70122496739ccbce7530 = $this->env->getExtension("native_profiler");
        $__internal_73ff03b18ce45882de732257e640cba123024b6c4d4c70122496739ccbce7530->enter($__internal_73ff03b18ce45882de732257e640cba123024b6c4d4c70122496739ccbce7530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_73ff03b18ce45882de732257e640cba123024b6c4d4c70122496739ccbce7530->leave($__internal_73ff03b18ce45882de732257e640cba123024b6c4d4c70122496739ccbce7530_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
