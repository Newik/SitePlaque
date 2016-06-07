<?php

/* UserBundle:Gestion:index.html.twig */
class __TwigTemplate_e09a4175ea5c0b5581b64b86455c0a03211c002d7c0e1c4c4902dd3c74d4b65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Gestion:index.html.twig", 1);
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
        return "UserBundle:Gestion:index.html.twig";
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
