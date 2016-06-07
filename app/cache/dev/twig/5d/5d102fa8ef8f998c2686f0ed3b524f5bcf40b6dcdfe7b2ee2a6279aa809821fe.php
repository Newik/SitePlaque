<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0a5e31842eead4d837cfe349e5f5f003cb2ff84b44c40ba0db0a0d9981b799df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_4fdc8c2477bbad015131345b56ba13c1b227d6367b26427dfdab3f8e34b9ab41 = $this->env->getExtension("native_profiler");
        $__internal_4fdc8c2477bbad015131345b56ba13c1b227d6367b26427dfdab3f8e34b9ab41->enter($__internal_4fdc8c2477bbad015131345b56ba13c1b227d6367b26427dfdab3f8e34b9ab41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fdc8c2477bbad015131345b56ba13c1b227d6367b26427dfdab3f8e34b9ab41->leave($__internal_4fdc8c2477bbad015131345b56ba13c1b227d6367b26427dfdab3f8e34b9ab41_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7c2c0d0b0f67807748af357c6ea60cccf1cc6fd45d9d39a9c74c46523b98ab4 = $this->env->getExtension("native_profiler");
        $__internal_c7c2c0d0b0f67807748af357c6ea60cccf1cc6fd45d9d39a9c74c46523b98ab4->enter($__internal_c7c2c0d0b0f67807748af357c6ea60cccf1cc6fd45d9d39a9c74c46523b98ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">ACCUEIL</a>

<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    </br>
    <label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </br>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />


    </br>
    <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </br>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />


    </br>
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    </br>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success\" />
</form>

    <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>

";
        
        $__internal_c7c2c0d0b0f67807748af357c6ea60cccf1cc6fd45d9d39a9c74c46523b98ab4->leave($__internal_c7c2c0d0b0f67807748af357c6ea60cccf1cc6fd45d9d39a9c74c46523b98ab4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  95 => 33,  88 => 29,  78 => 22,  71 => 18,  66 => 16,  61 => 14,  56 => 12,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/*     <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/* */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*     </br>*/
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     </br>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/* */
/*     </br>*/
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     </br>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/* */
/*     </br>*/
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*     </br>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn btn-success" />*/
/* </form>*/
/* */
/*     <a href="{{ path('fos_user_registration_register') }}">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
