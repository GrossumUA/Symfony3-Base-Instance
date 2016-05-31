<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_cc81d84cdcc3e1ffdc980833e203ac972a84a086a8e7a5190d58d74a2133eac4 extends Twig_Template
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
        $__internal_570f88d8196f92ef7bbffaed21f312166d3ea6cad687a657a3ab668085a7c167 = $this->env->getExtension("native_profiler");
        $__internal_570f88d8196f92ef7bbffaed21f312166d3ea6cad687a657a3ab668085a7c167->enter($__internal_570f88d8196f92ef7bbffaed21f312166d3ea6cad687a657a3ab668085a7c167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_570f88d8196f92ef7bbffaed21f312166d3ea6cad687a657a3ab668085a7c167->leave($__internal_570f88d8196f92ef7bbffaed21f312166d3ea6cad687a657a3ab668085a7c167_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
