<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_be45e64e9e72349cd1c7b535e5aea7293c4f19946cd90a36c4ffa7b212fd23df extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e9158150160c47de111146c68b1216ede503ddd0f4400f90d72634c6bd7b9d2 = $this->env->getExtension("native_profiler");
        $__internal_4e9158150160c47de111146c68b1216ede503ddd0f4400f90d72634c6bd7b9d2->enter($__internal_4e9158150160c47de111146c68b1216ede503ddd0f4400f90d72634c6bd7b9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e9158150160c47de111146c68b1216ede503ddd0f4400f90d72634c6bd7b9d2->leave($__internal_4e9158150160c47de111146c68b1216ede503ddd0f4400f90d72634c6bd7b9d2_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c8bab4cfaa53a2a6c42024e3e944ddc19d3bffebaebe8ebc96fc0168b6e15d65 = $this->env->getExtension("native_profiler");
        $__internal_c8bab4cfaa53a2a6c42024e3e944ddc19d3bffebaebe8ebc96fc0168b6e15d65->enter($__internal_c8bab4cfaa53a2a6c42024e3e944ddc19d3bffebaebe8ebc96fc0168b6e15d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_c8bab4cfaa53a2a6c42024e3e944ddc19d3bffebaebe8ebc96fc0168b6e15d65->leave($__internal_c8bab4cfaa53a2a6c42024e3e944ddc19d3bffebaebe8ebc96fc0168b6e15d65_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
