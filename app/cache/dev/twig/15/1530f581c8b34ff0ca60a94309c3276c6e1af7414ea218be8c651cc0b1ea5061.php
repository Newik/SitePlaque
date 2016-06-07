<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c13b00034f2eccc5bf053d2916993fef29cec930c1b906115ffd26382c81489d extends Twig_Template
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
        $__internal_36e025a0728c6e18fc5f256a5330203fab854193afa5302ee4c11a3c8c11fc0e = $this->env->getExtension("native_profiler");
        $__internal_36e025a0728c6e18fc5f256a5330203fab854193afa5302ee4c11a3c8c11fc0e->enter($__internal_36e025a0728c6e18fc5f256a5330203fab854193afa5302ee4c11a3c8c11fc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_36e025a0728c6e18fc5f256a5330203fab854193afa5302ee4c11a3c8c11fc0e->leave($__internal_36e025a0728c6e18fc5f256a5330203fab854193afa5302ee4c11a3c8c11fc0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
