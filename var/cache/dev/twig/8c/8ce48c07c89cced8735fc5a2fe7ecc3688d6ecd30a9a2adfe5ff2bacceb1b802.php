<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_cce7d021c84c3dd1b3e8c06908907150c3e7bc5743972fd86ac6793ad807ecd5 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ff91da6139eb540b30de2fb6a3e9ff14e753ac1ba9c0d97c4ee3527f1f0d3c4 = $this->env->getExtension("native_profiler");
        $__internal_1ff91da6139eb540b30de2fb6a3e9ff14e753ac1ba9c0d97c4ee3527f1f0d3c4->enter($__internal_1ff91da6139eb540b30de2fb6a3e9ff14e753ac1ba9c0d97c4ee3527f1f0d3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ff91da6139eb540b30de2fb6a3e9ff14e753ac1ba9c0d97c4ee3527f1f0d3c4->leave($__internal_1ff91da6139eb540b30de2fb6a3e9ff14e753ac1ba9c0d97c4ee3527f1f0d3c4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
