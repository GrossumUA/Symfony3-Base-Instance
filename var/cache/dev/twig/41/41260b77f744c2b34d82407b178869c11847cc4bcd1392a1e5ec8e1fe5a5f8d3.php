<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_9fdb92377521469a3c6a46be7ec66d62ac278d3b9e651f075c3b6a484b31c2f1 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7954680bf7d230c3229409e414e159c2801b442ca9d848c476805d1d0ea7780 = $this->env->getExtension("native_profiler");
        $__internal_d7954680bf7d230c3229409e414e159c2801b442ca9d848c476805d1d0ea7780->enter($__internal_d7954680bf7d230c3229409e414e159c2801b442ca9d848c476805d1d0ea7780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7954680bf7d230c3229409e414e159c2801b442ca9d848c476805d1d0ea7780->leave($__internal_d7954680bf7d230c3229409e414e159c2801b442ca9d848c476805d1d0ea7780_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3c28949551fa18a701258584fb6b20bbb8379c18c0f63444d49f4dc02b44cfe4 = $this->env->getExtension("native_profiler");
        $__internal_3c28949551fa18a701258584fb6b20bbb8379c18c0f63444d49f4dc02b44cfe4->enter($__internal_3c28949551fa18a701258584fb6b20bbb8379c18c0f63444d49f4dc02b44cfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_3c28949551fa18a701258584fb6b20bbb8379c18c0f63444d49f4dc02b44cfe4->leave($__internal_3c28949551fa18a701258584fb6b20bbb8379c18c0f63444d49f4dc02b44cfe4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
