<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_b9ae1183f0b70aa3cb7cae07b8d9633c0d342d4fe23ea41a71e9cb2b7b97004b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74098c9cb33023066cc0e3f64224b12b0ceb058fb3c3acebb8028b678fa0c4ea = $this->env->getExtension("native_profiler");
        $__internal_74098c9cb33023066cc0e3f64224b12b0ceb058fb3c3acebb8028b678fa0c4ea->enter($__internal_74098c9cb33023066cc0e3f64224b12b0ceb058fb3c3acebb8028b678fa0c4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74098c9cb33023066cc0e3f64224b12b0ceb058fb3c3acebb8028b678fa0c4ea->leave($__internal_74098c9cb33023066cc0e3f64224b12b0ceb058fb3c3acebb8028b678fa0c4ea_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6cd16f0ef919a1cf396b8351a552208116d99a5191fa52ff1c5b1ca58262dd50 = $this->env->getExtension("native_profiler");
        $__internal_6cd16f0ef919a1cf396b8351a552208116d99a5191fa52ff1c5b1ca58262dd50->enter($__internal_6cd16f0ef919a1cf396b8351a552208116d99a5191fa52ff1c5b1ca58262dd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_6cd16f0ef919a1cf396b8351a552208116d99a5191fa52ff1c5b1ca58262dd50->leave($__internal_6cd16f0ef919a1cf396b8351a552208116d99a5191fa52ff1c5b1ca58262dd50_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
