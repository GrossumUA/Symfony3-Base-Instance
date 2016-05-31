<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3a0d5f53368bee76b478d67c63a46b7998172be1d3dfdcecf56105fde6aab3c3 extends Twig_Template
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
        $__internal_d00d736b946b9c3477643c771f28d09d1911d43a79667dc5fd2155f3ae87787e = $this->env->getExtension("native_profiler");
        $__internal_d00d736b946b9c3477643c771f28d09d1911d43a79667dc5fd2155f3ae87787e->enter($__internal_d00d736b946b9c3477643c771f28d09d1911d43a79667dc5fd2155f3ae87787e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d00d736b946b9c3477643c771f28d09d1911d43a79667dc5fd2155f3ae87787e->leave($__internal_d00d736b946b9c3477643c771f28d09d1911d43a79667dc5fd2155f3ae87787e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
