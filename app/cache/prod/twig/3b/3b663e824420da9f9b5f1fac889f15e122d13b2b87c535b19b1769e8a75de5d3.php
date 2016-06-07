<?php

/* SitePlaqueBundle:Plaque:edit.html.twig */
class __TwigTemplate_6cbc97dee8cd03a2fe8f17b5f4715e39fd82eb1f5b04419b5228abe667709915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Plaque:edit.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <div>Modifiez votre plaque</div>
<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plaque_edit", array("id" => $this->getAttribute((isset($context["plaque"]) ? $context["plaque"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

    <input type=\"submit\">
    <form>

";
    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Plaque:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block content %}*/
/* */
/*     <div>Modifiez votre plaque</div>*/
/* <form action="{{ path('plaque_edit', {'id':plaque.id}) }}" method="POST">*/
/* */
/*     {{ form_rest(form) }}*/
/* */
/*     <input type="submit">*/
/*     <form>*/
/* */
/* {% endblock %}*/
