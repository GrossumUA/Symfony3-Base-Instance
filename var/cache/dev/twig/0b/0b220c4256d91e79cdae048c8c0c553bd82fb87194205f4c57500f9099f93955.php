<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_00316af990e85a50bdb16103241b6f8a9e8e709e13df14a1ebd73218f19ccdfc extends Twig_Template
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
        $__internal_2f7c9e9fa2939f8359deb43864d62bba25aca0a441374476e1b80ce81e6f784e = $this->env->getExtension("native_profiler");
        $__internal_2f7c9e9fa2939f8359deb43864d62bba25aca0a441374476e1b80ce81e6f784e->enter($__internal_2f7c9e9fa2939f8359deb43864d62bba25aca0a441374476e1b80ce81e6f784e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2f7c9e9fa2939f8359deb43864d62bba25aca0a441374476e1b80ce81e6f784e->leave($__internal_2f7c9e9fa2939f8359deb43864d62bba25aca0a441374476e1b80ce81e6f784e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
