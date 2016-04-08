<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_275187f9131dcd5b173a7c76ed6333670f9c97442d7eabdfa344f9904fa00bd4 extends Twig_Template
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
        $__internal_d168b71d1cd53d22d5ad67e93bf12cc5be2c3af62e2f5844872629088dcd29bc = $this->env->getExtension("native_profiler");
        $__internal_d168b71d1cd53d22d5ad67e93bf12cc5be2c3af62e2f5844872629088dcd29bc->enter($__internal_d168b71d1cd53d22d5ad67e93bf12cc5be2c3af62e2f5844872629088dcd29bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d168b71d1cd53d22d5ad67e93bf12cc5be2c3af62e2f5844872629088dcd29bc->leave($__internal_d168b71d1cd53d22d5ad67e93bf12cc5be2c3af62e2f5844872629088dcd29bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39f6f3e9e8b66b7b7dcaa3bc1d25600ccd633037a6fd2d4c1b7ecda0d4703cfe = $this->env->getExtension("native_profiler");
        $__internal_39f6f3e9e8b66b7b7dcaa3bc1d25600ccd633037a6fd2d4c1b7ecda0d4703cfe->enter($__internal_39f6f3e9e8b66b7b7dcaa3bc1d25600ccd633037a6fd2d4c1b7ecda0d4703cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39f6f3e9e8b66b7b7dcaa3bc1d25600ccd633037a6fd2d4c1b7ecda0d4703cfe->leave($__internal_39f6f3e9e8b66b7b7dcaa3bc1d25600ccd633037a6fd2d4c1b7ecda0d4703cfe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_304658de47fa069e17bf1a6fe1322e2116dc2ddaea19da03475e9dc99c44c04e = $this->env->getExtension("native_profiler");
        $__internal_304658de47fa069e17bf1a6fe1322e2116dc2ddaea19da03475e9dc99c44c04e->enter($__internal_304658de47fa069e17bf1a6fe1322e2116dc2ddaea19da03475e9dc99c44c04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_304658de47fa069e17bf1a6fe1322e2116dc2ddaea19da03475e9dc99c44c04e->leave($__internal_304658de47fa069e17bf1a6fe1322e2116dc2ddaea19da03475e9dc99c44c04e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_151b74461d34fc2921d5f9c9905052d2c1ca1870dfa0c2f03c2f4d36cb1490cc = $this->env->getExtension("native_profiler");
        $__internal_151b74461d34fc2921d5f9c9905052d2c1ca1870dfa0c2f03c2f4d36cb1490cc->enter($__internal_151b74461d34fc2921d5f9c9905052d2c1ca1870dfa0c2f03c2f4d36cb1490cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_151b74461d34fc2921d5f9c9905052d2c1ca1870dfa0c2f03c2f4d36cb1490cc->leave($__internal_151b74461d34fc2921d5f9c9905052d2c1ca1870dfa0c2f03c2f4d36cb1490cc_prof);

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
