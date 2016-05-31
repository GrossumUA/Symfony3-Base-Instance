<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_d076af3702e0dc41214de99f7c506651942b3f0449b8d32ab5d771031d7d6e63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_430623417a07866808a5ee83def9b8913200696015ee66e3815ec62bebf6edce = $this->env->getExtension("native_profiler");
        $__internal_430623417a07866808a5ee83def9b8913200696015ee66e3815ec62bebf6edce->enter($__internal_430623417a07866808a5ee83def9b8913200696015ee66e3815ec62bebf6edce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_430623417a07866808a5ee83def9b8913200696015ee66e3815ec62bebf6edce->leave($__internal_430623417a07866808a5ee83def9b8913200696015ee66e3815ec62bebf6edce_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_db2a42605c22b214f7ae62fbc71493c72b56b3e64aac52ced57462b71b9a5e1e = $this->env->getExtension("native_profiler");
        $__internal_db2a42605c22b214f7ae62fbc71493c72b56b3e64aac52ced57462b71b9a5e1e->enter($__internal_db2a42605c22b214f7ae62fbc71493c72b56b3e64aac52ced57462b71b9a5e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_db2a42605c22b214f7ae62fbc71493c72b56b3e64aac52ced57462b71b9a5e1e->leave($__internal_db2a42605c22b214f7ae62fbc71493c72b56b3e64aac52ced57462b71b9a5e1e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
