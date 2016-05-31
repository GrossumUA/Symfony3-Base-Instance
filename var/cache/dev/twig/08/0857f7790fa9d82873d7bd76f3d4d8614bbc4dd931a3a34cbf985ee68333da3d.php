<?php

/* base.html.twig */
class __TwigTemplate_f4d9c21c0e21fa87ac54916f8cf0acf81bddb68d02e45437aa7a096deb3799cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b878a01e4dd50e2b0713fb4e679b45c3bc18ab195455e52c0ff8d8c99b956389 = $this->env->getExtension("native_profiler");
        $__internal_b878a01e4dd50e2b0713fb4e679b45c3bc18ab195455e52c0ff8d8c99b956389->enter($__internal_b878a01e4dd50e2b0713fb4e679b45c3bc18ab195455e52c0ff8d8c99b956389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b878a01e4dd50e2b0713fb4e679b45c3bc18ab195455e52c0ff8d8c99b956389->leave($__internal_b878a01e4dd50e2b0713fb4e679b45c3bc18ab195455e52c0ff8d8c99b956389_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4627d47feba23272d55e96a68c9c5a0518eb9c49016f61500f5969fb46bf5e8 = $this->env->getExtension("native_profiler");
        $__internal_f4627d47feba23272d55e96a68c9c5a0518eb9c49016f61500f5969fb46bf5e8->enter($__internal_f4627d47feba23272d55e96a68c9c5a0518eb9c49016f61500f5969fb46bf5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f4627d47feba23272d55e96a68c9c5a0518eb9c49016f61500f5969fb46bf5e8->leave($__internal_f4627d47feba23272d55e96a68c9c5a0518eb9c49016f61500f5969fb46bf5e8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0493e8729f5cb4483c56c863e8df1dfe584f8d5d5e57d53939319107d8cb1e46 = $this->env->getExtension("native_profiler");
        $__internal_0493e8729f5cb4483c56c863e8df1dfe584f8d5d5e57d53939319107d8cb1e46->enter($__internal_0493e8729f5cb4483c56c863e8df1dfe584f8d5d5e57d53939319107d8cb1e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0493e8729f5cb4483c56c863e8df1dfe584f8d5d5e57d53939319107d8cb1e46->leave($__internal_0493e8729f5cb4483c56c863e8df1dfe584f8d5d5e57d53939319107d8cb1e46_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7223cdd355129da893345f1eea76b5e43d3c5a2310ddbbeded7fccfdd8b90366 = $this->env->getExtension("native_profiler");
        $__internal_7223cdd355129da893345f1eea76b5e43d3c5a2310ddbbeded7fccfdd8b90366->enter($__internal_7223cdd355129da893345f1eea76b5e43d3c5a2310ddbbeded7fccfdd8b90366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7223cdd355129da893345f1eea76b5e43d3c5a2310ddbbeded7fccfdd8b90366->leave($__internal_7223cdd355129da893345f1eea76b5e43d3c5a2310ddbbeded7fccfdd8b90366_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49ef872dc7c3fc6ab618c67045ec020c5fe264bb97e6f552262fcb52416be8dd = $this->env->getExtension("native_profiler");
        $__internal_49ef872dc7c3fc6ab618c67045ec020c5fe264bb97e6f552262fcb52416be8dd->enter($__internal_49ef872dc7c3fc6ab618c67045ec020c5fe264bb97e6f552262fcb52416be8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_49ef872dc7c3fc6ab618c67045ec020c5fe264bb97e6f552262fcb52416be8dd->leave($__internal_49ef872dc7c3fc6ab618c67045ec020c5fe264bb97e6f552262fcb52416be8dd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
