<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a0503441be089c4bff2f240ee38a989b153271805684045a4c77a301fe65b89a extends Twig_Template
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
        $__internal_41999e490469b0eb68dc48ceee10d1eac0954c04edfe02761e3f83d358670375 = $this->env->getExtension("native_profiler");
        $__internal_41999e490469b0eb68dc48ceee10d1eac0954c04edfe02761e3f83d358670375->enter($__internal_41999e490469b0eb68dc48ceee10d1eac0954c04edfe02761e3f83d358670375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_41999e490469b0eb68dc48ceee10d1eac0954c04edfe02761e3f83d358670375->leave($__internal_41999e490469b0eb68dc48ceee10d1eac0954c04edfe02761e3f83d358670375_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
