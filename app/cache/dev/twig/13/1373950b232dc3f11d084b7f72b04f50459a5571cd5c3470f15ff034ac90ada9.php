<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f66d22fcb5a4cde94bc04685d22fa2fb84f8c79b9d5acba830cdaf6aa03d2374 extends Twig_Template
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
        $__internal_1fe6771429cdab85a8ceee2b2a0fc9e13e6c18dfab793d0739086760776c8949 = $this->env->getExtension("native_profiler");
        $__internal_1fe6771429cdab85a8ceee2b2a0fc9e13e6c18dfab793d0739086760776c8949->enter($__internal_1fe6771429cdab85a8ceee2b2a0fc9e13e6c18dfab793d0739086760776c8949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_1fe6771429cdab85a8ceee2b2a0fc9e13e6c18dfab793d0739086760776c8949->leave($__internal_1fe6771429cdab85a8ceee2b2a0fc9e13e6c18dfab793d0739086760776c8949_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
