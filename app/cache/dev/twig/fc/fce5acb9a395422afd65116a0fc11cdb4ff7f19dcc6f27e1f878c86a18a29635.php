<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_73c8097fcc5af16009fc0bb13be420538cfad112f67a2a57fe423db5f3a44e09 extends Twig_Template
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
        $__internal_2e2ffea9fbdfdd72a6031047387b3326553363dbf549f0293043637dec52fdb8 = $this->env->getExtension("native_profiler");
        $__internal_2e2ffea9fbdfdd72a6031047387b3326553363dbf549f0293043637dec52fdb8->enter($__internal_2e2ffea9fbdfdd72a6031047387b3326553363dbf549f0293043637dec52fdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2e2ffea9fbdfdd72a6031047387b3326553363dbf549f0293043637dec52fdb8->leave($__internal_2e2ffea9fbdfdd72a6031047387b3326553363dbf549f0293043637dec52fdb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
