<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5077a7af0c0b140f847e7e6df460dce5adb17147ba766807e6999f076173fa8a extends Twig_Template
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
        $__internal_551e640667042593274ffc87a6ca8a6315a600696580a072da3f886260f19b40 = $this->env->getExtension("native_profiler");
        $__internal_551e640667042593274ffc87a6ca8a6315a600696580a072da3f886260f19b40->enter($__internal_551e640667042593274ffc87a6ca8a6315a600696580a072da3f886260f19b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_551e640667042593274ffc87a6ca8a6315a600696580a072da3f886260f19b40->leave($__internal_551e640667042593274ffc87a6ca8a6315a600696580a072da3f886260f19b40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
