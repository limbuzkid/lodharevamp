<?php

/* themes/basic/templates/field.html.twig */
class __TwigTemplate_6fdca0330509bf67c9ab68814ab89678b390995e710b69e57c1d4bae50e465f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@stable/field/field.html.twig", "themes/basic/templates/field.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@stable/field/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 4);
        $filters = array("merge" => 9, "clean_class" => 10, "replace" => 10);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('merge', 'clean_class', 'replace'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 4
        $context["classes"] = array();
        // line 9
        $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => ((        // line 10
($context["bundle"] ?? null) . "__") . \Drupal\Component\Utility\Html::getClass(twig_replace_filter(($context["field_name"] ?? null), array("field_" => ""))))));
        // line 14
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method");
        // line 20
        $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => (((($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 1,  55 => 20,  53 => 14,  51 => 10,  50 => 9,  48 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@stable/field/field.html.twig\" %}

{# Create classes array #}
{% set classes = [] %}

{# BEM inspired class syntax: https://en.bem.info/
   Enable this code if you would like field classes like \"article__tags\", where article is the content type and field_tags is the field name.
#}
{% set classes = classes|merge([
  bundle ~ '__' ~ field_name|replace({'field_' : ''})|clean_class
]) %}


{% set attributes = attributes.addClass(classes) %}

{#
  Ensures that the visually hidden option for field labels works correctly.
  @todo: Remove when https://www.drupal.org/node/2779919 is resolved.
#}
{% set title_attributes = title_attributes.addClass(label_display == 'visually_hidden' ? 'visually-hidden') %}
", "themes/basic/templates/field.html.twig", "E:\\wamp\\www\\lodharevamp\\themes\\basic\\templates\\field.html.twig");
    }
}
