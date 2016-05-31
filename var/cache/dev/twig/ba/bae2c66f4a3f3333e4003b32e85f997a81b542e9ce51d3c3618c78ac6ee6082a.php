<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f3e3ef1fee837f72c54b5eb0ed003d8b3bd5b53df943dc0b85767b7dc5d82306 extends Twig_Template
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
        $__internal_a55c980ae0778b11ac95ffb8fee0e783d2e8b8ca2cc7e3249ec2d754cb84d7cb = $this->env->getExtension("native_profiler");
        $__internal_a55c980ae0778b11ac95ffb8fee0e783d2e8b8ca2cc7e3249ec2d754cb84d7cb->enter($__internal_a55c980ae0778b11ac95ffb8fee0e783d2e8b8ca2cc7e3249ec2d754cb84d7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a55c980ae0778b11ac95ffb8fee0e783d2e8b8ca2cc7e3249ec2d754cb84d7cb->leave($__internal_a55c980ae0778b11ac95ffb8fee0e783d2e8b8ca2cc7e3249ec2d754cb84d7cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
