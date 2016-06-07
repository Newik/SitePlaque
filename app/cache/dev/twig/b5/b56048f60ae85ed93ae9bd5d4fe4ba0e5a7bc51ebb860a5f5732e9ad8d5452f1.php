<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7fcc1b99fad5b785d62fa30c882873b4a803b679d2c9d17ae83e9a33c6cac2b9 extends Twig_Template
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
        $__internal_e426536aab24c5cce766800c53fba20df902c2ac5f4328c8082fbefcc1d030f1 = $this->env->getExtension("native_profiler");
        $__internal_e426536aab24c5cce766800c53fba20df902c2ac5f4328c8082fbefcc1d030f1->enter($__internal_e426536aab24c5cce766800c53fba20df902c2ac5f4328c8082fbefcc1d030f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e426536aab24c5cce766800c53fba20df902c2ac5f4328c8082fbefcc1d030f1->leave($__internal_e426536aab24c5cce766800c53fba20df902c2ac5f4328c8082fbefcc1d030f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
