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
        $tags = array("if" => 102);
        $filters = array("render" => 102);
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
<section class=\"iconicProjects\">
    ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_iconic_project", array()), "html", null, true));
        echo "
</section>
<section class=\"locateUs homepage\">
    <div class=\"container leftPadding\">
        ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_map_header", array()), "html", null, true));
        echo "
        <div class=\"mapSec\">
            <img src=\"/";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/map.jpg\">
            <span class=\"plusSign\"></span>
        </div>
    </div>
    <div class=\"mapContainer\">
        <div id=\"map\" class=\"openMap\"></div>
        <span class=\"minusSign\"></span>
    </div>
</section>
<section class=\"letsWorkBetter\">
  <div class=\"container\">
    <!-- <div class=\"sectionTitle\">
      <span class=\"icon\">
        <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
          width=\"26.305px\" height=\"33px\" viewBox=\"0 0 26.305 33\" enable-background=\"new 0 0 26.305 33\" xml:space=\"preserve\">
          <path d=\"M23.465,10.045h-0.529c-0.454,0-0.891,0.107-1.298,0.317l-0.354,0.183V2.928C21.283,1.312,19.97,0,18.354,0H7.953
          C6.338,0,5.024,1.312,5.024,2.928v7.617l-0.354-0.184c-0.406-0.211-0.845-0.318-1.298-0.318H2.844c-1.567,0-2.843,1.275-2.843,2.842
          v4.686c0,0.326,0.269,0.596,0.597,0.596c0.327,0,0.595-0.27,0.595-0.596v-4.686c0-0.91,0.741-1.65,1.651-1.65h0.529
          c0.91,0,1.65,0.74,1.65,1.65v10.553H1.701c-0.281,0-0.51-0.229-0.51-0.51v-1.406c0-0.158-0.062-0.309-0.174-0.422
          c-0.112-0.111-0.263-0.174-0.422-0.174C0.267,20.926,0,21.195,0,21.521v1.406c0,0.938,0.764,1.699,1.7,1.699h8.345v5.508H3.943
          c-0.328,0-0.595,0.268-0.595,0.594v1.676C3.348,32.732,3.615,33,3.943,33s0.596-0.268,0.596-0.596v-1.078h17.227v1.078
          c0,0.328,0.268,0.596,0.596,0.596c0.327,0,0.595-0.268,0.595-0.596v-1.676c0-0.326-0.268-0.594-0.595-0.594h-6.103v-5.508h8.346
          c0.938,0,1.7-0.762,1.7-1.699V12.885C26.306,11.319,25.031,10.045,23.465,10.045z M15.07,30.135h-3.832v-5.506h3.832V30.135z
           M20.093,23.438H6.215v-3.832h13.878V23.438z M20.093,18.416H6.215V2.928c0-0.959,0.78-1.738,1.738-1.738h10.401
          c0.958,0,1.737,0.779,1.737,1.738L20.093,18.416L20.093,18.416z M25.115,22.928c0,0.281-0.229,0.51-0.51,0.51h-3.322V12.887
          c0.001-0.912,0.742-1.651,1.651-1.651h0.529c0.91,0,1.65,0.739,1.65,1.649L25.115,22.928L25.115,22.928z\"/>
        </svg>
      </span>
      <p>LET’S WORK <span>BETTER</span></p>
    </div>   -->
    ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_commercial_project", array()), "html", null, true));
        echo "
  </div>
</section>
<section class=\"lifestyleWrap\">
    <div class=\"container paddingBoth\">
        ";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_lifestyle_wrap", array()), "html", null, true));
        echo "
        
    </div>
</section>

<section class=\"reviewsWrap\">
    <div class=\"container\">
        ";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_testimonial", array()), "html", null, true));
        echo "
    </div>
</section>
<section class=\"blogsWrap\">
    <div class=\"container paddingBoth\">
        ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
        echo "
    </div>
</section>
<section class=\"getInTouch\">
    <div class=\"container paddingBoth\">
        <div class=\"sectionTitle\">
            <span class=\"icon\"><img src=\"/";
        // line 72
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

<section id=\"content\">
  <div id=\"content-header\">
    ";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
    ";
        // line 102
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "highlighted", array()))) {
            // line 103
            echo "      <div id=\"highlighted\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>
    ";
        }
        // line 105
        echo "    ";
        if (($context["action_links"] ?? null)) {
            // line 106
            echo "      <ul class=\"action-links\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "</ul>
    ";
        }
        // line 108
        echo "  </div><!-- /#content-header -->


 


  <div id=\"content-area\"></div>

</section><!-- /#content -->


<!-- ______________________ FOOTER _______________________ -->

";
        // line 121
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 122
            echo "  <footer id=\"footer\">
    <div class=\"container\">
      <div id=\"footer-region\">
        ";
            // line 125
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div>
    </div>
  </footer><!-- /#footer -->
";
        }
        // line 130
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
        return array (  224 => 130,  216 => 125,  211 => 122,  209 => 121,  194 => 108,  188 => 106,  185 => 105,  179 => 103,  177 => 102,  173 => 101,  141 => 72,  132 => 66,  124 => 61,  114 => 54,  106 => 49,  73 => 19,  68 => 17,  61 => 13,  55 => 10,  43 => 1,);
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
<section class=\"iconicProjects\">
    {{ page.content_iconic_project }}
</section>
<section class=\"locateUs homepage\">
    <div class=\"container leftPadding\">
        {{ page.content_map_header }}
        <div class=\"mapSec\">
            <img src=\"/{{ directory }}/images/map.jpg\">
            <span class=\"plusSign\"></span>
        </div>
    </div>
    <div class=\"mapContainer\">
        <div id=\"map\" class=\"openMap\"></div>
        <span class=\"minusSign\"></span>
    </div>
</section>
<section class=\"letsWorkBetter\">
  <div class=\"container\">
    <!-- <div class=\"sectionTitle\">
      <span class=\"icon\">
        <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
          width=\"26.305px\" height=\"33px\" viewBox=\"0 0 26.305 33\" enable-background=\"new 0 0 26.305 33\" xml:space=\"preserve\">
          <path d=\"M23.465,10.045h-0.529c-0.454,0-0.891,0.107-1.298,0.317l-0.354,0.183V2.928C21.283,1.312,19.97,0,18.354,0H7.953
          C6.338,0,5.024,1.312,5.024,2.928v7.617l-0.354-0.184c-0.406-0.211-0.845-0.318-1.298-0.318H2.844c-1.567,0-2.843,1.275-2.843,2.842
          v4.686c0,0.326,0.269,0.596,0.597,0.596c0.327,0,0.595-0.27,0.595-0.596v-4.686c0-0.91,0.741-1.65,1.651-1.65h0.529
          c0.91,0,1.65,0.74,1.65,1.65v10.553H1.701c-0.281,0-0.51-0.229-0.51-0.51v-1.406c0-0.158-0.062-0.309-0.174-0.422
          c-0.112-0.111-0.263-0.174-0.422-0.174C0.267,20.926,0,21.195,0,21.521v1.406c0,0.938,0.764,1.699,1.7,1.699h8.345v5.508H3.943
          c-0.328,0-0.595,0.268-0.595,0.594v1.676C3.348,32.732,3.615,33,3.943,33s0.596-0.268,0.596-0.596v-1.078h17.227v1.078
          c0,0.328,0.268,0.596,0.596,0.596c0.327,0,0.595-0.268,0.595-0.596v-1.676c0-0.326-0.268-0.594-0.595-0.594h-6.103v-5.508h8.346
          c0.938,0,1.7-0.762,1.7-1.699V12.885C26.306,11.319,25.031,10.045,23.465,10.045z M15.07,30.135h-3.832v-5.506h3.832V30.135z
           M20.093,23.438H6.215v-3.832h13.878V23.438z M20.093,18.416H6.215V2.928c0-0.959,0.78-1.738,1.738-1.738h10.401
          c0.958,0,1.737,0.779,1.737,1.738L20.093,18.416L20.093,18.416z M25.115,22.928c0,0.281-0.229,0.51-0.51,0.51h-3.322V12.887
          c0.001-0.912,0.742-1.651,1.651-1.651h0.529c0.91,0,1.65,0.739,1.65,1.649L25.115,22.928L25.115,22.928z\"/>
        </svg>
      </span>
      <p>LET’S WORK <span>BETTER</span></p>
    </div>   -->
    {{ page.content_commercial_project }}
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


", "themes/basic/templates/page--front.html.twig", "E:\\wamp\\www\\lodharevamp\\themes\\basic\\templates\\page--front.html.twig");
    }
}
