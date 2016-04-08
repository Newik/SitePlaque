<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_75120db8a5fed1eb353d84671e62de697a943fb9c9d88eae1eb8ff7fbfde289d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c947f552e0884e2600801063b2af3f18fda4293a25a7a9e546fb277c4efab4be = $this->env->getExtension("native_profiler");
        $__internal_c947f552e0884e2600801063b2af3f18fda4293a25a7a9e546fb277c4efab4be->enter($__internal_c947f552e0884e2600801063b2af3f18fda4293a25a7a9e546fb277c4efab4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c947f552e0884e2600801063b2af3f18fda4293a25a7a9e546fb277c4efab4be->leave($__internal_c947f552e0884e2600801063b2af3f18fda4293a25a7a9e546fb277c4efab4be_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_403967a2b450faa2a540f3573725c39ef70d14368b2d6360b38ed8a4e0bb6571 = $this->env->getExtension("native_profiler");
        $__internal_403967a2b450faa2a540f3573725c39ef70d14368b2d6360b38ed8a4e0bb6571->enter($__internal_403967a2b450faa2a540f3573725c39ef70d14368b2d6360b38ed8a4e0bb6571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    ";
        // line 11
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>

";
        
        $__internal_403967a2b450faa2a540f3573725c39ef70d14368b2d6360b38ed8a4e0bb6571->leave($__internal_403967a2b450faa2a540f3573725c39ef70d14368b2d6360b38ed8a4e0bb6571_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 11,  51 => 9,  45 => 7,  42 => 6,  39 => 4,  27 => 3,  23 => 1,);
    }
}
/* */
/* */
/* {% block body %}*/
/* */
/*     {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">{{ error.message }}</div>*/
/*     {% endif %}*/
/* */
/*     {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <label for="username">Login :</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*         <label for="password">Mot de passe :</label>*/
/*         <input type="password" id="password" name="_password" />*/
/*         <br />*/
/*         <input type="submit" value="Connexion" />*/
/*     </form>*/
/* */
/* {% endblock %}*/
