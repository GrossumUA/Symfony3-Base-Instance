<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_4316a9f16daecd5f911c93818f427fea2e26bb808e9d95830108147b7d7bf9e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de8d327c8d85b564a4b0a9b2f8ed416db5988baf7589bad28ec88c94ea2fe846 = $this->env->getExtension("native_profiler");
        $__internal_de8d327c8d85b564a4b0a9b2f8ed416db5988baf7589bad28ec88c94ea2fe846->enter($__internal_de8d327c8d85b564a4b0a9b2f8ed416db5988baf7589bad28ec88c94ea2fe846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8d327c8d85b564a4b0a9b2f8ed416db5988baf7589bad28ec88c94ea2fe846->leave($__internal_de8d327c8d85b564a4b0a9b2f8ed416db5988baf7589bad28ec88c94ea2fe846_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
