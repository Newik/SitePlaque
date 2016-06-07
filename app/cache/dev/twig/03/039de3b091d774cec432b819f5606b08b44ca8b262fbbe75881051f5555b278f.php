<?php

/* :admin/Utilisateur:add.html.twig */
class __TwigTemplate_e3a1d990a0cd7e17bc4db86a95215b87587725e6441b63c251c84631f3c05db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8974a1a49653ae2469d40e014f1cbbc5047136200d21827ef6e653d3dfd31e78 = $this->env->getExtension("native_profiler");
        $__internal_8974a1a49653ae2469d40e014f1cbbc5047136200d21827ef6e653d3dfd31e78->enter($__internal_8974a1a49653ae2469d40e014f1cbbc5047136200d21827ef6e653d3dfd31e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/Utilisateur:add.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8974a1a49653ae2469d40e014f1cbbc5047136200d21827ef6e653d3dfd31e78->leave($__internal_8974a1a49653ae2469d40e014f1cbbc5047136200d21827ef6e653d3dfd31e78_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa4c8c0519762b2c181c47c474a57d661212162c5d9afeddd6a2bc5f2714cd5b = $this->env->getExtension("native_profiler");
        $__internal_fa4c8c0519762b2c181c47c474a57d661212162c5d9afeddd6a2bc5f2714cd5b->enter($__internal_fa4c8c0519762b2c181c47c474a57d661212162c5d9afeddd6a2bc5f2714cd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "
    Inscription client

";
        
        $__internal_fa4c8c0519762b2c181c47c474a57d661212162c5d9afeddd6a2bc5f2714cd5b->leave($__internal_fa4c8c0519762b2c181c47c474a57d661212162c5d9afeddd6a2bc5f2714cd5b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_068618bee4bbd0c17c3007624dc5555973cb36f2c92e3f007a1b80f118844526 = $this->env->getExtension("native_profiler");
        $__internal_068618bee4bbd0c17c3007624dc5555973cb36f2c92e3f007a1b80f118844526->enter($__internal_068618bee4bbd0c17c3007624dc5555973cb36f2c92e3f007a1b80f118844526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <form  method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nomClient", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenomClient", array()), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "raisonSociale", array()), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "siret", array()), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "tel", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "login", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "mdp", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <input type=\"submit\" id=\"submit\"  name=\"submit\" />
    </form>
";
        
        $__internal_068618bee4bbd0c17c3007624dc5555973cb36f2c92e3f007a1b80f118844526->leave($__internal_068618bee4bbd0c17c3007624dc5555973cb36f2c92e3f007a1b80f118844526_prof);

    }

    public function getTemplateName()
    {
        return ":admin/Utilisateur:add.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  58 => 8,  52 => 7,  42 => 2,  36 => 1,  29 => 7,  26 => 6,  24 => 1,);
    }
}
/* {% block title %}*/
/* */
/*     Inscription client*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <form  method="post" {{ form_enctype(form) }}>*/
/*         {{ form_errors(form) }}*/
/*         {{ form_row(client.nomClient) }}*/
/*         {{ form_row(client.prenomClient) }}*/
/*         {{ form_row(client.raisonSociale) }}*/
/*         {{ form_row(client.siret) }}*/
/*         {{ form_row(client.email) }}*/
/*         {{ form_row(client.tel) }}*/
/*         {{ form_row(client.login) }}*/
/*         {{ form_row(client.mdp) }}*/
/*         {{ form_rest(form) }}*/
/* */
/*         <input type="submit" id="submit"  name="submit" />*/
/*     </form>*/
/* {% endblock %}*/
