<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_44af9fc2d4d3bb132a4aa2ed1c32db4b3d21445bdaf3cb2e7bc0c7c78ace9788 extends Twig_Template
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
        $__internal_b9cd6b8847075030622d743af2cdbf9d45ad078af2f2390f8d9d550c60336f7e = $this->env->getExtension("native_profiler");
        $__internal_b9cd6b8847075030622d743af2cdbf9d45ad078af2f2390f8d9d550c60336f7e->enter($__internal_b9cd6b8847075030622d743af2cdbf9d45ad078af2f2390f8d9d550c60336f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b9cd6b8847075030622d743af2cdbf9d45ad078af2f2390f8d9d550c60336f7e->leave($__internal_b9cd6b8847075030622d743af2cdbf9d45ad078af2f2390f8d9d550c60336f7e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
