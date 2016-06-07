<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cb43a18aa009be7b092a2e1e3cb336a53240fd2312144e6998b2de69b99e404d extends Twig_Template
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
        $__internal_3e0810b72d2378cbd74978460c0e57815f63085ab34f0d4bebc36d4666fe9358 = $this->env->getExtension("native_profiler");
        $__internal_3e0810b72d2378cbd74978460c0e57815f63085ab34f0d4bebc36d4666fe9358->enter($__internal_3e0810b72d2378cbd74978460c0e57815f63085ab34f0d4bebc36d4666fe9358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3e0810b72d2378cbd74978460c0e57815f63085ab34f0d4bebc36d4666fe9358->leave($__internal_3e0810b72d2378cbd74978460c0e57815f63085ab34f0d4bebc36d4666fe9358_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
