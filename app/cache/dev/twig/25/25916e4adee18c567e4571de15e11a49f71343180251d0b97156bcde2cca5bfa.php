<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_ee72e2af20e8b49b7655fd32825cdc35f680fc44923863317793d8a350f50f5b extends Twig_Template
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
        $__internal_ccc8e71d5b501fb3497b8248e394ff780d9be914661a80d86104350de0d739c5 = $this->env->getExtension("native_profiler");
        $__internal_ccc8e71d5b501fb3497b8248e394ff780d9be914661a80d86104350de0d739c5->enter($__internal_ccc8e71d5b501fb3497b8248e394ff780d9be914661a80d86104350de0d739c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ccc8e71d5b501fb3497b8248e394ff780d9be914661a80d86104350de0d739c5->leave($__internal_ccc8e71d5b501fb3497b8248e394ff780d9be914661a80d86104350de0d739c5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_50d8546d3767e28fc840e80b137d39d8563421d6366c70a8959bc1f6954e8ddd = $this->env->getExtension("native_profiler");
        $__internal_50d8546d3767e28fc840e80b137d39d8563421d6366c70a8959bc1f6954e8ddd->enter($__internal_50d8546d3767e28fc840e80b137d39d8563421d6366c70a8959bc1f6954e8ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_50d8546d3767e28fc840e80b137d39d8563421d6366c70a8959bc1f6954e8ddd->leave($__internal_50d8546d3767e28fc840e80b137d39d8563421d6366c70a8959bc1f6954e8ddd_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d3ad21bb9e324335903c41727d24577ca7576b8b5d270b1aa4c35439bcd21442 = $this->env->getExtension("native_profiler");
        $__internal_d3ad21bb9e324335903c41727d24577ca7576b8b5d270b1aa4c35439bcd21442->enter($__internal_d3ad21bb9e324335903c41727d24577ca7576b8b5d270b1aa4c35439bcd21442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d3ad21bb9e324335903c41727d24577ca7576b8b5d270b1aa4c35439bcd21442->leave($__internal_d3ad21bb9e324335903c41727d24577ca7576b8b5d270b1aa4c35439bcd21442_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cecde7cfb9f09cbaec1799af722716f8a42774e1e099aa283133c2014dd37137 = $this->env->getExtension("native_profiler");
        $__internal_cecde7cfb9f09cbaec1799af722716f8a42774e1e099aa283133c2014dd37137->enter($__internal_cecde7cfb9f09cbaec1799af722716f8a42774e1e099aa283133c2014dd37137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cecde7cfb9f09cbaec1799af722716f8a42774e1e099aa283133c2014dd37137->leave($__internal_cecde7cfb9f09cbaec1799af722716f8a42774e1e099aa283133c2014dd37137_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
