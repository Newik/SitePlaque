<?php

/* @Framework/Form/choice_widget_collapsed.html.php */
class __TwigTemplate_26426d6088560764be55181d96beba909fc01a21762c2dddd753b8f13601c20a extends Twig_Template
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
        $__internal_e8528685bf6acbaa9de9dcac2a89b1ea74facd1693afcf54ac8dddbbd2093e6a = $this->env->getExtension("native_profiler");
        $__internal_e8528685bf6acbaa9de9dcac2a89b1ea74facd1693afcf54ac8dddbbd2093e6a->enter($__internal_e8528685bf6acbaa9de9dcac2a89b1ea74facd1693afcf54ac8dddbbd2093e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_collapsed.html.php"));

        // line 1
        echo "<select
    <?php if (\$required && null === \$placeholder && \$placeholder_in_choices === false && \$multiple === false && (!isset(\$attr['size']) || \$attr['size'] <= 1)):
        \$required = false;
    endif; ?>
    <?php echo \$view['form']->block(\$form, 'widget_attributes', array(
        'required' => \$required,
    )) ?>
    <?php if (\$multiple): ?> multiple=\"multiple\"<?php endif ?>
>
    <?php if (null !== \$placeholder): ?><option value=\"\"<?php if (\$required && empty(\$value) && '0' !== \$value): ?> selected=\"selected\"<?php endif?>><?php echo '' != \$placeholder ? \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$placeholder, array(), \$translation_domain) : \$placeholder) : '' ?></option><?php endif; ?>
    <?php if (count(\$preferred_choices) > 0): ?>
        <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$preferred_choices)) ?>
        <?php if (count(\$choices) > 0 && null !== \$separator): ?>
            <option disabled=\"disabled\"><?php echo \$separator ?></option>
        <?php endif ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$choices)) ?>
</select>
";
        
        $__internal_e8528685bf6acbaa9de9dcac2a89b1ea74facd1693afcf54ac8dddbbd2093e6a->leave($__internal_e8528685bf6acbaa9de9dcac2a89b1ea74facd1693afcf54ac8dddbbd2093e6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_collapsed.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <select*/
/*     <?php if ($required && null === $placeholder && $placeholder_in_choices === false && $multiple === false && (!isset($attr['size']) || $attr['size'] <= 1)):*/
/*         $required = false;*/
/*     endif; ?>*/
/*     <?php echo $view['form']->block($form, 'widget_attributes', array(*/
/*         'required' => $required,*/
/*     )) ?>*/
/*     <?php if ($multiple): ?> multiple="multiple"<?php endif ?>*/
/* >*/
/*     <?php if (null !== $placeholder): ?><option value=""<?php if ($required && empty($value) && '0' !== $value): ?> selected="selected"<?php endif?>><?php echo '' != $placeholder ? $view->escape(false !== $translation_domain ? $view['translator']->trans($placeholder, array(), $translation_domain) : $placeholder) : '' ?></option><?php endif; ?>*/
/*     <?php if (count($preferred_choices) > 0): ?>*/
/*         <?php echo $view['form']->block($form, 'choice_widget_options', array('choices' => $preferred_choices)) ?>*/
/*         <?php if (count($choices) > 0 && null !== $separator): ?>*/
/*             <option disabled="disabled"><?php echo $separator ?></option>*/
/*         <?php endif ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'choice_widget_options', array('choices' => $choices)) ?>*/
/* </select>*/
/* */
