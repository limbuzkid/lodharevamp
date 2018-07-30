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


  <!-- homeBanner starts-->  
            <div class=\"homeBanner\">
                <a href=\"javascript:;\" class=\"scroll\">Scroll</a>
                <div class=\"bannerCarousel owl-carousel\">
                    <!-- <div class=\"item\" data-videosrcDesk=\"http://www.w3schools.com/html/mov_bbb.mp4\" data-videosrcDevice=\"https://www.w3schools.com/tags/movie.mp4\" data-videosrc=\"\"> -->
                        <div class=\"item\">
                          <img class=\"bannerImage\" data-srcdesktop=\"/";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/homebanner01-desktop.jpg\" data-srcdevice=\"/";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/homebanner01-mobile.jpg\" src=\"/";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/spacer.gif\" alt=\"\">
                          <div class=\"content\">
                              <img src=\"/";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/logo-lodha-black.png\" alt=\"Lodha\">
                              <p>Luxury beyond square feet</p>
                              <a href=\"javascript:;\" class=\"btn btn-black\">Experience</a>
                          </div>
                        </div>
                    <!-- <div class=\"item\" data-videosrcDesk=\"https://www.w3schools.com/tags/movie.mp4\" data-videosrcDevice=\"http://www.w3schools.com/html/mov_bbb.mp4\" data-videosrc=\"\"> -->
                        <div class=\"item\">
                          <img class=\"bannerImage\" data-srcdesktop=\"/";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/homebanner02-desktop.jpg\" data-srcdevice=\"/";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/homebanner02-mobile.jpg\" src=\"/";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/spacer.gif\" alt=\"\">
                          <div class=\"content\">
                              <img src=\"/";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/logo-lodha-black.png\" alt=\"Lodha\">
                              <p>Luxury workspaces redefined</p>
                              <a href=\"javascript:;\" class=\"btn btn-black\">Experience</a>
                          </div>
                        </div>
                </div>
            </div>
            <!-- homeBanner ends-->
            <div class=\"searchWrap\">
                <div class=\"search\">
                    <a href=\"javascript:;\" class=\"micIcon\">Search</a>
                    <div class=\"inputWrap\"><input type=\"text\" name=\"\" placeholder=\"Tell us what you’re looking for?\"></div>
                    <a href=\"javascript:;\" class=\"searchIcon\">Search</a>
                </div>
            </div>
            <section class=\"pillarsWrap\">
                <div class=\"topSection\">
                    <div class=\"container paddingBoth\">
                        <div class=\"sectionTitle\">
                            <span class=\"icon\"><img src=\"/";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                            <p>the LODHA promise: <span>Our 9 pillars</span></p>
                        </div>
                        <div class=\"content\"><p>We believe that the buying experience is as critical as the living experience and hence it is our endeavour to make it world-class as well.</p></div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"pillarsCarousel\">
                        <div class=\"slide\">
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>01</strong>Timely <span>Delivery</span></p>
                                <span class=\"svgBox\" data-svg=\"/";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/timely-delivery.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>02</strong>Home Loan <span>Support</span></p>
                                <span class=\"svgBox\" data-svg=\"/";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/home-loan-support.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>03</strong>Occupation <span>Certificate</span></p>
                                <span class=\"svgBox\" data-svg=\"/";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/occupation-certificate.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"slide\">
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>04</strong>Renting <span>Support</span></p>
                                <span class=\"svgBox\" data-svg=\"/";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/renting-support.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>05</strong>No Transfer <span>Fee</span></p>
                                <span class=\"svgBox\" data-svg=\"/";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/no-transfer-fee.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>06</strong>Timely <span>Conveyance</span></p>
                                <span class=\"svgBox\" data-svg=\"/";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/timely-conveyance.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"slide\">
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>07</strong>Timely <span>Updates</span></p>
                                <span class=\"svgBox\" data-svg=\"/";
        // line 143
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/timely-updates.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>08</strong>Property <span>Management</span></p>
                                <span class=\"svgBox\" data-svg=\"/";
        // line 155
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/property-management.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>09</strong>World Class <span>Quality</span></p>
                                <span class=\"svgBox\" data-svg=\"/";
        // line 167
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/world-class-quality.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class=\"iconicProjects\">
                <div class=\"sectionTitle\">
                    <span class=\"icon\"><img src=\"/";
        // line 177
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                    <p>Iconic <span>Projects</span></p>
                </div>
                <div class=\"iconicProCarousel carousel owl-carousel\">
                    <div class=\"slide\">
                        <div class=\"imgwrap\"><img src=\"/";
        // line 182
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
        // line 190
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
        // line 198
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
        // line 211
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                            <p>Locate the <span>Better Life</span></p>
                        </div>
                        <p>At Lodha, we believe that better living starts with the right location. Not just high standards of building and craftsmanship even the surroundings of our World Class projects stand to deliver the exuberant embodiment of the better life</p>
                    </div>
                    <div class=\"mapSec\">
                        <img src=\"/";
        // line 217
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
        // line 229
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
        // line 245
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
        // line 253
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
        // line 261
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
        // line 269
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
        // line 287
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
        // line 295
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
        // line 311
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
        // line 320
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 321
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 322
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 323
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
        // line 332
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 333
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 334
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 335
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
        // line 344
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 345
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 346
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 347
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
        // line 356
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 357
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 358
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 359
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
        // line 383
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
        echo "
            
            <section class=\"getInTouch\">
                <div class=\"container paddingBoth\">
                    <div class=\"sectionTitle\">
                        <span class=\"icon\"><img src=\"/";
        // line 388
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
        // line 424
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 425
            echo "  <footer id=\"footer\">
    <div class=\"container\">
      <div id=\"footer-region\">
        ";
            // line 428
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div>
    </div>
  </footer><!-- /#footer -->
";
        }
        // line 433
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
        return array (  645 => 433,  637 => 428,  632 => 425,  630 => 424,  591 => 388,  583 => 383,  556 => 359,  552 => 358,  548 => 357,  544 => 356,  532 => 347,  528 => 346,  524 => 345,  520 => 344,  508 => 335,  504 => 334,  500 => 333,  496 => 332,  484 => 323,  480 => 322,  476 => 321,  472 => 320,  460 => 311,  441 => 295,  430 => 287,  409 => 269,  398 => 261,  387 => 253,  376 => 245,  357 => 229,  342 => 217,  333 => 211,  317 => 198,  306 => 190,  295 => 182,  287 => 177,  274 => 167,  259 => 155,  244 => 143,  227 => 129,  212 => 117,  197 => 105,  180 => 91,  165 => 79,  150 => 67,  129 => 49,  107 => 30,  98 => 28,  88 => 21,  79 => 19,  68 => 10,  62 => 8,  59 => 7,  53 => 5,  51 => 4,  47 => 3,  43 => 1,);
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


  <!-- homeBanner starts-->  
            <div class=\"homeBanner\">
                <a href=\"javascript:;\" class=\"scroll\">Scroll</a>
                <div class=\"bannerCarousel owl-carousel\">
                    <!-- <div class=\"item\" data-videosrcDesk=\"http://www.w3schools.com/html/mov_bbb.mp4\" data-videosrcDevice=\"https://www.w3schools.com/tags/movie.mp4\" data-videosrc=\"\"> -->
                        <div class=\"item\">
                          <img class=\"bannerImage\" data-srcdesktop=\"/{{ directory }}/images/upload/homebanner01-desktop.jpg\" data-srcdevice=\"/{{ directory }}/images/upload/homebanner01-mobile.jpg\" src=\"/{{ directory }}/images/spacer.gif\" alt=\"\">
                          <div class=\"content\">
                              <img src=\"/{{ directory }}/images/logo-lodha-black.png\" alt=\"Lodha\">
                              <p>Luxury beyond square feet</p>
                              <a href=\"javascript:;\" class=\"btn btn-black\">Experience</a>
                          </div>
                        </div>
                    <!-- <div class=\"item\" data-videosrcDesk=\"https://www.w3schools.com/tags/movie.mp4\" data-videosrcDevice=\"http://www.w3schools.com/html/mov_bbb.mp4\" data-videosrc=\"\"> -->
                        <div class=\"item\">
                          <img class=\"bannerImage\" data-srcdesktop=\"/{{ directory }}/images/upload/homebanner02-desktop.jpg\" data-srcdevice=\"/{{ directory }}/images/upload/homebanner02-mobile.jpg\" src=\"/{{ directory }}/images/spacer.gif\" alt=\"\">
                          <div class=\"content\">
                              <img src=\"/{{ directory }}/images/logo-lodha-black.png\" alt=\"Lodha\">
                              <p>Luxury workspaces redefined</p>
                              <a href=\"javascript:;\" class=\"btn btn-black\">Experience</a>
                          </div>
                        </div>
                </div>
            </div>
            <!-- homeBanner ends-->
            <div class=\"searchWrap\">
                <div class=\"search\">
                    <a href=\"javascript:;\" class=\"micIcon\">Search</a>
                    <div class=\"inputWrap\"><input type=\"text\" name=\"\" placeholder=\"Tell us what you’re looking for?\"></div>
                    <a href=\"javascript:;\" class=\"searchIcon\">Search</a>
                </div>
            </div>
            <section class=\"pillarsWrap\">
                <div class=\"topSection\">
                    <div class=\"container paddingBoth\">
                        <div class=\"sectionTitle\">
                            <span class=\"icon\"><img src=\"/{{ directory }}/images/upload/icon-pillars.png\"></span>
                            <p>the LODHA promise: <span>Our 9 pillars</span></p>
                        </div>
                        <div class=\"content\"><p>We believe that the buying experience is as critical as the living experience and hence it is our endeavour to make it world-class as well.</p></div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"pillarsCarousel\">
                        <div class=\"slide\">
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>01</strong>Timely <span>Delivery</span></p>
                                <span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/timely-delivery.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>02</strong>Home Loan <span>Support</span></p>
                                <span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/home-loan-support.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>03</strong>Occupation <span>Certificate</span></p>
                                <span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/occupation-certificate.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"slide\">
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>04</strong>Renting <span>Support</span></p>
                                <span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/renting-support.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>05</strong>No Transfer <span>Fee</span></p>
                                <span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/no-transfer-fee.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>06</strong>Timely <span>Conveyance</span></p>
                                <span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/timely-conveyance.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"slide\">
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>07</strong>Timely <span>Updates</span></p>
                                <span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/timely-updates.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>08</strong>Property <span>Management</span></p>
                                <span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/property-management.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <span class=\"square one\"></span>
                                    <span class=\"square two\"></span>
                                    <span class=\"square three\"></span>
                                    <span class=\"square four\"></span>
                                
                                <p class=\"title\"><strong>09</strong>World Class <span>Quality</span></p>
                                <span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/world-class-quality.svg\"></span>
                                <p class=\"details\">Else we pay you interest @ SBI MCLR + 2% from expiry of grace period to offer of possession.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
