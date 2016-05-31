<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_2b42778973bbbff87926baa11d434230546a8c4e06508d20f036d7db6751c550 extends Twig_Template
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
        $__internal_b99d9b1fcb2afae529edf3b16c9d3592f536ebf0cd11447dcd001fffb970b597 = $this->env->getExtension("native_profiler");
        $__internal_b99d9b1fcb2afae529edf3b16c9d3592f536ebf0cd11447dcd001fffb970b597->enter($__internal_b99d9b1fcb2afae529edf3b16c9d3592f536ebf0cd11447dcd001fffb970b597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_b99d9b1fcb2afae529edf3b16c9d3592f536ebf0cd11447dcd001fffb970b597->leave($__internal_b99d9b1fcb2afae529edf3b16c9d3592f536ebf0cd11447dcd001fffb970b597_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {{ revision.timestamp|date }}*/
/* */
