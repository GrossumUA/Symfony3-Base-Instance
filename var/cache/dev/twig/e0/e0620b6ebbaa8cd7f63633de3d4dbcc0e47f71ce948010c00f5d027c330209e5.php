<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_c3e6aac2f0bc49e08cde937c752aa0852786f2d7763b598399fab2d00417dcba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8c52b90b5eff116c6e387e0a66ed4352968c983d705d85b40f5b121c56d0492 = $this->env->getExtension("native_profiler");
        $__internal_c8c52b90b5eff116c6e387e0a66ed4352968c983d705d85b40f5b121c56d0492->enter($__internal_c8c52b90b5eff116c6e387e0a66ed4352968c983d705d85b40f5b121c56d0492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8c52b90b5eff116c6e387e0a66ed4352968c983d705d85b40f5b121c56d0492->leave($__internal_c8c52b90b5eff116c6e387e0a66ed4352968c983d705d85b40f5b121c56d0492_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_11b4a877edc1df4bb47382826aeb536e8bed3014edca8d9e9311ea539a4b16f1 = $this->env->getExtension("native_profiler");
        $__internal_11b4a877edc1df4bb47382826aeb536e8bed3014edca8d9e9311ea539a4b16f1->enter($__internal_11b4a877edc1df4bb47382826aeb536e8bed3014edca8d9e9311ea539a4b16f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_11b4a877edc1df4bb47382826aeb536e8bed3014edca8d9e9311ea539a4b16f1->leave($__internal_11b4a877edc1df4bb47382826aeb536e8bed3014edca8d9e9311ea539a4b16f1_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_338b01e691e1dd7f7a7476e62321ffc06d36e57dadfe245c09af3c7f38e01efa = $this->env->getExtension("native_profiler");
        $__internal_338b01e691e1dd7f7a7476e62321ffc06d36e57dadfe245c09af3c7f38e01efa->enter($__internal_338b01e691e1dd7f7a7476e62321ffc06d36e57dadfe245c09af3c7f38e01efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_338b01e691e1dd7f7a7476e62321ffc06d36e57dadfe245c09af3c7f38e01efa->leave($__internal_338b01e691e1dd7f7a7476e62321ffc06d36e57dadfe245c09af3c7f38e01efa_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_71d7c9acc6485c9855a4ea1bfcdb90516b77dc499bd4e4d52b14baef5eeed139 = $this->env->getExtension("native_profiler");
        $__internal_71d7c9acc6485c9855a4ea1bfcdb90516b77dc499bd4e4d52b14baef5eeed139->enter($__internal_71d7c9acc6485c9855a4ea1bfcdb90516b77dc499bd4e4d52b14baef5eeed139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_71d7c9acc6485c9855a4ea1bfcdb90516b77dc499bd4e4d52b14baef5eeed139->leave($__internal_71d7c9acc6485c9855a4ea1bfcdb90516b77dc499bd4e4d52b14baef5eeed139_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
