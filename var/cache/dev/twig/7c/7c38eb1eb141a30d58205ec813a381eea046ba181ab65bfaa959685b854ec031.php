<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_52d4ca6e4659cd049851c19b591712cdb254a4b88316ff6b266f39f8268a222b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38c009d6fb3abe897d2aee0bfa48378d853b51ef426d324fd0550884c0e66e86 = $this->env->getExtension("native_profiler");
        $__internal_38c009d6fb3abe897d2aee0bfa48378d853b51ef426d324fd0550884c0e66e86->enter($__internal_38c009d6fb3abe897d2aee0bfa48378d853b51ef426d324fd0550884c0e66e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38c009d6fb3abe897d2aee0bfa48378d853b51ef426d324fd0550884c0e66e86->leave($__internal_38c009d6fb3abe897d2aee0bfa48378d853b51ef426d324fd0550884c0e66e86_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
