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
        $tags = array("if" => 4);
        $filters = array("render" => 4);
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
        echo "<section id=\"content\">
  <div id=\"content-header\">
    ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
    ";
        // line 4
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "highlighted", array()))) {
            // line 5
            echo "      <div id=\"highlighted\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>
    ";
        }
        // line 7
        echo "    ";
        if (($context["action_links"] ?? null)) {
            // line 8
            echo "      <ul class=\"action-links\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "</ul>
    ";
        }
        // line 10
        echo "  </div><!-- /#content-header -->

";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
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
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_pillar_header", array()), "html", null, true));
        echo "
               ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_pillars", array()), "html", null, true));
        echo "
            </section>
            <section class=\"iconicProjects\">
                ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_iconic_project_header", array()), "html", null, true));
        echo "
                <div class=\"iconicProCarousel carousel owl-carousel\">
                    <div class=\"slide\">
                        <div class=\"imgwrap\"><img src=\"/";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/iconic-project.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">PALAVA</p>
                            <p>India’s No.1 smart city** – planned for over 2 million residents</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                    <div class=\"slide\">
                        <div class=\"imgwrap\"><img src=\"/";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/iconic-project.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">PALAVA</p>
                            <p>India’s No.1 smart city** – planned for over 2 million residents</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                    <div class=\"slide\">
                        <div class=\"imgwrap\"><img src=\"/";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/iconic-project.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">PALAVA</p>
                            <p>India’s No.1 smart city** – planned for over 2 million residents</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class=\"locateUs\">
                <div class=\"container leftPadding\">
                    ";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_map_header", array()), "html", null, true));
        echo "
                    <div class=\"mapSec\">
                        <img src=\"/";
        // line 58
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
        // line 69
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
        // line 83
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
        // line 91
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
        // line 99
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
        // line 107
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
        // line 125
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
        // line 133
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
                    <div class=\"sliderWrap\">
                        <div class=\"galleryWrap\">
                            <div class=\"galleryWrapper banner\">
                                <ul>
                                    <li data-attr=\"Come experience leisure in luxury\"><img src=\"/";
        // line 151
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 152
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 153
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 154
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img4.jpg\" alt=\"\"></li>
                                </ul>
                            </div>
                            <p class=\"copytext\">Come experience leisure in luxury</p>
                            <div id=\"slider\" class=\"slider\"></div>
                        </div>
                        <div class=\"galleryWrap\">
                            <div class=\"galleryWrapper1 banner\">
                                <ul>
                                    <li data-attr=\"Come experience leisure in luxury\"><img src=\"/";
        // line 163
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 164
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 165
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img4.jpg\" alt=\"\"></li>
                                </ul>
                            </div>
                            <p class=\"copytext\">Come experience leisure in luxury</p>
                            <div id=\"slider1\" class=\"slider\"></div>
                        </div>
                        <div class=\"galleryWrap\">
                            <div class=\"galleryWrapper2 banner\">
                                <ul>
                                    <li data-attr=\"Come experience leisure in luxury\"><img src=\"/";
        // line 175
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 176
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 177
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 178
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img4.jpg\" alt=\"\"></li>
                                </ul>
                            </div>
                            <p class=\"copytext\">Come experience leisure in luxury</p>
                            <div id=\"slider2\" class=\"slider\"></div>
                        </div>
                        <div class=\"galleryWrap\">
                            <div class=\"galleryWrapper3 banner\">
                                <ul>
                                    <li data-attr=\"Come experience leisure in luxury\"><img src=\"/";
        // line 187
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 188
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 189
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 190
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img4.jpg\" alt=\"\"></li>
                                </ul>
                            </div>
                            <p class=\"copytext\">Come experience leisure in luxury</p>
                            <div id=\"slider3\" class=\"slider\"></div>
                        </div>
                        
                        <div class=\"selectCat\">
                            <span class=\"icon\"><ul><li></li><li></li><li></li><li></li></ul></span>
                            <div class=\"dropdown\">
                                <div class=\"select\"><span></span></div>
                                <ul class=\"dropdown-menu\">
                                    <li>WORLD TOWERS</li>
                                    <li>WORLD TOWERS 02</li>
                                    <li>WORLD TOWERS 03</li>
                                    <li>WORLD TOWERS 04</li>
                                </ul>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </section>
            ";
        // line 214
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
        echo "
            
            <section class=\"getInTouch\">
                <div class=\"container paddingBoth\">
                    <div class=\"sectionTitle\">
                        <span class=\"icon\"><img src=\"/";
        // line 219
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
        // line 255
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 256
            echo "  <footer id=\"footer\">
    <div class=\"container\">
      <div id=\"footer-region\">
        ";
            // line 259
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div>
    </div>
  </footer><!-- /#footer -->
";
        }
        // line 264
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
        return array (  432 => 264,  424 => 259,  419 => 256,  417 => 255,  378 => 219,  370 => 214,  343 => 190,  339 => 189,  335 => 188,  331 => 187,  319 => 178,  315 => 177,  311 => 176,  307 => 175,  295 => 166,  291 => 165,  287 => 164,  283 => 163,  271 => 154,  267 => 153,  263 => 152,  259 => 151,  238 => 133,  227 => 125,  206 => 107,  195 => 99,  184 => 91,  173 => 83,  156 => 69,  142 => 58,  137 => 56,  123 => 45,  112 => 37,  101 => 29,  95 => 26,  89 => 23,  85 => 22,  72 => 12,  68 => 10,  62 => 8,  59 => 7,  53 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"content\">
  <div id=\"content-header\">
    {{ page.breadcrumb }}
    {% if page.highlighted|render %}
      <div id=\"highlighted\">{{ page.highlighted }}</div>
    {% endif %}
    {% if action_links %}
      <ul class=\"action-links\">{{ action_links }}</ul>
    {% endif %}
  </div><!-- /#content-header -->

{{ page.content_top }}

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
            <section class=\"iconicProjects\">
                {{ page.content_iconic_project_header }}
                <div class=\"iconicProCarousel carousel owl-carousel\">
                    <div class=\"slide\">
                        <div class=\"imgwrap\"><img src=\"/{{ directory }}/images/upload/iconic-project.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">PALAVA</p>
                            <p>India’s No.1 smart city** – planned for over 2 million residents</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                    <div class=\"slide\">
                        <div class=\"imgwrap\"><img src=\"/{{ directory }}/images/upload/iconic-project.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">PALAVA</p>
                            <p>India’s No.1 smart city** – planned for over 2 million residents</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                    <div class=\"slide\">
                        <div class=\"imgwrap\"><img src=\"/{{ directory }}/images/upload/iconic-project.jpg\"></div>
                        <div class=\"content\">
                            <p class=\"title\">PALAVA</p>
                            <p>India’s No.1 smart city** – planned for over 2 million residents</p>
                            <a href=\"javascript:;\" class=\"btn\">Discover</a>
                        </div>
                    </div>
                </div>
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
                    <div class=\"sliderWrap\">
                        <div class=\"galleryWrap\">
                            <div class=\"galleryWrapper banner\">
                                <ul>
                                    <li data-attr=\"Come experience leisure in luxury\"><img src=\"/{{ directory }}/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/{{ directory }}/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/{{ directory }}/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/{{ directory }}/images/upload/img4.jpg\" alt=\"\"></li>
                                </ul>
                            </div>
                            <p class=\"copytext\">Come experience leisure in luxury</p>
                            <div id=\"slider\" class=\"slider\"></div>
                        </div>
                        <div class=\"galleryWrap\">
                            <div class=\"galleryWrapper1 banner\">
                                <ul>
                                    <li data-attr=\"Come experience leisure in luxury\"><img src=\"/{{ directory }}/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/{{ directory }}/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/{{ directory }}/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/{{ directory }}/images/upload/img4.jpg\" alt=\"\"></li>
                                </ul>
                            </div>
                            <p class=\"copytext\">Come experience leisure in luxury</p>
                            <div id=\"slider1\" class=\"slider\"></div>
                        </div>
                        <div class=\"galleryWrap\">
                            <div class=\"galleryWrapper2 banner\">
                                <ul>
                                    <li data-attr=\"Come experience leisure in luxury\"><img src=\"/{{ directory }}/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/{{ directory }}/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/{{ directory }}/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/{{ directory }}/images/upload/img4.jpg\" alt=\"\"></li>
                                </ul>
                            </div>
                            <p class=\"copytext\">Come experience leisure in luxury</p>
                            <div id=\"slider2\" class=\"slider\"></div>
                        </div>
                        <div class=\"galleryWrap\">
                            <div class=\"galleryWrapper3 banner\">
                                <ul>
                                    <li data-attr=\"Come experience leisure in luxury\"><img src=\"/{{ directory }}/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/{{ directory }}/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/{{ directory }}/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/{{ directory }}/images/upload/img4.jpg\" alt=\"\"></li>
                                </ul>
                            </div>
                            <p class=\"copytext\">Come experience leisure in luxury</p>
                            <div id=\"slider3\" class=\"slider\"></div>
                        </div>
                        
                        <div class=\"selectCat\">
                            <span class=\"icon\"><ul><li></li><li></li><li></li><li></li></ul></span>
                            <div class=\"dropdown\">
                                <div class=\"select\"><span></span></div>
                                <ul class=\"dropdown-menu\">
                                    <li>WORLD TOWERS</li>
                                    <li>WORLD TOWERS 02</li>
                                    <li>WORLD TOWERS 03</li>
                                    <li>WORLD TOWERS 04</li>
                                </ul>
                            </div>
                        </div>
                        
                        
                    </div>
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
