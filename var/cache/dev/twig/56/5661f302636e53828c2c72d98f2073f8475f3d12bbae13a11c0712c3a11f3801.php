<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_6ae9808e668905cb2d12969c7ed8777d3450da8cd8862fc70a43d63914aea2c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79f0c7a4b2571f0ea5973a7c01c63a52d009c2e71b4ac05ab8fd207141940516 = $this->env->getExtension("native_profiler");
        $__internal_79f0c7a4b2571f0ea5973a7c01c63a52d009c2e71b4ac05ab8fd207141940516->enter($__internal_79f0c7a4b2571f0ea5973a7c01c63a52d009c2e71b4ac05ab8fd207141940516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79f0c7a4b2571f0ea5973a7c01c63a52d009c2e71b4ac05ab8fd207141940516->leave($__internal_79f0c7a4b2571f0ea5973a7c01c63a52d009c2e71b4ac05ab8fd207141940516_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33f05b724581c1e3cde9edf955a41f00a04395879eb0baaf19de36c2af202128 = $this->env->getExtension("native_profiler");
        $__internal_33f05b724581c1e3cde9edf955a41f00a04395879eb0baaf19de36c2af202128->enter($__internal_33f05b724581c1e3cde9edf955a41f00a04395879eb0baaf19de36c2af202128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_33f05b724581c1e3cde9edf955a41f00a04395879eb0baaf19de36c2af202128->leave($__internal_33f05b724581c1e3cde9edf955a41f00a04395879eb0baaf19de36c2af202128_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
