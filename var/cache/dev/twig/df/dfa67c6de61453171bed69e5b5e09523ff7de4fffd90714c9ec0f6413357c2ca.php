<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_90dabadab2ca4297109517eb1741d0308cc7c84924059c64b617c9596883330c extends Twig_Template
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
        $__internal_b2c9e63e7b2aca16cb00d3935877b63229cfcda17417f633747aff157a9934f7 = $this->env->getExtension("native_profiler");
        $__internal_b2c9e63e7b2aca16cb00d3935877b63229cfcda17417f633747aff157a9934f7->enter($__internal_b2c9e63e7b2aca16cb00d3935877b63229cfcda17417f633747aff157a9934f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b2c9e63e7b2aca16cb00d3935877b63229cfcda17417f633747aff157a9934f7->leave($__internal_b2c9e63e7b2aca16cb00d3935877b63229cfcda17417f633747aff157a9934f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
