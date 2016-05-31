<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_299359dff8a234cb6b6c16516746d203efabc2516bff420c9aa9c10fae6141c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1c36ef4a44f68678686aa92d065e8c5e2e33f140b4eb558f24cc070339f44f6e = $this->env->getExtension("native_profiler");
        $__internal_1c36ef4a44f68678686aa92d065e8c5e2e33f140b4eb558f24cc070339f44f6e->enter($__internal_1c36ef4a44f68678686aa92d065e8c5e2e33f140b4eb558f24cc070339f44f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c36ef4a44f68678686aa92d065e8c5e2e33f140b4eb558f24cc070339f44f6e->leave($__internal_1c36ef4a44f68678686aa92d065e8c5e2e33f140b4eb558f24cc070339f44f6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96d78569ad58c2c45940fd9c0f18bb2b5cc55a6d9108c817b74578dda3c06428 = $this->env->getExtension("native_profiler");
        $__internal_96d78569ad58c2c45940fd9c0f18bb2b5cc55a6d9108c817b74578dda3c06428->enter($__internal_96d78569ad58c2c45940fd9c0f18bb2b5cc55a6d9108c817b74578dda3c06428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_96d78569ad58c2c45940fd9c0f18bb2b5cc55a6d9108c817b74578dda3c06428->leave($__internal_96d78569ad58c2c45940fd9c0f18bb2b5cc55a6d9108c817b74578dda3c06428_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
