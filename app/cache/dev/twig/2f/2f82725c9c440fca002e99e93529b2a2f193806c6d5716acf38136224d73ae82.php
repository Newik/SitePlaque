<?php

/* SitePlaqueBundle:Layout:layout.html.twig */
class __TwigTemplate_074676f9e0a397f2a7459260a0032bcf648d83dc82f7401e6afcacc92559f366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SitePlaqueBundle:Layout:layout.html.twig", 1);
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
        $__internal_f3aa65233615398a57f2702c758cc71ceee330a2117640da2dcfeeae0f067f53 = $this->env->getExtension("native_profiler");
        $__internal_f3aa65233615398a57f2702c758cc71ceee330a2117640da2dcfeeae0f067f53->enter($__internal_f3aa65233615398a57f2702c758cc71ceee330a2117640da2dcfeeae0f067f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Layout:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3aa65233615398a57f2702c758cc71ceee330a2117640da2dcfeeae0f067f53->leave($__internal_f3aa65233615398a57f2702c758cc71ceee330a2117640da2dcfeeae0f067f53_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5436b37ea926fc8d65a99dbc2283f3c511cdde9969eaf04b470cd337f01e0624 = $this->env->getExtension("native_profiler");
        $__internal_5436b37ea926fc8d65a99dbc2283f3c511cdde9969eaf04b470cd337f01e0624->enter($__internal_5436b37ea926fc8d65a99dbc2283f3c511cdde9969eaf04b470cd337f01e0624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_5436b37ea926fc8d65a99dbc2283f3c511cdde9969eaf04b470cd337f01e0624->leave($__internal_5436b37ea926fc8d65a99dbc2283f3c511cdde9969eaf04b470cd337f01e0624_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca848f09951d18e9a8377f41cca5fe92ca9c3cc67199f969a28d4d832aacdfa4 = $this->env->getExtension("native_profiler");
        $__internal_ca848f09951d18e9a8377f41cca5fe92ca9c3cc67199f969a28d4d832aacdfa4->enter($__internal_ca848f09951d18e9a8377f41cca5fe92ca9c3cc67199f969a28d4d832aacdfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "        ";
        
        $__internal_ca848f09951d18e9a8377f41cca5fe92ca9c3cc67199f969a28d4d832aacdfa4->leave($__internal_ca848f09951d18e9a8377f41cca5fe92ca9c3cc67199f969a28d4d832aacdfa4_prof);

    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Layout:layout.html.twig";
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
