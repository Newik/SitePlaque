<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_1d56cf8f534dc355e90124aec0b31fbab178960d10b7ad67e3ed2edd8f6f7216 extends Twig_Template
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
        $__internal_b6a4bf9d1bbd8f5fb7b8465a09df68ce679a9f317a9fd5e586663f414b4a4176 = $this->env->getExtension("native_profiler");
        $__internal_b6a4bf9d1bbd8f5fb7b8465a09df68ce679a9f317a9fd5e586663f414b4a4176->enter($__internal_b6a4bf9d1bbd8f5fb7b8465a09df68ce679a9f317a9fd5e586663f414b4a4176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b6a4bf9d1bbd8f5fb7b8465a09df68ce679a9f317a9fd5e586663f414b4a4176->leave($__internal_b6a4bf9d1bbd8f5fb7b8465a09df68ce679a9f317a9fd5e586663f414b4a4176_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
