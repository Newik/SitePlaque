<?php

/* @SitePlaque/Devis/delete.html.twig */
class __TwigTemplate_c702ee83d78a78bca95f5cf187a2ed83f8f47b1442d99d0bc1296afac19bf495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Devis/delete.html.twig", 1);
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
        $__internal_bb52bd0962d0ee0bdd9b6e463fd98bd6067e440f4f5fe7145460927c3982df38 = $this->env->getExtension("native_profiler");
        $__internal_bb52bd0962d0ee0bdd9b6e463fd98bd6067e440f4f5fe7145460927c3982df38->enter($__internal_bb52bd0962d0ee0bdd9b6e463fd98bd6067e440f4f5fe7145460927c3982df38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitePlaque/Devis/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb52bd0962d0ee0bdd9b6e463fd98bd6067e440f4f5fe7145460927c3982df38->leave($__internal_bb52bd0962d0ee0bdd9b6e463fd98bd6067e440f4f5fe7145460927c3982df38_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8393e9a9b92585bad115d3cd6d202dcf8b778cc4af327b63bd9beda5aa4d200c = $this->env->getExtension("native_profiler");
        $__internal_8393e9a9b92585bad115d3cd6d202dcf8b778cc4af327b63bd9beda5aa4d200c->enter($__internal_8393e9a9b92585bad115d3cd6d202dcf8b778cc4af327b63bd9beda5aa4d200c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "


    <h2> Devis supprimé !!! </h2>



";
        
        $__internal_8393e9a9b92585bad115d3cd6d202dcf8b778cc4af327b63bd9beda5aa4d200c->leave($__internal_8393e9a9b92585bad115d3cd6d202dcf8b778cc4af327b63bd9beda5aa4d200c_prof);

    }

    public function getTemplateName()
    {
        return "@SitePlaque/Devis/delete.html.twig";
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
/*     <h2> Devis supprimé !!! </h2>*/
/* */
/* */
/* */
/* {% endblock%}*/
