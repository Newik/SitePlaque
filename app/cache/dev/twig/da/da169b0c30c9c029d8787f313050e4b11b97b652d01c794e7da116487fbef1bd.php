<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_82c376b9495566b58a5fa26da554569842408641a6d146bb1e2e6fd3cecbf8df extends Twig_Template
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
        $__internal_92fa065fa2777fb21ebdc9ddc545eea3db49b72b4abcc44f4b188408f786552d = $this->env->getExtension("native_profiler");
        $__internal_92fa065fa2777fb21ebdc9ddc545eea3db49b72b4abcc44f4b188408f786552d->enter($__internal_92fa065fa2777fb21ebdc9ddc545eea3db49b72b4abcc44f4b188408f786552d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_92fa065fa2777fb21ebdc9ddc545eea3db49b72b4abcc44f4b188408f786552d->leave($__internal_92fa065fa2777fb21ebdc9ddc545eea3db49b72b4abcc44f4b188408f786552d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
