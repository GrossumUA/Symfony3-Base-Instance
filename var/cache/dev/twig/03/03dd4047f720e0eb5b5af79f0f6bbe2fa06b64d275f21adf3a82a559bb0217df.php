<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4183a028702ecb554a6ca1a535a5fcd1730401bc2200d99378ef0ca7c9bd7a27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60892fdd64aef85aa8dfc9d32fd651fc30e80f9ed83e806520af89f70e30c845 = $this->env->getExtension("native_profiler");
        $__internal_60892fdd64aef85aa8dfc9d32fd651fc30e80f9ed83e806520af89f70e30c845->enter($__internal_60892fdd64aef85aa8dfc9d32fd651fc30e80f9ed83e806520af89f70e30c845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_60892fdd64aef85aa8dfc9d32fd651fc30e80f9ed83e806520af89f70e30c845->leave($__internal_60892fdd64aef85aa8dfc9d32fd651fc30e80f9ed83e806520af89f70e30c845_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9fdd27a381f04035f736d802a7bc9e5cde0c42d140d765cc954b9daa0353e638 = $this->env->getExtension("native_profiler");
        $__internal_9fdd27a381f04035f736d802a7bc9e5cde0c42d140d765cc954b9daa0353e638->enter($__internal_9fdd27a381f04035f736d802a7bc9e5cde0c42d140d765cc954b9daa0353e638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9fdd27a381f04035f736d802a7bc9e5cde0c42d140d765cc954b9daa0353e638->leave($__internal_9fdd27a381f04035f736d802a7bc9e5cde0c42d140d765cc954b9daa0353e638_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_48ac9a9ef7c5418d5082d714aca8b1c886d3b1265ae350ebf01a6f7a44dc4d89 = $this->env->getExtension("native_profiler");
        $__internal_48ac9a9ef7c5418d5082d714aca8b1c886d3b1265ae350ebf01a6f7a44dc4d89->enter($__internal_48ac9a9ef7c5418d5082d714aca8b1c886d3b1265ae350ebf01a6f7a44dc4d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_48ac9a9ef7c5418d5082d714aca8b1c886d3b1265ae350ebf01a6f7a44dc4d89->leave($__internal_48ac9a9ef7c5418d5082d714aca8b1c886d3b1265ae350ebf01a6f7a44dc4d89_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7bf60829f2a1058e912b7ad02fae65c43b0268bab768938e183aaa22aa9e98a0 = $this->env->getExtension("native_profiler");
        $__internal_7bf60829f2a1058e912b7ad02fae65c43b0268bab768938e183aaa22aa9e98a0->enter($__internal_7bf60829f2a1058e912b7ad02fae65c43b0268bab768938e183aaa22aa9e98a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7bf60829f2a1058e912b7ad02fae65c43b0268bab768938e183aaa22aa9e98a0->leave($__internal_7bf60829f2a1058e912b7ad02fae65c43b0268bab768938e183aaa22aa9e98a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
