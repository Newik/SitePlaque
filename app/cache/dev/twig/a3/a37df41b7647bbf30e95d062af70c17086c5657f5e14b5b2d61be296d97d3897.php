<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b3292f53ec6fefe4210ef1191d877b9138d6e6d485c857c8f55e45e556cc10cb extends Twig_Template
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
        $__internal_6d8b3f89eb4ae55fccfcef5217a21af9081dc684cf50efa110356618e4858d33 = $this->env->getExtension("native_profiler");
        $__internal_6d8b3f89eb4ae55fccfcef5217a21af9081dc684cf50efa110356618e4858d33->enter($__internal_6d8b3f89eb4ae55fccfcef5217a21af9081dc684cf50efa110356618e4858d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6d8b3f89eb4ae55fccfcef5217a21af9081dc684cf50efa110356618e4858d33->leave($__internal_6d8b3f89eb4ae55fccfcef5217a21af9081dc684cf50efa110356618e4858d33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
