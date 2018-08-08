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
        $tags = array("if" => 16);
        $filters = array("render" => 16);
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_pillar_header", array()), "html", null, true));
        echo "
";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_pillars", array()), "html", null, true));
        echo "
</section>
<section id=\"content\">
  <div id=\"content-header\">
    ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
    ";
        // line 16
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "highlighted", array()))) {
            // line 17
            echo "      <div id=\"highlighted\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>
    ";
        }
        // line 19
        echo "    ";
        if (($context["action_links"] ?? null)) {
            // line 20
            echo "      <ul class=\"action-links\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "</ul>
    ";
        }
        // line 22
        echo "  </div><!-- /#content-header -->
<section class=\"iconicProjects\">
    ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_iconic_project_header", array()), "html", null, true));
        echo "
    ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_iconic_project", array()), "html", null, true));
        echo "
</section>
<section class=\"locateUs\">
    <div class=\"container leftPadding\">
        ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_map_header", array()), "html", null, true));
        echo "
        <div class=\"mapSec\">
            <img src=\"/";
        // line 31
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
        // line 42
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
        // line 56
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
        // line 64
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
        // line 72
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
        // line 80
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
        // line 98
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
        // line 106
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
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_lifestyle_wrap_header", array()), "html", null, true));
        echo "
        ";
        // line 121
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_lifestyle_wrap", array()), "html", null, true));
        echo "
        
    </div>
</section>
<section class=\"reviewsWrap\">
    <div class=\"container\">
        ";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_testimonial_header", array()), "html", null, true));
        echo " 
        ";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_testimonial", array()), "html", null, true));
        echo "
    </div>
</section>
";
        // line 131
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
        echo "

<section class=\"getInTouch\">
    <div class=\"container paddingBoth\">
        <div class=\"sectionTitle\">
            <span class=\"icon\"><img src=\"/";
        // line 136
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
        // line 169
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 170
            echo "  <footer id=\"footer\">
    <div class=\"container\">
      <div id=\"footer-region\">
        ";
            // line 173
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div>
    </div>
  </footer><!-- /#footer -->
";
        }
        // line 178
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
        return array (  302 => 178,  294 => 173,  289 => 170,  287 => 169,  251 => 136,  243 => 131,  237 => 128,  233 => 127,  224 => 121,  220 => 120,  203 => 106,  192 => 98,  171 => 80,  160 => 72,  149 => 64,  138 => 56,  121 => 42,  107 => 31,  102 => 29,  95 => 25,  91 => 24,  87 => 22,  81 => 20,  78 => 19,  72 => 17,  70 => 16,  66 => 15,  59 => 11,  55 => 10,  43 => 1,);
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
{{ page.content_pillar_header }}
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
    {{ page.content_iconic_project_header }}
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
        {{ page.content_lifestyle_wrap_header }}
        {{ page.content_lifestyle_wrap }}
        
    </div>
</section>
<section class=\"reviewsWrap\">
    <div class=\"container\">
        {{ page.content_testimonial_header }} 
        {{ page.content_testimonial }}
    </div>
</section>
{{ page.content_bottom }}

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
