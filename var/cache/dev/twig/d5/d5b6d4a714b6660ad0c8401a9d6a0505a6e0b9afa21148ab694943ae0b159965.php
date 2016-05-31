<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c3a52a4c82f1279ba136f9a56bc1f34f30693f7a42055d7591deb4c9fbf4caea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_dbd64303f14e9ddf79a53ce618b7b7d360fe69fdad3cb59dadcfad53582e3175 = $this->env->getExtension("native_profiler");
        $__internal_dbd64303f14e9ddf79a53ce618b7b7d360fe69fdad3cb59dadcfad53582e3175->enter($__internal_dbd64303f14e9ddf79a53ce618b7b7d360fe69fdad3cb59dadcfad53582e3175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd64303f14e9ddf79a53ce618b7b7d360fe69fdad3cb59dadcfad53582e3175->leave($__internal_dbd64303f14e9ddf79a53ce618b7b7d360fe69fdad3cb59dadcfad53582e3175_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30228ee6b7a111bae170909a564df9ead40618653f7e7b953bf3285b4bcdb494 = $this->env->getExtension("native_profiler");
        $__internal_30228ee6b7a111bae170909a564df9ead40618653f7e7b953bf3285b4bcdb494->enter($__internal_30228ee6b7a111bae170909a564df9ead40618653f7e7b953bf3285b4bcdb494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_30228ee6b7a111bae170909a564df9ead40618653f7e7b953bf3285b4bcdb494->leave($__internal_30228ee6b7a111bae170909a564df9ead40618653f7e7b953bf3285b4bcdb494_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44c85b90055f5104ace0c835981e2605c65fac36dbce4b484a00c71b7594e77d = $this->env->getExtension("native_profiler");
        $__internal_44c85b90055f5104ace0c835981e2605c65fac36dbce4b484a00c71b7594e77d->enter($__internal_44c85b90055f5104ace0c835981e2605c65fac36dbce4b484a00c71b7594e77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_44c85b90055f5104ace0c835981e2605c65fac36dbce4b484a00c71b7594e77d->leave($__internal_44c85b90055f5104ace0c835981e2605c65fac36dbce4b484a00c71b7594e77d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b54e9ceeaeb1eb8cc7ccaaf121a9f595f5ea11e451308cffa18aa65e39a111b0 = $this->env->getExtension("native_profiler");
        $__internal_b54e9ceeaeb1eb8cc7ccaaf121a9f595f5ea11e451308cffa18aa65e39a111b0->enter($__internal_b54e9ceeaeb1eb8cc7ccaaf121a9f595f5ea11e451308cffa18aa65e39a111b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b54e9ceeaeb1eb8cc7ccaaf121a9f595f5ea11e451308cffa18aa65e39a111b0->leave($__internal_b54e9ceeaeb1eb8cc7ccaaf121a9f595f5ea11e451308cffa18aa65e39a111b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
