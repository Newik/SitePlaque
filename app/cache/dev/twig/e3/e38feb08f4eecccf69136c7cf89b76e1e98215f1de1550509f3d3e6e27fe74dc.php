<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5aa4d7e7169142ead41591da4af99ba70a3ec0a1edbd0fa36843898e8991c523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b73a935c3f8224fb3154d5d3784f43297adfaf63d0d574944767f48cc4afe3e8 = $this->env->getExtension("native_profiler");
        $__internal_b73a935c3f8224fb3154d5d3784f43297adfaf63d0d574944767f48cc4afe3e8->enter($__internal_b73a935c3f8224fb3154d5d3784f43297adfaf63d0d574944767f48cc4afe3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b73a935c3f8224fb3154d5d3784f43297adfaf63d0d574944767f48cc4afe3e8->leave($__internal_b73a935c3f8224fb3154d5d3784f43297adfaf63d0d574944767f48cc4afe3e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e3866f5a72fd4c645ab605a138d2b2c6f2c15308707061fa2f13e13a2b7743c = $this->env->getExtension("native_profiler");
        $__internal_2e3866f5a72fd4c645ab605a138d2b2c6f2c15308707061fa2f13e13a2b7743c->enter($__internal_2e3866f5a72fd4c645ab605a138d2b2c6f2c15308707061fa2f13e13a2b7743c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e3866f5a72fd4c645ab605a138d2b2c6f2c15308707061fa2f13e13a2b7743c->leave($__internal_2e3866f5a72fd4c645ab605a138d2b2c6f2c15308707061fa2f13e13a2b7743c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f59c0b981a2d60949df82bb22f39647f10e92a117f5b7e42b1125b490b1d8480 = $this->env->getExtension("native_profiler");
        $__internal_f59c0b981a2d60949df82bb22f39647f10e92a117f5b7e42b1125b490b1d8480->enter($__internal_f59c0b981a2d60949df82bb22f39647f10e92a117f5b7e42b1125b490b1d8480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f59c0b981a2d60949df82bb22f39647f10e92a117f5b7e42b1125b490b1d8480->leave($__internal_f59c0b981a2d60949df82bb22f39647f10e92a117f5b7e42b1125b490b1d8480_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed1ddb86c4e7c66c40d81f87f62a772b9e47c7d082f501cd95eea2ab2c8ba088 = $this->env->getExtension("native_profiler");
        $__internal_ed1ddb86c4e7c66c40d81f87f62a772b9e47c7d082f501cd95eea2ab2c8ba088->enter($__internal_ed1ddb86c4e7c66c40d81f87f62a772b9e47c7d082f501cd95eea2ab2c8ba088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed1ddb86c4e7c66c40d81f87f62a772b9e47c7d082f501cd95eea2ab2c8ba088->leave($__internal_ed1ddb86c4e7c66c40d81f87f62a772b9e47c7d082f501cd95eea2ab2c8ba088_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
