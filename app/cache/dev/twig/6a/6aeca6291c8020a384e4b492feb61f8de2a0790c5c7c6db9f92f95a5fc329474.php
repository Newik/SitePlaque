<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a4ddfdf9c4909c6d36883db19a051e581a2347809e74cc7b29c21fb16b94d05a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_14e158cfcebc666edb43fe22d22b492fed9aa708693605a23f888faadd519163 = $this->env->getExtension("native_profiler");
        $__internal_14e158cfcebc666edb43fe22d22b492fed9aa708693605a23f888faadd519163->enter($__internal_14e158cfcebc666edb43fe22d22b492fed9aa708693605a23f888faadd519163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14e158cfcebc666edb43fe22d22b492fed9aa708693605a23f888faadd519163->leave($__internal_14e158cfcebc666edb43fe22d22b492fed9aa708693605a23f888faadd519163_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f22968a88025051c53f81c8d7a137a8974199b4393713d7eeb515cba09ea043 = $this->env->getExtension("native_profiler");
        $__internal_2f22968a88025051c53f81c8d7a137a8974199b4393713d7eeb515cba09ea043->enter($__internal_2f22968a88025051c53f81c8d7a137a8974199b4393713d7eeb515cba09ea043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2f22968a88025051c53f81c8d7a137a8974199b4393713d7eeb515cba09ea043->leave($__internal_2f22968a88025051c53f81c8d7a137a8974199b4393713d7eeb515cba09ea043_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
