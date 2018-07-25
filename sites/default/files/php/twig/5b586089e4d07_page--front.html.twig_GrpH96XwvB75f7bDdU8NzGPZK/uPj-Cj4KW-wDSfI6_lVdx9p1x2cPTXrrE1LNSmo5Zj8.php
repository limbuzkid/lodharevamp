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
        $tags = array("if" => 6);
        $filters = array("render" => 6);
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
        echo "

        <section id=\"content\">
          <div id=\"content-header\">
            ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
            ";
        // line 6
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "highlighted", array()))) {
            // line 7
            echo "              <div id=\"highlighted\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>
            ";
        }
        // line 9
        echo "            ";
        if (($context["action_links"] ?? null)) {
            // line 10
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "</ul>
            ";
        }
        // line 12
        echo "          </div><!-- /#content-header -->
          <!-- homeBanner starts-->  
          <div class=\"homeBanner\">
                <a href=\"javascript:;\" class=\"scroll\">Scroll</a>
                <div class=\"bannerCarousel\">
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
                <div class=\"iconicProCarousel carousel\">
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
            <section class=\"reviewsWrap\">
                <div class=\"container\">
                    <div class=\"sectionTitle\">
                        <span class=\"icon\"><img src=\"/";
        // line 386
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
                        <p>BETTER LIFE <span>REVIEWS</span></p>
                    </div>
                    <div class=\"imgWrap\">
                        <div class=\"profilePic picPos-01\"><span class=\"tab\" data-attr=\"1\"><img src=\"/";
        // line 390
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/profile-pic01.jpg\"></span></div>
                        <div class=\"profilePic picPos-02\"><span class=\"tab\" data-attr=\"2\"><img src=\"/";
        // line 391
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/profile-pic02.jpg\"></span></div>
                        <div class=\"profilePic picPos-03\"><span class=\"tab\" data-attr=\"3\"><img src=\"/";
        // line 392
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/profile-pic03.jpg\"></span></div>
                        <div class=\"profilePic profilePicMain\"><span class=\"tab\" data-attr=\"0\"><img src=\"/";
        // line 393
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
        // line 421
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
        // line 444
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
          
          </div>

        </section><!-- /#content -->





  <!-- ______________________ FOOTER _______________________ -->

  ";
        // line 482
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 483
            echo "    <footer id=\"footer\">
      <div class=\"container\">
        <div id=\"footer-region\">
          ";
            // line 486
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
        </div>
      </div>
    </footer><!-- /#footer -->
  ";
        }
        // line 491
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
        return array (  718 => 491,  710 => 486,  705 => 483,  703 => 482,  662 => 444,  636 => 421,  605 => 393,  601 => 392,  597 => 391,  593 => 390,  586 => 386,  556 => 359,  552 => 358,  548 => 357,  544 => 356,  532 => 347,  528 => 346,  524 => 345,  520 => 344,  508 => 335,  504 => 334,  500 => 333,  496 => 332,  484 => 323,  480 => 322,  476 => 321,  472 => 320,  460 => 311,  441 => 295,  430 => 287,  409 => 269,  398 => 261,  387 => 253,  376 => 245,  357 => 229,  342 => 217,  333 => 211,  317 => 198,  306 => 190,  295 => 182,  287 => 177,  274 => 167,  259 => 155,  244 => 143,  227 => 129,  212 => 117,  197 => 105,  180 => 91,  165 => 79,  150 => 67,  129 => 49,  107 => 30,  98 => 28,  88 => 21,  79 => 19,  70 => 12,  64 => 10,  61 => 9,  55 => 7,  53 => 6,  49 => 5,  43 => 1,);
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
