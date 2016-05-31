<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_29441c3ace8e31d9252ad25f002e717ab874a10a89d1e44dd720e0135b1d5eeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c4515dbd57c5fe517d3319c82a86f66e819f2ac051fd50d814a15a8eddd347ff = $this->env->getExtension("native_profiler");
        $__internal_c4515dbd57c5fe517d3319c82a86f66e819f2ac051fd50d814a15a8eddd347ff->enter($__internal_c4515dbd57c5fe517d3319c82a86f66e819f2ac051fd50d814a15a8eddd347ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4515dbd57c5fe517d3319c82a86f66e819f2ac051fd50d814a15a8eddd347ff->leave($__internal_c4515dbd57c5fe517d3319c82a86f66e819f2ac051fd50d814a15a8eddd347ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1fd1446c58c5fc905fd3843c75be4f779988c0bf73995eab47f65f16670b8b88 = $this->env->getExtension("native_profiler");
        $__internal_1fd1446c58c5fc905fd3843c75be4f779988c0bf73995eab47f65f16670b8b88->enter($__internal_1fd1446c58c5fc905fd3843c75be4f779988c0bf73995eab47f65f16670b8b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1fd1446c58c5fc905fd3843c75be4f779988c0bf73995eab47f65f16670b8b88->leave($__internal_1fd1446c58c5fc905fd3843c75be4f779988c0bf73995eab47f65f16670b8b88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
