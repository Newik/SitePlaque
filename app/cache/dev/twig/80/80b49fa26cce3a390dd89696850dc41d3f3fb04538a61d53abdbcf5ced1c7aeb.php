<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_bfd00e3184c744d5b7e9bd371ed04569dad7bd21dd8bd4c9c2ade7802c27db48 extends Twig_Template
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
        $__internal_9cfeb055c9dcac8c29ad88f09894f367489e70db7d024af52d09da1532c9727d = $this->env->getExtension("native_profiler");
        $__internal_9cfeb055c9dcac8c29ad88f09894f367489e70db7d024af52d09da1532c9727d->enter($__internal_9cfeb055c9dcac8c29ad88f09894f367489e70db7d024af52d09da1532c9727d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_9cfeb055c9dcac8c29ad88f09894f367489e70db7d024af52d09da1532c9727d->leave($__internal_9cfeb055c9dcac8c29ad88f09894f367489e70db7d024af52d09da1532c9727d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
