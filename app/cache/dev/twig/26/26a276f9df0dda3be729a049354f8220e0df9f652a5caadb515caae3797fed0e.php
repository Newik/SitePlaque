<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4b42542d93be8238deebe46cf9bc3646fe6b8a65a749a7c986b936b88ef79f65 extends Twig_Template
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
        $__internal_7640322adc9f376545c58298a337bf4c244466d2f773513a5756ab7ea83f1f5b = $this->env->getExtension("native_profiler");
        $__internal_7640322adc9f376545c58298a337bf4c244466d2f773513a5756ab7ea83f1f5b->enter($__internal_7640322adc9f376545c58298a337bf4c244466d2f773513a5756ab7ea83f1f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7640322adc9f376545c58298a337bf4c244466d2f773513a5756ab7ea83f1f5b->leave($__internal_7640322adc9f376545c58298a337bf4c244466d2f773513a5756ab7ea83f1f5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
