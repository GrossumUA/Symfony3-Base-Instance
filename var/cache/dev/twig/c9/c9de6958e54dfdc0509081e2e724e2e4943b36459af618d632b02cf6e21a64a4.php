<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_80a6c977a8bda61e504d976d45d6e4698302516815d6b9179bd7571911bf05f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29eea389c26272b5409e6d2ed59eb159f78358de6554064af493f207546e25aa = $this->env->getExtension("native_profiler");
        $__internal_29eea389c26272b5409e6d2ed59eb159f78358de6554064af493f207546e25aa->enter($__internal_29eea389c26272b5409e6d2ed59eb159f78358de6554064af493f207546e25aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29eea389c26272b5409e6d2ed59eb159f78358de6554064af493f207546e25aa->leave($__internal_29eea389c26272b5409e6d2ed59eb159f78358de6554064af493f207546e25aa_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_655106ae4b84e0cd20d8d9903581d214fe7e563f458f9e6cb7439f38d3d0936a = $this->env->getExtension("native_profiler");
        $__internal_655106ae4b84e0cd20d8d9903581d214fe7e563f458f9e6cb7439f38d3d0936a->enter($__internal_655106ae4b84e0cd20d8d9903581d214fe7e563f458f9e6cb7439f38d3d0936a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_655106ae4b84e0cd20d8d9903581d214fe7e563f458f9e6cb7439f38d3d0936a->leave($__internal_655106ae4b84e0cd20d8d9903581d214fe7e563f458f9e6cb7439f38d3d0936a_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_57e8dc4b20b1d9a217db8e892afd7c4676854e7011e114908488933c71302441 = $this->env->getExtension("native_profiler");
        $__internal_57e8dc4b20b1d9a217db8e892afd7c4676854e7011e114908488933c71302441->enter($__internal_57e8dc4b20b1d9a217db8e892afd7c4676854e7011e114908488933c71302441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_57e8dc4b20b1d9a217db8e892afd7c4676854e7011e114908488933c71302441->leave($__internal_57e8dc4b20b1d9a217db8e892afd7c4676854e7011e114908488933c71302441_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_7d47ac47cb65f06c14103babf37df0ae5cb80f1cdd85e97f38b4d14e82a0dc4f = $this->env->getExtension("native_profiler");
        $__internal_7d47ac47cb65f06c14103babf37df0ae5cb80f1cdd85e97f38b4d14e82a0dc4f->enter($__internal_7d47ac47cb65f06c14103babf37df0ae5cb80f1cdd85e97f38b4d14e82a0dc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_7d47ac47cb65f06c14103babf37df0ae5cb80f1cdd85e97f38b4d14e82a0dc4f->leave($__internal_7d47ac47cb65f06c14103babf37df0ae5cb80f1cdd85e97f38b4d14e82a0dc4f_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_fb3d20bbad3f152d91be69668798db9a55d5c4c15138a226e3c4c9d69c609624 = $this->env->getExtension("native_profiler");
        $__internal_fb3d20bbad3f152d91be69668798db9a55d5c4c15138a226e3c4c9d69c609624->enter($__internal_fb3d20bbad3f152d91be69668798db9a55d5c4c15138a226e3c4c9d69c609624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_fb3d20bbad3f152d91be69668798db9a55d5c4c15138a226e3c4c9d69c609624->leave($__internal_fb3d20bbad3f152d91be69668798db9a55d5c4c15138a226e3c4c9d69c609624_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6feb5b9237c12123b9491270d1c3eccdf37dac5e31acc5eae504831110235d7 = $this->env->getExtension("native_profiler");
        $__internal_d6feb5b9237c12123b9491270d1c3eccdf37dac5e31acc5eae504831110235d7->enter($__internal_d6feb5b9237c12123b9491270d1c3eccdf37dac5e31acc5eae504831110235d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_d6feb5b9237c12123b9491270d1c3eccdf37dac5e31acc5eae504831110235d7->leave($__internal_d6feb5b9237c12123b9491270d1c3eccdf37dac5e31acc5eae504831110235d7_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_506e831fc72672c37551804cf96495b673c8ad3df9a14120f21205da35f86da8 = $this->env->getExtension("native_profiler");
        $__internal_506e831fc72672c37551804cf96495b673c8ad3df9a14120f21205da35f86da8->enter($__internal_506e831fc72672c37551804cf96495b673c8ad3df9a14120f21205da35f86da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_506e831fc72672c37551804cf96495b673c8ad3df9a14120f21205da35f86da8->leave($__internal_506e831fc72672c37551804cf96495b673c8ad3df9a14120f21205da35f86da8_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_f475f0ca81ce6a107daa2e75c65eac8f69fe3160d338c26c11b5bad87066d00e = $this->env->getExtension("native_profiler");
        $__internal_f475f0ca81ce6a107daa2e75c65eac8f69fe3160d338c26c11b5bad87066d00e->enter($__internal_f475f0ca81ce6a107daa2e75c65eac8f69fe3160d338c26c11b5bad87066d00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_f475f0ca81ce6a107daa2e75c65eac8f69fe3160d338c26c11b5bad87066d00e->leave($__internal_f475f0ca81ce6a107daa2e75c65eac8f69fe3160d338c26c11b5bad87066d00e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
