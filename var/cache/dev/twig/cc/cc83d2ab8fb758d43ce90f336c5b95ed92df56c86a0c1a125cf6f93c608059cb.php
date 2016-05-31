<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_1b6635c3216b06116e27413e6430f54bccbe705863a64ad7cae9db3bc8e28ebd extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb2b64b66b9453731964ce7ebf81b730ef888cb54e153d4d75934d4dd7e92a75 = $this->env->getExtension("native_profiler");
        $__internal_bb2b64b66b9453731964ce7ebf81b730ef888cb54e153d4d75934d4dd7e92a75->enter($__internal_bb2b64b66b9453731964ce7ebf81b730ef888cb54e153d4d75934d4dd7e92a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb2b64b66b9453731964ce7ebf81b730ef888cb54e153d4d75934d4dd7e92a75->leave($__internal_bb2b64b66b9453731964ce7ebf81b730ef888cb54e153d4d75934d4dd7e92a75_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3a7b1ebaf2836f514b8d7d611c7ab227f6e7d8e69e29e671061c040b2e9f7795 = $this->env->getExtension("native_profiler");
        $__internal_3a7b1ebaf2836f514b8d7d611c7ab227f6e7d8e69e29e671061c040b2e9f7795->enter($__internal_3a7b1ebaf2836f514b8d7d611c7ab227f6e7d8e69e29e671061c040b2e9f7795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_3a7b1ebaf2836f514b8d7d611c7ab227f6e7d8e69e29e671061c040b2e9f7795->leave($__internal_3a7b1ebaf2836f514b8d7d611c7ab227f6e7d8e69e29e671061c040b2e9f7795_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
