<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_694b1ab579156b27359da0753dc0e3d6d69438e0192a132ae4c9381a4e27bd87 extends Twig_Template
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
        $__internal_4f862e6615640efc8c9c3dca41023d592db2572f756eef3ac4b49d2c75e20bda = $this->env->getExtension("native_profiler");
        $__internal_4f862e6615640efc8c9c3dca41023d592db2572f756eef3ac4b49d2c75e20bda->enter($__internal_4f862e6615640efc8c9c3dca41023d592db2572f756eef3ac4b49d2c75e20bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4f862e6615640efc8c9c3dca41023d592db2572f756eef3ac4b49d2c75e20bda->leave($__internal_4f862e6615640efc8c9c3dca41023d592db2572f756eef3ac4b49d2c75e20bda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
