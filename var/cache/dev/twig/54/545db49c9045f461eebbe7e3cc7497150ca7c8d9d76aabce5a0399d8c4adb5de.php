<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_567a0ec28848d4d6791880e73dde74c55fb2d76657313068de596f29894dba87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0f4527e1dd6e0eeb83ab020d27b458bfb14f0a4ea2cbd05828b0673e89ef428 = $this->env->getExtension("native_profiler");
        $__internal_f0f4527e1dd6e0eeb83ab020d27b458bfb14f0a4ea2cbd05828b0673e89ef428->enter($__internal_f0f4527e1dd6e0eeb83ab020d27b458bfb14f0a4ea2cbd05828b0673e89ef428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_f0f4527e1dd6e0eeb83ab020d27b458bfb14f0a4ea2cbd05828b0673e89ef428->leave($__internal_f0f4527e1dd6e0eeb83ab020d27b458bfb14f0a4ea2cbd05828b0673e89ef428_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_ef6f943e1dea8b086870e8774fa4b8ef75244690dbefbff4aae82a0fc28f5f4b = $this->env->getExtension("native_profiler");
        $__internal_ef6f943e1dea8b086870e8774fa4b8ef75244690dbefbff4aae82a0fc28f5f4b->enter($__internal_ef6f943e1dea8b086870e8774fa4b8ef75244690dbefbff4aae82a0fc28f5f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_ef6f943e1dea8b086870e8774fa4b8ef75244690dbefbff4aae82a0fc28f5f4b->leave($__internal_ef6f943e1dea8b086870e8774fa4b8ef75244690dbefbff4aae82a0fc28f5f4b_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_e23bbb62910db4e4bcfbf53b48cd7cfdc5a4d9012074d59100f4885ef79c27b7 = $this->env->getExtension("native_profiler");
        $__internal_e23bbb62910db4e4bcfbf53b48cd7cfdc5a4d9012074d59100f4885ef79c27b7->enter($__internal_e23bbb62910db4e4bcfbf53b48cd7cfdc5a4d9012074d59100f4885ef79c27b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_e23bbb62910db4e4bcfbf53b48cd7cfdc5a4d9012074d59100f4885ef79c27b7->leave($__internal_e23bbb62910db4e4bcfbf53b48cd7cfdc5a4d9012074d59100f4885ef79c27b7_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_adfd06cdfdd1f1e5b3d2fd091c09e83d9f3920449723c97237cd616234840ac6 = $this->env->getExtension("native_profiler");
        $__internal_adfd06cdfdd1f1e5b3d2fd091c09e83d9f3920449723c97237cd616234840ac6->enter($__internal_adfd06cdfdd1f1e5b3d2fd091c09e83d9f3920449723c97237cd616234840ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_adfd06cdfdd1f1e5b3d2fd091c09e83d9f3920449723c97237cd616234840ac6->leave($__internal_adfd06cdfdd1f1e5b3d2fd091c09e83d9f3920449723c97237cd616234840ac6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
