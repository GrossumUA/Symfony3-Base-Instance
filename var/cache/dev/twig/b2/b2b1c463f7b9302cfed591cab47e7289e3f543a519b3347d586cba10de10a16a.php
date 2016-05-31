<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7fd513e18ee5714aee5b0b1b239acc26869cd72fc5ade216cefda02d461a2033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcc9efa1d42b5b8d59729f96afa397566a07777d1bc32f3bc7caa88f2583aa83 = $this->env->getExtension("native_profiler");
        $__internal_fcc9efa1d42b5b8d59729f96afa397566a07777d1bc32f3bc7caa88f2583aa83->enter($__internal_fcc9efa1d42b5b8d59729f96afa397566a07777d1bc32f3bc7caa88f2583aa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc9efa1d42b5b8d59729f96afa397566a07777d1bc32f3bc7caa88f2583aa83->leave($__internal_fcc9efa1d42b5b8d59729f96afa397566a07777d1bc32f3bc7caa88f2583aa83_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e6373fb1a8017f00366e7a612abb645218e2586d3347bcb87c442745394127a = $this->env->getExtension("native_profiler");
        $__internal_5e6373fb1a8017f00366e7a612abb645218e2586d3347bcb87c442745394127a->enter($__internal_5e6373fb1a8017f00366e7a612abb645218e2586d3347bcb87c442745394127a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5e6373fb1a8017f00366e7a612abb645218e2586d3347bcb87c442745394127a->leave($__internal_5e6373fb1a8017f00366e7a612abb645218e2586d3347bcb87c442745394127a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bac78b6af627248cc242349008ce53266521ea57793628edb264aa17bbdfd69 = $this->env->getExtension("native_profiler");
        $__internal_2bac78b6af627248cc242349008ce53266521ea57793628edb264aa17bbdfd69->enter($__internal_2bac78b6af627248cc242349008ce53266521ea57793628edb264aa17bbdfd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2bac78b6af627248cc242349008ce53266521ea57793628edb264aa17bbdfd69->leave($__internal_2bac78b6af627248cc242349008ce53266521ea57793628edb264aa17bbdfd69_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
