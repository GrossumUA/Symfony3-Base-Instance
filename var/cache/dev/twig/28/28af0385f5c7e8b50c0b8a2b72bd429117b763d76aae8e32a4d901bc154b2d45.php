<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_c22c06f937b46cf8f8183d43d6daea0df9975d12a58ee28d01255c70e1c1f583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a17a7ca8d941eabe16e2c6d24c5a254e600d194599f197963c5f507442037d8 = $this->env->getExtension("native_profiler");
        $__internal_6a17a7ca8d941eabe16e2c6d24c5a254e600d194599f197963c5f507442037d8->enter($__internal_6a17a7ca8d941eabe16e2c6d24c5a254e600d194599f197963c5f507442037d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a17a7ca8d941eabe16e2c6d24c5a254e600d194599f197963c5f507442037d8->leave($__internal_6a17a7ca8d941eabe16e2c6d24c5a254e600d194599f197963c5f507442037d8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a6addcad67893fc25280159096d4624cb23ed33a6744b657224aef6bcdb5a31 = $this->env->getExtension("native_profiler");
        $__internal_4a6addcad67893fc25280159096d4624cb23ed33a6744b657224aef6bcdb5a31->enter($__internal_4a6addcad67893fc25280159096d4624cb23ed33a6744b657224aef6bcdb5a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_4a6addcad67893fc25280159096d4624cb23ed33a6744b657224aef6bcdb5a31->leave($__internal_4a6addcad67893fc25280159096d4624cb23ed33a6744b657224aef6bcdb5a31_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
