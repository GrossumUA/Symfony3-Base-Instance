<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0a098a883ef578911d03fea77cf4afb9a7daf2a8a7045fef7e8114aa5aa16ce1 extends Twig_Template
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
        $__internal_0d533e7809122e1097a759f9c6b9c7f281b04050d4df4ee10e0c289f08f28daf = $this->env->getExtension("native_profiler");
        $__internal_0d533e7809122e1097a759f9c6b9c7f281b04050d4df4ee10e0c289f08f28daf->enter($__internal_0d533e7809122e1097a759f9c6b9c7f281b04050d4df4ee10e0c289f08f28daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0d533e7809122e1097a759f9c6b9c7f281b04050d4df4ee10e0c289f08f28daf->leave($__internal_0d533e7809122e1097a759f9c6b9c7f281b04050d4df4ee10e0c289f08f28daf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
