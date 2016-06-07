<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_97c4ac9f70e8ac20bb08d5e019c43288a61ab964b0a1b62bc46c50a86cd15f5b extends Twig_Template
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
        $__internal_f7078a4fb8892e1b6d3ad1ef45af45bce55d72bb89e30c9608a10dfb5d4a66f2 = $this->env->getExtension("native_profiler");
        $__internal_f7078a4fb8892e1b6d3ad1ef45af45bce55d72bb89e30c9608a10dfb5d4a66f2->enter($__internal_f7078a4fb8892e1b6d3ad1ef45af45bce55d72bb89e30c9608a10dfb5d4a66f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f7078a4fb8892e1b6d3ad1ef45af45bce55d72bb89e30c9608a10dfb5d4a66f2->leave($__internal_f7078a4fb8892e1b6d3ad1ef45af45bce55d72bb89e30c9608a10dfb5d4a66f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
