<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f60ebc0120130dc51f0e9cca125454c09bbe3fdd44b5e771f955c8d83054c5b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ed54a0d7800ed8dcb05cf2657249e71a6ae3b663b76ca8d2e5da0b79552fcfe = $this->env->getExtension("native_profiler");
        $__internal_1ed54a0d7800ed8dcb05cf2657249e71a6ae3b663b76ca8d2e5da0b79552fcfe->enter($__internal_1ed54a0d7800ed8dcb05cf2657249e71a6ae3b663b76ca8d2e5da0b79552fcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed54a0d7800ed8dcb05cf2657249e71a6ae3b663b76ca8d2e5da0b79552fcfe->leave($__internal_1ed54a0d7800ed8dcb05cf2657249e71a6ae3b663b76ca8d2e5da0b79552fcfe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0dc8927e13c8d67416b64517d603db1a378198ce9cc80a07f7e69e69f08add3b = $this->env->getExtension("native_profiler");
        $__internal_0dc8927e13c8d67416b64517d603db1a378198ce9cc80a07f7e69e69f08add3b->enter($__internal_0dc8927e13c8d67416b64517d603db1a378198ce9cc80a07f7e69e69f08add3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0dc8927e13c8d67416b64517d603db1a378198ce9cc80a07f7e69e69f08add3b->leave($__internal_0dc8927e13c8d67416b64517d603db1a378198ce9cc80a07f7e69e69f08add3b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1e220749a882deb7f46364ac513ca7b7259a24d227dc51357e65a4a5bc6082ff = $this->env->getExtension("native_profiler");
        $__internal_1e220749a882deb7f46364ac513ca7b7259a24d227dc51357e65a4a5bc6082ff->enter($__internal_1e220749a882deb7f46364ac513ca7b7259a24d227dc51357e65a4a5bc6082ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1e220749a882deb7f46364ac513ca7b7259a24d227dc51357e65a4a5bc6082ff->leave($__internal_1e220749a882deb7f46364ac513ca7b7259a24d227dc51357e65a4a5bc6082ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c40e95fbff1eca06b2aa7e5a4a331c5f67705e55d53b8a9f1e93bffdaa21ac08 = $this->env->getExtension("native_profiler");
        $__internal_c40e95fbff1eca06b2aa7e5a4a331c5f67705e55d53b8a9f1e93bffdaa21ac08->enter($__internal_c40e95fbff1eca06b2aa7e5a4a331c5f67705e55d53b8a9f1e93bffdaa21ac08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c40e95fbff1eca06b2aa7e5a4a331c5f67705e55d53b8a9f1e93bffdaa21ac08->leave($__internal_c40e95fbff1eca06b2aa7e5a4a331c5f67705e55d53b8a9f1e93bffdaa21ac08_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
