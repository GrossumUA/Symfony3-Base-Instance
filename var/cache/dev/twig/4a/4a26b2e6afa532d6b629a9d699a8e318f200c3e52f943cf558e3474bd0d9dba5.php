<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_70b7696748b46feb2a59c8308ecd10c9a414e5a0c9c46cd9caabd54f5e61f07a extends Twig_Template
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
        $__internal_6427ad42637481c1e99f87e1caf5cd3c54275550ea42fca467fa468f5f9c1233 = $this->env->getExtension("native_profiler");
        $__internal_6427ad42637481c1e99f87e1caf5cd3c54275550ea42fca467fa468f5f9c1233->enter($__internal_6427ad42637481c1e99f87e1caf5cd3c54275550ea42fca467fa468f5f9c1233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6427ad42637481c1e99f87e1caf5cd3c54275550ea42fca467fa468f5f9c1233->leave($__internal_6427ad42637481c1e99f87e1caf5cd3c54275550ea42fca467fa468f5f9c1233_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
