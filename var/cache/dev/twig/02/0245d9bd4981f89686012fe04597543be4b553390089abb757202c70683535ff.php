<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8c69b1d0010898326025050e9beb763bcf96609bfb8885c2b8bb5d85c9430e4f extends Twig_Template
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
        $__internal_1df059794f781a97d97c56b60a16a19dd3d2b9e20fc61455a82050cbb7fc7561 = $this->env->getExtension("native_profiler");
        $__internal_1df059794f781a97d97c56b60a16a19dd3d2b9e20fc61455a82050cbb7fc7561->enter($__internal_1df059794f781a97d97c56b60a16a19dd3d2b9e20fc61455a82050cbb7fc7561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1df059794f781a97d97c56b60a16a19dd3d2b9e20fc61455a82050cbb7fc7561->leave($__internal_1df059794f781a97d97c56b60a16a19dd3d2b9e20fc61455a82050cbb7fc7561_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
