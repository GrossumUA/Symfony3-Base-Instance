<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_a2db70d6ecf03829b95ae69b72dcb3df942317fa67e0796e20d9f6539050b5a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_2e3c460adaef4fbf40d5fb8de8a02118b297300968b94c09b71a88d24e48281d = $this->env->getExtension("native_profiler");
        $__internal_2e3c460adaef4fbf40d5fb8de8a02118b297300968b94c09b71a88d24e48281d->enter($__internal_2e3c460adaef4fbf40d5fb8de8a02118b297300968b94c09b71a88d24e48281d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e3c460adaef4fbf40d5fb8de8a02118b297300968b94c09b71a88d24e48281d->leave($__internal_2e3c460adaef4fbf40d5fb8de8a02118b297300968b94c09b71a88d24e48281d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67f27d8888c8e3aacbd109d2bcad748a76557b5b095af32615a11ca98afb9355 = $this->env->getExtension("native_profiler");
        $__internal_67f27d8888c8e3aacbd109d2bcad748a76557b5b095af32615a11ca98afb9355->enter($__internal_67f27d8888c8e3aacbd109d2bcad748a76557b5b095af32615a11ca98afb9355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_67f27d8888c8e3aacbd109d2bcad748a76557b5b095af32615a11ca98afb9355->leave($__internal_67f27d8888c8e3aacbd109d2bcad748a76557b5b095af32615a11ca98afb9355_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
