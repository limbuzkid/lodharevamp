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
        $tags = array("for" => 9);
        $filters = array("raw" => 13);
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
<section class=\"blogsWrap\">
    <div class=\"container paddingBoth\">
        <div class=\"sectionTitle\">
            <span class=\"icon\"><img src=\"/";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
            <p>Blogging <span>Life Better!</span></p>
        </div>
        <div class=\"blogsContainer\">
             ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "#data_obj", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 10
            echo "                <div class=\"blog\">
                    <p class=\"date\">";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "date", array()), "html", null, true));
            echo "</p>
                    <p class=\"title\"> ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true));
            echo "</p>
                    <p>";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["data"], "body", array())));
            echo "</p>
                    <a href=\"";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "alias", array()), "html", null, true));
            echo "\" class=\"arrowLink\">Read More</a>
                </div> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            <div class=\"buttonWrap\"><a href=\"/blog\" class=\"btn\">View All</a></div>
        </div>
    </div>
</section>";
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
        return array (  84 => 17,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  60 => 10,  56 => 9,  49 => 5,  43 => 1,);
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
<section class=\"blogsWrap\">
    <div class=\"container paddingBoth\">
        <div class=\"sectionTitle\">
            <span class=\"icon\"><img src=\"/{{ directory }}/images/upload/icon-pillars.png\"></span>
            <p>Blogging <span>Life Better!</span></p>
        </div>
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
    </div>
</section>", "themes/basic/templates/block/block--homeblog.html.twig", "E:\\wamp64\\www\\html\\lodharevamp\\themes\\basic\\templates\\block\\block--homeblog.html.twig");
    }
}
