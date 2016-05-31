<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_4f115b67242536a68dc2598774bbf8f0b40a7f0f62c5df807332f23de8c8bd28 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fc97cf08bc4516b252753e1371e2b86465364cb834fe26ed33e740130b161d0 = $this->env->getExtension("native_profiler");
        $__internal_1fc97cf08bc4516b252753e1371e2b86465364cb834fe26ed33e740130b161d0->enter($__internal_1fc97cf08bc4516b252753e1371e2b86465364cb834fe26ed33e740130b161d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc97cf08bc4516b252753e1371e2b86465364cb834fe26ed33e740130b161d0->leave($__internal_1fc97cf08bc4516b252753e1371e2b86465364cb834fe26ed33e740130b161d0_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_acd2860a3998c4a33b123d62d43ad2f09de3f9b13c8bc4f603a716ba9c47952c = $this->env->getExtension("native_profiler");
        $__internal_acd2860a3998c4a33b123d62d43ad2f09de3f9b13c8bc4f603a716ba9c47952c->enter($__internal_acd2860a3998c4a33b123d62d43ad2f09de3f9b13c8bc4f603a716ba9c47952c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_acd2860a3998c4a33b123d62d43ad2f09de3f9b13c8bc4f603a716ba9c47952c->leave($__internal_acd2860a3998c4a33b123d62d43ad2f09de3f9b13c8bc4f603a716ba9c47952c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
