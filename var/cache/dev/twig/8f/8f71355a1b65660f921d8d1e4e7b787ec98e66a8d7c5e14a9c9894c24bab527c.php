<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_5ad1c24c53f411374c65e2b2aeef3a4493e097a7e1c0cb0a0a8016c954fb8c15 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c447286a7b2bd72d5b84b77a9c62e1ed8a005349dbd52ffebbe29735ab03f748 = $this->env->getExtension("native_profiler");
        $__internal_c447286a7b2bd72d5b84b77a9c62e1ed8a005349dbd52ffebbe29735ab03f748->enter($__internal_c447286a7b2bd72d5b84b77a9c62e1ed8a005349dbd52ffebbe29735ab03f748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c447286a7b2bd72d5b84b77a9c62e1ed8a005349dbd52ffebbe29735ab03f748->leave($__internal_c447286a7b2bd72d5b84b77a9c62e1ed8a005349dbd52ffebbe29735ab03f748_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_70fd60ec332cc97697968d475f6af17e7dd37c46e3134969cff5342d2781d488 = $this->env->getExtension("native_profiler");
        $__internal_70fd60ec332cc97697968d475f6af17e7dd37c46e3134969cff5342d2781d488->enter($__internal_70fd60ec332cc97697968d475f6af17e7dd37c46e3134969cff5342d2781d488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_70fd60ec332cc97697968d475f6af17e7dd37c46e3134969cff5342d2781d488->leave($__internal_70fd60ec332cc97697968d475f6af17e7dd37c46e3134969cff5342d2781d488_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
