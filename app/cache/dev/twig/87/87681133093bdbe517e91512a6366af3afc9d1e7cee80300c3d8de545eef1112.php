<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_6df0a96bc40d229301cc7242c2437f89d0656549f66f440f8f3f59d2cdb2d409 extends Twig_Template
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
        $__internal_b3890cf8648998436e5696af3d5d3b8c09524de99946e0f18f81b69ce87336f5 = $this->env->getExtension("native_profiler");
        $__internal_b3890cf8648998436e5696af3d5d3b8c09524de99946e0f18f81b69ce87336f5->enter($__internal_b3890cf8648998436e5696af3d5d3b8c09524de99946e0f18f81b69ce87336f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_b3890cf8648998436e5696af3d5d3b8c09524de99946e0f18f81b69ce87336f5->leave($__internal_b3890cf8648998436e5696af3d5d3b8c09524de99946e0f18f81b69ce87336f5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
