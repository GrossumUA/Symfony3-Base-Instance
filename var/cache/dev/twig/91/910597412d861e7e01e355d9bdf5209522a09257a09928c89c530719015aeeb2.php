<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_0ce2cd5c3cc8d5df3e4b5055852619fc6d0eca2af9fed68ef1ea793981929cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_ee6cbfba617a01a893fb073c533ff0d1be2fc49588f3aeb7effd52e40c742d81 = $this->env->getExtension("native_profiler");
        $__internal_ee6cbfba617a01a893fb073c533ff0d1be2fc49588f3aeb7effd52e40c742d81->enter($__internal_ee6cbfba617a01a893fb073c533ff0d1be2fc49588f3aeb7effd52e40c742d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee6cbfba617a01a893fb073c533ff0d1be2fc49588f3aeb7effd52e40c742d81->leave($__internal_ee6cbfba617a01a893fb073c533ff0d1be2fc49588f3aeb7effd52e40c742d81_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5e0a720e0084170f735a6dc11afdaaaad442b8e7a2c26279cc4069cfa4aac160 = $this->env->getExtension("native_profiler");
        $__internal_5e0a720e0084170f735a6dc11afdaaaad442b8e7a2c26279cc4069cfa4aac160->enter($__internal_5e0a720e0084170f735a6dc11afdaaaad442b8e7a2c26279cc4069cfa4aac160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_5e0a720e0084170f735a6dc11afdaaaad442b8e7a2c26279cc4069cfa4aac160->leave($__internal_5e0a720e0084170f735a6dc11afdaaaad442b8e7a2c26279cc4069cfa4aac160_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
