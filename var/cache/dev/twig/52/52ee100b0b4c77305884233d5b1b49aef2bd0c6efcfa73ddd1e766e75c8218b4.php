<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_d8dc7f8db82a8452e84cbc0552de6ca4623c89543d60e47355c7e797ec038ca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d23669bd58c04b13402d89ca7fd7894f000a5f700d4530178cfee0abe08e42e = $this->env->getExtension("native_profiler");
        $__internal_9d23669bd58c04b13402d89ca7fd7894f000a5f700d4530178cfee0abe08e42e->enter($__internal_9d23669bd58c04b13402d89ca7fd7894f000a5f700d4530178cfee0abe08e42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d23669bd58c04b13402d89ca7fd7894f000a5f700d4530178cfee0abe08e42e->leave($__internal_9d23669bd58c04b13402d89ca7fd7894f000a5f700d4530178cfee0abe08e42e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6b35becdb4602a3533d93ccfd5a18eda90f3d6d77ee59a16988d2354ab2efe30 = $this->env->getExtension("native_profiler");
        $__internal_6b35becdb4602a3533d93ccfd5a18eda90f3d6d77ee59a16988d2354ab2efe30->enter($__internal_6b35becdb4602a3533d93ccfd5a18eda90f3d6d77ee59a16988d2354ab2efe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_6b35becdb4602a3533d93ccfd5a18eda90f3d6d77ee59a16988d2354ab2efe30->leave($__internal_6b35becdb4602a3533d93ccfd5a18eda90f3d6d77ee59a16988d2354ab2efe30_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
