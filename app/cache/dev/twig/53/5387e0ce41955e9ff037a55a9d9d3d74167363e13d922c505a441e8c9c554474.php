<?php

/* SitePlaqueBundle:Devis:add.html.twig */
class __TwigTemplate_d847a6eb9e7148629d51bf638050a0e1e88ab8cc533a4c08fc8d641ad3ab6bf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Devis:add.html.twig", 1);
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
        $__internal_2870e7dbfcfdf1d1333d7c1b1a42b85aa3f7fe47db997a3140b540cfe700fad2 = $this->env->getExtension("native_profiler");
        $__internal_2870e7dbfcfdf1d1333d7c1b1a42b85aa3f7fe47db997a3140b540cfe700fad2->enter($__internal_2870e7dbfcfdf1d1333d7c1b1a42b85aa3f7fe47db997a3140b540cfe700fad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Devis:add.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2870e7dbfcfdf1d1333d7c1b1a42b85aa3f7fe47db997a3140b540cfe700fad2->leave($__internal_2870e7dbfcfdf1d1333d7c1b1a42b85aa3f7fe47db997a3140b540cfe700fad2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_636018a1440ac8e41b8d806a5a1941b63c64971b815365dbddd466a3195e7389 = $this->env->getExtension("native_profiler");
        $__internal_636018a1440ac8e41b8d806a5a1941b63c64971b815365dbddd466a3195e7389->enter($__internal_636018a1440ac8e41b8d806a5a1941b63c64971b815365dbddd466a3195e7389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_636018a1440ac8e41b8d806a5a1941b63c64971b815365dbddd466a3195e7389->leave($__internal_636018a1440ac8e41b8d806a5a1941b63c64971b815365dbddd466a3195e7389_prof);

    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Devis:add.html.twig";
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
