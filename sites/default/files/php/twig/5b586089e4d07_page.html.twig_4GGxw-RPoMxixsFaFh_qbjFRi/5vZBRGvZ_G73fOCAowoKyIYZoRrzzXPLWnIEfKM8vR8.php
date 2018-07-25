<?php

/* themes/basic/templates/page.html.twig */
class __TwigTemplate_1b202616e2fea5951b28e7beeec103a342b068ab4bdb041e93a8acf71a70dd6f extends Twig_Template
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
        $tags = array("set" => 1, "if" => 11);
        $filters = array("render" => 1);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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
        $context["main_menu"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "primary_menu", array()));
        // line 2
        $context["secondary_menu"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "secondary_menu", array()));
        // line 3
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "layout-container", 1 => (((        // line 5
($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) ? ("with-navigation") : ("")), 2 => ((        // line 6
($context["secondary_menu"] ?? null)) ? ("with-subnav") : (""))), "method"), "html", null, true));
        // line 7
        echo ">

  <!-- ______________________ HEADER _______________________ -->

  ";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 12
            echo "    <header id=\"header\">
      <div class=\"container\">
        <div id=\"header-region\">
          ";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        </div>
      </div>
    </header><!-- /#header -->
  ";
        }
        // line 20
        echo "
  ";
        // line 21
        if ((($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) {
            // line 22
            echo "    <nav id=\"navigation\" class=\"menu";
            if (($context["main_menu"] ?? null)) {
                echo " with-primary";
            }
            if (($context["secondary_menu"] ?? null)) {
                echo " with-secondary";
            }
            echo "\">
      <div class=\"container\">
        ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_menu"] ?? null), "html", null, true));
            echo "
        ";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["secondary_menu"] ?? null), "html", null, true));
            echo "
      </div>
    </nav><!-- /#navigation -->
  ";
        }
        // line 29
        echo "
  <!-- ______________________ MAIN _______________________ -->

  <div id=\"main\">
    <div class=\"container\">
      <div id=\"content-wrapper\">
        <section id=\"content\">

          <div id=\"content-header\">

            ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "

            ";
        // line 41
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "highlighted", array()))) {
            // line 42
            echo "              <div id=\"highlighted\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "

            ";
        // line 47
        if (($context["title"] ?? null)) {
            // line 48
            echo "              <h1 class=\"title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
            ";
        }
        // line 50
        echo "
            ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
            ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

            ";
        // line 54
        if (($context["tabs"] ?? null)) {
            // line 55
            echo "              <div class=\"tabs\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tabs"] ?? null), "html", null, true));
            echo "</div>
            ";
        }
        // line 57
        echo "
            ";
        // line 58
        if (($context["action_links"] ?? null)) {
            // line 59
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "</ul>
            ";
        }
        // line 61
        echo "
          </div><!-- /#content-header -->

          <div id=\"content-area\">
            ";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
          </div>

        </section><!-- /#content -->

        ";
        // line 70
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()))) {
            // line 71
            echo "          <aside id=\"sidebar-first\" class=\"column sidebar first\">
            ";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside><!-- /#sidebar-first -->
        ";
        }
        // line 75
        echo "
        ";
        // line 76
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) {
            // line 77
            echo "          <aside id=\"sidebar-second\" class=\"column sidebar second\">
            ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </aside><!-- /#sidebar-second -->
        ";
        }
        // line 81
        echo "
      </div><!-- /#content-wrapper -->
    </div><!-- /.container -->
  </div><!-- /#main -->

  <!-- ______________________ FOOTER _______________________ -->

  ";
        // line 88
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 89
            echo "    <footer id=\"footer\">
      <div class=\"container\">
        <div id=\"footer-region\">
          ";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
        </div>
      </div>
    </footer><!-- /#footer -->
  ";
        }
        // line 97
        echo "
</div><!-- /.layout-container -->
";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 97,  227 => 92,  222 => 89,  220 => 88,  211 => 81,  205 => 78,  202 => 77,  200 => 76,  197 => 75,  191 => 72,  188 => 71,  186 => 70,  178 => 65,  172 => 61,  166 => 59,  164 => 58,  161 => 57,  155 => 55,  153 => 54,  148 => 52,  144 => 51,  141 => 50,  135 => 48,  133 => 47,  128 => 45,  125 => 44,  119 => 42,  117 => 41,  112 => 39,  100 => 29,  93 => 25,  89 => 24,  78 => 22,  76 => 21,  73 => 20,  65 => 15,  60 => 12,  58 => 11,  52 => 7,  50 => 6,  49 => 5,  47 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/basic/templates/page.html.twig", "/var/www/html/lodha_revamp/themes/basic/templates/page.html.twig");
    }
}
