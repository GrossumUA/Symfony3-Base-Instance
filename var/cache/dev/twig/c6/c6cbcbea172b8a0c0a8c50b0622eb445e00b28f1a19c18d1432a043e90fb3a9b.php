<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_065f7eb8a7bd16b7a7bdc4565215a33a689ffc0136249a691b139f429b5625be extends Twig_Template
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
        $__internal_79e94aaed972dbd55c19edf8209248b02bd9c1cdc9a6f09b40fd02a27cda4570 = $this->env->getExtension("native_profiler");
        $__internal_79e94aaed972dbd55c19edf8209248b02bd9c1cdc9a6f09b40fd02a27cda4570->enter($__internal_79e94aaed972dbd55c19edf8209248b02bd9c1cdc9a6f09b40fd02a27cda4570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_79e94aaed972dbd55c19edf8209248b02bd9c1cdc9a6f09b40fd02a27cda4570->leave($__internal_79e94aaed972dbd55c19edf8209248b02bd9c1cdc9a6f09b40fd02a27cda4570_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
