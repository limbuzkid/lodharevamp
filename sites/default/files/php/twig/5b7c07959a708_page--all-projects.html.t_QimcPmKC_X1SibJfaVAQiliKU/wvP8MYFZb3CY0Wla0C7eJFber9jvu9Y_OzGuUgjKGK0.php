<?php

/* themes/basic/templates/page--all-projects.html.twig */
class __TwigTemplate_51d09a2ddf0552dd29dbb056ed18363d69a9f21c9f1f2c99b860734efdb06842 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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
<div class=\"wrap1900\">
    <section class=\"residential allproperty\">
        <div class=\"container searchproperty\">
            <div class=\"search\">
                <div class=\"inputWrap\">
                    <input type=\"text\" name=\"\">
                </div>
                <a href=\"javascript:;\" class=\"searchIcon\">Search</a>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"searchfilter\">
                <div class=\"field\">
                    <div class=\"selectWrapper refineicon\">
                        <div class=\"selectedvalue\"></div>
                        <select name=\"\">
                            <option value=\"\" selected>Refine Search</option>
                            <option>New Property</option>
                        </select>
                    </div>
                </div>
                <div class=\"field\">
                    <div class=\"selectWrapper sortbyicon\">
                        <div class=\"selectedvalue\"></div>
                        <select name=\"\">
                            <option value=\"\" selected>Sort By</option>
                            <option>New Property</option>
                        </select>
                    </div>
                </div>
            </div>
            <p class=\"resultitle\"><span>40</span> Properties matching your search</p>
            <div class=\"searchresult\">

                ";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page--all-projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 36,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"wrap1900\">
    <section class=\"residential allproperty\">
        <div class=\"container searchproperty\">
            <div class=\"search\">
                <div class=\"inputWrap\">
                    <input type=\"text\" name=\"\">
                </div>
                <a href=\"javascript:;\" class=\"searchIcon\">Search</a>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"searchfilter\">
                <div class=\"field\">
                    <div class=\"selectWrapper refineicon\">
                        <div class=\"selectedvalue\"></div>
                        <select name=\"\">
                            <option value=\"\" selected>Refine Search</option>
                            <option>New Property</option>
                        </select>
                    </div>
                </div>
                <div class=\"field\">
                    <div class=\"selectWrapper sortbyicon\">
                        <div class=\"selectedvalue\"></div>
                        <select name=\"\">
                            <option value=\"\" selected>Sort By</option>
                            <option>New Property</option>
                        </select>
                    </div>
                </div>
            </div>
            <p class=\"resultitle\"><span>40</span> Properties matching your search</p>
            <div class=\"searchresult\">

                {{ page.content }}
            </div>
        </div>
    </section>
</div>
", "themes/basic/templates/page--all-projects.html.twig", "E:\\wamp64\\www\\html\\lodharevamp\\themes\\basic\\templates\\page--all-projects.html.twig");
    }
}
