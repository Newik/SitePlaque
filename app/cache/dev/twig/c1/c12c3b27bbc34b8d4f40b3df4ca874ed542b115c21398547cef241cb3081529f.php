<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f3f62ca3fd581715c8edd8f306d4dc98715c3e45aa521ae412a6cd012ddf61b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_7a68eaa3e836902361efdae61fe3586dd79df76f87ccdaee770016f65e5edad5 = $this->env->getExtension("native_profiler");
        $__internal_7a68eaa3e836902361efdae61fe3586dd79df76f87ccdaee770016f65e5edad5->enter($__internal_7a68eaa3e836902361efdae61fe3586dd79df76f87ccdaee770016f65e5edad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a68eaa3e836902361efdae61fe3586dd79df76f87ccdaee770016f65e5edad5->leave($__internal_7a68eaa3e836902361efdae61fe3586dd79df76f87ccdaee770016f65e5edad5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df7487169ecc598e95e0647a7207bcc4de0eab8962f58021ce9151e4d876b473 = $this->env->getExtension("native_profiler");
        $__internal_df7487169ecc598e95e0647a7207bcc4de0eab8962f58021ce9151e4d876b473->enter($__internal_df7487169ecc598e95e0647a7207bcc4de0eab8962f58021ce9151e4d876b473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_df7487169ecc598e95e0647a7207bcc4de0eab8962f58021ce9151e4d876b473->leave($__internal_df7487169ecc598e95e0647a7207bcc4de0eab8962f58021ce9151e4d876b473_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_96ba084fc5fe394650eb606eb2a9d4fe99234a88d647b70486ee9660f4e8c907 = $this->env->getExtension("native_profiler");
        $__internal_96ba084fc5fe394650eb606eb2a9d4fe99234a88d647b70486ee9660f4e8c907->enter($__internal_96ba084fc5fe394650eb606eb2a9d4fe99234a88d647b70486ee9660f4e8c907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_96ba084fc5fe394650eb606eb2a9d4fe99234a88d647b70486ee9660f4e8c907->leave($__internal_96ba084fc5fe394650eb606eb2a9d4fe99234a88d647b70486ee9660f4e8c907_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
