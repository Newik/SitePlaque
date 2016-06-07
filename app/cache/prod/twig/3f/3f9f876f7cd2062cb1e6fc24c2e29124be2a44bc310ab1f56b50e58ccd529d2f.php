<?php

/* admin/Utilisateur/add.html.twig */
class __TwigTemplate_614b730ba078317516d12ef552c85e3caacae83a86610044b6d41b0beaffb306 extends Twig_Template
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
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        // line 2
        echo "
    Inscription client

";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <form  method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "nomClient", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "prenomClient", array()), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "raisonSociale", array()), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "siret", array()), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "tel", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "login", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "mdp", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        <input type=\"submit\" id=\"submit\"  name=\"submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "admin/Utilisateur/add.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  43 => 8,  40 => 7,  33 => 2,  30 => 1,  26 => 7,  23 => 6,  21 => 1,);
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
