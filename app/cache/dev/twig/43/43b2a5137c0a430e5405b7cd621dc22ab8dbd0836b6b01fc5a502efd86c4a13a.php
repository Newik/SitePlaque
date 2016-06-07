<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_faf5aee3ec056924c45c51d6d53220e2cc6b569d6b59e9e4b2cc37bb4d331237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05f4082765a0427a3229ef6c6581d6a92732b6c8cf4138e51de8dea85a01e051 = $this->env->getExtension("native_profiler");
        $__internal_05f4082765a0427a3229ef6c6581d6a92732b6c8cf4138e51de8dea85a01e051->enter($__internal_05f4082765a0427a3229ef6c6581d6a92732b6c8cf4138e51de8dea85a01e051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_05f4082765a0427a3229ef6c6581d6a92732b6c8cf4138e51de8dea85a01e051->leave($__internal_05f4082765a0427a3229ef6c6581d6a92732b6c8cf4138e51de8dea85a01e051_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_78ef67448342f3f408791c6258c949753daf95da1e46b7b543dc3ddc8c9e9761 = $this->env->getExtension("native_profiler");
        $__internal_78ef67448342f3f408791c6258c949753daf95da1e46b7b543dc3ddc8c9e9761->enter($__internal_78ef67448342f3f408791c6258c949753daf95da1e46b7b543dc3ddc8c9e9761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_78ef67448342f3f408791c6258c949753daf95da1e46b7b543dc3ddc8c9e9761->leave($__internal_78ef67448342f3f408791c6258c949753daf95da1e46b7b543dc3ddc8c9e9761_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_25a1360bcfa94ff1eb9ef47aaa0ab008098e404ab8a85a7fa9a4e4a16a5a23ff = $this->env->getExtension("native_profiler");
        $__internal_25a1360bcfa94ff1eb9ef47aaa0ab008098e404ab8a85a7fa9a4e4a16a5a23ff->enter($__internal_25a1360bcfa94ff1eb9ef47aaa0ab008098e404ab8a85a7fa9a4e4a16a5a23ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_25a1360bcfa94ff1eb9ef47aaa0ab008098e404ab8a85a7fa9a4e4a16a5a23ff->leave($__internal_25a1360bcfa94ff1eb9ef47aaa0ab008098e404ab8a85a7fa9a4e4a16a5a23ff_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d698392fb9a9fd95aba8537591bfd495163745b8a696a51cd7c609a4e70d6b4d = $this->env->getExtension("native_profiler");
        $__internal_d698392fb9a9fd95aba8537591bfd495163745b8a696a51cd7c609a4e70d6b4d->enter($__internal_d698392fb9a9fd95aba8537591bfd495163745b8a696a51cd7c609a4e70d6b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d698392fb9a9fd95aba8537591bfd495163745b8a696a51cd7c609a4e70d6b4d->leave($__internal_d698392fb9a9fd95aba8537591bfd495163745b8a696a51cd7c609a4e70d6b4d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
