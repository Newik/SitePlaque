<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d8f0d9764b2b09a4c798ca8ababb8eddb78ee9d78b5aaf853430a18c165f3733 extends Twig_Template
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
        $__internal_ae86537954edf488bcf07ede82d484301bead504bec1da781490da2029be74df = $this->env->getExtension("native_profiler");
        $__internal_ae86537954edf488bcf07ede82d484301bead504bec1da781490da2029be74df->enter($__internal_ae86537954edf488bcf07ede82d484301bead504bec1da781490da2029be74df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ae86537954edf488bcf07ede82d484301bead504bec1da781490da2029be74df->leave($__internal_ae86537954edf488bcf07ede82d484301bead504bec1da781490da2029be74df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
