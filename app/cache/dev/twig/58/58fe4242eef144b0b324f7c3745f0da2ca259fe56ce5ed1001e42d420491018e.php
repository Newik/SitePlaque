<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6be1e8519b35dda8adbdca691068b1ba15ca711b28a36a773f79ef7d9c97b25e extends Twig_Template
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
        $__internal_75cbb78ad1996753f4e504da0f8a9705e1de179673ac0a381f63180d35e67d00 = $this->env->getExtension("native_profiler");
        $__internal_75cbb78ad1996753f4e504da0f8a9705e1de179673ac0a381f63180d35e67d00->enter($__internal_75cbb78ad1996753f4e504da0f8a9705e1de179673ac0a381f63180d35e67d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_75cbb78ad1996753f4e504da0f8a9705e1de179673ac0a381f63180d35e67d00->leave($__internal_75cbb78ad1996753f4e504da0f8a9705e1de179673ac0a381f63180d35e67d00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
