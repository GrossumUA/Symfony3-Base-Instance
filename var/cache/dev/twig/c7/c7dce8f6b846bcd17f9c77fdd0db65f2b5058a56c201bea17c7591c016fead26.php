<?php

/* ApplicationSonataAdminBundle:block:user_block.html.twig */
class __TwigTemplate_1defad45ab6a9a1d2d73dc5f9c9189aed36ae904fe4b8084ea8de6d5654532ef extends Twig_Template
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
        $__internal_6cd7ac818af0156aa4ec7f087bdfbb08f14bea8c6f9bff37336346cecab92748 = $this->env->getExtension("native_profiler");
        $__internal_6cd7ac818af0156aa4ec7f087bdfbb08f14bea8c6f9bff37336346cecab92748->enter($__internal_6cd7ac818af0156aa4ec7f087bdfbb08f14bea8c6f9bff37336346cecab92748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApplicationSonataAdminBundle:block:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_6cd7ac818af0156aa4ec7f087bdfbb08f14bea8c6f9bff37336346cecab92748->leave($__internal_6cd7ac818af0156aa4ec7f087bdfbb08f14bea8c6f9bff37336346cecab92748_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_73d7682e541cb739dd5179ea9d1d6f6304dfce97367289c0df7dbfd476b23ac4 = $this->env->getExtension("native_profiler");
        $__internal_73d7682e541cb739dd5179ea9d1d6f6304dfce97367289c0df7dbfd476b23ac4->enter($__internal_73d7682e541cb739dd5179ea9d1d6f6304dfce97367289c0df7dbfd476b23ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
";
        
        $__internal_73d7682e541cb739dd5179ea9d1d6f6304dfce97367289c0df7dbfd476b23ac4->leave($__internal_73d7682e541cb739dd5179ea9d1d6f6304dfce97367289c0df7dbfd476b23ac4_prof);

    }

    public function getTemplateName()
    {
        return "ApplicationSonataAdminBundle:block:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block user_block %}*/
/*     <li><a href="{{ path('fos_user_security_logout') }}">Logout</a></li>*/
/* {% endblock %}*/
/* */
