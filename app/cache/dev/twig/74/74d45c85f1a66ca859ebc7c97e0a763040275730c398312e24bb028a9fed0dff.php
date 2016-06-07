<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8e4d447b61ee400669805355ade19f4fe02a54c2a5de2a9419cb4016d4bb38bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a76c8b482217c3595612782caa1484a62ad92e455458a13e34f4bf6dbccf3f9 = $this->env->getExtension("native_profiler");
        $__internal_0a76c8b482217c3595612782caa1484a62ad92e455458a13e34f4bf6dbccf3f9->enter($__internal_0a76c8b482217c3595612782caa1484a62ad92e455458a13e34f4bf6dbccf3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0a76c8b482217c3595612782caa1484a62ad92e455458a13e34f4bf6dbccf3f9->leave($__internal_0a76c8b482217c3595612782caa1484a62ad92e455458a13e34f4bf6dbccf3f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
