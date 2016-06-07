<?php

/* admin/Utilisateur/add.html.twig */
class __TwigTemplate_862cc31e703456c00c45ac9ef8f882ac40c2b0b14f535d8751f677eca1ebf09a extends Twig_Template
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
        $__internal_a25176bcd6f80e5973f9286f507ad4573cdd4142b45fc0a533932e5254856d6b = $this->env->getExtension("native_profiler");
        $__internal_a25176bcd6f80e5973f9286f507ad4573cdd4142b45fc0a533932e5254856d6b->enter($__internal_a25176bcd6f80e5973f9286f507ad4573cdd4142b45fc0a533932e5254856d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/Utilisateur/add.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_a25176bcd6f80e5973f9286f507ad4573cdd4142b45fc0a533932e5254856d6b->leave($__internal_a25176bcd6f80e5973f9286f507ad4573cdd4142b45fc0a533932e5254856d6b_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bd3fc91732af5d478b46381e122a5869a0be9d153328b115787fdf2488b6df9 = $this->env->getExtension("native_profiler");
        $__internal_9bd3fc91732af5d478b46381e122a5869a0be9d153328b115787fdf2488b6df9->enter($__internal_9bd3fc91732af5d478b46381e122a5869a0be9d153328b115787fdf2488b6df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "
    Inscription client

";
        
        $__internal_9bd3fc91732af5d478b46381e122a5869a0be9d153328b115787fdf2488b6df9->leave($__internal_9bd3fc91732af5d478b46381e122a5869a0be9d153328b115787fdf2488b6df9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0468c16d81fdec233484453bd7b1958d5fbfd7a43ab768e23c244803a02d7d5a = $this->env->getExtension("native_profiler");
        $__internal_0468c16d81fdec233484453bd7b1958d5fbfd7a43ab768e23c244803a02d7d5a->enter($__internal_0468c16d81fdec233484453bd7b1958d5fbfd7a43ab768e23c244803a02d7d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0468c16d81fdec233484453bd7b1958d5fbfd7a43ab768e23c244803a02d7d5a->leave($__internal_0468c16d81fdec233484453bd7b1958d5fbfd7a43ab768e23c244803a02d7d5a_prof);

    }

    public function getTemplateName()
    {
        return "admin/Utilisateur/add.html.twig";
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
