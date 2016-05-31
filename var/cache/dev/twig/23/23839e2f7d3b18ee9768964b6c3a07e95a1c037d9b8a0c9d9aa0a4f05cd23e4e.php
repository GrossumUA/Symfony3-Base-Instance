<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1042a9cee6d103fb471706ccc56cc3fa880b736c2422c1628100ecd38f5dd842 extends Twig_Template
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
        $__internal_82163942aef523429d669b6f979001e8de24d5ab9b0586bc4db2a4117775e64f = $this->env->getExtension("native_profiler");
        $__internal_82163942aef523429d669b6f979001e8de24d5ab9b0586bc4db2a4117775e64f->enter($__internal_82163942aef523429d669b6f979001e8de24d5ab9b0586bc4db2a4117775e64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_82163942aef523429d669b6f979001e8de24d5ab9b0586bc4db2a4117775e64f->leave($__internal_82163942aef523429d669b6f979001e8de24d5ab9b0586bc4db2a4117775e64f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3f67e63dcfbb9a259e10e149de9eb4ce77de90c4b7980e7f6b9aed46ba427f0a = $this->env->getExtension("native_profiler");
        $__internal_3f67e63dcfbb9a259e10e149de9eb4ce77de90c4b7980e7f6b9aed46ba427f0a->enter($__internal_3f67e63dcfbb9a259e10e149de9eb4ce77de90c4b7980e7f6b9aed46ba427f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3f67e63dcfbb9a259e10e149de9eb4ce77de90c4b7980e7f6b9aed46ba427f0a->leave($__internal_3f67e63dcfbb9a259e10e149de9eb4ce77de90c4b7980e7f6b9aed46ba427f0a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0882df403e41b6f77ffcd2ddf8df7093f8f5b8a85ecd433ae804a7a9e50ccdc8 = $this->env->getExtension("native_profiler");
        $__internal_0882df403e41b6f77ffcd2ddf8df7093f8f5b8a85ecd433ae804a7a9e50ccdc8->enter($__internal_0882df403e41b6f77ffcd2ddf8df7093f8f5b8a85ecd433ae804a7a9e50ccdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0882df403e41b6f77ffcd2ddf8df7093f8f5b8a85ecd433ae804a7a9e50ccdc8->leave($__internal_0882df403e41b6f77ffcd2ddf8df7093f8f5b8a85ecd433ae804a7a9e50ccdc8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7215e77bce331a432495b599d5363e3cb11df228d1f77b949ffff63aee3e7a0e = $this->env->getExtension("native_profiler");
        $__internal_7215e77bce331a432495b599d5363e3cb11df228d1f77b949ffff63aee3e7a0e->enter($__internal_7215e77bce331a432495b599d5363e3cb11df228d1f77b949ffff63aee3e7a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7215e77bce331a432495b599d5363e3cb11df228d1f77b949ffff63aee3e7a0e->leave($__internal_7215e77bce331a432495b599d5363e3cb11df228d1f77b949ffff63aee3e7a0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
