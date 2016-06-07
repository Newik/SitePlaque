<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fa7fe65b2e8dbcf4fa13fa8f2e06fe379d4ecac4d5029571037aa9e9ae2570cf extends Twig_Template
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
        $__internal_11baa694bd45f32d86239cc857f77f7c3f84f9dbb442d2a3c1d18de46366a11a = $this->env->getExtension("native_profiler");
        $__internal_11baa694bd45f32d86239cc857f77f7c3f84f9dbb442d2a3c1d18de46366a11a->enter($__internal_11baa694bd45f32d86239cc857f77f7c3f84f9dbb442d2a3c1d18de46366a11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_11baa694bd45f32d86239cc857f77f7c3f84f9dbb442d2a3c1d18de46366a11a->leave($__internal_11baa694bd45f32d86239cc857f77f7c3f84f9dbb442d2a3c1d18de46366a11a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
