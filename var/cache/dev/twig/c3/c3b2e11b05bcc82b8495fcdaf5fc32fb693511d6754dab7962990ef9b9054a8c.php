<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b5920d0d6af26e8f10c2d4d32bd60c4c09a8fc211a10d42fafc88dbe67627eee extends Twig_Template
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
        $__internal_f51e78cc3b87ffb5417c8576ab3a5d6f12413d446dfd4b4003d0a315191a8827 = $this->env->getExtension("native_profiler");
        $__internal_f51e78cc3b87ffb5417c8576ab3a5d6f12413d446dfd4b4003d0a315191a8827->enter($__internal_f51e78cc3b87ffb5417c8576ab3a5d6f12413d446dfd4b4003d0a315191a8827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f51e78cc3b87ffb5417c8576ab3a5d6f12413d446dfd4b4003d0a315191a8827->leave($__internal_f51e78cc3b87ffb5417c8576ab3a5d6f12413d446dfd4b4003d0a315191a8827_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
