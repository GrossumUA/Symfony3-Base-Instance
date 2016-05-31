<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_0f426e56d49e8ba0320089462ef2c9d6ed51198ee25dbda470323034382f635e extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6194e3e0aa1415e0005ddc7ef7cf6f14acfe3e92b70af61274e3f12f780e11ce = $this->env->getExtension("native_profiler");
        $__internal_6194e3e0aa1415e0005ddc7ef7cf6f14acfe3e92b70af61274e3f12f780e11ce->enter($__internal_6194e3e0aa1415e0005ddc7ef7cf6f14acfe3e92b70af61274e3f12f780e11ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6194e3e0aa1415e0005ddc7ef7cf6f14acfe3e92b70af61274e3f12f780e11ce->leave($__internal_6194e3e0aa1415e0005ddc7ef7cf6f14acfe3e92b70af61274e3f12f780e11ce_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2c1c4febe106c37c99ca4ff1e7001cfe0471af4f9359996969b1846cade843a9 = $this->env->getExtension("native_profiler");
        $__internal_2c1c4febe106c37c99ca4ff1e7001cfe0471af4f9359996969b1846cade843a9->enter($__internal_2c1c4febe106c37c99ca4ff1e7001cfe0471af4f9359996969b1846cade843a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_2c1c4febe106c37c99ca4ff1e7001cfe0471af4f9359996969b1846cade843a9->leave($__internal_2c1c4febe106c37c99ca4ff1e7001cfe0471af4f9359996969b1846cade843a9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
