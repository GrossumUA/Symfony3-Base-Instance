<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_4b33eb50830f31169a54ec0249c35fcff10af696bf41e36b23ac5e4230d0ec94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ebbf0a567a414a7c815d8ba4040021945e07b70c5b6274c700488cf8287b532 = $this->env->getExtension("native_profiler");
        $__internal_3ebbf0a567a414a7c815d8ba4040021945e07b70c5b6274c700488cf8287b532->enter($__internal_3ebbf0a567a414a7c815d8ba4040021945e07b70c5b6274c700488cf8287b532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ebbf0a567a414a7c815d8ba4040021945e07b70c5b6274c700488cf8287b532->leave($__internal_3ebbf0a567a414a7c815d8ba4040021945e07b70c5b6274c700488cf8287b532_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d8efc8e088780f106879022d22ab063941edf5d62b58959a0f1fc32ea7160800 = $this->env->getExtension("native_profiler");
        $__internal_d8efc8e088780f106879022d22ab063941edf5d62b58959a0f1fc32ea7160800->enter($__internal_d8efc8e088780f106879022d22ab063941edf5d62b58959a0f1fc32ea7160800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_d8efc8e088780f106879022d22ab063941edf5d62b58959a0f1fc32ea7160800->leave($__internal_d8efc8e088780f106879022d22ab063941edf5d62b58959a0f1fc32ea7160800_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
