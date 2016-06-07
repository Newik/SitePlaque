<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_33c8a5eee1ba97f54db25deee995f8770288cb79faf119bb1b28265aa0af7b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53f49cf475c8fbebbfe68f980e4d1ce4512106085a5b61bdd4c583af5cf2d5d0 = $this->env->getExtension("native_profiler");
        $__internal_53f49cf475c8fbebbfe68f980e4d1ce4512106085a5b61bdd4c583af5cf2d5d0->enter($__internal_53f49cf475c8fbebbfe68f980e4d1ce4512106085a5b61bdd4c583af5cf2d5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_53f49cf475c8fbebbfe68f980e4d1ce4512106085a5b61bdd4c583af5cf2d5d0->leave($__internal_53f49cf475c8fbebbfe68f980e4d1ce4512106085a5b61bdd4c583af5cf2d5d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
