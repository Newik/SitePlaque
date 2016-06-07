<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5fd449be6b536eb54a0db998d8cbad4e7c5776bb31f1dbd9c5e29800f2c65f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_6663f3c66afb3ff955f396f5c5e2efbf9fc1a9a071a85d32ced3a4a0392117ef = $this->env->getExtension("native_profiler");
        $__internal_6663f3c66afb3ff955f396f5c5e2efbf9fc1a9a071a85d32ced3a4a0392117ef->enter($__internal_6663f3c66afb3ff955f396f5c5e2efbf9fc1a9a071a85d32ced3a4a0392117ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6663f3c66afb3ff955f396f5c5e2efbf9fc1a9a071a85d32ced3a4a0392117ef->leave($__internal_6663f3c66afb3ff955f396f5c5e2efbf9fc1a9a071a85d32ced3a4a0392117ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e118e1b1f064d91ef16b7db7727d6861f5c2156fb27893e3d08fc188cc19ab46 = $this->env->getExtension("native_profiler");
        $__internal_e118e1b1f064d91ef16b7db7727d6861f5c2156fb27893e3d08fc188cc19ab46->enter($__internal_e118e1b1f064d91ef16b7db7727d6861f5c2156fb27893e3d08fc188cc19ab46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e118e1b1f064d91ef16b7db7727d6861f5c2156fb27893e3d08fc188cc19ab46->leave($__internal_e118e1b1f064d91ef16b7db7727d6861f5c2156fb27893e3d08fc188cc19ab46_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f2dd25e5e313ed0dc17a9cad6de1c99f95f6dc1da2b00fdab40ba22c3d5f821 = $this->env->getExtension("native_profiler");
        $__internal_2f2dd25e5e313ed0dc17a9cad6de1c99f95f6dc1da2b00fdab40ba22c3d5f821->enter($__internal_2f2dd25e5e313ed0dc17a9cad6de1c99f95f6dc1da2b00fdab40ba22c3d5f821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f2dd25e5e313ed0dc17a9cad6de1c99f95f6dc1da2b00fdab40ba22c3d5f821->leave($__internal_2f2dd25e5e313ed0dc17a9cad6de1c99f95f6dc1da2b00fdab40ba22c3d5f821_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_611ad45df0774fd75702596cc6ec11a932010a74860884bea66695f2e3ee5ab2 = $this->env->getExtension("native_profiler");
        $__internal_611ad45df0774fd75702596cc6ec11a932010a74860884bea66695f2e3ee5ab2->enter($__internal_611ad45df0774fd75702596cc6ec11a932010a74860884bea66695f2e3ee5ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_611ad45df0774fd75702596cc6ec11a932010a74860884bea66695f2e3ee5ab2->leave($__internal_611ad45df0774fd75702596cc6ec11a932010a74860884bea66695f2e3ee5ab2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
