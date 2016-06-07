<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_7a1f3aa11f1d2d78f3cbadc651a2d2faffe86fa3b99ca2a9d755d457610b8822 extends Twig_Template
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
        $__internal_0ac037fb85aba39fade1a1ec01f29e8d4b91bba83d8fd99848733fa124518623 = $this->env->getExtension("native_profiler");
        $__internal_0ac037fb85aba39fade1a1ec01f29e8d4b91bba83d8fd99848733fa124518623->enter($__internal_0ac037fb85aba39fade1a1ec01f29e8d4b91bba83d8fd99848733fa124518623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0ac037fb85aba39fade1a1ec01f29e8d4b91bba83d8fd99848733fa124518623->leave($__internal_0ac037fb85aba39fade1a1ec01f29e8d4b91bba83d8fd99848733fa124518623_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
