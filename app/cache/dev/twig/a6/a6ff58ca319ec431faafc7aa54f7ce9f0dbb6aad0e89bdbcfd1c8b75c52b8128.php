<?php

/* SitePlaqueBundle:Plaque:delete.html.twig */
class __TwigTemplate_dccf7411ccc065a1101bf6541fbf99e4839275e3855d0eb3fd8546a950ca2073 extends Twig_Template
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
        $__internal_7d0603d509a6099ce35f56f09ec9a1c4a3575a2230c4a4c925c735d13723406e = $this->env->getExtension("native_profiler");
        $__internal_7d0603d509a6099ce35f56f09ec9a1c4a3575a2230c4a4c925c735d13723406e->enter($__internal_7d0603d509a6099ce35f56f09ec9a1c4a3575a2230c4a4c925c735d13723406e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Plaque:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d0603d509a6099ce35f56f09ec9a1c4a3575a2230c4a4c925c735d13723406e->leave($__internal_7d0603d509a6099ce35f56f09ec9a1c4a3575a2230c4a4c925c735d13723406e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_563fb70e90081ebe16059e432a85702e378182033932f5baad269c6544ba9298 = $this->env->getExtension("native_profiler");
        $__internal_563fb70e90081ebe16059e432a85702e378182033932f5baad269c6544ba9298->enter($__internal_563fb70e90081ebe16059e432a85702e378182033932f5baad269c6544ba9298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "


        <h2> Plaque supprimée !!! </h2>



";
        
        $__internal_563fb70e90081ebe16059e432a85702e378182033932f5baad269c6544ba9298->leave($__internal_563fb70e90081ebe16059e432a85702e378182033932f5baad269c6544ba9298_prof);

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
