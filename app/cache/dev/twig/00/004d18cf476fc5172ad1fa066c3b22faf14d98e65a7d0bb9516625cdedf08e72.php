<?php

/* @SitePlaque/Layout/layout.html.twig */
class __TwigTemplate_2e34956ea8cfa2abe3de13e1c0d6362f9b1e6e221f659658796eb7d58811ce0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SitePlaque/Layout/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cf5d6304567b2b8730af19e11351d55595cb9c0641da21509a5c7cafe8a93b8 = $this->env->getExtension("native_profiler");
        $__internal_2cf5d6304567b2b8730af19e11351d55595cb9c0641da21509a5c7cafe8a93b8->enter($__internal_2cf5d6304567b2b8730af19e11351d55595cb9c0641da21509a5c7cafe8a93b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SitePlaque/Layout/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf5d6304567b2b8730af19e11351d55595cb9c0641da21509a5c7cafe8a93b8->leave($__internal_2cf5d6304567b2b8730af19e11351d55595cb9c0641da21509a5c7cafe8a93b8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3bc08f8e23459ab6ffccec3d91a9214f8996432861e8ad4a26baaac6a6bdb2ec = $this->env->getExtension("native_profiler");
        $__internal_3bc08f8e23459ab6ffccec3d91a9214f8996432861e8ad4a26baaac6a6bdb2ec->enter($__internal_3bc08f8e23459ab6ffccec3d91a9214f8996432861e8ad4a26baaac6a6bdb2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div>
          <p> Layout de base </p>
    </div>


    <div>
        ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 13
        echo "    </div>


";
        
        $__internal_3bc08f8e23459ab6ffccec3d91a9214f8996432861e8ad4a26baaac6a6bdb2ec->leave($__internal_3bc08f8e23459ab6ffccec3d91a9214f8996432861e8ad4a26baaac6a6bdb2ec_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5043feb0fadd30d5fe8889d759530fc74ca88d76cbb9f2e2ee2cc39c99c7f4f5 = $this->env->getExtension("native_profiler");
        $__internal_5043feb0fadd30d5fe8889d759530fc74ca88d76cbb9f2e2ee2cc39c99c7f4f5->enter($__internal_5043feb0fadd30d5fe8889d759530fc74ca88d76cbb9f2e2ee2cc39c99c7f4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "        ";
        
        $__internal_5043feb0fadd30d5fe8889d759530fc74ca88d76cbb9f2e2ee2cc39c99c7f4f5->leave($__internal_5043feb0fadd30d5fe8889d759530fc74ca88d76cbb9f2e2ee2cc39c99c7f4f5_prof);

    }

    public function getTemplateName()
    {
        return "@SitePlaque/Layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  62 => 11,  52 => 13,  50 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <div>*/
/*           <p> Layout de base </p>*/
/*     </div>*/
/* */
/* */
/*     <div>*/
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
