<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_941d4e221fa1f239a12451fc32d532b0b363262c9bfcb2d50ebdc562fd03d09e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8990f1dd6a28f2c3f02df422d5295426053e3cacaa7609fa427fbc613c7fce24 = $this->env->getExtension("native_profiler");
        $__internal_8990f1dd6a28f2c3f02df422d5295426053e3cacaa7609fa427fbc613c7fce24->enter($__internal_8990f1dd6a28f2c3f02df422d5295426053e3cacaa7609fa427fbc613c7fce24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8990f1dd6a28f2c3f02df422d5295426053e3cacaa7609fa427fbc613c7fce24->leave($__internal_8990f1dd6a28f2c3f02df422d5295426053e3cacaa7609fa427fbc613c7fce24_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c4da0117c7716a5e0330cec9e88a1be7a31f3a785fe7188ad830d04a712fd60 = $this->env->getExtension("native_profiler");
        $__internal_2c4da0117c7716a5e0330cec9e88a1be7a31f3a785fe7188ad830d04a712fd60->enter($__internal_2c4da0117c7716a5e0330cec9e88a1be7a31f3a785fe7188ad830d04a712fd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2c4da0117c7716a5e0330cec9e88a1be7a31f3a785fe7188ad830d04a712fd60->leave($__internal_2c4da0117c7716a5e0330cec9e88a1be7a31f3a785fe7188ad830d04a712fd60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16e49a44336290a7f8a3f6dc405906e7fae1e74f17935fadafe43c72b60240e4 = $this->env->getExtension("native_profiler");
        $__internal_16e49a44336290a7f8a3f6dc405906e7fae1e74f17935fadafe43c72b60240e4->enter($__internal_16e49a44336290a7f8a3f6dc405906e7fae1e74f17935fadafe43c72b60240e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16e49a44336290a7f8a3f6dc405906e7fae1e74f17935fadafe43c72b60240e4->leave($__internal_16e49a44336290a7f8a3f6dc405906e7fae1e74f17935fadafe43c72b60240e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab115a272634010aef071a08bb86855c33c3fcde24008e969a5b593592a99f8c = $this->env->getExtension("native_profiler");
        $__internal_ab115a272634010aef071a08bb86855c33c3fcde24008e969a5b593592a99f8c->enter($__internal_ab115a272634010aef071a08bb86855c33c3fcde24008e969a5b593592a99f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ab115a272634010aef071a08bb86855c33c3fcde24008e969a5b593592a99f8c->leave($__internal_ab115a272634010aef071a08bb86855c33c3fcde24008e969a5b593592a99f8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
