<?php

/* themes/basic/templates/html.html.twig */
class __TwigTemplate_482b9b116f637dfd8946d6b9072442d36ceb8364f60ae2a444b7dd66e919ad94 extends Twig_Template
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
        $tags = array("if" => 34, "set" => 55, "for" => 56);
        $filters = array("safe_join" => 47, "merge" => 57, "clean_class" => 57, "render" => 60);
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/css/owl.carousel.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/css/animate.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/css/jquery-ui.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/css/style.css\"/>
  </head>
  ";
        // line 55
        $context["classes"] = array();
        // line 56
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? null), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 57
            echo "    ";
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => ("role--" . \Drupal\Component\Utility\Html::getClass($context["role"]))));
            // line 58
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
  ";
        // line 60
        $context["sidebar_first"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()));
        // line 61
        echo "  ";
        $context["sidebar_second"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", array()));
        // line 62
        echo "  <body";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "homepage", 2 => (( !        // line 64
($context["is_front"] ?? null)) ? ("with-subnav") : ("")), 3 => ((        // line 65
($context["sidebar_first"] ?? null)) ? ("sidebar-first") : ("")), 4 => ((        // line 66
($context["sidebar_second"] ?? null)) ? ("sidebar-second") : ("")), 5 => ((((        // line 67
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null)) || (($context["sidebar_second"] ?? null) &&  !($context["sidebar_first"] ?? null)))) ? ("one-sidebar") : ("")), 6 => (((        // line 68
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("two-sidebars") : ("")), 7 => ((( !        // line 69
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("no-sidebar") : (""))), "method"), "html", null, true));
        // line 70
        echo ">
    <div class=\"outerWrap\">
      <!-- Header starts -->
      <div class=\"fixedHeader\">
        <a class=\"menu\" href=\"javascript:;\">MENU</a>
        <a class=\"logo\" href=\"javascript:;\"><img src=\"/";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/logo-lodha.png\" alt=\"Lodha\"></a>
        <div class=\"rightSec\">
          <ul>
            <li><a href=\"javascript:;\" class=\"favourite\"><img src=\"/";
        // line 78
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/icon-favourite.png\"></a></li>
            <li><a href=\"javascript:;\" class=\"contact\"><img src=\"/";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/icon-contact.png\"></a></li>
            <li class=\"dropdown\"><a href=\"javascript:;\">PRIVA | MY LODHA</a></li>
            <li class=\"dropdown countryLanguage\"><a href=\"javascript:;\">IND</a></li>
          </ul>
        </div>
      </div>

    ";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
    ";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
    ";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">
    ";
        // line 90
        if ($this->getAttribute(($context["browser_sync"] ?? null), "enabled", array())) {
            // line 91
            echo "      <script id=\"__bs_script__\">
      document.write(\"<script async src='http://";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["browser_sync"] ?? null), "host", array()), "html", null, true));
            echo ":";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["browser_sync"] ?? null), "port", array()), "html", null, true));
            echo "/browser-sync/browser-sync-client.js'><\\/script>\".replace(\"HOST\", location.hostname));
      </script>
    ";
        }
        // line 95
        echo "    </div>
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
        return array (  204 => 95,  196 => 92,  193 => 91,  191 => 90,  187 => 89,  183 => 88,  179 => 87,  175 => 86,  165 => 79,  161 => 78,  155 => 75,  148 => 70,  146 => 69,  145 => 68,  144 => 67,  143 => 66,  142 => 65,  141 => 64,  139 => 62,  136 => 61,  134 => 60,  131 => 59,  125 => 58,  122 => 57,  117 => 56,  115 => 55,  110 => 53,  106 => 52,  102 => 51,  98 => 50,  94 => 49,  90 => 48,  86 => 47,  82 => 46,  79 => 45,  73 => 43,  68 => 41,  64 => 40,  60 => 39,  55 => 38,  53 => 37,  48 => 35,  46 => 34,  43 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/basic/templates/html.html.twig", "/var/www/html/lodha_revamp/themes/basic/templates/html.html.twig");
    }
}
