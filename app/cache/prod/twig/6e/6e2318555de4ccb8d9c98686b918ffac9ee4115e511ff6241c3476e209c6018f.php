<?php

/* @SitePlaque/Plaque/delete.html.twig */
class __TwigTemplate_1a07c4cbd555bf98e14a57f7b22d2a2e7b71568bcca081b3555e819c9bfd3c44 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "


        <h2> Plaque supprimée !!! </h2>



";
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
        return array (  31 => 4,  28 => 3,  11 => 1,);
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
