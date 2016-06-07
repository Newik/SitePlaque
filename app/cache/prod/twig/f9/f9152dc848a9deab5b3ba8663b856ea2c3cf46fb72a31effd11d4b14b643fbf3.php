<?php

/* SitePlaqueBundle:Plaque:delete.html.twig */
class __TwigTemplate_ce43f92cbea40315c293fd68bbcb583b022f90f0fd66269560c0d433ac3b7fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Plaque:delete.html.twig", 1);
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
        return "SitePlaqueBundle:Plaque:delete.html.twig";
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
