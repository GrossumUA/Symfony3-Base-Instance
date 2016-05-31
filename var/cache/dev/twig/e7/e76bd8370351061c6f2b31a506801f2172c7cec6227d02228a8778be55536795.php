<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_24b2b696f6d65c03aad4e450421af5962561aa91131441e315c6b275782d3841 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e5925c7c0e00cc68792b03eafa80aa11110f17aff1690937854b95d27d88257 = $this->env->getExtension("native_profiler");
        $__internal_1e5925c7c0e00cc68792b03eafa80aa11110f17aff1690937854b95d27d88257->enter($__internal_1e5925c7c0e00cc68792b03eafa80aa11110f17aff1690937854b95d27d88257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e5925c7c0e00cc68792b03eafa80aa11110f17aff1690937854b95d27d88257->leave($__internal_1e5925c7c0e00cc68792b03eafa80aa11110f17aff1690937854b95d27d88257_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e6e4447ed599728a956e8347df6e53e45beffe616ba3baa758b60b7c90af66af = $this->env->getExtension("native_profiler");
        $__internal_e6e4447ed599728a956e8347df6e53e45beffe616ba3baa758b60b7c90af66af->enter($__internal_e6e4447ed599728a956e8347df6e53e45beffe616ba3baa758b60b7c90af66af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_e6e4447ed599728a956e8347df6e53e45beffe616ba3baa758b60b7c90af66af->leave($__internal_e6e4447ed599728a956e8347df6e53e45beffe616ba3baa758b60b7c90af66af_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_a7e0abe0e64d75159f2e8527dc0f2fe6fbeec1eee2e428d0ec2cf917aab1c558 = $this->env->getExtension("native_profiler");
        $__internal_a7e0abe0e64d75159f2e8527dc0f2fe6fbeec1eee2e428d0ec2cf917aab1c558->enter($__internal_a7e0abe0e64d75159f2e8527dc0f2fe6fbeec1eee2e428d0ec2cf917aab1c558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_a7e0abe0e64d75159f2e8527dc0f2fe6fbeec1eee2e428d0ec2cf917aab1c558->leave($__internal_a7e0abe0e64d75159f2e8527dc0f2fe6fbeec1eee2e428d0ec2cf917aab1c558_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_8c795b6b0389f0831388c9b7495743a074b3934cad29a2786b78fb055647753b = $this->env->getExtension("native_profiler");
        $__internal_8c795b6b0389f0831388c9b7495743a074b3934cad29a2786b78fb055647753b->enter($__internal_8c795b6b0389f0831388c9b7495743a074b3934cad29a2786b78fb055647753b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_8c795b6b0389f0831388c9b7495743a074b3934cad29a2786b78fb055647753b->leave($__internal_8c795b6b0389f0831388c9b7495743a074b3934cad29a2786b78fb055647753b_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_3caa597d5f53f105d133bc050df58c7680f7a6d99e971ddaac9254d32d09b009 = $this->env->getExtension("native_profiler");
        $__internal_3caa597d5f53f105d133bc050df58c7680f7a6d99e971ddaac9254d32d09b009->enter($__internal_3caa597d5f53f105d133bc050df58c7680f7a6d99e971ddaac9254d32d09b009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_3caa597d5f53f105d133bc050df58c7680f7a6d99e971ddaac9254d32d09b009->leave($__internal_3caa597d5f53f105d133bc050df58c7680f7a6d99e971ddaac9254d32d09b009_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
