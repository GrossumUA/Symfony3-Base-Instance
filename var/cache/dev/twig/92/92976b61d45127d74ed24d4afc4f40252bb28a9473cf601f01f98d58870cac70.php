<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_e508991616c94f2c5c4467c2864ef60cb659f5457e586a894598e429fc1da08a extends Twig_Template
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
        $__internal_013696ac282c0bd546464fc9938b6597399d45d6367ad7aa66d56caf49380817 = $this->env->getExtension("native_profiler");
        $__internal_013696ac282c0bd546464fc9938b6597399d45d6367ad7aa66d56caf49380817->enter($__internal_013696ac282c0bd546464fc9938b6597399d45d6367ad7aa66d56caf49380817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_013696ac282c0bd546464fc9938b6597399d45d6367ad7aa66d56caf49380817->leave($__internal_013696ac282c0bd546464fc9938b6597399d45d6367ad7aa66d56caf49380817_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
