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
                <div class=\"sectionTitle\">
                    <span class=\"icon\"><img src=\"/";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                    <p>Iconic <span>Projects</span></p>
                </div>
                <div class=\"iconicProCarousel carousel owl-carousel\">
                    <div class=\"slide\">
                        <div class=\"imgwrap\"><img src=\"/";
        // line 32
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
        // line 40
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
        // line 48
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
                    <div class=\"content\">
                        <div class=\"sectionTitle\">
                            <span class=\"icon\"><img src=\"/";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                            <p>Locate the <span>Better Life</span></p>
                        </div>
                        <p>At Lodha, we believe that better living starts with the right location. Not just high standards of building and craftsmanship even the surroundings of our World Class projects stand to deliver the exuberant embodiment of the better life</p>
                    </div>
                    <div class=\"mapSec\">
                        <img src=\"/";
        // line 67
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
                    <div class=\"sectionTitle\">
                        <span class=\"icon\"><img src=\"/";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                        <p>LET’S WORK <span>BETTER</span></p>
                    </div>
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
        // line 95
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
        // line 103
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
        // line 111
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
        // line 119
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
        // line 137
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
        // line 145
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
                    <div class=\"topSection\">
                        <div class=\"sectionTitle\">
                            <span class=\"icon\"><img src=\"/";
        // line 161
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                            <p>Not just Lifestyle, <span>This is Life in Style</span></p>
                        </div>
                        <div class=\"content\"><p>Verdant lawns, open spaces, tasteful tapestry, plush homes &amp; the warmth of close ones – Snapshots of the better life we have in mind for you!</p></div>
                    </div>
                    <div class=\"sliderWrap\">
                        <div class=\"galleryWrap\">
                            <div class=\"galleryWrapper banner\">
                                <ul>
                                    <li data-attr=\"Come experience leisure in luxury\"><img src=\"/";
        // line 170
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 171
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 172
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 173
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
        // line 182
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 183
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 184
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 185
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
        // line 194
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 195
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 196
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 197
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
        // line 206
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 207
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 208
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 209
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
        // line 233
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
        echo "
            
            <section class=\"getInTouch\">
                <div class=\"container paddingBoth\">
                    <div class=\"sectionTitle\">
                        <span class=\"icon\"><img src=\"/";
        // line 238
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
        // line 274
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 275
            echo "  <footer id=\"footer\">
    <div class=\"container\">
      <div id=\"footer-region\">
        ";
            // line 278
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div>
    </div>
  </footer><!-- /#footer -->
";
        }
        // line 283
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
        return array (  454 => 283,  446 => 278,  441 => 275,  439 => 274,  400 => 238,  392 => 233,  365 => 209,  361 => 208,  357 => 207,  353 => 206,  341 => 197,  337 => 196,  333 => 195,  329 => 194,  317 => 185,  313 => 184,  309 => 183,  305 => 182,  293 => 173,  289 => 172,  285 => 171,  281 => 170,  269 => 161,  250 => 145,  239 => 137,  218 => 119,  207 => 111,  196 => 103,  185 => 95,  166 => 79,  151 => 67,  142 => 61,  126 => 48,  115 => 40,  104 => 32,  96 => 27,  89 => 23,  85 => 22,  72 => 12,  68 => 10,  62 => 8,  59 => 7,  53 => 5,  51 => 4,  47 => 3,  43 => 1,);
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
                <div class=\"sectionTitle\">
                    <span class=\"icon\"><img src=\"/{{ directory }}/images/upload/icon-pillars.png\"></span>
                    <p>Iconic <span>Projects</span></p>
                </div>
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
                    <div class=\"content\">
                        <div class=\"sectionTitle\">
                            <span class=\"icon\"><img src=\"/{{ directory }}/images/upload/icon-pillars.png\"></span>
                            <p>Locate the <span>Better Life</span></p>
                        </div>
                        <p>At Lodha, we believe that better living starts with the right location. Not just high standards of building and craftsmanship even the surroundings of our World Class projects stand to deliver the exuberant embodiment of the better life</p>
                    </div>
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
                    <div class=\"sectionTitle\">
                        <span class=\"icon\"><img src=\"/{{ directory }}/images/upload/icon-pillars.png\"></span>
                        <p>LET’S WORK <span>BETTER</span></p>
                    </div>
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
                    <div class=\"topSection\">
                        <div class=\"sectionTitle\">
                            <span class=\"icon\"><img src=\"/{{ directory }}/images/upload/icon-pillars.png\"></span>
                            <p>Not just Lifestyle, <span>This is Life in Style</span></p>
                        </div>
                        <div class=\"content\"><p>Verdant lawns, open spaces, tasteful tapestry, plush homes &amp; the warmth of close ones – Snapshots of the better life we have in mind for you!</p></div>
                    </div>
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
