<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8e1fb967b8f27b245cfa4905896ad4dd4afca46fca63bc7e7740d9a784e6df9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7ea63464af8de085f795ddad82a3be0e687e357c13d96a5be68227b21c25aec4 = $this->env->getExtension("native_profiler");
        $__internal_7ea63464af8de085f795ddad82a3be0e687e357c13d96a5be68227b21c25aec4->enter($__internal_7ea63464af8de085f795ddad82a3be0e687e357c13d96a5be68227b21c25aec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ea63464af8de085f795ddad82a3be0e687e357c13d96a5be68227b21c25aec4->leave($__internal_7ea63464af8de085f795ddad82a3be0e687e357c13d96a5be68227b21c25aec4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4b5c491d074270782dae7229db1169e10aa1ce47d07425d8e6de9d218e01ca6 = $this->env->getExtension("native_profiler");
        $__internal_e4b5c491d074270782dae7229db1169e10aa1ce47d07425d8e6de9d218e01ca6->enter($__internal_e4b5c491d074270782dae7229db1169e10aa1ce47d07425d8e6de9d218e01ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e4b5c491d074270782dae7229db1169e10aa1ce47d07425d8e6de9d218e01ca6->leave($__internal_e4b5c491d074270782dae7229db1169e10aa1ce47d07425d8e6de9d218e01ca6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bf090bf4e44458f23e64b92b8e03d4e056408bd8d6a2dbea0c71eb4ade76ff3 = $this->env->getExtension("native_profiler");
        $__internal_1bf090bf4e44458f23e64b92b8e03d4e056408bd8d6a2dbea0c71eb4ade76ff3->enter($__internal_1bf090bf4e44458f23e64b92b8e03d4e056408bd8d6a2dbea0c71eb4ade76ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1bf090bf4e44458f23e64b92b8e03d4e056408bd8d6a2dbea0c71eb4ade76ff3->leave($__internal_1bf090bf4e44458f23e64b92b8e03d4e056408bd8d6a2dbea0c71eb4ade76ff3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
