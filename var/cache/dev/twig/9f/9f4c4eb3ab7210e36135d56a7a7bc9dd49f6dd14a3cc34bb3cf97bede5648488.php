<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3433423213059326ebd759d382ba175cd458d82114fbfd288fc5a9da890fb8e4 extends Twig_Template
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
        $__internal_a0754851f8cdfe5df6a8365fab80f7af5cbe78b63fd706dfa7c0fce69c4f5dc0 = $this->env->getExtension("native_profiler");
        $__internal_a0754851f8cdfe5df6a8365fab80f7af5cbe78b63fd706dfa7c0fce69c4f5dc0->enter($__internal_a0754851f8cdfe5df6a8365fab80f7af5cbe78b63fd706dfa7c0fce69c4f5dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a0754851f8cdfe5df6a8365fab80f7af5cbe78b63fd706dfa7c0fce69c4f5dc0->leave($__internal_a0754851f8cdfe5df6a8365fab80f7af5cbe78b63fd706dfa7c0fce69c4f5dc0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
