<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fa2f4c7dffb11e4bae27ad3471fe684c897dbcedb756a6f465786058673883da extends Twig_Template
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
        $__internal_9cf2c2344fcec814592c8aa91cc85dfd5d2e09b3f636e4c073367656316c3d99 = $this->env->getExtension("native_profiler");
        $__internal_9cf2c2344fcec814592c8aa91cc85dfd5d2e09b3f636e4c073367656316c3d99->enter($__internal_9cf2c2344fcec814592c8aa91cc85dfd5d2e09b3f636e4c073367656316c3d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9cf2c2344fcec814592c8aa91cc85dfd5d2e09b3f636e4c073367656316c3d99->leave($__internal_9cf2c2344fcec814592c8aa91cc85dfd5d2e09b3f636e4c073367656316c3d99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
