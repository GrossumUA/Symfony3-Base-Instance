<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_8b8b0c51353114cae67603d589dcec9812af564c6465eb05972ad6a5edb8d362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2acf312f554e1fc4ff3671479e5ffa49ad27f4d0880ef42c7c37f97e1ae4400 = $this->env->getExtension("native_profiler");
        $__internal_e2acf312f554e1fc4ff3671479e5ffa49ad27f4d0880ef42c7c37f97e1ae4400->enter($__internal_e2acf312f554e1fc4ff3671479e5ffa49ad27f4d0880ef42c7c37f97e1ae4400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2acf312f554e1fc4ff3671479e5ffa49ad27f4d0880ef42c7c37f97e1ae4400->leave($__internal_e2acf312f554e1fc4ff3671479e5ffa49ad27f4d0880ef42c7c37f97e1ae4400_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
