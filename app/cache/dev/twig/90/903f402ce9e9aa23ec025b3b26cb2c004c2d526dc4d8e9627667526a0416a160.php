<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_30017e85a9d6cdd731f97260f13d2299b3c4a74310f0a153568db6a14a146413 extends Twig_Template
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
        $__internal_1ef18106dcaebd3c7f708c8df5c96e53188af64559e7a9063acf72227ed2c764 = $this->env->getExtension("native_profiler");
        $__internal_1ef18106dcaebd3c7f708c8df5c96e53188af64559e7a9063acf72227ed2c764->enter($__internal_1ef18106dcaebd3c7f708c8df5c96e53188af64559e7a9063acf72227ed2c764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1ef18106dcaebd3c7f708c8df5c96e53188af64559e7a9063acf72227ed2c764->leave($__internal_1ef18106dcaebd3c7f708c8df5c96e53188af64559e7a9063acf72227ed2c764_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
