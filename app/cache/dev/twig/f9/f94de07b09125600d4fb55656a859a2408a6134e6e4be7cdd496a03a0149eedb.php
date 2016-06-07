<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_122760783bfe306e74c004dd723e0c1ae899c423595a0e6905976dd997a66a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_52f997868a63e0d659ea912cccf88ba9baf46f0e0d28d5bac16460b4695f80b3 = $this->env->getExtension("native_profiler");
        $__internal_52f997868a63e0d659ea912cccf88ba9baf46f0e0d28d5bac16460b4695f80b3->enter($__internal_52f997868a63e0d659ea912cccf88ba9baf46f0e0d28d5bac16460b4695f80b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52f997868a63e0d659ea912cccf88ba9baf46f0e0d28d5bac16460b4695f80b3->leave($__internal_52f997868a63e0d659ea912cccf88ba9baf46f0e0d28d5bac16460b4695f80b3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3c82dd301eceba79fc97dccc63fb2a75709546fe79ce70a3ebfa1b3c99da6548 = $this->env->getExtension("native_profiler");
        $__internal_3c82dd301eceba79fc97dccc63fb2a75709546fe79ce70a3ebfa1b3c99da6548->enter($__internal_3c82dd301eceba79fc97dccc63fb2a75709546fe79ce70a3ebfa1b3c99da6548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "        <div>
            ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 11
        echo "        </div>

        ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 15
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 16
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 17
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        }
        // line 22
        echo "        <div>
            ";
        // line 23
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo "        </div>

";
        
        $__internal_3c82dd301eceba79fc97dccc63fb2a75709546fe79ce70a3ebfa1b3c99da6548->leave($__internal_3c82dd301eceba79fc97dccc63fb2a75709546fe79ce70a3ebfa1b3c99da6548_prof);

    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1aae55634492ef9544388cbfe7e0f6055c7b5453af3bc51728e9f9a9238f58b3 = $this->env->getExtension("native_profiler");
        $__internal_1aae55634492ef9544388cbfe7e0f6055c7b5453af3bc51728e9f9a9238f58b3->enter($__internal_1aae55634492ef9544388cbfe7e0f6055c7b5453af3bc51728e9f9a9238f58b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 24
        echo "            ";
        
        $__internal_1aae55634492ef9544388cbfe7e0f6055c7b5453af3bc51728e9f9a9238f58b3->leave($__internal_1aae55634492ef9544388cbfe7e0f6055c7b5453af3bc51728e9f9a9238f58b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 24,  114 => 23,  105 => 25,  103 => 23,  100 => 22,  97 => 21,  91 => 20,  82 => 17,  77 => 16,  72 => 15,  67 => 14,  65 => 13,  61 => 11,  55 => 8,  51 => 7,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* */
/* {% endblock %}*/
/* */
