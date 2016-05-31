<?php

/* ApplicationSonataAdminBundle:CRUD:list__select_override.html.twig */
class __TwigTemplate_b2d68643d999fcad032e7043a74f9886d5bc02e1759daf7d8d219be63a1746d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:list__select.html.twig", "ApplicationSonataAdminBundle:CRUD:list__select_override.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a1ee3bd134468e6cd72a8e8d195a32a73bee0aaf30ae2fa33cd228c6af8a046 = $this->env->getExtension("native_profiler");
        $__internal_1a1ee3bd134468e6cd72a8e8d195a32a73bee0aaf30ae2fa33cd228c6af8a046->enter($__internal_1a1ee3bd134468e6cd72a8e8d195a32a73bee0aaf30ae2fa33cd228c6af8a046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApplicationSonataAdminBundle:CRUD:list__select_override.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a1ee3bd134468e6cd72a8e8d195a32a73bee0aaf30ae2fa33cd228c6af8a046->leave($__internal_1a1ee3bd134468e6cd72a8e8d195a32a73bee0aaf30ae2fa33cd228c6af8a046_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_dfca62e2ae83593bdb4c6e8d355b18081af04b389cbc311847f455252b37a8d5 = $this->env->getExtension("native_profiler");
        $__internal_dfca62e2ae83593bdb4c6e8d355b18081af04b389cbc311847f455252b37a8d5->enter($__internal_dfca62e2ae83593bdb4c6e8d355b18081af04b389cbc311847f455252b37a8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    <a class=\"btn btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">
        <i class=\"glyphicon glyphicon-arrow-right\"></i>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_dfca62e2ae83593bdb4c6e8d355b18081af04b389cbc311847f455252b37a8d5->leave($__internal_dfca62e2ae83593bdb4c6e8d355b18081af04b389cbc311847f455252b37a8d5_prof);

    }

    public function getTemplateName()
    {
        return "ApplicationSonataAdminBundle:CRUD:list__select_override.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:list__select.html.twig' %}*/
/* */
/* {% block field %}*/
/*     <a class="btn btn-default" href="{{ admin.generateObjectUrl(route, object, field_description.options.route.parameters) }}">*/
/*         <i class="glyphicon glyphicon-arrow-right"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
