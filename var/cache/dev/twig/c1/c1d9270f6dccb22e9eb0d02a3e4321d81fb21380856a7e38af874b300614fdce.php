<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_e7d415b23d79e088b0d30a3722f49f156d6dbe5ae143275e41dff5bd1e8b943e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be22e14385fc25e08726a5228317ca1ef676d5f6d198099e76bf03c86683b067 = $this->env->getExtension("native_profiler");
        $__internal_be22e14385fc25e08726a5228317ca1ef676d5f6d198099e76bf03c86683b067->enter($__internal_be22e14385fc25e08726a5228317ca1ef676d5f6d198099e76bf03c86683b067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be22e14385fc25e08726a5228317ca1ef676d5f6d198099e76bf03c86683b067->leave($__internal_be22e14385fc25e08726a5228317ca1ef676d5f6d198099e76bf03c86683b067_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
