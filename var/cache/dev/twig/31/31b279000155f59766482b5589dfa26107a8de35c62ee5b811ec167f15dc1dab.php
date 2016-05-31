<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3ddf8d9e8e4c5c19049ac1d91dbcbec0d48cc61041fe5b5ac5249407af019a66 extends Twig_Template
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
        $__internal_d47e139fd998e256e1721db0a56f14df11396c1ad4108fe7970cf5cb0567f339 = $this->env->getExtension("native_profiler");
        $__internal_d47e139fd998e256e1721db0a56f14df11396c1ad4108fe7970cf5cb0567f339->enter($__internal_d47e139fd998e256e1721db0a56f14df11396c1ad4108fe7970cf5cb0567f339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d47e139fd998e256e1721db0a56f14df11396c1ad4108fe7970cf5cb0567f339->leave($__internal_d47e139fd998e256e1721db0a56f14df11396c1ad4108fe7970cf5cb0567f339_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
