<?php

/* UserBundle:Admin:warningAdmin.html.twig */
class __TwigTemplate_3ba9b57fc241e9d98090dba5d553da12c31d06b67661d808c18a5a1a6ccb8378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Admin:warningAdmin.html.twig", 1);
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
        <h2> Pas d'action pour le profil administrateur</h2>

        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("accueil_platform");
        echo "\">ACCUEIL</a>
    </div>


";
    }

    public function getTemplateName()
    {
        return "UserBundle:Admin:warningAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <div>*/
/*         <h2> Pas d'action pour le profil administrateur</h2>*/
/* */
/*         <a href="{{ path('accueil_platform') }}">ACCUEIL</a>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
