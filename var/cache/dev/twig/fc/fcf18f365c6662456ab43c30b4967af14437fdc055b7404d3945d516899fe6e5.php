<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3969a945f7c43fa788f54a9bca552fd5a08c6dec128b5bfef52ec92b3782e93b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_719734e31a4f8c14c9514800b0f2942bb4cc842958db46bdb5e5b1ce60cb6262 = $this->env->getExtension("native_profiler");
        $__internal_719734e31a4f8c14c9514800b0f2942bb4cc842958db46bdb5e5b1ce60cb6262->enter($__internal_719734e31a4f8c14c9514800b0f2942bb4cc842958db46bdb5e5b1ce60cb6262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_719734e31a4f8c14c9514800b0f2942bb4cc842958db46bdb5e5b1ce60cb6262->leave($__internal_719734e31a4f8c14c9514800b0f2942bb4cc842958db46bdb5e5b1ce60cb6262_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61af24080e64b2f952509a1ab2a2a854c4551658d52b856bc4b4a3f0719545a5 = $this->env->getExtension("native_profiler");
        $__internal_61af24080e64b2f952509a1ab2a2a854c4551658d52b856bc4b4a3f0719545a5->enter($__internal_61af24080e64b2f952509a1ab2a2a854c4551658d52b856bc4b4a3f0719545a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_61af24080e64b2f952509a1ab2a2a854c4551658d52b856bc4b4a3f0719545a5->leave($__internal_61af24080e64b2f952509a1ab2a2a854c4551658d52b856bc4b4a3f0719545a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
