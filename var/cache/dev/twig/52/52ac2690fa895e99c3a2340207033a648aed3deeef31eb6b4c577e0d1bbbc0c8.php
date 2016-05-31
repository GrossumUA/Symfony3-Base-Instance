<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_065fcb3a5e20f9b88d87f07323632d17e19bbab75fdb95f0d91ac47f5badd193 extends Twig_Template
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
        $__internal_fe05cb16f877b7c48fae4835f65afa5331d4e78deb78ca833235bf7f200a7be5 = $this->env->getExtension("native_profiler");
        $__internal_fe05cb16f877b7c48fae4835f65afa5331d4e78deb78ca833235bf7f200a7be5->enter($__internal_fe05cb16f877b7c48fae4835f65afa5331d4e78deb78ca833235bf7f200a7be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fe05cb16f877b7c48fae4835f65afa5331d4e78deb78ca833235bf7f200a7be5->leave($__internal_fe05cb16f877b7c48fae4835f65afa5331d4e78deb78ca833235bf7f200a7be5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
