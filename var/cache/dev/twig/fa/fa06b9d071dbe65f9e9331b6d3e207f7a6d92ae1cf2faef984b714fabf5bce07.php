<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2c06e7e4e6ad3aae91766c030b5040577c43fe2dd1450671040a2e55ab1154db extends Twig_Template
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
        $__internal_61b91a2af1d5621505d23dbcbac1f3d34e61fd4d665606810960701b48a7e136 = $this->env->getExtension("native_profiler");
        $__internal_61b91a2af1d5621505d23dbcbac1f3d34e61fd4d665606810960701b48a7e136->enter($__internal_61b91a2af1d5621505d23dbcbac1f3d34e61fd4d665606810960701b48a7e136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_61b91a2af1d5621505d23dbcbac1f3d34e61fd4d665606810960701b48a7e136->leave($__internal_61b91a2af1d5621505d23dbcbac1f3d34e61fd4d665606810960701b48a7e136_prof);

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
