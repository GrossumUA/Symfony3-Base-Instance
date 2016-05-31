<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b20fe48d8b8ec0658b6888f3cfb5cf720b52dd56ca0c2803335bf4c4a097e083 extends Twig_Template
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
        $__internal_9135d615be6375da1d58043f76242abd3b07d3c95816fe611ea3b11e8eed2aab = $this->env->getExtension("native_profiler");
        $__internal_9135d615be6375da1d58043f76242abd3b07d3c95816fe611ea3b11e8eed2aab->enter($__internal_9135d615be6375da1d58043f76242abd3b07d3c95816fe611ea3b11e8eed2aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9135d615be6375da1d58043f76242abd3b07d3c95816fe611ea3b11e8eed2aab->leave($__internal_9135d615be6375da1d58043f76242abd3b07d3c95816fe611ea3b11e8eed2aab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
