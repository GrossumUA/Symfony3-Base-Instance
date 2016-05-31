<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_c60de320a0d6849507e66ed13961f1382cfb023e277176777b153c5f3343ec41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29d1844243002063ed484a45c03e7b07d83cdded0e1f249cff46116e7764b508 = $this->env->getExtension("native_profiler");
        $__internal_29d1844243002063ed484a45c03e7b07d83cdded0e1f249cff46116e7764b508->enter($__internal_29d1844243002063ed484a45c03e7b07d83cdded0e1f249cff46116e7764b508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d1844243002063ed484a45c03e7b07d83cdded0e1f249cff46116e7764b508->leave($__internal_29d1844243002063ed484a45c03e7b07d83cdded0e1f249cff46116e7764b508_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5d9c129582e6811edbf03025db5910e6929f8e21ad4de899e9aa9587067281aa = $this->env->getExtension("native_profiler");
        $__internal_5d9c129582e6811edbf03025db5910e6929f8e21ad4de899e9aa9587067281aa->enter($__internal_5d9c129582e6811edbf03025db5910e6929f8e21ad4de899e9aa9587067281aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_5d9c129582e6811edbf03025db5910e6929f8e21ad4de899e9aa9587067281aa->leave($__internal_5d9c129582e6811edbf03025db5910e6929f8e21ad4de899e9aa9587067281aa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
