<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_638d84a8e091949de4260badd7b56d1e1241d292f58d8800b9b48c38271ddf49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_121390f7b59e9aa98017a6c89cbef9d06fd55b8049a47347e08da32af786b9ea = $this->env->getExtension("native_profiler");
        $__internal_121390f7b59e9aa98017a6c89cbef9d06fd55b8049a47347e08da32af786b9ea->enter($__internal_121390f7b59e9aa98017a6c89cbef9d06fd55b8049a47347e08da32af786b9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121390f7b59e9aa98017a6c89cbef9d06fd55b8049a47347e08da32af786b9ea->leave($__internal_121390f7b59e9aa98017a6c89cbef9d06fd55b8049a47347e08da32af786b9ea_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b3c31a926def49328d10de55995ae7f2700ebc20afd7479994aff01d921485f = $this->env->getExtension("native_profiler");
        $__internal_3b3c31a926def49328d10de55995ae7f2700ebc20afd7479994aff01d921485f->enter($__internal_3b3c31a926def49328d10de55995ae7f2700ebc20afd7479994aff01d921485f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3b3c31a926def49328d10de55995ae7f2700ebc20afd7479994aff01d921485f->leave($__internal_3b3c31a926def49328d10de55995ae7f2700ebc20afd7479994aff01d921485f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
