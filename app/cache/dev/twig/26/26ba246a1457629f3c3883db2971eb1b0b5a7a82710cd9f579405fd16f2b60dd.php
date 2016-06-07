<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_35d4400d3b96593b69a943bb992c8d88f5945964af752bb5d54ce84dcd07360c extends Twig_Template
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
        $__internal_a504b061e922bef1966d08ef91c37f8250cec1efc0f265725260f594b5c4d25d = $this->env->getExtension("native_profiler");
        $__internal_a504b061e922bef1966d08ef91c37f8250cec1efc0f265725260f594b5c4d25d->enter($__internal_a504b061e922bef1966d08ef91c37f8250cec1efc0f265725260f594b5c4d25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a504b061e922bef1966d08ef91c37f8250cec1efc0f265725260f594b5c4d25d->leave($__internal_a504b061e922bef1966d08ef91c37f8250cec1efc0f265725260f594b5c4d25d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
