<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cfcc96a1524bf66b6dd86187940b0e4e35844738650f25014fb6c2a802a9f823 extends Twig_Template
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
        $__internal_c2cc71f91a95bc4b7117bc0b08115c176a7046cd75fda079c0bf48aa2afa1da7 = $this->env->getExtension("native_profiler");
        $__internal_c2cc71f91a95bc4b7117bc0b08115c176a7046cd75fda079c0bf48aa2afa1da7->enter($__internal_c2cc71f91a95bc4b7117bc0b08115c176a7046cd75fda079c0bf48aa2afa1da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c2cc71f91a95bc4b7117bc0b08115c176a7046cd75fda079c0bf48aa2afa1da7->leave($__internal_c2cc71f91a95bc4b7117bc0b08115c176a7046cd75fda079c0bf48aa2afa1da7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
