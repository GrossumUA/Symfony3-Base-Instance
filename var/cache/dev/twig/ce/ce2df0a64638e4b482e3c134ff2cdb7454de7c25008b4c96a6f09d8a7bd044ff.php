<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9c786032a3837a4c7be41145c80127a03cf75f38bf11392e3a7dbc99a3108de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_0ac13dffd61eb555781815556b8c84f2610018243cebe6832d9bd23ce1e238a3 = $this->env->getExtension("native_profiler");
        $__internal_0ac13dffd61eb555781815556b8c84f2610018243cebe6832d9bd23ce1e238a3->enter($__internal_0ac13dffd61eb555781815556b8c84f2610018243cebe6832d9bd23ce1e238a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ac13dffd61eb555781815556b8c84f2610018243cebe6832d9bd23ce1e238a3->leave($__internal_0ac13dffd61eb555781815556b8c84f2610018243cebe6832d9bd23ce1e238a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60d98e6e8883d98424332588fa886dc750da0f89dcf62ccf6d9d3b38ddd41fc5 = $this->env->getExtension("native_profiler");
        $__internal_60d98e6e8883d98424332588fa886dc750da0f89dcf62ccf6d9d3b38ddd41fc5->enter($__internal_60d98e6e8883d98424332588fa886dc750da0f89dcf62ccf6d9d3b38ddd41fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_60d98e6e8883d98424332588fa886dc750da0f89dcf62ccf6d9d3b38ddd41fc5->leave($__internal_60d98e6e8883d98424332588fa886dc750da0f89dcf62ccf6d9d3b38ddd41fc5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
