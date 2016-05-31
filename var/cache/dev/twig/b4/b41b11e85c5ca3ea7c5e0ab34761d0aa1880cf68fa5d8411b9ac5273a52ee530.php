<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_bff86fd277189efe6a9fe8ab1992caafd3e7a53edc9f1c046e7efda77817fda4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_a275764e17187230230129fb07f4f212e3e4b4afaab38ee0629dade492a9f5af = $this->env->getExtension("native_profiler");
        $__internal_a275764e17187230230129fb07f4f212e3e4b4afaab38ee0629dade492a9f5af->enter($__internal_a275764e17187230230129fb07f4f212e3e4b4afaab38ee0629dade492a9f5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a275764e17187230230129fb07f4f212e3e4b4afaab38ee0629dade492a9f5af->leave($__internal_a275764e17187230230129fb07f4f212e3e4b4afaab38ee0629dade492a9f5af_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cceeed071d3b9ed46b62895a6a7c228563034af38451dced0e0ed627d08b89d0 = $this->env->getExtension("native_profiler");
        $__internal_cceeed071d3b9ed46b62895a6a7c228563034af38451dced0e0ed627d08b89d0->enter($__internal_cceeed071d3b9ed46b62895a6a7c228563034af38451dced0e0ed627d08b89d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cceeed071d3b9ed46b62895a6a7c228563034af38451dced0e0ed627d08b89d0->leave($__internal_cceeed071d3b9ed46b62895a6a7c228563034af38451dced0e0ed627d08b89d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
