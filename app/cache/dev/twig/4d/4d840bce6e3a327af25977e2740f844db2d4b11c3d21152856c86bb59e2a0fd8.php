<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_30d33be5e8bb0e9cac1a1874abbad3cdf89a760fa3b2db9e8ca3e56a361aebad extends Twig_Template
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
        $__internal_02193dd3e7373fb572989b251c17cbcf0d93ce3ef16785c9c0101e3271e47335 = $this->env->getExtension("native_profiler");
        $__internal_02193dd3e7373fb572989b251c17cbcf0d93ce3ef16785c9c0101e3271e47335->enter($__internal_02193dd3e7373fb572989b251c17cbcf0d93ce3ef16785c9c0101e3271e47335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "



      ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "


    <div>
        <input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success\" />
    </div>



";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_02193dd3e7373fb572989b251c17cbcf0d93ce3ef16785c9c0101e3271e47335->leave($__internal_02193dd3e7373fb572989b251c17cbcf0d93ce3ef16785c9c0101e3271e47335_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  44 => 13,  37 => 9,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/* */
/* */
/*       {{ form_widget(form) }}*/
/* */
/* */
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans }}" class="btn btn-success" />*/
/*     </div>*/
/* */
/* */
/* */
/* {{ form_end(form) }}*/
/* */
/* */
