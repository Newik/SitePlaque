<?php

/* SitePlaqueBundle:Register:register.html.twig */
class __TwigTemplate_0a2333d3257573bf81a1619c868d52009b9d3774b0eda1f29b7a747a9799a9a3 extends Twig_Template
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
        $__internal_2680bc137a562d86b7d1196077e8facceccab5dfb30758bb19da71f8f6d59cf3 = $this->env->getExtension("native_profiler");
        $__internal_2680bc137a562d86b7d1196077e8facceccab5dfb30758bb19da71f8f6d59cf3->enter($__internal_2680bc137a562d86b7d1196077e8facceccab5dfb30758bb19da71f8f6d59cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SitePlaqueBundle:Register:register.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_2680bc137a562d86b7d1196077e8facceccab5dfb30758bb19da71f8f6d59cf3->leave($__internal_2680bc137a562d86b7d1196077e8facceccab5dfb30758bb19da71f8f6d59cf3_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0def0af75e85f4c814750d998ebae2430d55cd009ed8704579b3b145f8c3360 = $this->env->getExtension("native_profiler");
        $__internal_b0def0af75e85f4c814750d998ebae2430d55cd009ed8704579b3b145f8c3360->enter($__internal_b0def0af75e85f4c814750d998ebae2430d55cd009ed8704579b3b145f8c3360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "
    Inscription client

";
        
        $__internal_b0def0af75e85f4c814750d998ebae2430d55cd009ed8704579b3b145f8c3360->leave($__internal_b0def0af75e85f4c814750d998ebae2430d55cd009ed8704579b3b145f8c3360_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8e3b93339ecfe34e4ebde4f143592fc194f2c7b2a4b6528cee3618b6c820960 = $this->env->getExtension("native_profiler");
        $__internal_a8e3b93339ecfe34e4ebde4f143592fc194f2c7b2a4b6528cee3618b6c820960->enter($__internal_a8e3b93339ecfe34e4ebde4f143592fc194f2c7b2a4b6528cee3618b6c820960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <form  method=\"post\" >
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nomClient", array()), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenomClient", array()), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "raisonSociale", array()), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "siret", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "tel", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "login", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "mdp", array()), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <input type=\"submit\" id=\"submit\"  name=\"submit\" />
    </form>
";
        
        $__internal_a8e3b93339ecfe34e4ebde4f143592fc194f2c7b2a4b6528cee3618b6c820960->leave($__internal_a8e3b93339ecfe34e4ebde4f143592fc194f2c7b2a4b6528cee3618b6c820960_prof);

    }

    public function getTemplateName()
    {
        return "SitePlaqueBundle:Register:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 19,  94 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  61 => 9,  58 => 8,  52 => 7,  42 => 2,  36 => 1,  29 => 7,  26 => 6,  24 => 1,);
    }
}
/* {% block title %}*/
/* */
/*     Inscription client*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <form  method="post" >*/
/*         {{ form_errors(form) }}*/
/* */
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
