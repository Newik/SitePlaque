<?php

/* SitePlaqueBundle:PrixUnitaire:success.html.twig */
class __TwigTemplate_6c045ed2571bcea15237646c4a37efdd8d86c03a97a6a6622daf8013d67fc180 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:PrixUnitaire:success.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "


    <div>

        <h2>Le Prix a bien été modifié</h2>

    </div>

    </br>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">ACCUEIL</a>


";
    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:PrixUnitaire:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* */
/* */
/*     <div>*/
/* */
/*         <h2>Le Prix a bien été modifié</h2>*/
/* */
/*     </div>*/
/* */
/*     </br>*/
/*     <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/* */
/* */
/* {% endblock%}*/
