<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_0571e814453525fb72cfceebb66594dcf934881a5b5e4c55533aee30c31d7065 extends Twig_Template
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
        $__internal_e2da4fef67f909e125724a0980cac22e41baa175aca55ba9f4b48ae96c0b4ddf = $this->env->getExtension("native_profiler");
        $__internal_e2da4fef67f909e125724a0980cac22e41baa175aca55ba9f4b48ae96c0b4ddf->enter($__internal_e2da4fef67f909e125724a0980cac22e41baa175aca55ba9f4b48ae96c0b4ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_e2da4fef67f909e125724a0980cac22e41baa175aca55ba9f4b48ae96c0b4ddf->leave($__internal_e2da4fef67f909e125724a0980cac22e41baa175aca55ba9f4b48ae96c0b4ddf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
