<?php

/* @SitePlaque/Devis/add.html.twig */
class __TwigTemplate_86250dad363105873a27c1e3b4bd136b62b898d2dc8dd240770abb1a7e7f42d8 extends Twig_Template
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
        $__internal_f6e3b462d9d22dc3eccf9046009b19a543438abd3f7ca509c958a8abeae34a94 = $this->env->getExtension("native_profiler");
        $__internal_f6e3b462d9d22dc3eccf9046009b19a543438abd3f7ca509c958a8abeae34a94->enter($__internal_f6e3b462d9d22dc3eccf9046009b19a543438abd3f7ca509c958a8abeae34a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitePlaque/Devis/add.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e3b462d9d22dc3eccf9046009b19a543438abd3f7ca509c958a8abeae34a94->leave($__internal_f6e3b462d9d22dc3eccf9046009b19a543438abd3f7ca509c958a8abeae34a94_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f121f8d7c3df32a047b965124aa6df4c4378090ffe60548020df70f117ac5c6 = $this->env->getExtension("native_profiler");
        $__internal_4f121f8d7c3df32a047b965124aa6df4c4378090ffe60548020df70f117ac5c6->enter($__internal_4f121f8d7c3df32a047b965124aa6df4c4378090ffe60548020df70f117ac5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<h1>Devis</h1>

<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devis_ajout", array("id" => $this->getAttribute((isset($context["plaque"]) ? $context["plaque"] : $this->getContext($context, "plaque")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
<input type=\"submit\" class=\"btn btn-success\">
 </form>
<div>

    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">accueil</a>

</div>

";
        
        $__internal_4f121f8d7c3df32a047b965124aa6df4c4378090ffe60548020df70f117ac5c6->leave($__internal_4f121f8d7c3df32a047b965124aa6df4c4378090ffe60548020df70f117ac5c6_prof);

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
        return array (  60 => 15,  52 => 10,  48 => 9,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
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
/* {{ form_rest(form) }}*/
/* <input type="submit" class="btn btn-success">*/
/*  </form>*/
/* <div>*/
/* */
/*     <a href="{{ path('accueil_platform') }}">accueil</a>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
