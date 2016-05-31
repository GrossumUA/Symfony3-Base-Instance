<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_186642af3a7d4c85aa90c628525eacdad7bee8a1f180bb113f1f2182f06af125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0722ca5f8e0a40c34176a41e2cdf0dd6896a1ed4488bb0fdea94d351184ee3fd = $this->env->getExtension("native_profiler");
        $__internal_0722ca5f8e0a40c34176a41e2cdf0dd6896a1ed4488bb0fdea94d351184ee3fd->enter($__internal_0722ca5f8e0a40c34176a41e2cdf0dd6896a1ed4488bb0fdea94d351184ee3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0722ca5f8e0a40c34176a41e2cdf0dd6896a1ed4488bb0fdea94d351184ee3fd->leave($__internal_0722ca5f8e0a40c34176a41e2cdf0dd6896a1ed4488bb0fdea94d351184ee3fd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e3c42473416b55e8c0af1c47f87b6570619a0765bf4ccccc0819b6f775f37bbd = $this->env->getExtension("native_profiler");
        $__internal_e3c42473416b55e8c0af1c47f87b6570619a0765bf4ccccc0819b6f775f37bbd->enter($__internal_e3c42473416b55e8c0af1c47f87b6570619a0765bf4ccccc0819b6f775f37bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_e3c42473416b55e8c0af1c47f87b6570619a0765bf4ccccc0819b6f775f37bbd->leave($__internal_e3c42473416b55e8c0af1c47f87b6570619a0765bf4ccccc0819b6f775f37bbd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
