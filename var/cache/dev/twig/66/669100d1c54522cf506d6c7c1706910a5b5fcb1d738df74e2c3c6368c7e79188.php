<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_6778a4f032c5a975adf35225df9db13b4910e4601fd4663802e199d364144a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00cc686c0f54ef1dc5a22a19c85ea533c335e7c93849e685cd86059c0940f7a9 = $this->env->getExtension("native_profiler");
        $__internal_00cc686c0f54ef1dc5a22a19c85ea533c335e7c93849e685cd86059c0940f7a9->enter($__internal_00cc686c0f54ef1dc5a22a19c85ea533c335e7c93849e685cd86059c0940f7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00cc686c0f54ef1dc5a22a19c85ea533c335e7c93849e685cd86059c0940f7a9->leave($__internal_00cc686c0f54ef1dc5a22a19c85ea533c335e7c93849e685cd86059c0940f7a9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
