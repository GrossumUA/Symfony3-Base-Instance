<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_fe59c156b38d9ccfe5390f4fc479f825a8e150c36f226b380cad34a5b506c3e6 extends Twig_Template
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
        $__internal_77c757890f652eb1859a3ccd0fc7c940daca3326163ed189f632b78b107753d7 = $this->env->getExtension("native_profiler");
        $__internal_77c757890f652eb1859a3ccd0fc7c940daca3326163ed189f632b78b107753d7->enter($__internal_77c757890f652eb1859a3ccd0fc7c940daca3326163ed189f632b78b107753d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_77c757890f652eb1859a3ccd0fc7c940daca3326163ed189f632b78b107753d7->leave($__internal_77c757890f652eb1859a3ccd0fc7c940daca3326163ed189f632b78b107753d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
