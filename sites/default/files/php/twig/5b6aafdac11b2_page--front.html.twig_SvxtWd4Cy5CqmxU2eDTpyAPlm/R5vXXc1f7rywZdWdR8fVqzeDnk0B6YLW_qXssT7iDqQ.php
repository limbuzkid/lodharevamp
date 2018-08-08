<?php

/* themes/basic/templates/page--front.html.twig */
class __TwigTemplate_a0f398cccb2fcf7fa8d06e94a97ddd0f23d22450fcd5bacf74bc9f5719148679 extends Twig_Template
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
        $tags = array("if" => 15);
        $filters = array("render" => 15);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('render'),
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", array()), "html", null, true));
        echo "
<div class=\"searchWrap\">
<div class=\"search\">
    <a href=\"javascript:;\" class=\"micIcon\">Search</a>
    <div class=\"inputWrap\"><input type=\"text\" name=\"\" placeholder=\"Tell us what you’re looking for?\"></div>
    <a href=\"javascript:;\" class=\"searchIcon\">Search</a>
</div>
</div>
<section class=\"pillarsWrap\">
";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_pillars", array()), "html", null, true));
        echo "
</section>
<section id=\"content\">
  <div id=\"content-header\">
    ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
    ";
        // line 15
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "highlighted", array()))) {
            // line 16
            echo "      <div id=\"highlighted\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>
    ";
        }
        // line 18
        echo "    ";
        if (($context["action_links"] ?? null)) {
            // line 19
            echo "      <ul class=\"action-links\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "</ul>
    ";
        }
        // line 21
        echo "  </div><!-- /#content-header -->
<section class=\"iconicProjects\">
    ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_iconic_project", array()), "html", null, true));
        echo "
</section>
<section class=\"locateUs\">
    <div class=\"container leftPadding\">
        ";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_map_header", array()), "html", null, true));
        echo "
        <div class=\"mapSec\">
            <img src=\"/";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/map.jpg\">
            <span class=\"plusSign\"></span>
        </div>
    </div>
    <div class=\"mapContainer\">
        <div id=\"map\"></div>
        <span class=\"minusSign\"></span>
    </div>
</section>
<section class=\"letsWorkBetter\">
    <div class=\"container\">
        ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_lets_workbetter_header", array()), "html", null, true));
        echo "
        <div class=\"appendedTabsWrap\"></div>
        <div class=\"otherProjectsCarousel carousel owl-carousel\">
            <div class=\"slide\">
                <div class=\"tabsWrap\">
                    <ul class=\"tabs\">
                        <li>BOUTIQUE OFFICES</li>
                        <li>OFFICES FOR LEASE</li>
                        <li>RETAIL</li>
                        <li>WAREHOUSING</li>
                    </ul>
                </div>
                <div class=\"tabContentWrap\">
                    <div class=\"tabContent\">
                        <div class=\"imgwrap\"><img src=\"/";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/office01.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">lodha supremus 01</p>
                            <p>Until now, growing companies looking to set up offices in the heart of Mumbai’s business districts had limited choices: opt for a sub-standard space in old structures, or move into cramped spaces in new developments.</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                    <div class=\"tabContent\">
                        <div class=\"imgwrap\"><img src=\"/";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/office01.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">lodha supremus 02</p>
                            <p>Until now, growing companies looking to set up offices in the heart of Mumbai’s business districts had limited choices: opt for a sub-standard space in old structures, or move into cramped spaces in new developments.</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                    <div class=\"tabContent\">
                        <div class=\"imgwrap\"><img src=\"/";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/office01.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">lodha supremus 03</p>
                            <p>Until now, growing companies looking to set up offices in the heart of Mumbai’s business districts had limited choices: opt for a sub-standard space in old structures, or move into cramped spaces in new developments.</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                    <div class=\"tabContent\">
                        <div class=\"imgwrap\"><img src=\"/";
        // line 78
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/office01.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">lodha supremus 04</p>
                            <p>Until now, growing companies looking to set up offices in the heart of Mumbai’s business districts had limited choices: opt for a sub-standard space in old structures, or move into cramped spaces in new developments.</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"slide\">
                <div class=\"tabsWrap\">
                    <ul class=\"tabs\">
                        <li>BOUTIQUE OFFICES</li>
                        <li>OFFICES FOR LEASE</li>
                    </ul>
                </div>
                <div class=\"tabContentWrap\">
                    <div class=\"tabContent\">
                        <div class=\"imgwrap\"><img src=\"/";
        // line 96
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/office01.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">lodha supremus</p>
                            <p>Until now, growing companies looking to set up offices in the heart of Mumbai’s business districts had limited choices: opt for a sub-standard space in old structures, or move into cramped spaces in new developments.</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                    <div class=\"tabContent\">
                        <div class=\"imgwrap\"><img src=\"/";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/office01.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">lodha supremus</p>
                            <p>Until now, growing companies looking to set up offices in the heart of Mumbai’s business districts had limited choices: opt for a sub-standard space in old structures, or move into cramped spaces in new developments.</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"lifestyleWrap\">
    <div class=\"container paddingBoth\">
        ";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_lifestyle_wrap", array()), "html", null, true));
        echo "
        
    </div>
</section>
<section class=\"reviewsWrap\">
    <div class=\"container\">
        ";
        // line 124
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_testimonial", array()), "html", null, true));
        echo "
    </div>
</section>
<section class=\"blogsWrap\">
    <div class=\"container paddingBoth\">
        ";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
        echo "
    </div>
</section>
<section class=\"getInTouch\">
    <div class=\"container paddingBoth\">
        <div class=\"sectionTitle\">
            <span class=\"icon\"><img src=\"/";
        // line 135
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
            <p>GET IN <span>TOUCH</span></p>
        </div>
        <div class=\"formWrapper\">
            <p class=\"title\">Keep updated on the latest in luxury living.</p>
            <div class=\"fieldRow\">
                <div class=\"clm-3\">
                    <input type=\"text\">
                    <span class=\"placeholder\">Name</span>
                </div>
                <div class=\"clm-3\">
                    <input type=\"text\">
                    <span class=\"placeholder\">Email - id</span>
                </div>
                <div class=\"clm-3\">
                    <input type=\"text\">
                    <span class=\"placeholder\">Mobile No.</span>
                </div>
            </div>
            <div class=\"buttonWrap\">
                <button class=\"btn\">Submit</button>
            </div>
        </div>
        
    </div>
</section>
  <div id=\"content-area\"></div>

</section><!-- /#content -->


<!-- ______________________ FOOTER _______________________ -->

";
        // line 168
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 169
            echo "  <footer id=\"footer\">
    <div class=\"container\">
      <div id=\"footer-region\">
        ";
            // line 172
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div>
    </div>
  </footer><!-- /#footer -->
";
        }
        // line 177
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 177,  281 => 172,  276 => 169,  274 => 168,  238 => 135,  229 => 129,  221 => 124,  212 => 118,  195 => 104,  184 => 96,  163 => 78,  152 => 70,  141 => 62,  130 => 54,  113 => 40,  99 => 29,  94 => 27,  87 => 23,  83 => 21,  77 => 19,  74 => 18,  68 => 16,  66 => 15,  62 => 14,  55 => 10,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ page.banner }}
<div class=\"searchWrap\">
<div class=\"search\">
    <a href=\"javascript:;\" class=\"micIcon\">Search</a>
    <div class=\"inputWrap\"><input type=\"text\" name=\"\" placeholder=\"Tell us what you’re looking for?\"></div>
    <a href=\"javascript:;\" class=\"searchIcon\">Search</a>
</div>
</div>
<section class=\"pillarsWrap\">
{{ page.content_pillars }}
</section>
<section id=\"content\">
  <div id=\"content-header\">
    {{ page.breadcrumb }}
    {% if page.highlighted|render %}
      <div id=\"highlighted\">{{ page.highlighted }}</div>
    {% endif %}
    {% if action_links %}
      <ul class=\"action-links\">{{ action_links }}</ul>
    {% endif %}
  </div><!-- /#content-header -->
<section class=\"iconicProjects\">
    {{ page.content_iconic_project }}
</section>
<section class=\"locateUs\">
    <div class=\"container leftPadding\">
        {{ page.content_map_header }}
        <div class=\"mapSec\">
            <img src=\"/{{ directory }}/images/map.jpg\">
            <span class=\"plusSign\"></span>
        </div>
    </div>
    <div class=\"mapContainer\">
        <div id=\"map\"></div>
        <span class=\"minusSign\"></span>
    </div>
</section>
<section class=\"letsWorkBetter\">
    <div class=\"container\">
        {{ page.content_lets_workbetter_header}}
        <div class=\"appendedTabsWrap\"></div>
        <div class=\"otherProjectsCarousel carousel owl-carousel\">
            <div class=\"slide\">
                <div class=\"tabsWrap\">
                    <ul class=\"tabs\">
                        <li>BOUTIQUE OFFICES</li>
                        <li>OFFICES FOR LEASE</li>
                        <li>RETAIL</li>
                        <li>WAREHOUSING</li>
                    </ul>
                </div>
                <div class=\"tabContentWrap\">
                    <div class=\"tabContent\">
                        <div class=\"imgwrap\"><img src=\"/{{ directory }}/images/upload/office01.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">lodha supremus 01</p>
                            <p>Until now, growing companies looking to set up offices in the heart of Mumbai’s business districts had limited choices: opt for a sub-standard space in old structures, or move into cramped spaces in new developments.</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                    <div class=\"tabContent\">
                        <div class=\"imgwrap\"><img src=\"/{{ directory }}/images/upload/office01.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">lodha supremus 02</p>
                            <p>Until now, growing companies looking to set up offices in the heart of Mumbai’s business districts had limited choices: opt for a sub-standard space in old structures, or move into cramped spaces in new developments.</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                    <div class=\"tabContent\">
                        <div class=\"imgwrap\"><img src=\"/{{ directory }}/images/upload/office01.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">lodha supremus 03</p>
                            <p>Until now, growing companies looking to set up offices in the heart of Mumbai’s business districts had limited choices: opt for a sub-standard space in old structures, or move into cramped spaces in new developments.</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                    <div class=\"tabContent\">
                        <div class=\"imgwrap\"><img src=\"/{{ directory }}/images/upload/office01.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">lodha supremus 04</p>
                            <p>Until now, growing companies looking to set up offices in the heart of Mumbai’s business districts had limited choices: opt for a sub-standard space in old structures, or move into cramped spaces in new developments.</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"slide\">
                <div class=\"tabsWrap\">
                    <ul class=\"tabs\">
                        <li>BOUTIQUE OFFICES</li>
                        <li>OFFICES FOR LEASE</li>
                    </ul>
                </div>
                <div class=\"tabContentWrap\">
                    <div class=\"tabContent\">
                        <div class=\"imgwrap\"><img src=\"/{{ directory }}/images/upload/office01.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">lodha supremus</p>
                            <p>Until now, growing companies looking to set up offices in the heart of Mumbai’s business districts had limited choices: opt for a sub-standard space in old structures, or move into cramped spaces in new developments.</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                    <div class=\"tabContent\">
                        <div class=\"imgwrap\"><img src=\"/{{ directory }}/images/upload/office01.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">lodha supremus</p>
                            <p>Until now, growing companies looking to set up offices in the heart of Mumbai’s business districts had limited choices: opt for a sub-standard space in old structures, or move into cramped spaces in new developments.</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"lifestyleWrap\">
    <div class=\"container paddingBoth\">
        {{ page.content_lifestyle_wrap }}
        
    </div>
</section>
<section class=\"reviewsWrap\">
    <div class=\"container\">
        {{ page.content_testimonial }}
    </div>
</section>
<section class=\"blogsWrap\">
    <div class=\"container paddingBoth\">
        {{ page.content_bottom }}
    </div>
</section>
<section class=\"getInTouch\">
    <div class=\"container paddingBoth\">
        <div class=\"sectionTitle\">
            <span class=\"icon\"><img src=\"/{{ directory }}/images/upload/icon-pillars.png\"></span>
            <p>GET IN <span>TOUCH</span></p>
        </div>
        <div class=\"formWrapper\">
            <p class=\"title\">Keep updated on the latest in luxury living.</p>
            <div class=\"fieldRow\">
                <div class=\"clm-3\">
                    <input type=\"text\">
                    <span class=\"placeholder\">Name</span>
                </div>
                <div class=\"clm-3\">
                    <input type=\"text\">
                    <span class=\"placeholder\">Email - id</span>
                </div>
                <div class=\"clm-3\">
                    <input type=\"text\">
                    <span class=\"placeholder\">Mobile No.</span>
                </div>
            </div>
            <div class=\"buttonWrap\">
                <button class=\"btn\">Submit</button>
            </div>
        </div>
        
    </div>
</section>
  <div id=\"content-area\"></div>

</section><!-- /#content -->


<!-- ______________________ FOOTER _______________________ -->

{% if page.footer|render %}
  <footer id=\"footer\">
    <div class=\"container\">
      <div id=\"footer-region\">
        {{ page.footer }}
      </div>
    </div>
  </footer><!-- /#footer -->
{% endif %}


", "themes/basic/templates/page--front.html.twig", "E:\\wamp64\\www\\html\\lodharevamp\\themes\\basic\\templates\\page--front.html.twig");
    }
}
