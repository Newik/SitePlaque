<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5d808b8c866f82818279bd05e50c53f17a445bc52389f37dc2664ec6343c51f5 extends Twig_Template
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
        $__internal_c984bff7ecc08a8f8a86c4a037dbb16e435ddb7d428ae09b547ade717ced7535 = $this->env->getExtension("native_profiler");
        $__internal_c984bff7ecc08a8f8a86c4a037dbb16e435ddb7d428ae09b547ade717ced7535->enter($__internal_c984bff7ecc08a8f8a86c4a037dbb16e435ddb7d428ae09b547ade717ced7535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c984bff7ecc08a8f8a86c4a037dbb16e435ddb7d428ae09b547ade717ced7535->leave($__internal_c984bff7ecc08a8f8a86c4a037dbb16e435ddb7d428ae09b547ade717ced7535_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
