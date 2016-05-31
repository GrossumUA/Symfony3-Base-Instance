<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7601db70464928eb403bca45a53dd942f63d751ff8c0a42464d7e2dde5b7e7e8 extends Twig_Template
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
        $__internal_b8b356bad8365d172e7cb1f26d0c60a49619f9bf8b9c6f788cccaf1c5288eab4 = $this->env->getExtension("native_profiler");
        $__internal_b8b356bad8365d172e7cb1f26d0c60a49619f9bf8b9c6f788cccaf1c5288eab4->enter($__internal_b8b356bad8365d172e7cb1f26d0c60a49619f9bf8b9c6f788cccaf1c5288eab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b8b356bad8365d172e7cb1f26d0c60a49619f9bf8b9c6f788cccaf1c5288eab4->leave($__internal_b8b356bad8365d172e7cb1f26d0c60a49619f9bf8b9c6f788cccaf1c5288eab4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
