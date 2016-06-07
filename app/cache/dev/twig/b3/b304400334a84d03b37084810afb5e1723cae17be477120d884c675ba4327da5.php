<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_11ab94c842d8c86256df0d8fd70b5c04f8502e4d7eacd735df88c65c9d4dbf9f extends Twig_Template
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
        $__internal_605c5ca25192715229bddfb8101b44dcfb5e36b47216941acabbf43048f7fdcd = $this->env->getExtension("native_profiler");
        $__internal_605c5ca25192715229bddfb8101b44dcfb5e36b47216941acabbf43048f7fdcd->enter($__internal_605c5ca25192715229bddfb8101b44dcfb5e36b47216941acabbf43048f7fdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_605c5ca25192715229bddfb8101b44dcfb5e36b47216941acabbf43048f7fdcd->leave($__internal_605c5ca25192715229bddfb8101b44dcfb5e36b47216941acabbf43048f7fdcd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a82a045743ee2bf1d1617d3b7bc3ada13caaaf3f492a2575d23889f623fbb82e = $this->env->getExtension("native_profiler");
        $__internal_a82a045743ee2bf1d1617d3b7bc3ada13caaaf3f492a2575d23889f623fbb82e->enter($__internal_a82a045743ee2bf1d1617d3b7bc3ada13caaaf3f492a2575d23889f623fbb82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a82a045743ee2bf1d1617d3b7bc3ada13caaaf3f492a2575d23889f623fbb82e->leave($__internal_a82a045743ee2bf1d1617d3b7bc3ada13caaaf3f492a2575d23889f623fbb82e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_726b0cf679f9d71646c1fc33031164bdafdd6868a30afae0da6cc4b3ecb83c58 = $this->env->getExtension("native_profiler");
        $__internal_726b0cf679f9d71646c1fc33031164bdafdd6868a30afae0da6cc4b3ecb83c58->enter($__internal_726b0cf679f9d71646c1fc33031164bdafdd6868a30afae0da6cc4b3ecb83c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_726b0cf679f9d71646c1fc33031164bdafdd6868a30afae0da6cc4b3ecb83c58->leave($__internal_726b0cf679f9d71646c1fc33031164bdafdd6868a30afae0da6cc4b3ecb83c58_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa5ffbf47c2c4e54e8a995ec416bce41ec0d6fe9c0e03fae76b7344797c5811f = $this->env->getExtension("native_profiler");
        $__internal_aa5ffbf47c2c4e54e8a995ec416bce41ec0d6fe9c0e03fae76b7344797c5811f->enter($__internal_aa5ffbf47c2c4e54e8a995ec416bce41ec0d6fe9c0e03fae76b7344797c5811f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_aa5ffbf47c2c4e54e8a995ec416bce41ec0d6fe9c0e03fae76b7344797c5811f->leave($__internal_aa5ffbf47c2c4e54e8a995ec416bce41ec0d6fe9c0e03fae76b7344797c5811f_prof);

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
