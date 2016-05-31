<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bfbb69f8b9a4cda94938fe39451a27256a1f76c98ebfd6a83cbdc2be17b1e099 extends Twig_Template
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
        $__internal_0dffc3b6a8a2c417231d64847c7e90ef91f24c04ba0a3b6537d9b546591be89a = $this->env->getExtension("native_profiler");
        $__internal_0dffc3b6a8a2c417231d64847c7e90ef91f24c04ba0a3b6537d9b546591be89a->enter($__internal_0dffc3b6a8a2c417231d64847c7e90ef91f24c04ba0a3b6537d9b546591be89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0dffc3b6a8a2c417231d64847c7e90ef91f24c04ba0a3b6537d9b546591be89a->leave($__internal_0dffc3b6a8a2c417231d64847c7e90ef91f24c04ba0a3b6537d9b546591be89a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
