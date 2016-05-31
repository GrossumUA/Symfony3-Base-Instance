<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_cf0f52e4e32ba55e9278e0113e0f1b15a23093d99970b2c103e056688e027d17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_921700def641c0b5258a17e446a351abcbe7ae12c689cc1f355b32c553281df8 = $this->env->getExtension("native_profiler");
        $__internal_921700def641c0b5258a17e446a351abcbe7ae12c689cc1f355b32c553281df8->enter($__internal_921700def641c0b5258a17e446a351abcbe7ae12c689cc1f355b32c553281df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_921700def641c0b5258a17e446a351abcbe7ae12c689cc1f355b32c553281df8->leave($__internal_921700def641c0b5258a17e446a351abcbe7ae12c689cc1f355b32c553281df8_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_26940a328c4669c0df2642764d3ae5218fcedf6d0c7f1fb5070fc9e3e4d27415 = $this->env->getExtension("native_profiler");
        $__internal_26940a328c4669c0df2642764d3ae5218fcedf6d0c7f1fb5070fc9e3e4d27415->enter($__internal_26940a328c4669c0df2642764d3ae5218fcedf6d0c7f1fb5070fc9e3e4d27415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_26940a328c4669c0df2642764d3ae5218fcedf6d0c7f1fb5070fc9e3e4d27415->leave($__internal_26940a328c4669c0df2642764d3ae5218fcedf6d0c7f1fb5070fc9e3e4d27415_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
