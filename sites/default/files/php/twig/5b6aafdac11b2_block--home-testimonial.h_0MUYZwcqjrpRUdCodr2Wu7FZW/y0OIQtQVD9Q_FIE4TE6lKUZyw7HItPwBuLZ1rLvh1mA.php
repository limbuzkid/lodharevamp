<?php

/* themes/basic/templates/block/block--home-testimonial.html.twig */
class __TwigTemplate_912afe9de9a9c1c0aecf268aa84e37110a0bcc18dff8df9c045a263022084dfb extends Twig_Template
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
        $filters = array("raw" => 12);
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
<div class=\"imgWrap\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "#data_obj", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 4
            echo "            <div class=\"profilePic picPos-0";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "sequence", array()), "html", null, true));
            echo "\"><span class=\"tab\" data-attr=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "sequence", array()), "html", null, true));
            echo "\"><img src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "imagePath", array()), "html", null, true));
            echo "\"></span></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    <div class=\"profilePicFrame\"></div>
</div>
<div class=\"content\">
    <div class=\"profileWrap\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "#data_obj", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 11
            echo "        <div class=\"profileBox\">
            ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["data"], "desc", array())));
            echo "
            <p class=\"name\">";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true));
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
</div> ";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/block/block--home-testimonial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  81 => 13,  77 => 12,  74 => 11,  70 => 10,  64 => 6,  51 => 4,  47 => 3,  43 => 1,);
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
<div class=\"imgWrap\">
    {% for data in content[\"#data_obj\"] %}
            <div class=\"profilePic picPos-0{{ data.sequence }}\"><span class=\"tab\" data-attr=\"{{ data.sequence }}\"><img src=\"{{ data.imagePath }}\"></span></div>
        {% endfor %}
    <div class=\"profilePicFrame\"></div>
</div>
<div class=\"content\">
    <div class=\"profileWrap\">
    {% for data in content[\"#data_obj\"] %}
        <div class=\"profileBox\">
            {{ data.desc|raw }}
            <p class=\"name\">{{ data.title}}</p>
        </div>
    {% endfor %}
    </div>
</div> ", "themes/basic/templates/block/block--home-testimonial.html.twig", "E:\\wamp64\\www\\html\\lodharevamp\\themes\\basic\\templates\\block\\block--home-testimonial.html.twig");
    }
}
