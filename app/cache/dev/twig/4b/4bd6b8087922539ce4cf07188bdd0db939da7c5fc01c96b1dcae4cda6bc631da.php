<?php

/* admin/Utilisateur/edit.html.twig */
class __TwigTemplate_9bd8646b4ca34947a68a198670b8ad6f15e3ae652f2134b20ed39d27d17ecdcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/Utilisateur/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28b8e36771bf4d91fcfe25fca2cfa7038278754190b7f8c1a8d90dd9f6e9c89e = $this->env->getExtension("native_profiler");
        $__internal_28b8e36771bf4d91fcfe25fca2cfa7038278754190b7f8c1a8d90dd9f6e9c89e->enter($__internal_28b8e36771bf4d91fcfe25fca2cfa7038278754190b7f8c1a8d90dd9f6e9c89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/Utilisateur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28b8e36771bf4d91fcfe25fca2cfa7038278754190b7f8c1a8d90dd9f6e9c89e->leave($__internal_28b8e36771bf4d91fcfe25fca2cfa7038278754190b7f8c1a8d90dd9f6e9c89e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_827d3f06f46ed35a121e8da2afde4e0be7e0405858a41134d41501b0be9e8be5 = $this->env->getExtension("native_profiler");
        $__internal_827d3f06f46ed35a121e8da2afde4e0be7e0405858a41134d41501b0be9e8be5->enter($__internal_827d3f06f46ed35a121e8da2afde4e0be7e0405858a41134d41501b0be9e8be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array())) {
            // line 5
            echo "        ";
            $this->displayParentBlock("title", $context, $blocks);
            echo " - Modification du client ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            $this->displayParentBlock("title", $context, $blocks);
            echo " - Ajout d'un client
    ";
        }
        
        $__internal_827d3f06f46ed35a121e8da2afde4e0be7e0405858a41134d41501b0be9e8be5->leave($__internal_827d3f06f46ed35a121e8da2afde4e0be7e0405858a41134d41501b0be9e8be5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f5a609f7d4af093b3e2e6f5ed220ff54e26b49f603b7d2dc4a2112f37393fcd = $this->env->getExtension("native_profiler");
        $__internal_2f5a609f7d4af093b3e2e6f5ed220ff54e26b49f603b7d2dc4a2112f37393fcd->enter($__internal_2f5a609f7d4af093b3e2e6f5ed220ff54e26b49f603b7d2dc4a2112f37393fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <form action=\"";
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modification_client", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
            echo "
    ";
        } else {
            // line 13
            echo $this->env->getExtension('routing')->getPath("inscription_client");
        }
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nomClient", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenomClient", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "raisonSociale", array()), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "siret", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email", array()), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "tel", array()), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "login", array()), 'row');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "mdp", array()), 'row');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <input type=\"submit\" id=\"submit\" value=\"";
        // line 26
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array())) {
            echo "Valider";
        } else {
            echo "Ajouter";
        }
        echo "\" name=\"submit\" />
    </form>
";
        
        $__internal_2f5a609f7d4af093b3e2e6f5ed220ff54e26b49f603b7d2dc4a2112f37393fcd->leave($__internal_2f5a609f7d4af093b3e2e6f5ed220ff54e26b49f603b7d2dc4a2112f37393fcd_prof);

    }

    public function getTemplateName()
    {
        return "admin/Utilisateur/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 26,  120 => 24,  116 => 23,  112 => 22,  108 => 21,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  83 => 14,  76 => 13,  69 => 12,  63 => 11,  52 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {% if client.id %}*/
/*         {{ parent() }} - Modification du client {{ client.id }}*/
/*     {% else %}*/
/*         {{ parent() }} - Ajout d'un client*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <form action="{% if client.id %}{{ path('modification_client', { 'id':client.id }) }}*/
/*     {% else %}{{ path('inscription_client') }}{% endif %}" method="post" {{ form_enctype(form) }}>*/
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
/*         <input type="submit" id="submit" value="{% if client.id %}{{ 'Valider'}}{% else %}{{ 'Ajouter'}}{% endif %}" name="submit" />*/
/*     </form>*/
/* {% endblock %}*/
