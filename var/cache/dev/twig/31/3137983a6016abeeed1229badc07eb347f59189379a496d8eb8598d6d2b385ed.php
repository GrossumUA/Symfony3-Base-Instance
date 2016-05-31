<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_528014cabecd45227dbcad44e1b64a0b77876963d478244257877842292db61a extends Twig_Template
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
        $__internal_76e709a40f2e3b715729e5e2acf19b7616e11fc8aa67128e34840ece0a9c94dc = $this->env->getExtension("native_profiler");
        $__internal_76e709a40f2e3b715729e5e2acf19b7616e11fc8aa67128e34840ece0a9c94dc->enter($__internal_76e709a40f2e3b715729e5e2acf19b7616e11fc8aa67128e34840ece0a9c94dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_76e709a40f2e3b715729e5e2acf19b7616e11fc8aa67128e34840ece0a9c94dc->leave($__internal_76e709a40f2e3b715729e5e2acf19b7616e11fc8aa67128e34840ece0a9c94dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
