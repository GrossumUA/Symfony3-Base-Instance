<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_6b44cffded1e034d189cb3bf49dd1424e4b63c8a1d372f6583ceb4185244aa4f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fdc59aee159020d375df46a5a315f384758359f19233d95d2a1c1c1beaa7077 = $this->env->getExtension("native_profiler");
        $__internal_9fdc59aee159020d375df46a5a315f384758359f19233d95d2a1c1c1beaa7077->enter($__internal_9fdc59aee159020d375df46a5a315f384758359f19233d95d2a1c1c1beaa7077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fdc59aee159020d375df46a5a315f384758359f19233d95d2a1c1c1beaa7077->leave($__internal_9fdc59aee159020d375df46a5a315f384758359f19233d95d2a1c1c1beaa7077_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2a5faa2d86ea44b6a3cc19fdac62370d35d5deb5bc31a29450cd32b1dbd68f22 = $this->env->getExtension("native_profiler");
        $__internal_2a5faa2d86ea44b6a3cc19fdac62370d35d5deb5bc31a29450cd32b1dbd68f22->enter($__internal_2a5faa2d86ea44b6a3cc19fdac62370d35d5deb5bc31a29450cd32b1dbd68f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_2a5faa2d86ea44b6a3cc19fdac62370d35d5deb5bc31a29450cd32b1dbd68f22->leave($__internal_2a5faa2d86ea44b6a3cc19fdac62370d35d5deb5bc31a29450cd32b1dbd68f22_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <a class="btn btn-default" href="{{ admin.generateObjectUrl('edit', object) }}">*/
/*         <i class="fa fa-arrow-right"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
