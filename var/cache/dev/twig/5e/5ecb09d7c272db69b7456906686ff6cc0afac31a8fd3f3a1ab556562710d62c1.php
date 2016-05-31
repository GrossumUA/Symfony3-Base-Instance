<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e4e4c70666ae6faec94a8eb761fac104fa67c35d18867303f574641b17e7545c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_570416b699f3fb4f1086576f6a0167406e5456396d1d2cdea4b3ddee7ec4dcdf = $this->env->getExtension("native_profiler");
        $__internal_570416b699f3fb4f1086576f6a0167406e5456396d1d2cdea4b3ddee7ec4dcdf->enter($__internal_570416b699f3fb4f1086576f6a0167406e5456396d1d2cdea4b3ddee7ec4dcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_570416b699f3fb4f1086576f6a0167406e5456396d1d2cdea4b3ddee7ec4dcdf->leave($__internal_570416b699f3fb4f1086576f6a0167406e5456396d1d2cdea4b3ddee7ec4dcdf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95811d1f0ad335ff9027f15204cc03d0de46660e0a89657be8b5e130f3cb7651 = $this->env->getExtension("native_profiler");
        $__internal_95811d1f0ad335ff9027f15204cc03d0de46660e0a89657be8b5e130f3cb7651->enter($__internal_95811d1f0ad335ff9027f15204cc03d0de46660e0a89657be8b5e130f3cb7651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_95811d1f0ad335ff9027f15204cc03d0de46660e0a89657be8b5e130f3cb7651->leave($__internal_95811d1f0ad335ff9027f15204cc03d0de46660e0a89657be8b5e130f3cb7651_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
