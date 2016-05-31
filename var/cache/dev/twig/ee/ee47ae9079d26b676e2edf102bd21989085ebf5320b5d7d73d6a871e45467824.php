<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_0d03e9554bf2b3c18b79079cb0549d99ff5d8da9b26066b0e5da5ed2a4575bdc extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25e5b892db5c3e3e10156691fa081504bf261dd5ba77db733de8ffe34d2b71da = $this->env->getExtension("native_profiler");
        $__internal_25e5b892db5c3e3e10156691fa081504bf261dd5ba77db733de8ffe34d2b71da->enter($__internal_25e5b892db5c3e3e10156691fa081504bf261dd5ba77db733de8ffe34d2b71da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25e5b892db5c3e3e10156691fa081504bf261dd5ba77db733de8ffe34d2b71da->leave($__internal_25e5b892db5c3e3e10156691fa081504bf261dd5ba77db733de8ffe34d2b71da_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6f9d9df9c43bf13105134f7724d2d61fcf92fbbb74d003bc59da9006e9708a5d = $this->env->getExtension("native_profiler");
        $__internal_6f9d9df9c43bf13105134f7724d2d61fcf92fbbb74d003bc59da9006e9708a5d->enter($__internal_6f9d9df9c43bf13105134f7724d2d61fcf92fbbb74d003bc59da9006e9708a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_6f9d9df9c43bf13105134f7724d2d61fcf92fbbb74d003bc59da9006e9708a5d->leave($__internal_6f9d9df9c43bf13105134f7724d2d61fcf92fbbb74d003bc59da9006e9708a5d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
