<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_22a812473192ad7762aea5026efd9106432608a6965501424761c476d0c6626b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c7176ba3cde4768c16f3d52015773ac52707e7d97fca41cac02af7fed0bd189 = $this->env->getExtension("native_profiler");
        $__internal_4c7176ba3cde4768c16f3d52015773ac52707e7d97fca41cac02af7fed0bd189->enter($__internal_4c7176ba3cde4768c16f3d52015773ac52707e7d97fca41cac02af7fed0bd189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4c7176ba3cde4768c16f3d52015773ac52707e7d97fca41cac02af7fed0bd189->leave($__internal_4c7176ba3cde4768c16f3d52015773ac52707e7d97fca41cac02af7fed0bd189_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6f1ba5cd3832c3d104139b2bfdec5077d689ce4eaea0b3c2edcff882298bb91 = $this->env->getExtension("native_profiler");
        $__internal_a6f1ba5cd3832c3d104139b2bfdec5077d689ce4eaea0b3c2edcff882298bb91->enter($__internal_a6f1ba5cd3832c3d104139b2bfdec5077d689ce4eaea0b3c2edcff882298bb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a6f1ba5cd3832c3d104139b2bfdec5077d689ce4eaea0b3c2edcff882298bb91->leave($__internal_a6f1ba5cd3832c3d104139b2bfdec5077d689ce4eaea0b3c2edcff882298bb91_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
