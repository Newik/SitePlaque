<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5bde4be79c7737c43706ee722f7ae13867495771614bceb9c83bae5e03174d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3412a3642cd994308fb8fecbd79f7f6fb0d0ddf7577f3b81494b7f2e206e9b8b = $this->env->getExtension("native_profiler");
        $__internal_3412a3642cd994308fb8fecbd79f7f6fb0d0ddf7577f3b81494b7f2e206e9b8b->enter($__internal_3412a3642cd994308fb8fecbd79f7f6fb0d0ddf7577f3b81494b7f2e206e9b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3412a3642cd994308fb8fecbd79f7f6fb0d0ddf7577f3b81494b7f2e206e9b8b->leave($__internal_3412a3642cd994308fb8fecbd79f7f6fb0d0ddf7577f3b81494b7f2e206e9b8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e930bab9443edf6c9315a567c3acca29d06321057f58e6583c7c6a7788cd2dd3 = $this->env->getExtension("native_profiler");
        $__internal_e930bab9443edf6c9315a567c3acca29d06321057f58e6583c7c6a7788cd2dd3->enter($__internal_e930bab9443edf6c9315a567c3acca29d06321057f58e6583c7c6a7788cd2dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e930bab9443edf6c9315a567c3acca29d06321057f58e6583c7c6a7788cd2dd3->leave($__internal_e930bab9443edf6c9315a567c3acca29d06321057f58e6583c7c6a7788cd2dd3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f29b5977b13018bc67b7eb14f7aba9f53d5b24c9a2e0c2cd4e8151f01df78b70 = $this->env->getExtension("native_profiler");
        $__internal_f29b5977b13018bc67b7eb14f7aba9f53d5b24c9a2e0c2cd4e8151f01df78b70->enter($__internal_f29b5977b13018bc67b7eb14f7aba9f53d5b24c9a2e0c2cd4e8151f01df78b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f29b5977b13018bc67b7eb14f7aba9f53d5b24c9a2e0c2cd4e8151f01df78b70->leave($__internal_f29b5977b13018bc67b7eb14f7aba9f53d5b24c9a2e0c2cd4e8151f01df78b70_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8305029891d8537dfc82bff34868162d3b716205557da6fb03aae65cd83632e2 = $this->env->getExtension("native_profiler");
        $__internal_8305029891d8537dfc82bff34868162d3b716205557da6fb03aae65cd83632e2->enter($__internal_8305029891d8537dfc82bff34868162d3b716205557da6fb03aae65cd83632e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8305029891d8537dfc82bff34868162d3b716205557da6fb03aae65cd83632e2->leave($__internal_8305029891d8537dfc82bff34868162d3b716205557da6fb03aae65cd83632e2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
