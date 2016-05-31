<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_b536ebcdfd93c7d416ae94bbb945e2893a132cfd7242bdd2c3b01ad9349a224a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_87b94750297e182a103269c029cd6c9a6e26a2294c114076c19f017d8b0616e2 = $this->env->getExtension("native_profiler");
        $__internal_87b94750297e182a103269c029cd6c9a6e26a2294c114076c19f017d8b0616e2->enter($__internal_87b94750297e182a103269c029cd6c9a6e26a2294c114076c19f017d8b0616e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87b94750297e182a103269c029cd6c9a6e26a2294c114076c19f017d8b0616e2->leave($__internal_87b94750297e182a103269c029cd6c9a6e26a2294c114076c19f017d8b0616e2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_505e356b99fe17907b69e4fafea84db53887815eb6a8dbda95f611fccbe7476e = $this->env->getExtension("native_profiler");
        $__internal_505e356b99fe17907b69e4fafea84db53887815eb6a8dbda95f611fccbe7476e->enter($__internal_505e356b99fe17907b69e4fafea84db53887815eb6a8dbda95f611fccbe7476e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_505e356b99fe17907b69e4fafea84db53887815eb6a8dbda95f611fccbe7476e->leave($__internal_505e356b99fe17907b69e4fafea84db53887815eb6a8dbda95f611fccbe7476e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
