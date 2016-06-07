<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3ba596d15eee9484f7780efd8e861cd2d96e4f05dc24a401668858585fb87a56 extends Twig_Template
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
        $__internal_51cdfc0e4e74b4256947a93effcae7acae037bf5d39b0f10624eb48b21bc4ecf = $this->env->getExtension("native_profiler");
        $__internal_51cdfc0e4e74b4256947a93effcae7acae037bf5d39b0f10624eb48b21bc4ecf->enter($__internal_51cdfc0e4e74b4256947a93effcae7acae037bf5d39b0f10624eb48b21bc4ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_51cdfc0e4e74b4256947a93effcae7acae037bf5d39b0f10624eb48b21bc4ecf->leave($__internal_51cdfc0e4e74b4256947a93effcae7acae037bf5d39b0f10624eb48b21bc4ecf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4793166186130a07fe381f3ba84e6ced71c4a052c73a3faeed94d05e8d27aefd = $this->env->getExtension("native_profiler");
        $__internal_4793166186130a07fe381f3ba84e6ced71c4a052c73a3faeed94d05e8d27aefd->enter($__internal_4793166186130a07fe381f3ba84e6ced71c4a052c73a3faeed94d05e8d27aefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4793166186130a07fe381f3ba84e6ced71c4a052c73a3faeed94d05e8d27aefd->leave($__internal_4793166186130a07fe381f3ba84e6ced71c4a052c73a3faeed94d05e8d27aefd_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4cdb092a12a50a268f8d74ebbb189bdeb7afc657dbc70c0190104720b41e6d57 = $this->env->getExtension("native_profiler");
        $__internal_4cdb092a12a50a268f8d74ebbb189bdeb7afc657dbc70c0190104720b41e6d57->enter($__internal_4cdb092a12a50a268f8d74ebbb189bdeb7afc657dbc70c0190104720b41e6d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4cdb092a12a50a268f8d74ebbb189bdeb7afc657dbc70c0190104720b41e6d57->leave($__internal_4cdb092a12a50a268f8d74ebbb189bdeb7afc657dbc70c0190104720b41e6d57_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a382691e26f7794d4e637f5b2380222485c60436d58f622dfc8e1c2d729d97b8 = $this->env->getExtension("native_profiler");
        $__internal_a382691e26f7794d4e637f5b2380222485c60436d58f622dfc8e1c2d729d97b8->enter($__internal_a382691e26f7794d4e637f5b2380222485c60436d58f622dfc8e1c2d729d97b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a382691e26f7794d4e637f5b2380222485c60436d58f622dfc8e1c2d729d97b8->leave($__internal_a382691e26f7794d4e637f5b2380222485c60436d58f622dfc8e1c2d729d97b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
