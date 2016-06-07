<?php

/* @User/Gestion/index.html.twig */
class __TwigTemplate_566d3cad2b7d409701c8da1471edb8f566883b0d1f5c2b68a40ce05fd3540e3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@User/Gestion/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@User/Gestion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* */
/* */
/* */
