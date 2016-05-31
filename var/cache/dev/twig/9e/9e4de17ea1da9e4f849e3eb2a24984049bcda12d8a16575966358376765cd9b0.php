<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4108743b248902a0c31f8a4eab0e8e058973e3b60a809cbefbb3a49086ac73e0 extends Twig_Template
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
        $__internal_f87ae055818c2b83d292c980a4bc34a8f45638a315b632988c1c4169c9caebf0 = $this->env->getExtension("native_profiler");
        $__internal_f87ae055818c2b83d292c980a4bc34a8f45638a315b632988c1c4169c9caebf0->enter($__internal_f87ae055818c2b83d292c980a4bc34a8f45638a315b632988c1c4169c9caebf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f87ae055818c2b83d292c980a4bc34a8f45638a315b632988c1c4169c9caebf0->leave($__internal_f87ae055818c2b83d292c980a4bc34a8f45638a315b632988c1c4169c9caebf0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
