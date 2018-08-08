<?php

/* themes/basic/templates/block/block--homeblog.html.twig */
class __TwigTemplate_28b73f86f02e89d46806923fa14c9d37e727e27e27c9b95aac9dc694b7233452 extends Twig_Template
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
        $tags = array("for" => 4);
        $filters = array("raw" => 8);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array('raw'),
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

        // line 1
        echo "

<div class=\"blogsContainer\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "#data_obj", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 5
            echo "        <div class=\"blog\">
            <p class=\"date\">";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "date", array()), "html", null, true));
            echo "</p>
            <p class=\"title\"> ";
            // line 7
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true));
            echo "</p>
            <p>";
            // line 8
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["data"], "body", array())));
            echo "</p>
            <a href=\"";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "alias", array()), "html", null, true));
            echo "\" class=\"arrowLink\">Read More</a>
        </div> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <div class=\"buttonWrap\"><a href=\"/blog\" class=\"btn\">View All</a></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/block/block--homeblog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  67 => 9,  63 => 8,  59 => 7,  55 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<div class=\"blogsContainer\">
        {% for data in content[\"#data_obj\"] %}
        <div class=\"blog\">
            <p class=\"date\">{{ data.date }}</p>
            <p class=\"title\"> {{ data.title }}</p>
            <p>{{ data.body|raw }}</p>
            <a href=\"{{ data.alias}}\" class=\"arrowLink\">Read More</a>
        </div> 
    {% endfor %}
    <div class=\"buttonWrap\"><a href=\"/blog\" class=\"btn\">View All</a></div>
</div>
", "themes/basic/templates/block/block--homeblog.html.twig", "E:\\wamp64\\www\\html\\lodharevamp\\themes\\basic\\templates\\block\\block--homeblog.html.twig");
    }
}
