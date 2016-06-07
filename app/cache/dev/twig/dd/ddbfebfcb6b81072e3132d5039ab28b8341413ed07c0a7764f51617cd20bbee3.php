<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6ad9e34e583367eaee654b23b278c9c544c430f82a96b0447f89595e8d72a293 extends Twig_Template
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
        $__internal_7f8bd96d130068db7be74c777f7c1d25443743b9a0437ec22197fa4a2af0a013 = $this->env->getExtension("native_profiler");
        $__internal_7f8bd96d130068db7be74c777f7c1d25443743b9a0437ec22197fa4a2af0a013->enter($__internal_7f8bd96d130068db7be74c777f7c1d25443743b9a0437ec22197fa4a2af0a013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7f8bd96d130068db7be74c777f7c1d25443743b9a0437ec22197fa4a2af0a013->leave($__internal_7f8bd96d130068db7be74c777f7c1d25443743b9a0437ec22197fa4a2af0a013_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
