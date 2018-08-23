<?php

/* themes/basic/templates/html.html.twig */
class __TwigTemplate_f4d0b12d922ca480cf7df556136615d44834c8a4e2ba818a5f02c29d5cde5185 extends Twig_Template
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
        $tags = array("if" => 34, "set" => 54, "for" => 55);
        $filters = array("safe_join" => 47, "merge" => 56, "clean_class" => 56, "render" => 59);
        $functions = array("attach_library" => 35);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('safe_join', 'merge', 'clean_class', 'render'),
                array('attach_library')
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

        // line 33
        echo "<!DOCTYPE html>
";
        // line 34
        if ($this->getAttribute(($context["ie_enabled_versions"] ?? null), "ie8", array())) {
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("basic/ie8"), "html", null, true));
            echo "
";
        }
        // line 37
        if (($this->getAttribute(($context["ie_enabled_versions"] ?? null), "ie9", array()) || $this->getAttribute(($context["ie_enabled_versions"] ?? null), "ie8", array()))) {
            // line 38
            echo "  <!--[if lt IE 7]>     <html";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["html_attributes"] ?? null), "addClass", array(0 => "no-js", 1 => "lt-ie9", 2 => "lt-ie8", 3 => "lt-ie7"), "method"), "html", null, true));
            echo "><![endif]-->
  <!--[if IE 7]>        <html";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["html_attributes"] ?? null), "removeClass", array(0 => "lt-ie7"), "method"), "html", null, true));
            echo "><![endif]-->
  <!--[if IE 8]>        <html";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["html_attributes"] ?? null), "removeClass", array(0 => "lt-ie8"), "method"), "html", null, true));
            echo "><![endif]-->
  <!--[if gt IE 8]><!--><html";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["html_attributes"] ?? null), "removeClass", array(0 => "lt-ie9"), "method"), "html", null, true));
            echo "><!--<![endif]-->
";
        } else {
            // line 43
            echo "<html";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true));
            echo ">
";
        }
        // line 45
        echo "  <head>
    <head-placeholder token=\"";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">
    <title>";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">
    <js-placeholder token=\"";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">


 
  </head>
  ";
        // line 54
        $context["classes"] = array();
        // line 55
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? null), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 56
            echo "    ";
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => ("role--" . \Drupal\Component\Utility\Html::getClass($context["role"]))));
            // line 57
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
  ";
        // line 59
        $context["sidebar_first"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()));
        // line 60
        echo "  ";
        $context["sidebar_second"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", array()));
        // line 61
        echo "  
  ";
        // line 71
        echo "
  <body>
    <div class=\"outerWrap\">
      <!-- Header starts -->
      ";
        // line 96
        echo "
    ";
        // line 97
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
    ";
        // line 98
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "

    <footer>
        <div class=\"copy\">
                <img src=\"/";
        // line 102
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/logo-lodha-ft.png\" alt=\"Lodha\">
            <p>© LODHAGroup 2018</p>
        </div>
        <div class=\"midSec col-footer\">
            <ul>
                <li><a href=\"javascript:;\">Site Map</a></li>
                <li><a href=\"javascript:;\">Terms & Condition</a></li>
                <li><a href=\"javascript:;\">Privacy Policy</a></li>
            </ul>
        </div>
        
        <div class=\"rightSec col-footer\">
            <div class=\"social-icons\">
                <ul>
                    <li>
                        <a href=\"javascript:void(0);\"><span class=\"svgBox\" data-svg=\"/";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/twitter.svg\"></span></a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\"><span class=\"svgBox\" data-svg=\"/";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/facebook.svg\"></span></a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\"><span class=\"svgBox\" data-svg=\"/";
        // line 123
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/youtube.svg\"></span></a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\"><span class=\"svgBox\" data-svg=\"/";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/insta.svg\"></span></a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\"><span class=\"svgBox\" data-svg=\"/";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/svg/linkedin.svg\"></span></a>
                    </li>
                </ul>
            </div>
            <a href=\"javascript:;\" class=\"moreLink\">more</a>
        </div> 
        
    </footer>

    ";
        // line 138
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">
    ";
        // line 140
        if ($this->getAttribute(($context["browser_sync"] ?? null), "enabled", array())) {
            // line 141
            echo "      <script id=\"__bs_script__\">
      document.write(\"<script async src='http://";
            // line 142
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["browser_sync"] ?? null), "host", array()), "html", null, true));
            echo ":";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["browser_sync"] ?? null), "port", array()), "html", null, true));
            echo "/browser-sync/browser-sync-client.js'><\\/script>\".replace(\"HOST\", location.hostname));
      </script>
    ";
        }
        // line 145
        echo "
    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 145,  216 => 142,  213 => 141,  211 => 140,  207 => 139,  203 => 138,  191 => 129,  185 => 126,  179 => 123,  173 => 120,  167 => 117,  149 => 102,  142 => 98,  138 => 97,  135 => 96,  129 => 71,  126 => 61,  123 => 60,  121 => 59,  118 => 58,  112 => 57,  109 => 56,  104 => 55,  102 => 54,  94 => 49,  90 => 48,  86 => 47,  82 => 46,  79 => 45,  73 => 43,  68 => 41,  64 => 40,  60 => 39,  55 => 38,  53 => 37,  48 => 35,  46 => 34,  43 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - css: A list of CSS files for the current page.
 * - head: Markup for the HEAD element (including meta tags, keyword tags, and
 *   so on).
 * - head_title: A modified version of the page title, for use in the TITLE tag.
 * - head_title_array: List of text elements that make up the head_title
 *   variable. May contain or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - styles: Style tags necessary to import all necessary CSS files in the head.
 * - scripts: Script tags necessary to load the JavaScript files and settings
 *   in the head.
 * - db_offline: A flag indicating if the database is offline.
 *
 * @see template_preprocess_html()
 *
 * @ingroup themeable
 */
#}
<!DOCTYPE html>
{% if ie_enabled_versions.ie8 %}
  {{- attach_library('basic/ie8') }}
{% endif %}
{% if ie_enabled_versions.ie9 or ie_enabled_versions.ie8 %}
  <!--[if lt IE 7]>     <html{{ html_attributes.addClass('no-js', 'lt-ie9', 'lt-ie8', 'lt-ie7') }}><![endif]-->
  <!--[if IE 7]>        <html{{ html_attributes.removeClass('lt-ie7') }}><![endif]-->
  <!--[if IE 8]>        <html{{ html_attributes.removeClass('lt-ie8') }}><![endif]-->
  <!--[if gt IE 8]><!--><html{{ html_attributes.removeClass('lt-ie9') }}><!--<![endif]-->
{% else -%}
  <html{{ html_attributes }}>
{% endif %}
  <head>
    <head-placeholder token=\"{{ placeholder_token }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token }}\">
    <js-placeholder token=\"{{ placeholder_token }}\">


 
  </head>
  {% set classes = [] %}
  {% for role in user.roles %}
    {% set classes = classes|merge(['role--' ~ role|clean_class]) %}
  {% endfor %}

  {% set sidebar_first = page.sidebar_first|render %}
  {% set sidebar_second = page.sidebar_second|render %}
  
  {#<body{{ attributes.addClass(classes,
    'homepage',
    not is_front ? 'with-subnav',
    sidebar_first ? 'sidebar-first',
    sidebar_second ? 'sidebar-second',
    (sidebar_first and not sidebar_second) or (sidebar_second and not sidebar_first) ? 'one-sidebar',
    (sidebar_first and sidebar_second) ? 'two-sidebars',
    (not sidebar_first and not sidebar_second) ? 'no-sidebar'
  ) }}>#}

  <body>
    <div class=\"outerWrap\">
      <!-- Header starts -->
      {#<div class=\"fixedHeader\">
        <a class=\"menu\" href=\"javascript:;\" id=\"menu-icon\">MENU</a>

        <a class=\"logo\" href=\"javascript:;\">
        {% if is_front %}
            <img src=\"/{{ directory }}/images/logo-lodha-ft.png\" alt=\"Lodha\">
        {% else %}
            <img src=\"{{ directory }}/images/logo-lodha-ft.png\" alt=\"Lodha\">
        {% endif %}
        </a>
        
        <div class=\"rightSec\">
          <ul>
              <li><a href=\"javascript:;\" class=\"favourite\"><span class=\"svgBox\" data-svg=\"{{ directory }}/images/svg/search.svg\"></span></a></li>
              <li><a href=\"javascript:;\" class=\"favourite\"><span class=\"svgBox\" data-svg=\"{{ directory }}/images/svg/icon-favourite.svg\"></span></a></li>
              <li class=\"mobileMenuIcon\"><a href=\"javascript:;\"><span class=\"svgBox\" data-svg=\"{{ directory }}/images/svg/login.svg\"></span></a></li>
              <li class=\"myLodha\"><a href=\"javascript:;\">MY LODHA</a></li>
              <li class=\"dropdown countryLanguage\"><a href=\"javascript:;\">IND/EN</a></li>
          </ul>
        </div>
      </div>#}

    {{ page_top }}
    {{ page }}

    <footer>
        <div class=\"copy\">
                <img src=\"/{{ directory }}/images/logo-lodha-ft.png\" alt=\"Lodha\">
            <p>© LODHAGroup 2018</p>
        </div>
        <div class=\"midSec col-footer\">
            <ul>
                <li><a href=\"javascript:;\">Site Map</a></li>
                <li><a href=\"javascript:;\">Terms & Condition</a></li>
                <li><a href=\"javascript:;\">Privacy Policy</a></li>
            </ul>
        </div>
        
        <div class=\"rightSec col-footer\">
            <div class=\"social-icons\">
                <ul>
                    <li>
                        <a href=\"javascript:void(0);\"><span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/twitter.svg\"></span></a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\"><span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/facebook.svg\"></span></a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\"><span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/youtube.svg\"></span></a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\"><span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/insta.svg\"></span></a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\"><span class=\"svgBox\" data-svg=\"/{{ directory }}/images/svg/linkedin.svg\"></span></a>
                    </li>
                </ul>
            </div>
            <a href=\"javascript:;\" class=\"moreLink\">more</a>
        </div> 
        
    </footer>

    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token }}\">
    {% if browser_sync.enabled %}
      <script id=\"__bs_script__\">
      document.write(\"<script async src='http://{{ browser_sync.host }}:{{ browser_sync.port }}/browser-sync/browser-sync-client.js'><\\/script>\".replace(\"HOST\", location.hostname));
      </script>
    {% endif %}

    </div>
  </body>
</html>
", "themes/basic/templates/html.html.twig", "E:\\wamp\\www\\lodharevamp\\themes\\basic\\templates\\html.html.twig");
    }
}