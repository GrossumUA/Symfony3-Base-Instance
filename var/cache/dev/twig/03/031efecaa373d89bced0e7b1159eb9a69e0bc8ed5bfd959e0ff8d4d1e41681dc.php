<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_31ac183c75a3d70c30ea310d04b7a2a99d4729aa1f2937525392fdf1478a5e2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36d7b97830be74ddfaf6782b6e7cdc48f5c58aaa9a3536394cc68d780f06f4e9 = $this->env->getExtension("native_profiler");
        $__internal_36d7b97830be74ddfaf6782b6e7cdc48f5c58aaa9a3536394cc68d780f06f4e9->enter($__internal_36d7b97830be74ddfaf6782b6e7cdc48f5c58aaa9a3536394cc68d780f06f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_36d7b97830be74ddfaf6782b6e7cdc48f5c58aaa9a3536394cc68d780f06f4e9->leave($__internal_36d7b97830be74ddfaf6782b6e7cdc48f5c58aaa9a3536394cc68d780f06f4e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
