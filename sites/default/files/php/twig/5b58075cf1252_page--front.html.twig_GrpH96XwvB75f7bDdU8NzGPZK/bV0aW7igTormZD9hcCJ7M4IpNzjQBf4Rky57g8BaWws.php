<?php

/* themes/basic/templates/page--front.html.twig */
class __TwigTemplate_94561939f977267464bc76f60b7a889b6a67ed5b7b9ae89a209e6296b71d82ff extends Twig_Template
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
        $tags = array("if" => 7);
        $filters = array("render" => 7);
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
        echo "  <div id=\"main\">
    <div class=\"container\">
      <div id=\"content-wrapper\">
        <section id=\"content\">
          <div id=\"content-header\">
            ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
            ";
        // line 7
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "highlighted", array()))) {
            // line 8
            echo "              <div id=\"highlighted\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>
            ";
        }
        // line 10
        echo "            ";
        if (($context["action_links"] ?? null)) {
            // line 11
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "</ul>
            ";
        }
        // line 13
        echo "          </div><!-- /#content-header -->
          <!-- homeBanner starts-->  
          <div class=\"homeBanner\">
            <a href=\"javascript:;\" class=\"scroll\">Scroll</a>
            <div class=\"bannerCarousel\">
              <!-- <div class=\"item\" data-videosrcDesk=\"http://www.w3schools.com/html/mov_bbb.mp4\" data-videosrcDevice=\"https://www.w3schools.com/tags/movie.mp4\" data-videosrc=\"\"> -->
              <div class=\"item\">
                <img class=\"bannerImage\" data-srcdesktop=\"/";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/homebanner01-desktop.jpg\" data-srcdevice=\"images/upload/homebanner01-mobile.jpg\" src=\"/";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/spacer.gif\" alt=\"\">
                <div class=\"content\">
                  <img src=\"/";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/logo-lodha-black.png\" alt=\"Lodha\">
                  <p>Luxury beyond square feet</p>
                  <a href=\"javascript:;\" class=\"btn btn-black\">Experience</a>
                </div>
              </div>
                    <!-- <div class=\"item\" data-videosrcDesk=\"https://www.w3schools.com/tags/movie.mp4\" data-videosrcDevice=\"http://www.w3schools.com/html/mov_bbb.mp4\" data-videosrc=\"\"> -->
                        <div class=\"item\">
                        <img class=\"bannerImage\" data-srcdesktop=\"/";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/homebanner02-desktop.jpg\" data-srcdevice=\"images/upload/homebanner02-mobile.jpg\" src=\"/";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/spacer.gif\" alt=\"\">
                        <div class=\"content\">
                            <img src=\"/";
        // line 31
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
        // line 50
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
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/timely-delivery.svg\"></span>
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
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/home-loan-support.svg\"></span>
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
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/occupation-certificate.svg\"></span>
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
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/renting-support.svg\"></span>
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
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/no-transfer-fee.svg\"></span>
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
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/timely-conveyance.svg\"></span>
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
        // line 144
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/timely-updates.svg\"></span>
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
        // line 156
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/property-management.svg\"></span>
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
        // line 168
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/world-class-quality.svg\"></span>
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
        // line 178
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                    <p>Iconic <span>Projects</span></p>
                </div>
                <div class=\"iconicProCarousel carousel\">
                    <div class=\"slide\">
                        <div class=\"imgwrap\"><img src=\"/";
        // line 183
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
        // line 191
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
        // line 199
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
        // line 212
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                            <p>Locate the <span>Better Life</span></p>
                        </div>
                        <p>At Lodha, we believe that better living starts with the right location. Not just high standards of building and craftsmanship even the surroundings of our World Class projects stand to deliver the exuberant embodiment of the better life</p>
                    </div>
                    <div class=\"mapSec\">
                        <img src=\"/";
        // line 218
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
        // line 230
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                        <p>LET’S WORK <span>BETTER</span></p>
                    </div>
                    <div class=\"appendedTabsWrap\"></div>
                    <div class=\"otherProjectsCarousel carousel\">
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
        // line 246
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
        // line 254
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
        // line 262
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
        // line 270
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
        // line 288
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
        // line 296
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
        // line 312
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
        // line 321
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 322
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 323
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 324
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
        // line 333
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 334
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 335
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 336
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
        // line 345
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 346
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 347
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 348
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
        // line 357
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/tower-img.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 02\"><img src=\"/";
        // line 358
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img2.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 03\"><img src=\"/";
        // line 359
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/img3.jpg\" alt=\"\"></li>
                                    <li data-attr=\"Come experience leisure in luxury 04\"><img src=\"/";
        // line 360
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
            <section class=\"reviewsWrap\">
                <div class=\"container\">
                    <div class=\"sectionTitle\">
                        <span class=\"icon\"><img src=\"/";
        // line 387
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                        <p>BETTER LIFE <span>REVIEWS</span></p>
                    </div>
                    <div class=\"imgWrap\">
                        <div class=\"profilePic picPos-01\"><span class=\"tab\" data-attr=\"1\"><img src=\"/";
        // line 391
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/profile-pic01.jpg\"></span></div>
                        <div class=\"profilePic picPos-02\"><span class=\"tab\" data-attr=\"2\"><img src=\"/";
        // line 392
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/profile-pic02.jpg\"></span></div>
                        <div class=\"profilePic picPos-03\"><span class=\"tab\" data-attr=\"3\"><img src=\"/";
        // line 393
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/profile-pic03.jpg\"></span></div>
                        <div class=\"profilePic profilePicMain\"><span class=\"tab\" data-attr=\"0\"><img src=\"/";
        // line 394
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/profile-mandar-sohoni.jpg\"></span></div>
                        <div class=\"profilePicFrame\"></div>
                    </div>
                    <div class=\"content\">
                        <div class=\"profileWrap\">
                            <div class=\"profileBox\">
                                <p>Thanks for the wonderful experience shared with our family during the entire handover process. You &amp; your team was extremely supportive at every stage which resulted in a great end product. These moments will surely remain great memories.</p>
                                <p class=\"name\">Mandar Sohoni</p>
                            </div>
                            <div class=\"profileBox\">
                                <p>01 Thanks for the wonderful experience shared with our family during the entire handover process. You &amp; your team was extremely supportive at every stage which resulted in a great end product. These moments will surely remain great memories.</p>
                                <p class=\"name\">Mandar Sohoni</p>
                            </div>
                            <div class=\"profileBox\">
                                <p>02 Thanks for the wonderful experience shared with our family during the entire handover process. You &amp; your team was extremely supportive at every stage which resulted in a great end product. These moments will surely remain great memories.</p>
                                <p class=\"name\">Mandar Sohoni</p>
                            </div>
                            <div class=\"profileBox\">
                                <p>03 Thanks for the wonderful experience shared with our family during the entire handover process. You &amp; your team was extremely supportive at every stage which resulted in a great end product. These moments will surely remain great memories.</p>
                                <p class=\"name\">Mandar Sohoni</p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>
            <section class=\"blogsWrap\">
                <div class=\"container paddingBoth\">
                    <div class=\"sectionTitle\">
                        <span class=\"icon\"><img src=\"/";
        // line 422
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                        <p>Blogging <span>Life Better!</span></p>
                    </div>
                    <div class=\"blogsContainer\">
                        <div class=\"blog\">
                            <p class=\"date\">01.01.2017</p>
                            <p class=\"title\">Step Out to Stay Fit</p>
                            <p>Pick a hobby; it will help you uplift your spirit! Do you like to stroll in the mall?</p>
                            <a href=\"javascript:;\" class=\"arrowLink\">Read More</a>
                        </div>
                        <div class=\"blog\">
                            <p class=\"date\">01.01.2017</p>
                            <p class=\"title\">Step Out to Stay Fit</p>
                            <p>Pick a hobby; it will help you uplift your spirit! Do you like to stroll in the mall?</p>
                            <a href=\"javascript:;\" class=\"arrowLink\">Read More</a>
                        </div>
                        <div class=\"buttonWrap\"><a href=\"javascript:;\" class=\"btn\">View All</a></div>
                    </div>
                </div>
            </section>
            <section class=\"getInTouch\">
                <div class=\"container paddingBoth\">
                    <div class=\"sectionTitle\">
                        <span class=\"icon\"><img src=\"/";
        // line 445
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
          <div id=\"content-area\">
            ";
        // line 472
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
          </div>

        </section><!-- /#content -->

        ";
        // line 477
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()))) {
            // line 478
            echo "          <aside id=\"sidebar-first\" class=\"column sidebar first\">
            ";
            // line 479
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside><!-- /#sidebar-first -->
        ";
        }
        // line 482
        echo "
        ";
        // line 483
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) {
            // line 484
            echo "          <aside id=\"sidebar-second\" class=\"column sidebar second\">
            ";
            // line 485
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </aside><!-- /#sidebar-second -->
        ";
        }
        // line 488
        echo "
      </div><!-- /#content-wrapper -->
    </div><!-- /.container -->
  </div><!-- /#main -->

  <!-- ______________________ FOOTER _______________________ -->

  ";
        // line 495
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 496
            echo "    <footer id=\"footer\">
      <div class=\"container\">
        <div id=\"footer-region\">
          ";
            // line 499
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
        </div>
      </div>
    </footer><!-- /#footer -->
  ";
        }
        // line 504
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
        return array (  746 => 504,  738 => 499,  733 => 496,  731 => 495,  722 => 488,  716 => 485,  713 => 484,  711 => 483,  708 => 482,  702 => 479,  699 => 478,  697 => 477,  689 => 472,  659 => 445,  633 => 422,  602 => 394,  598 => 393,  594 => 392,  590 => 391,  583 => 387,  553 => 360,  549 => 359,  545 => 358,  541 => 357,  529 => 348,  525 => 347,  521 => 346,  517 => 345,  505 => 336,  501 => 335,  497 => 334,  493 => 333,  481 => 324,  477 => 323,  473 => 322,  469 => 321,  457 => 312,  438 => 296,  427 => 288,  406 => 270,  395 => 262,  384 => 254,  373 => 246,  354 => 230,  339 => 218,  330 => 212,  314 => 199,  303 => 191,  292 => 183,  284 => 178,  271 => 168,  256 => 156,  241 => 144,  224 => 130,  209 => 118,  194 => 106,  177 => 92,  162 => 80,  147 => 68,  126 => 50,  104 => 31,  97 => 29,  87 => 22,  80 => 20,  71 => 13,  65 => 11,  62 => 10,  56 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/basic/templates/page--front.html.twig", "/var/www/html/lodha_revamp/themes/basic/templates/page--front.html.twig");
    }
}
