<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_354ac300a522f148cf9583ef948d1774697bdfe4ccdf109ff410cb242d0a3f10 extends Twig_Template
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
        $__internal_a24a37403b3722d21be2cea44ea13e6f809072ef1ff9a2c83ba8b91805a8cdb9 = $this->env->getExtension("native_profiler");
        $__internal_a24a37403b3722d21be2cea44ea13e6f809072ef1ff9a2c83ba8b91805a8cdb9->enter($__internal_a24a37403b3722d21be2cea44ea13e6f809072ef1ff9a2c83ba8b91805a8cdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a24a37403b3722d21be2cea44ea13e6f809072ef1ff9a2c83ba8b91805a8cdb9->leave($__internal_a24a37403b3722d21be2cea44ea13e6f809072ef1ff9a2c83ba8b91805a8cdb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
