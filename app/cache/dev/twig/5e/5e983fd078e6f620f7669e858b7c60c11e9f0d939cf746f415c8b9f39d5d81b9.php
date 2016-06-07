<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_f04dc2b673776b513257146edeaebf048208a15bbe5751b4fc13acf373353b2c extends Twig_Template
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
        $__internal_f5e4caa4ffcaa7659522f80e35d5f1c4c184329045f76516f977d8122b43de3f = $this->env->getExtension("native_profiler");
        $__internal_f5e4caa4ffcaa7659522f80e35d5f1c4c184329045f76516f977d8122b43de3f->enter($__internal_f5e4caa4ffcaa7659522f80e35d5f1c4c184329045f76516f977d8122b43de3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

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
        
        $__internal_f5e4caa4ffcaa7659522f80e35d5f1c4c184329045f76516f977d8122b43de3f->leave($__internal_f5e4caa4ffcaa7659522f80e35d5f1c4c184329045f76516f977d8122b43de3f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
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
