<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_1102954bba9f66c5d9ba4e8e6fc81295174f3f856475c878cd00b99b35ba6f05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_02857f8440f4820b5277e5fdb003b450d3b9660f06d0d6c0fb3da1f01ec9562b = $this->env->getExtension("native_profiler");
        $__internal_02857f8440f4820b5277e5fdb003b450d3b9660f06d0d6c0fb3da1f01ec9562b->enter($__internal_02857f8440f4820b5277e5fdb003b450d3b9660f06d0d6c0fb3da1f01ec9562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02857f8440f4820b5277e5fdb003b450d3b9660f06d0d6c0fb3da1f01ec9562b->leave($__internal_02857f8440f4820b5277e5fdb003b450d3b9660f06d0d6c0fb3da1f01ec9562b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58cbf2abe82fd0b5494eabc0247b2a87d6d6f6eb15ee016d3f4296ae69ef37f2 = $this->env->getExtension("native_profiler");
        $__internal_58cbf2abe82fd0b5494eabc0247b2a87d6d6f6eb15ee016d3f4296ae69ef37f2->enter($__internal_58cbf2abe82fd0b5494eabc0247b2a87d6d6f6eb15ee016d3f4296ae69ef37f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_58cbf2abe82fd0b5494eabc0247b2a87d6d6f6eb15ee016d3f4296ae69ef37f2->leave($__internal_58cbf2abe82fd0b5494eabc0247b2a87d6d6f6eb15ee016d3f4296ae69ef37f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
