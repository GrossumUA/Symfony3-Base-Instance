<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2d3153ab1e55711a5c8b610ada78e78d30b011a6af691a6c3afd8eee5391c55c extends Twig_Template
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
        $__internal_b472374ae9a41b5b3371a03a0bca6d9da33ae8d7d3913233a56c1400eadd3030 = $this->env->getExtension("native_profiler");
        $__internal_b472374ae9a41b5b3371a03a0bca6d9da33ae8d7d3913233a56c1400eadd3030->enter($__internal_b472374ae9a41b5b3371a03a0bca6d9da33ae8d7d3913233a56c1400eadd3030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b472374ae9a41b5b3371a03a0bca6d9da33ae8d7d3913233a56c1400eadd3030->leave($__internal_b472374ae9a41b5b3371a03a0bca6d9da33ae8d7d3913233a56c1400eadd3030_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
