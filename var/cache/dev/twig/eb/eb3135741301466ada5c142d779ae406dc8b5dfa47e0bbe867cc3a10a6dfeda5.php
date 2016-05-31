<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_d29425234762660196f531ad630d241191073d8379955822e782371f540975f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_da478c7da075a36ad1a63fd479b4142faa350d6f4d7676bfbea6c1ae79d40589 = $this->env->getExtension("native_profiler");
        $__internal_da478c7da075a36ad1a63fd479b4142faa350d6f4d7676bfbea6c1ae79d40589->enter($__internal_da478c7da075a36ad1a63fd479b4142faa350d6f4d7676bfbea6c1ae79d40589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da478c7da075a36ad1a63fd479b4142faa350d6f4d7676bfbea6c1ae79d40589->leave($__internal_da478c7da075a36ad1a63fd479b4142faa350d6f4d7676bfbea6c1ae79d40589_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_766a255cc056ec2bc3b98864857e6ee057494859e96c23dca09b294ed12b1e4d = $this->env->getExtension("native_profiler");
        $__internal_766a255cc056ec2bc3b98864857e6ee057494859e96c23dca09b294ed12b1e4d->enter($__internal_766a255cc056ec2bc3b98864857e6ee057494859e96c23dca09b294ed12b1e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_766a255cc056ec2bc3b98864857e6ee057494859e96c23dca09b294ed12b1e4d->leave($__internal_766a255cc056ec2bc3b98864857e6ee057494859e96c23dca09b294ed12b1e4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
