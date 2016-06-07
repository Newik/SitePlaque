<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a8b286118018146dbafad6b8c130310f493d168848acb7a64a1f9438e4a3130d extends Twig_Template
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
        $__internal_38c63b7b193bd0c4fa1d85d06b8474c644f1cfa10b40efa28316f9e39fd6a4de = $this->env->getExtension("native_profiler");
        $__internal_38c63b7b193bd0c4fa1d85d06b8474c644f1cfa10b40efa28316f9e39fd6a4de->enter($__internal_38c63b7b193bd0c4fa1d85d06b8474c644f1cfa10b40efa28316f9e39fd6a4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_38c63b7b193bd0c4fa1d85d06b8474c644f1cfa10b40efa28316f9e39fd6a4de->leave($__internal_38c63b7b193bd0c4fa1d85d06b8474c644f1cfa10b40efa28316f9e39fd6a4de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
