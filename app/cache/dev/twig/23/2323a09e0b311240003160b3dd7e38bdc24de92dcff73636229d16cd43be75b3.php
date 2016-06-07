<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6917df5d5d1b8039b25df49ac8d362e3de3d69d82663288e36d738da92b2f90c extends Twig_Template
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
        $__internal_e34c54a3d4def33655d8beb852d2510708889402fc9bc1a45d3b6797f2ab8e44 = $this->env->getExtension("native_profiler");
        $__internal_e34c54a3d4def33655d8beb852d2510708889402fc9bc1a45d3b6797f2ab8e44->enter($__internal_e34c54a3d4def33655d8beb852d2510708889402fc9bc1a45d3b6797f2ab8e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e34c54a3d4def33655d8beb852d2510708889402fc9bc1a45d3b6797f2ab8e44->leave($__internal_e34c54a3d4def33655d8beb852d2510708889402fc9bc1a45d3b6797f2ab8e44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
