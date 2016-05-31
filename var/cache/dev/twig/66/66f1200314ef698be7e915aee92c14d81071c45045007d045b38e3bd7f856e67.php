<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f29aa11bf1dfb77015a1adcc9228a1b42e9f98525dea51bf97573f38e8aeb2ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_296b4c97b0c236db3e9bc2d9eb9705741f3d1c74af2121cdf36253f44e534f30 = $this->env->getExtension("native_profiler");
        $__internal_296b4c97b0c236db3e9bc2d9eb9705741f3d1c74af2121cdf36253f44e534f30->enter($__internal_296b4c97b0c236db3e9bc2d9eb9705741f3d1c74af2121cdf36253f44e534f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_296b4c97b0c236db3e9bc2d9eb9705741f3d1c74af2121cdf36253f44e534f30->leave($__internal_296b4c97b0c236db3e9bc2d9eb9705741f3d1c74af2121cdf36253f44e534f30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
