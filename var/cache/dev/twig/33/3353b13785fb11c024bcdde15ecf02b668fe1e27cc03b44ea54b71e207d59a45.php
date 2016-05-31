<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3f523680fbe01351f33f92b1bb45934db249080061b461c30a2e32144d9c41a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52f7d337f93472b4e80c925e32f568eac09a8e217d3957bcb59fb4dbe070426c = $this->env->getExtension("native_profiler");
        $__internal_52f7d337f93472b4e80c925e32f568eac09a8e217d3957bcb59fb4dbe070426c->enter($__internal_52f7d337f93472b4e80c925e32f568eac09a8e217d3957bcb59fb4dbe070426c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_52f7d337f93472b4e80c925e32f568eac09a8e217d3957bcb59fb4dbe070426c->leave($__internal_52f7d337f93472b4e80c925e32f568eac09a8e217d3957bcb59fb4dbe070426c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b45081b40cd3da8649eb9df9bbd540b0e654fc90924f432eb415f2edf870fc0d = $this->env->getExtension("native_profiler");
        $__internal_b45081b40cd3da8649eb9df9bbd540b0e654fc90924f432eb415f2edf870fc0d->enter($__internal_b45081b40cd3da8649eb9df9bbd540b0e654fc90924f432eb415f2edf870fc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b45081b40cd3da8649eb9df9bbd540b0e654fc90924f432eb415f2edf870fc0d->leave($__internal_b45081b40cd3da8649eb9df9bbd540b0e654fc90924f432eb415f2edf870fc0d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
