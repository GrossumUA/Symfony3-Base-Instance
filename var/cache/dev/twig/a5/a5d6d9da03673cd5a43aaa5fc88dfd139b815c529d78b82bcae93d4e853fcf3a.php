<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_d28a550b0179db39554507c414d3f4591c59d8448c7997627b6dd08c79569a60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b4750b2bfd9ec573dbbc8b4ea850491b8cf8b6600c94130d8be40865f64a723 = $this->env->getExtension("native_profiler");
        $__internal_2b4750b2bfd9ec573dbbc8b4ea850491b8cf8b6600c94130d8be40865f64a723->enter($__internal_2b4750b2bfd9ec573dbbc8b4ea850491b8cf8b6600c94130d8be40865f64a723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_2b4750b2bfd9ec573dbbc8b4ea850491b8cf8b6600c94130d8be40865f64a723->leave($__internal_2b4750b2bfd9ec573dbbc8b4ea850491b8cf8b6600c94130d8be40865f64a723_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_804014ceaaae8b8c4ccd10d2a378ba6c79f6c05291dcc9932d166e8af034fe1c = $this->env->getExtension("native_profiler");
        $__internal_804014ceaaae8b8c4ccd10d2a378ba6c79f6c05291dcc9932d166e8af034fe1c->enter($__internal_804014ceaaae8b8c4ccd10d2a378ba6c79f6c05291dcc9932d166e8af034fe1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_804014ceaaae8b8c4ccd10d2a378ba6c79f6c05291dcc9932d166e8af034fe1c->leave($__internal_804014ceaaae8b8c4ccd10d2a378ba6c79f6c05291dcc9932d166e8af034fe1c_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
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
/* {% block sonata_type_color_selector_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% spaceless %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 var select2FormatColorSelect = function format(state) {*/
/*                     if (!state.id || state.disabled) {*/
/*                         return state.text;*/
/*                     }*/
/* */
/*                     return ' <i class="fa fa-square" style="color: '+ state.id +'"></i> ' + state.text;*/
/*                 };*/
/* */
/*                 $('#{{ id }}').select2({*/
/*                     formatResult:    select2FormatColorSelect,*/
/*                     formatSelection: select2FormatColorSelect,*/
/*                     width:           '100%',*/
/*                     escapeMarkup:    function(m) { return m; }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_color_selector_widget %}*/
/* */
