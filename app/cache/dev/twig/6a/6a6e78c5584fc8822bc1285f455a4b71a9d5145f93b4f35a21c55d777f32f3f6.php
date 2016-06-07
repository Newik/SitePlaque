<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2c60b43208984e9d90f8b06aa132855586ff83c94481b78dc110e02b3a552c60 extends Twig_Template
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
        $__internal_b39dd122334c5ed5218bc2fd1cf33e0563b6a90db6ad5c059488be6fb5f4cb10 = $this->env->getExtension("native_profiler");
        $__internal_b39dd122334c5ed5218bc2fd1cf33e0563b6a90db6ad5c059488be6fb5f4cb10->enter($__internal_b39dd122334c5ed5218bc2fd1cf33e0563b6a90db6ad5c059488be6fb5f4cb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b39dd122334c5ed5218bc2fd1cf33e0563b6a90db6ad5c059488be6fb5f4cb10->leave($__internal_b39dd122334c5ed5218bc2fd1cf33e0563b6a90db6ad5c059488be6fb5f4cb10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
