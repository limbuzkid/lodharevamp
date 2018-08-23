<?php

/* themes/basic/templates/block/block--homeworldtowerproject.html.twig */
class __TwigTemplate_942afd8d3931b00eaa1dc2a1ca85224af53fe8d00bae4d4d09b2bc9446cef9f0 extends Twig_Template
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
        $tags = array("for" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array(),
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
<div class=\"sliderWrap\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "#first_data", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 4
            echo "        <div class=\"galleryWrap\">
            <div class=\"galleryWrapper banner\">
                <ul>
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "imagePath", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 8
                echo "                    <li data-attr=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "body", array()), "html", null, true));
                echo "\"><img src=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "base_path", array()), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["img"], "value", array()), "html", null, true));
                echo "\" alt=\"\"></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "                </ul>
            </div>
            <p class=\"copytext\">";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "body", array()), "html", null, true));
            echo "</p>
            <div id=\"slider\" class=\"slider\"></div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    <div class=\"selectCat\">
        <span class=\"icon\"><ul>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "#data_obj", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 19
            echo "            <li></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul></span>
        <div class=\"dropdown\">
            <div class=\"select\"><span></span></div>
            <ul class=\"dropdown-menu\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "#data_obj", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 26
            echo "                <li class=\"home-world-tower\" data-attr=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "nodeId", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true));
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/block/block--homeworldtowerproject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 28,  111 => 26,  107 => 25,  101 => 21,  94 => 19,  90 => 18,  86 => 16,  76 => 12,  72 => 10,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  43 => 1,);
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
<div class=\"sliderWrap\">
    {% for data in content[\"#first_data\"] %}
        <div class=\"galleryWrap\">
            <div class=\"galleryWrapper banner\">
                <ul>
                {% for img in data.imagePath %}
                    <li data-attr=\"{{ data.body }}\"><img src=\"{{ data.base_path }}{{img.value }}\" alt=\"\"></li>
                {% endfor %}
                </ul>
            </div>
            <p class=\"copytext\">{{ data.body }}</p>
            <div id=\"slider\" class=\"slider\"></div>
        </div>
    {% endfor %}
    <div class=\"selectCat\">
        <span class=\"icon\"><ul>
        {% for data in content[\"#data_obj\"] %}
            <li></li>
        {% endfor %}
        </ul></span>
        <div class=\"dropdown\">
            <div class=\"select\"><span></span></div>
            <ul class=\"dropdown-menu\">
            {% for data in content[\"#data_obj\"] %}
                <li class=\"home-world-tower\" data-attr=\"{{ data.nodeId }}\">{{ data.title }}</li>
            {% endfor %}
            </ul>
        </div>
    </div>
</div>", "themes/basic/templates/block/block--homeworldtowerproject.html.twig", "E:\\wamp\\www\\lodharevamp\\themes\\basic\\templates\\block\\block--homeworldtowerproject.html.twig");
    }
}
