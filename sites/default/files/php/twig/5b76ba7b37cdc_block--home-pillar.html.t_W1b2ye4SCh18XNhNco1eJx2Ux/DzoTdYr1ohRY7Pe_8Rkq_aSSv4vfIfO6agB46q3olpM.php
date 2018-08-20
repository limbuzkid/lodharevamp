<?php

/* themes/basic/templates/block/block--home-pillar.html.twig */
class __TwigTemplate_438993718c71b817e7ea7160d092d6dfe48fed6833cc23105c6687585daab3ec extends Twig_Template
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
        $tags = array("for" => 4, "set" => 13);
        $filters = array("batch" => 4, "length" => 13, "split" => 13, "trim" => 15);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set'),
                array('batch', 'length', 'split', 'trim'),
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
<div class=\"container\">
    <div class=\"pillarsCarousel\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute(($context["content"] ?? null), "#data_obj", array(), "array"), 3));
        foreach ($context['_seq'] as $context["_key"] => $context["datas"]) {
            // line 5
            echo "        <div class=\"slide\">
         ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["datas"]);
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 7
                echo "            <div class=\"item\">
                <div class=\"wrapper\">
                    <span class=\"square one\"></span>
                    <span class=\"square two\"></span>
                    <span class=\"square three\"></span>
                    <span class=\"square four\"></span>
                ";
                // line 13
                $context["numberOfWords"] = twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($context["data"], "title", array()), " "));
                // line 14
                echo "                ";
                $context["array"] = twig_split_filter($this->env, $this->getAttribute($context["data"], "title", array()), " ", ($context["numberOfWords"] ?? null));
                // line 15
                echo "                <p class=\"title\"><strong>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "fieldSequence", array()), "html", null, true));
                echo "</strong>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->getAttribute($context["data"], "title", array()), $this->getAttribute(($context["array"] ?? null), (($context["numberOfWords"] ?? null) - 1))), "html", null, true));
                echo " <span>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["array"] ?? null), (($context["numberOfWords"] ?? null) - 1)), "html", null, true));
                echo "</span></p>
                <span class=\"svgBox\" data-svg=\"";
                // line 16
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "imagePath", array()), "html", null, true));
                echo "\"></span>
                <p class=\"details\">";
                // line 17
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "body", array()), "html", null, true));
                echo "</p>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/block/block--home-pillar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  95 => 21,  85 => 17,  81 => 16,  72 => 15,  69 => 14,  67 => 13,  59 => 7,  55 => 6,  52 => 5,  48 => 4,  43 => 1,);
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
<div class=\"container\">
    <div class=\"pillarsCarousel\">
    {% for datas in content[\"#data_obj\"] |batch(3) %}
        <div class=\"slide\">
         {% for data in datas %}
            <div class=\"item\">
                <div class=\"wrapper\">
                    <span class=\"square one\"></span>
                    <span class=\"square two\"></span>
                    <span class=\"square three\"></span>
                    <span class=\"square four\"></span>
                {% set numberOfWords = data.title|split(' ')|length %}
                {% set array = data.title|split(' ', numberOfWords) %}
                <p class=\"title\"><strong>{{ data.fieldSequence }}</strong>{{ data.title|trim(attribute(array, numberOfWords-1)) }} <span>{{ attribute(array, numberOfWords-1) }}</span></p>
                <span class=\"svgBox\" data-svg=\"{{ data.imagePath }}\"></span>
                <p class=\"details\">{{ data.body}}</p>
                </div>
            </div>
            {% endfor %}
        </div>
        {% endfor %}
    </div>
</div>", "themes/basic/templates/block/block--home-pillar.html.twig", "E:\\wamp\\www\\lodharevamp\\themes\\basic\\templates\\block\\block--home-pillar.html.twig");
    }
}
