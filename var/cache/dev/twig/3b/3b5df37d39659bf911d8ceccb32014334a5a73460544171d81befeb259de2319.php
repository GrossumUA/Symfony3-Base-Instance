<?php

/* ApplicationSonataAdminBundle::standard_layout_override.html.twig */
class __TwigTemplate_031e17e192ed7e9869581a7ace64c41deff380083c9da88fd18ec7c857e96596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "ApplicationSonataAdminBundle::standard_layout_override.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33acc9e7b6aa3bd603efbefe6f9eaa82dccd7547cd1e1d55763a92800d2db86f = $this->env->getExtension("native_profiler");
        $__internal_33acc9e7b6aa3bd603efbefe6f9eaa82dccd7547cd1e1d55763a92800d2db86f->enter($__internal_33acc9e7b6aa3bd603efbefe6f9eaa82dccd7547cd1e1d55763a92800d2db86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApplicationSonataAdminBundle::standard_layout_override.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33acc9e7b6aa3bd603efbefe6f9eaa82dccd7547cd1e1d55763a92800d2db86f->leave($__internal_33acc9e7b6aa3bd603efbefe6f9eaa82dccd7547cd1e1d55763a92800d2db86f_prof);

    }

    public function getTemplateName()
    {
        return "ApplicationSonataAdminBundle::standard_layout_override.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle::standard_layout.html.twig' %}*/
/* */
/* {#{% block side_bar_after_nav %}{% endblock side_bar_after_nav %}#}*/
/* */
/* {#{% block sonata_breadcrumb %}#}*/
/*     {#{% if _breadcrumb is not empty or action is defined %}#}*/
/*         {#<ol class="nav navbar-top-links breadcrumb">#}*/
/*             {#{% if _breadcrumb is empty %}#}*/
/*                 {#{% if action is defined %}#}*/
/*                     {#{% for menu in admin.breadcrumbs(action) %}#}*/
/*                         {#{% if not loop.last  %}#}*/
/*                             {#<li>#}*/
/*                                 {#{% if menu.uri is not empty %}#}*/
/*                                     {#<a href="{{ menu.uri }}">{{ menu.label|raw }}</a>#}*/
/*                                 {#{% else %}#}*/
/*                                     {#{{ menu.label }}#}*/
/*                                 {#{% endif %}#}*/
/*                             {#</li>#}*/
/*                         {#{% else %}#}*/
/*                             {#<li class="active"><span>{{ menu.label|truncate(100, false,'...') }}</span></li>#}*/
/*                         {#{% endif %}#}*/
/*                     {#{% endfor %}#}*/
/*                 {#{% endif %}#}*/
/*             {#{% else %}#}*/
/*                 {#{{ _breadcrumb|raw }}#}*/
/*             {#{% endif %}#}*/
/*         {#</ol>#}*/
/*     {#{% endif %}#}*/
/* */
/* {#{% endblock sonata_breadcrumb %}#}*/
/* */
