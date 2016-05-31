<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_ed9adfbb61fe5c446bb73a38e93af62d8f037387467ce679c47b009c6992cdcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65f24fe0dc7ef063fcb634da4717ca4c8a822ebd3a399c8966dfeec0377f39c0 = $this->env->getExtension("native_profiler");
        $__internal_65f24fe0dc7ef063fcb634da4717ca4c8a822ebd3a399c8966dfeec0377f39c0->enter($__internal_65f24fe0dc7ef063fcb634da4717ca4c8a822ebd3a399c8966dfeec0377f39c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65f24fe0dc7ef063fcb634da4717ca4c8a822ebd3a399c8966dfeec0377f39c0->leave($__internal_65f24fe0dc7ef063fcb634da4717ca4c8a822ebd3a399c8966dfeec0377f39c0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
/* */
