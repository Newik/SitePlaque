<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e1622ff91479a2c2ab41f27b3004b97095acad894ab233dc261a9d1d6ba37627 extends Twig_Template
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
        $__internal_ec0c64da98f3a7b378ff88e6cc4533234cb46b0a3c0ea603c5559c8412214756 = $this->env->getExtension("native_profiler");
        $__internal_ec0c64da98f3a7b378ff88e6cc4533234cb46b0a3c0ea603c5559c8412214756->enter($__internal_ec0c64da98f3a7b378ff88e6cc4533234cb46b0a3c0ea603c5559c8412214756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ec0c64da98f3a7b378ff88e6cc4533234cb46b0a3c0ea603c5559c8412214756->leave($__internal_ec0c64da98f3a7b378ff88e6cc4533234cb46b0a3c0ea603c5559c8412214756_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
