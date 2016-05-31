<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_d74a253626de8a50eb59c479b8d9559bd2e9f9e74362351e25a3ba5c94751414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bda076e9e15a3d4d28d79f2d5b54b1f7b36b9198ef29dc21c8e62c0f433416b9 = $this->env->getExtension("native_profiler");
        $__internal_bda076e9e15a3d4d28d79f2d5b54b1f7b36b9198ef29dc21c8e62c0f433416b9->enter($__internal_bda076e9e15a3d4d28d79f2d5b54b1f7b36b9198ef29dc21c8e62c0f433416b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bda076e9e15a3d4d28d79f2d5b54b1f7b36b9198ef29dc21c8e62c0f433416b9->leave($__internal_bda076e9e15a3d4d28d79f2d5b54b1f7b36b9198ef29dc21c8e62c0f433416b9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
