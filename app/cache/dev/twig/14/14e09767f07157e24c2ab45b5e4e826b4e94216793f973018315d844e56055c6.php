<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1d008cf61c082982ffbdb8daf2d146bfce4466a34dec3e4c5e8a3e1cd0b3721e extends Twig_Template
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
        $__internal_e82436e53c7df326d9ce4198b3068d3d81907b63b52b91310cd89b0ea61453bd = $this->env->getExtension("native_profiler");
        $__internal_e82436e53c7df326d9ce4198b3068d3d81907b63b52b91310cd89b0ea61453bd->enter($__internal_e82436e53c7df326d9ce4198b3068d3d81907b63b52b91310cd89b0ea61453bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e82436e53c7df326d9ce4198b3068d3d81907b63b52b91310cd89b0ea61453bd->leave($__internal_e82436e53c7df326d9ce4198b3068d3d81907b63b52b91310cd89b0ea61453bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
