<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_06bb876671d4ffd449292eda8e3263f0f2b25d424739744bdce51de1d584e408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_00724f271b3557fd39b9fb82862dff9ffa68fca98cedf4a7758d6c7a6948b148 = $this->env->getExtension("native_profiler");
        $__internal_00724f271b3557fd39b9fb82862dff9ffa68fca98cedf4a7758d6c7a6948b148->enter($__internal_00724f271b3557fd39b9fb82862dff9ffa68fca98cedf4a7758d6c7a6948b148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00724f271b3557fd39b9fb82862dff9ffa68fca98cedf4a7758d6c7a6948b148->leave($__internal_00724f271b3557fd39b9fb82862dff9ffa68fca98cedf4a7758d6c7a6948b148_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3e967be27e0a3d7e6f606617ed883807e421f1ad2ee4d6e9706251d2d56f904 = $this->env->getExtension("native_profiler");
        $__internal_b3e967be27e0a3d7e6f606617ed883807e421f1ad2ee4d6e9706251d2d56f904->enter($__internal_b3e967be27e0a3d7e6f606617ed883807e421f1ad2ee4d6e9706251d2d56f904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b3e967be27e0a3d7e6f606617ed883807e421f1ad2ee4d6e9706251d2d56f904->leave($__internal_b3e967be27e0a3d7e6f606617ed883807e421f1ad2ee4d6e9706251d2d56f904_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
