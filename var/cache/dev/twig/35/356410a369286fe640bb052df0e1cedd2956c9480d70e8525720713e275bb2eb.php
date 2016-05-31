<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_c6f51e2ee3c41373b563bc9d24364f0d0cca96d953393601206b8ceca2224543 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_ca7a3d02f962ff864565354a81e1f041b62344a702447d1716b0febf970a5977 = $this->env->getExtension("native_profiler");
        $__internal_ca7a3d02f962ff864565354a81e1f041b62344a702447d1716b0febf970a5977->enter($__internal_ca7a3d02f962ff864565354a81e1f041b62344a702447d1716b0febf970a5977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca7a3d02f962ff864565354a81e1f041b62344a702447d1716b0febf970a5977->leave($__internal_ca7a3d02f962ff864565354a81e1f041b62344a702447d1716b0febf970a5977_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e902185942fe9cb83bb873eebe37b1698a75fe938f373d1cefa706c17fe318d8 = $this->env->getExtension("native_profiler");
        $__internal_e902185942fe9cb83bb873eebe37b1698a75fe938f373d1cefa706c17fe318d8->enter($__internal_e902185942fe9cb83bb873eebe37b1698a75fe938f373d1cefa706c17fe318d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e902185942fe9cb83bb873eebe37b1698a75fe938f373d1cefa706c17fe318d8->leave($__internal_e902185942fe9cb83bb873eebe37b1698a75fe938f373d1cefa706c17fe318d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
