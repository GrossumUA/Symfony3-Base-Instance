<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_445e23322a9e42c97cb21440aeac93073486d5af30d6bd01af224cccb4765ee0 extends Twig_Template
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
        $__internal_308ff964c017b1ce1279abdbd313951ea91e758b0ce080885e9cd2b7f4707797 = $this->env->getExtension("native_profiler");
        $__internal_308ff964c017b1ce1279abdbd313951ea91e758b0ce080885e9cd2b7f4707797->enter($__internal_308ff964c017b1ce1279abdbd313951ea91e758b0ce080885e9cd2b7f4707797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_308ff964c017b1ce1279abdbd313951ea91e758b0ce080885e9cd2b7f4707797->leave($__internal_308ff964c017b1ce1279abdbd313951ea91e758b0ce080885e9cd2b7f4707797_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
