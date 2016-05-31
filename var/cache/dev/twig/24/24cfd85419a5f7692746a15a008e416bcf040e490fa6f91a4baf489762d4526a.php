<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c394d3ce102135972e4552ab2ddbf2ca5ecb9f7f30cdcbc3bd787f343e43f901 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_073119e9e05c73597d71cb5eeccd4647f158ead7d94dd376762398bd81ecd6f5 = $this->env->getExtension("native_profiler");
        $__internal_073119e9e05c73597d71cb5eeccd4647f158ead7d94dd376762398bd81ecd6f5->enter($__internal_073119e9e05c73597d71cb5eeccd4647f158ead7d94dd376762398bd81ecd6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<html style=\"min-height: 682px;\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic,400italic,600italic\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/applicationuser/css/styles.css"), "html", null, true);
        echo "\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body class=\"sonata-bc bg-black\" style=\"min-height: 682px;\">
";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "</body>
</html>
";
        
        $__internal_073119e9e05c73597d71cb5eeccd4647f158ead7d94dd376762398bd81ecd6f5->leave($__internal_073119e9e05c73597d71cb5eeccd4647f158ead7d94dd376762398bd81ecd6f5_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_08d992c8d50e2a1cc1d51c783d16300333ad0e3c86574884cfa1182d4416dd7b = $this->env->getExtension("native_profiler");
        $__internal_08d992c8d50e2a1cc1d51c783d16300333ad0e3c86574884cfa1182d4416dd7b->enter($__internal_08d992c8d50e2a1cc1d51c783d16300333ad0e3c86574884cfa1182d4416dd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_08d992c8d50e2a1cc1d51c783d16300333ad0e3c86574884cfa1182d4416dd7b->leave($__internal_08d992c8d50e2a1cc1d51c783d16300333ad0e3c86574884cfa1182d4416dd7b_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cd9d135cf0011f0cac00228b0ca32123491e7d63fe63389bc7707301c102036 = $this->env->getExtension("native_profiler");
        $__internal_8cd9d135cf0011f0cac00228b0ca32123491e7d63fe63389bc7707301c102036->enter($__internal_8cd9d135cf0011f0cac00228b0ca32123491e7d63fe63389bc7707301c102036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8cd9d135cf0011f0cac00228b0ca32123491e7d63fe63389bc7707301c102036->leave($__internal_8cd9d135cf0011f0cac00228b0ca32123491e7d63fe63389bc7707301c102036_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  56 => 11,  47 => 15,  45 => 14,  39 => 11,  34 => 9,  24 => 1,);
    }
}
/* <html style="min-height: 682px;">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/* */
/*     <!-- Optional theme -->*/
/*     <link rel="stylesheet" href=http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic,400italic,600italic">*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/applicationuser/css/styles.css') }}">*/
/* */
/*     <title>{% block title %}{% endblock %}</title>*/
/* </head>*/
/* <body class="sonata-bc bg-black" style="min-height: 682px;">*/
/* {% block body %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
