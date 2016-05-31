<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_b885c26e65e30f4ee41a3824c4d3ea56e9e7233ab64d7c45ca7bd02409653dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_078bc3b3b79da2823163322885c7b41363915ba617577ed49456296056159f2d = $this->env->getExtension("native_profiler");
        $__internal_078bc3b3b79da2823163322885c7b41363915ba617577ed49456296056159f2d->enter($__internal_078bc3b3b79da2823163322885c7b41363915ba617577ed49456296056159f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_078bc3b3b79da2823163322885c7b41363915ba617577ed49456296056159f2d->leave($__internal_078bc3b3b79da2823163322885c7b41363915ba617577ed49456296056159f2d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
