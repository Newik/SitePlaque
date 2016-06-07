<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6e79da316a79a9a502cff2b783a9f82a54e859c7da17a4c0b5d714a77af51ef0 extends Twig_Template
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
        $__internal_5efbcf196cf3b12b6b9849859e8e76ca1e3bad952a672e1533069f7f11ba81ac = $this->env->getExtension("native_profiler");
        $__internal_5efbcf196cf3b12b6b9849859e8e76ca1e3bad952a672e1533069f7f11ba81ac->enter($__internal_5efbcf196cf3b12b6b9849859e8e76ca1e3bad952a672e1533069f7f11ba81ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5efbcf196cf3b12b6b9849859e8e76ca1e3bad952a672e1533069f7f11ba81ac->leave($__internal_5efbcf196cf3b12b6b9849859e8e76ca1e3bad952a672e1533069f7f11ba81ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
