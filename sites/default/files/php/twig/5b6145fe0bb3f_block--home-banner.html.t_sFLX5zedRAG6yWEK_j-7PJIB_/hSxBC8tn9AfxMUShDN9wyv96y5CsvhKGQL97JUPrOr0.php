<?php

/* themes/basic/templates/block/block--home-banner.html.twig */
class __TwigTemplate_91f62bb744c0c567b789d2ccba82bfbb59d75c1e75cace96d2a5cb4e7b5ad55c extends Twig_Template
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
        $tags = array("for" => 7);
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
        echo "  <!-- homeBanner starts-->
            <div class=\"homeBanner\">
                <a href=\"javascript:;\" class=\"scroll\">Scroll</a>
                
                <div class=\"bannerCarousel owl-carousel\">
                    <!-- <div class=\"item\" data-videosrcDesk=\"http://www.w3schools.com/html/mov_bbb.mp4\" data-videosrcDevice=\"https://www.w3schools.com/tags/movie.mp4\" data-videosrc=\"\"> -->
                    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "#data_obj", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 8
            echo "                        <div class=\"item\">
                          <img class=\"bannerImage\" data-srcdesktop=\"";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "fieldImagePath", array()), "html", null, true));
            echo "\" data-srcdevice=\"/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
            echo "/images/upload/homebanner01-mobile.jpg\" src=\"/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
            echo "/images/spacer.gif\" alt=\"\">
                          <div class=\"content\">
                              <img src=\"/";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
            echo "/images/logo-lodha-black.png\" alt=\"Lodha\">
                              <p>";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true));
            echo "</p>
                              <a href=\"";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "fieldLinkUrl", array()), "html", null, true));
            echo "\" class=\"btn btn-black\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "fieldLink", array()), "html", null, true));
            echo "</a>
                          </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </div>
            </div>
            <!-- homeBanner ends-->";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/block/block--home-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  75 => 13,  71 => 12,  67 => 11,  58 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <!-- homeBanner starts-->
            <div class=\"homeBanner\">
                <a href=\"javascript:;\" class=\"scroll\">Scroll</a>
                
                <div class=\"bannerCarousel owl-carousel\">
                    <!-- <div class=\"item\" data-videosrcDesk=\"http://www.w3schools.com/html/mov_bbb.mp4\" data-videosrcDevice=\"https://www.w3schools.com/tags/movie.mp4\" data-videosrc=\"\"> -->
                    {% for data in content[\"#data_obj\"] %}
                        <div class=\"item\">
                          <img class=\"bannerImage\" data-srcdesktop=\"{{ data.fieldImagePath }}\" data-srcdevice=\"/{{ directory }}/images/upload/homebanner01-mobile.jpg\" src=\"/{{ directory }}/images/spacer.gif\" alt=\"\">
                          <div class=\"content\">
                              <img src=\"/{{ directory }}/images/logo-lodha-black.png\" alt=\"Lodha\">
                              <p>{{ data.title }}</p>
                              <a href=\"{{ data.fieldLinkUrl }}\" class=\"btn btn-black\">{{ data.fieldLink }}</a>
                          </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
            <!-- homeBanner ends-->", "themes/basic/templates/block/block--home-banner.html.twig", "E:\\wamp64\\www\\html\\lodharevamp\\themes\\basic\\templates\\block\\block--home-banner.html.twig");
    }
}
