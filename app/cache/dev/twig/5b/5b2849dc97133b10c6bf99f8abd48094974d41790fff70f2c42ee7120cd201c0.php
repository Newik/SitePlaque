<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_53b266f8c7206dd76574f3c59d75d7d66946a8006e3e859a6dd92d83ce35c9b4 extends Twig_Template
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
        $__internal_488639da3c5852941ce3dee28ab46fb5355d71c33345f8d7ed981ef77e954501 = $this->env->getExtension("native_profiler");
        $__internal_488639da3c5852941ce3dee28ab46fb5355d71c33345f8d7ed981ef77e954501->enter($__internal_488639da3c5852941ce3dee28ab46fb5355d71c33345f8d7ed981ef77e954501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_488639da3c5852941ce3dee28ab46fb5355d71c33345f8d7ed981ef77e954501->leave($__internal_488639da3c5852941ce3dee28ab46fb5355d71c33345f8d7ed981ef77e954501_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
