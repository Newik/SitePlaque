<?php

/* SitePlaqueBundle:Client:add.html.twig */
class __TwigTemplate_c629e383d5da5973cda156a7cbbb6e7976c8ec0aa65bcfab51b156bc9ae01f5a extends Twig_Template
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
        $__internal_f6f70b7bc8cdb872af3eab2867ea522e3b71fe485047776695a196b5fe3c03a6 = $this->env->getExtension("native_profiler");
        $__internal_f6f70b7bc8cdb872af3eab2867ea522e3b71fe485047776695a196b5fe3c03a6->enter($__internal_f6f70b7bc8cdb872af3eab2867ea522e3b71fe485047776695a196b5fe3c03a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Client:add.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f6f70b7bc8cdb872af3eab2867ea522e3b71fe485047776695a196b5fe3c03a6->leave($__internal_f6f70b7bc8cdb872af3eab2867ea522e3b71fe485047776695a196b5fe3c03a6_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe6e80ce3c75836e81ef76c1000e924a1bca68ecb9f86402b2caebe24354e67b = $this->env->getExtension("native_profiler");
        $__internal_fe6e80ce3c75836e81ef76c1000e924a1bca68ecb9f86402b2caebe24354e67b->enter($__internal_fe6e80ce3c75836e81ef76c1000e924a1bca68ecb9f86402b2caebe24354e67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "
    Inscription client

";
        
        $__internal_fe6e80ce3c75836e81ef76c1000e924a1bca68ecb9f86402b2caebe24354e67b->leave($__internal_fe6e80ce3c75836e81ef76c1000e924a1bca68ecb9f86402b2caebe24354e67b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3632089b228241705a9822e0772183486b4f00ed59da573d6078423e06a684e = $this->env->getExtension("native_profiler");
        $__internal_b3632089b228241705a9822e0772183486b4f00ed59da573d6078423e06a684e->enter($__internal_b3632089b228241705a9822e0772183486b4f00ed59da573d6078423e06a684e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3632089b228241705a9822e0772183486b4f00ed59da573d6078423e06a684e->leave($__internal_b3632089b228241705a9822e0772183486b4f00ed59da573d6078423e06a684e_prof);

    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Client:add.html.twig";
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
