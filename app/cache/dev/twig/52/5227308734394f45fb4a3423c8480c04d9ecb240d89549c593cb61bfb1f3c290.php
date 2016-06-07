<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_6be676f95e5b34f8294ed2a11ada1b5aa5a2e3f93e1b68316861ddd669fea5da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca53ce1b74472e9a96275d692670d60eded8baf177ab26eff28201ad6243866b = $this->env->getExtension("native_profiler");
        $__internal_ca53ce1b74472e9a96275d692670d60eded8baf177ab26eff28201ad6243866b->enter($__internal_ca53ce1b74472e9a96275d692670d60eded8baf177ab26eff28201ad6243866b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca53ce1b74472e9a96275d692670d60eded8baf177ab26eff28201ad6243866b->leave($__internal_ca53ce1b74472e9a96275d692670d60eded8baf177ab26eff28201ad6243866b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5f47ef4c1b3b8bb124d7eeed8c528d144c6cd35b623d7349be6d283db2c9ccc = $this->env->getExtension("native_profiler");
        $__internal_e5f47ef4c1b3b8bb124d7eeed8c528d144c6cd35b623d7349be6d283db2c9ccc->enter($__internal_e5f47ef4c1b3b8bb124d7eeed8c528d144c6cd35b623d7349be6d283db2c9ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>

    ";
        // line 8
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 9
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 11
        echo "
    <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("plaque_platform");
        echo "\">Personnalisez vos plaques dès maintenant !!!</a>

";
        
        $__internal_e5f47ef4c1b3b8bb124d7eeed8c528d144c6cd35b623d7349be6d283db2c9ccc->leave($__internal_e5f47ef4c1b3b8bb124d7eeed8c528d144c6cd35b623d7349be6d283db2c9ccc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  56 => 11,  48 => 9,  46 => 8,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/* */
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* */
/*     <a href="{{ path('plaque_platform') }}">Personnalisez vos plaques dès maintenant !!!</a>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
