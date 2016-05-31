<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_687a56b6f7859b5b6b531ab72a20cc88d116f1ca612c17f7bae2d79d713c4e97 extends Twig_Template
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
        $__internal_3c37d62a298521804320200a2bf71a722054150da9e4938263135a93dba9d0ad = $this->env->getExtension("native_profiler");
        $__internal_3c37d62a298521804320200a2bf71a722054150da9e4938263135a93dba9d0ad->enter($__internal_3c37d62a298521804320200a2bf71a722054150da9e4938263135a93dba9d0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3c37d62a298521804320200a2bf71a722054150da9e4938263135a93dba9d0ad->leave($__internal_3c37d62a298521804320200a2bf71a722054150da9e4938263135a93dba9d0ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
