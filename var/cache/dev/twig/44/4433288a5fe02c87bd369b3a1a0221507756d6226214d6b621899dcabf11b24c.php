<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_62cdfa426df6cb7cff7faeb7b17526e858f25f888921fbb2d2d8f12dd2a6ddf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a89d438af2ce6d0a01e9038983d2d424328a008c830be6a44e8cbb9967899efe = $this->env->getExtension("native_profiler");
        $__internal_a89d438af2ce6d0a01e9038983d2d424328a008c830be6a44e8cbb9967899efe->enter($__internal_a89d438af2ce6d0a01e9038983d2d424328a008c830be6a44e8cbb9967899efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a89d438af2ce6d0a01e9038983d2d424328a008c830be6a44e8cbb9967899efe->leave($__internal_a89d438af2ce6d0a01e9038983d2d424328a008c830be6a44e8cbb9967899efe_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
