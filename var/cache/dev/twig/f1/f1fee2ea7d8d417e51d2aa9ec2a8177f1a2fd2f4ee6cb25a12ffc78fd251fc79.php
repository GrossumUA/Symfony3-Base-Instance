<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_20680f98b2916d5c7b3925d0ea6eafcb8dfc32aeb32a504a69d3c318140e676d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4024529abd95b3062fd06b726080774f52bc033e500914bf72a6c65becc74e3c = $this->env->getExtension("native_profiler");
        $__internal_4024529abd95b3062fd06b726080774f52bc033e500914bf72a6c65becc74e3c->enter($__internal_4024529abd95b3062fd06b726080774f52bc033e500914bf72a6c65becc74e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4024529abd95b3062fd06b726080774f52bc033e500914bf72a6c65becc74e3c->leave($__internal_4024529abd95b3062fd06b726080774f52bc033e500914bf72a6c65becc74e3c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ee624637c1a4d914b3a78cc4edb83d61f57beba622fb3f5d0d3103794d1178fa = $this->env->getExtension("native_profiler");
        $__internal_ee624637c1a4d914b3a78cc4edb83d61f57beba622fb3f5d0d3103794d1178fa->enter($__internal_ee624637c1a4d914b3a78cc4edb83d61f57beba622fb3f5d0d3103794d1178fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_ee624637c1a4d914b3a78cc4edb83d61f57beba622fb3f5d0d3103794d1178fa->leave($__internal_ee624637c1a4d914b3a78cc4edb83d61f57beba622fb3f5d0d3103794d1178fa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
