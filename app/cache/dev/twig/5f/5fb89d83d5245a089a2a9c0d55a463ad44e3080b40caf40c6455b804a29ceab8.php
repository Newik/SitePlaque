<?php

/* UserBundle:Gestion:index.html.twig */
class __TwigTemplate_aa05500d848c8131b68af453b958248dc130bc93694f8079d09915a16b915fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Gestion:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bc60819dac6f147964b4c4353c22b4c5aa7ad3f9effaea82f382635fad82286 = $this->env->getExtension("native_profiler");
        $__internal_1bc60819dac6f147964b4c4353c22b4c5aa7ad3f9effaea82f382635fad82286->enter($__internal_1bc60819dac6f147964b4c4353c22b4c5aa7ad3f9effaea82f382635fad82286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Gestion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bc60819dac6f147964b4c4353c22b4c5aa7ad3f9effaea82f382635fad82286->leave($__internal_1bc60819dac6f147964b4c4353c22b4c5aa7ad3f9effaea82f382635fad82286_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Gestion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* */
/* */
/* */
