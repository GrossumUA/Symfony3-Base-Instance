<?php

/* ApplicationUserBundle:Login:login.html.twig */
class __TwigTemplate_5f96c7f9efed464920386f8a0d9f391bc9eb75de69f224251f58f793bcfd05fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ApplicationUserBundle::layout.html.twig", "ApplicationUserBundle:Login:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ApplicationUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0976d2ea83ccaab25d6f7c9eb8cc10a13a12d96db99c787906d70dad730dd8ae = $this->env->getExtension("native_profiler");
        $__internal_0976d2ea83ccaab25d6f7c9eb8cc10a13a12d96db99c787906d70dad730dd8ae->enter($__internal_0976d2ea83ccaab25d6f7c9eb8cc10a13a12d96db99c787906d70dad730dd8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApplicationUserBundle:Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0976d2ea83ccaab25d6f7c9eb8cc10a13a12d96db99c787906d70dad730dd8ae->leave($__internal_0976d2ea83ccaab25d6f7c9eb8cc10a13a12d96db99c787906d70dad730dd8ae_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_758bdda45f0234ee41dd9a4eae0f6771618082ee0b5e4300ef2de3ab008a8bb7 = $this->env->getExtension("native_profiler");
        $__internal_758bdda45f0234ee41dd9a4eae0f6771618082ee0b5e4300ef2de3ab008a8bb7->enter($__internal_758bdda45f0234ee41dd9a4eae0f6771618082ee0b5e4300ef2de3ab008a8bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.label", array(), "ApplicationSonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_758bdda45f0234ee41dd9a4eae0f6771618082ee0b5e4300ef2de3ab008a8bb7->leave($__internal_758bdda45f0234ee41dd9a4eae0f6771618082ee0b5e4300ef2de3ab008a8bb7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3791e747800d5ffa439f074893cbeccf3e9af3ca263abd65f6a0a19fa722d95d = $this->env->getExtension("native_profiler");
        $__internal_3791e747800d5ffa439f074893cbeccf3e9af3ca263abd65f6a0a19fa722d95d->enter($__internal_3791e747800d5ffa439f074893cbeccf3e9af3ca263abd65f6a0a19fa722d95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"form-box\" id=\"login-box\">
        <div class=\"header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.label", array(), "ApplicationSonataAdminBundle"), "html", null, true);
        echo "</div>
        <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\">
            <div class=\"body bg-gray\">
                ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "                    <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 14
        echo "
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>

                <div class=\"form-group control-group\">
                    <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" required=\"required\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                </div>


                <div class=\"form-group control-group\">
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                </div>

                <div class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                    </label>
                </div>

            </div>

            <div class=\"footer\">
                <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn bg-olive btn-block\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
            </div>
        </form>
    </div>
";
        
        $__internal_3791e747800d5ffa439f074893cbeccf3e9af3ca263abd65f6a0a19fa722d95d->leave($__internal_3791e747800d5ffa439f074893cbeccf3e9af3ca263abd65f6a0a19fa722d95d_prof);

    }

    public function getTemplateName()
    {
        return "ApplicationUserBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  103 => 29,  94 => 23,  86 => 18,  80 => 15,  77 => 14,  71 => 12,  69 => 11,  64 => 9,  60 => 8,  57 => 7,  51 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'ApplicationUserBundle::layout.html.twig' %}*/
/* {% block title %}*/
/*     {{ 'security.login.label'|trans({}, 'ApplicationSonataAdminBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="form-box" id="login-box">*/
/*         <div class="header">{{ 'security.login.label'|trans({}, 'ApplicationSonataAdminBundle') }}</div>*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post" role="form">*/
/*             <div class="body bg-gray">*/
/*                 {% if error %}*/
/*                     <div class="alert alert-danger alert-error">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                 {% endif %}*/
/* */
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}"/>*/
/* */
/*                 <div class="form-group control-group">*/
/*                     <input type="text" class="form-control" id="username"  name="_username" required="required" placeholder="{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}"/>*/
/*                 </div>*/
/* */
/* */
/*                 <div class="form-group control-group">*/
/*                     <input type="password" class="form-control" id="password" name="_password" required="required" placeholder="{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}"/>*/
/*                 </div>*/
/* */
/*                 <div class="checkbox">*/
/*                     <label>*/
/*                         <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                         {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                     </label>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div class="footer">*/
/*                 <button type="submit" id="_submit" name="_submit" class="btn bg-olive btn-block">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
