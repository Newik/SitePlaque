<?php

/* SitePlaqueBundle:Devis:delete.html.twig */
class __TwigTemplate_33cf9b06241ef82ee8e486f6b03023ea000eb16e0fc67ccead265f91755d85e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Devis:delete.html.twig", 1);
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
        $__internal_154a099fa267ebe654e02f49204ed3ed4a135a6f64beae527064d78d7fe9fdf1 = $this->env->getExtension("native_profiler");
        $__internal_154a099fa267ebe654e02f49204ed3ed4a135a6f64beae527064d78d7fe9fdf1->enter($__internal_154a099fa267ebe654e02f49204ed3ed4a135a6f64beae527064d78d7fe9fdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Devis:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_154a099fa267ebe654e02f49204ed3ed4a135a6f64beae527064d78d7fe9fdf1->leave($__internal_154a099fa267ebe654e02f49204ed3ed4a135a6f64beae527064d78d7fe9fdf1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a0e5337341b356a0cd4f97052c5160eda5941e5fb3d86af4dabdb022ec01ddb = $this->env->getExtension("native_profiler");
        $__internal_4a0e5337341b356a0cd4f97052c5160eda5941e5fb3d86af4dabdb022ec01ddb->enter($__internal_4a0e5337341b356a0cd4f97052c5160eda5941e5fb3d86af4dabdb022ec01ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "


    <h2> Devis supprimé !!! </h2>



";
        
        $__internal_4a0e5337341b356a0cd4f97052c5160eda5941e5fb3d86af4dabdb022ec01ddb->leave($__internal_4a0e5337341b356a0cd4f97052c5160eda5941e5fb3d86af4dabdb022ec01ddb_prof);

    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Devis:delete.html.twig";
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
