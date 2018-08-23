<?php

/* themes/basic/templates/page--all-projects.html.twig */
class __TwigTemplate_51d09a2ddf0552dd29dbb056ed18363d69a9f21c9f1f2c99b860734efdb06842 extends Twig_Template
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
        $tags = array("for" => 40);
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
";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "



<div class=\"wrap1900\">
    ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["blank"] ?? null), "html", null, true));
        echo "
    <section class=\"residential allproperty\">
        <div class=\"container searchproperty\">
            <div class=\"search\">
                <div class=\"inputWrap\">
                    <input type=\"text\" name=\"\">
                </div>
                <a href=\"javascript:;\" class=\"searchIcon\">Search</a>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"searchfilter\">
                <div class=\"field\">
                    <div class=\"selectWrapper refineicon\">
                        <div class=\"selectedvalue\"></div>
                        <select name=\"\">
                            <option value=\"\" selected>Refine Search</option>
                            <option>New Property</option>
                        </select>
                    </div>
                </div>
                <div class=\"field\">
                    <div class=\"selectWrapper sortbyicon\">
                        <div class=\"selectedvalue\"></div>
                        <select name=\"\">
                            <option value=\"\" selected>Sort By</option>
                            <option>New Property</option>
                        </select>
                    </div>
                </div>
            </div>
            <p class=\"resultitle\"><span>40</span> Properties matching your search</p>
            <div class=\"searchresult\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data_obj"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 41
            echo "                    <div class=\"slides\">
                        <span class=\"slider-tag\">";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "category", array()), "html", null, true));
            echo "</span>
                        <div class=\"res-head flex-wrp\">
                            <div class=\"head-txt\">
                                <h3>";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "project_name", array()), "html", null, true));
            echo "</h3>
                                <p>";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "location", array()), "html", null, true));
            echo "</p>
                            </div>
                            <div class=\"rating\">
                                <a href=\"javascript:void(0);\" class=\"viewIcon\"></a>
                                <img src=\"/";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
            echo "/images/aspi/star.png\" alt=\"star\">
                            </div>
                        </div>
                        <div class=\"inner-wrp custCarou\">
                            <div class=\"inner-slider\">
                                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 56
                echo "                                    <img src=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["image"], "html", null, true));
                echo "\" alt=\"resident-image\">
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                            </div>
                            <span class=\"fav-icon\">
                                <img src=\"/";
            // line 60
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
            echo "/images/aspi/fav-icon.png\" alt=\"fav-icon\">
                            </span>
                        </div>
                        <div class=\"possession-wrp\">
                            <p>Possession Date: <b>";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "possession_date", array()), "html", null, true));
            echo "</b></p>
                            <p>Typology: <b>";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "typology", array()), "html", null, true));
            echo "</b> | Price: <b>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "unit_price", array()), "html", null, true));
            echo "</b></p>
                            <p><span>Offer : ";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "scheme_title", array()), "html", null, true));
            echo "</span></p>
                        </div>
                        <div class=\"slide-footer\">
                            <a href=\"";
            // line 69
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "link_url", array()), "html", null, true));
            echo "\">View Details</a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </div>
        </div>
    </section>
</div>





";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page--all-projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 73,  162 => 69,  156 => 66,  150 => 65,  146 => 64,  139 => 60,  135 => 58,  126 => 56,  122 => 55,  114 => 50,  107 => 46,  103 => 45,  97 => 42,  94 => 41,  90 => 40,  54 => 7,  46 => 2,  43 => 1,);
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
{{ page.content }}



<div class=\"wrap1900\">
    {{ blank }}
    <section class=\"residential allproperty\">
        <div class=\"container searchproperty\">
            <div class=\"search\">
                <div class=\"inputWrap\">
                    <input type=\"text\" name=\"\">
                </div>
                <a href=\"javascript:;\" class=\"searchIcon\">Search</a>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"searchfilter\">
                <div class=\"field\">
                    <div class=\"selectWrapper refineicon\">
                        <div class=\"selectedvalue\"></div>
                        <select name=\"\">
                            <option value=\"\" selected>Refine Search</option>
                            <option>New Property</option>
                        </select>
                    </div>
                </div>
                <div class=\"field\">
                    <div class=\"selectWrapper sortbyicon\">
                        <div class=\"selectedvalue\"></div>
                        <select name=\"\">
                            <option value=\"\" selected>Sort By</option>
                            <option>New Property</option>
                        </select>
                    </div>
                </div>
            </div>
            <p class=\"resultitle\"><span>40</span> Properties matching your search</p>
            <div class=\"searchresult\">
                {% for data in data_obj %}
                    <div class=\"slides\">
                        <span class=\"slider-tag\">{{ data.category }}</span>
                        <div class=\"res-head flex-wrp\">
                            <div class=\"head-txt\">
                                <h3>{{ data.project_name }}</h3>
                                <p>{{ data.location }}</p>
                            </div>
                            <div class=\"rating\">
                                <a href=\"javascript:void(0);\" class=\"viewIcon\"></a>
                                <img src=\"/{{ directory }}/images/aspi/star.png\" alt=\"star\">
                            </div>
                        </div>
                        <div class=\"inner-wrp custCarou\">
                            <div class=\"inner-slider\">
                                {% for image in data.images %}
                                    <img src=\"{{ image }}\" alt=\"resident-image\">
                                {% endfor %}
                            </div>
                            <span class=\"fav-icon\">
                                <img src=\"/{{ directory }}/images/aspi/fav-icon.png\" alt=\"fav-icon\">
                            </span>
                        </div>
                        <div class=\"possession-wrp\">
                            <p>Possession Date: <b>{{ data.possession_date }}</b></p>
                            <p>Typology: <b>{{ data.typology }}</b> | Price: <b>{{ data.unit_price }}</b></p>
                            <p><span>Offer : {{ data.scheme_title }}</span></p>
                        </div>
                        <div class=\"slide-footer\">
                            <a href=\"{{ data.link_url }}\">View Details</a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
</div>





", "themes/basic/templates/page--all-projects.html.twig", "E:\\wamp\\www\\lodharevamp\\themes\\basic\\templates\\page--all-projects.html.twig");
    }
}
