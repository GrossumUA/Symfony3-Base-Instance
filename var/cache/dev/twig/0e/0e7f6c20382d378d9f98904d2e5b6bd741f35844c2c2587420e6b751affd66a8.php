<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fa85e916ca5e10668d1b86523898f8d4f6b0fcaa1fcabc81ba912730c21462d9 extends Twig_Template
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
        $__internal_bb1661f7a19b4eebdf44b7ecb166169ac36f465aa3e72a8a0cadda3816250223 = $this->env->getExtension("native_profiler");
        $__internal_bb1661f7a19b4eebdf44b7ecb166169ac36f465aa3e72a8a0cadda3816250223->enter($__internal_bb1661f7a19b4eebdf44b7ecb166169ac36f465aa3e72a8a0cadda3816250223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bb1661f7a19b4eebdf44b7ecb166169ac36f465aa3e72a8a0cadda3816250223->leave($__internal_bb1661f7a19b4eebdf44b7ecb166169ac36f465aa3e72a8a0cadda3816250223_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
