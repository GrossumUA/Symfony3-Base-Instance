<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6e5ba840f8042d7b0c524e72bb775466cb5de7a25cdddd64ccd54bbeb1594e1b extends Twig_Template
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
        $__internal_0883eb2783bd76d3b6dc613f9ebad096ff71753a248ad006212f30fc67e39915 = $this->env->getExtension("native_profiler");
        $__internal_0883eb2783bd76d3b6dc613f9ebad096ff71753a248ad006212f30fc67e39915->enter($__internal_0883eb2783bd76d3b6dc613f9ebad096ff71753a248ad006212f30fc67e39915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0883eb2783bd76d3b6dc613f9ebad096ff71753a248ad006212f30fc67e39915->leave($__internal_0883eb2783bd76d3b6dc613f9ebad096ff71753a248ad006212f30fc67e39915_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
