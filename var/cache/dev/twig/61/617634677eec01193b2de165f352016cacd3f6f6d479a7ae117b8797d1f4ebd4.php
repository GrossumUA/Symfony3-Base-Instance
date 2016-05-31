<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_215dc124cc83c766e68b3ec633cded44d9b4162be825716b646731f9e16c5c2f extends Twig_Template
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
        $__internal_b0db3a2e6afab3858ccc1eecdba1cafebd83d22cbda762a57ccf06d7e3443804 = $this->env->getExtension("native_profiler");
        $__internal_b0db3a2e6afab3858ccc1eecdba1cafebd83d22cbda762a57ccf06d7e3443804->enter($__internal_b0db3a2e6afab3858ccc1eecdba1cafebd83d22cbda762a57ccf06d7e3443804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b0db3a2e6afab3858ccc1eecdba1cafebd83d22cbda762a57ccf06d7e3443804->leave($__internal_b0db3a2e6afab3858ccc1eecdba1cafebd83d22cbda762a57ccf06d7e3443804_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
