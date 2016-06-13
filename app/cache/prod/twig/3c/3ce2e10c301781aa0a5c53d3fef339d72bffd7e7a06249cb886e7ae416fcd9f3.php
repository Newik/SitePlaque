<?php

/* @SitePlaque/Devis/add.html.twig */
class __TwigTemplate_40f76c17ba9ad3efb179f731f2e508f5dcdaf0a44a7b10adfc4bd50abe0e624f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Devis/add.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>Devis</h1>

<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devis_ajout", array("id" => $this->getAttribute((isset($context["plaque"]) ? $context["plaque"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

 ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

<input type=\"submit\" class=\"btn btn-success\">
 </form>
<div>

    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">accueil</a>

</div>

";
    }

    public function getTemplateName()
    {
        return "@SitePlaque/Devis/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  44 => 11,  39 => 9,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* <h1>Devis</h1>*/
/* */
/* <form action="{{ path('devis_ajout',{'id':plaque.id}) }}" method="POST">*/
/* */
/*  {{ form_rest(form) }}*/
/* */
/* <input type="submit" class="btn btn-success">*/
/*  </form>*/
/* <div>*/
/* */
/*     <a href="{{ path('accueil_platform') }}">accueil</a>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
