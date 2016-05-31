<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8016bb25303089b0d2f334c588c068580470723131088319976b3b165ab37bbf extends Twig_Template
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
        $__internal_1cfbfdf69546d1d45de3d6ded249025925eed107ba3bcfebe9656c9695c2119a = $this->env->getExtension("native_profiler");
        $__internal_1cfbfdf69546d1d45de3d6ded249025925eed107ba3bcfebe9656c9695c2119a->enter($__internal_1cfbfdf69546d1d45de3d6ded249025925eed107ba3bcfebe9656c9695c2119a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1cfbfdf69546d1d45de3d6ded249025925eed107ba3bcfebe9656c9695c2119a->leave($__internal_1cfbfdf69546d1d45de3d6ded249025925eed107ba3bcfebe9656c9695c2119a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
