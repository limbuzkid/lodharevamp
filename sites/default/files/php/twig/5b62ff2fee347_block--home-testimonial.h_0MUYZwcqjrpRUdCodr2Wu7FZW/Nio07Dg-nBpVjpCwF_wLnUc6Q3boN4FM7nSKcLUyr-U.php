<?php

/* themes/basic/templates/block/block--home-testimonial.html.twig */
class __TwigTemplate_912afe9de9a9c1c0aecf268aa84e37110a0bcc18dff8df9c045a263022084dfb extends Twig_Template
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
        $tags = array("for" => 16);
        $filters = array("raw" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array('raw'),
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
        echo "<section class=\"reviewsWrap\">
  <div class=\"container\">
      <div class=\"sectionTitle\">
          <span class=\"icon\"><img src=\"/";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/icon-pillars.png\"></span>
          <p>BETTER LIFE <span>REVIEWS</span></p>
      </div>
      <div class=\"imgWrap\">
          <div class=\"profilePic picPos-01\"><span class=\"tab\" data-attr=\"1\"><img src=\"/";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/profile-pic01.jpg\"></span></div>
          <div class=\"profilePic picPos-02\"><span class=\"tab\" data-attr=\"2\"><img src=\"/";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/profile-pic02.jpg\"></span></div>
          <div class=\"profilePic picPos-03\"><span class=\"tab\" data-attr=\"3\"><img src=\"/";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/profile-pic03.jpg\"></span></div>
          <div class=\"profilePic profilePicMain\"><span class=\"tab\" data-attr=\"0\"><img src=\"/";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/upload/profile-mandar-sohoni.jpg\"></span></div>
          <div class=\"profilePicFrame\"></div>
      </div>
      <div class=\"content\">
          <div class=\"profileWrap\">
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "#data_obj", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 17
            echo "              <div class=\"profileBox\">
                  ";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["data"], "desc", array())));
            echo "
                  <p class=\"name\">";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true));
            echo "</p>
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "          </div>
      </div>                    
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/block/block--home-testimonial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  86 => 19,  82 => 18,  79 => 17,  75 => 16,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"reviewsWrap\">
  <div class=\"container\">
      <div class=\"sectionTitle\">
          <span class=\"icon\"><img src=\"/{{ directory }}/images/upload/icon-pillars.png\"></span>
          <p>BETTER LIFE <span>REVIEWS</span></p>
      </div>
      <div class=\"imgWrap\">
          <div class=\"profilePic picPos-01\"><span class=\"tab\" data-attr=\"1\"><img src=\"/{{ directory }}/images/upload/profile-pic01.jpg\"></span></div>
          <div class=\"profilePic picPos-02\"><span class=\"tab\" data-attr=\"2\"><img src=\"/{{ directory }}/images/upload/profile-pic02.jpg\"></span></div>
          <div class=\"profilePic picPos-03\"><span class=\"tab\" data-attr=\"3\"><img src=\"/{{ directory }}/images/upload/profile-pic03.jpg\"></span></div>
          <div class=\"profilePic profilePicMain\"><span class=\"tab\" data-attr=\"0\"><img src=\"/{{ directory }}/images/upload/profile-mandar-sohoni.jpg\"></span></div>
          <div class=\"profilePicFrame\"></div>
      </div>
      <div class=\"content\">
          <div class=\"profileWrap\">
          {% for data in content[\"#data_obj\"] %}
              <div class=\"profileBox\">
                  {{ data.desc|raw }}
                  <p class=\"name\">{{ data.title}}</p>
              </div>
          {% endfor %}
          </div>
      </div>                    
  </div>
</section>", "themes/basic/templates/block/block--home-testimonial.html.twig", "E:\\wamp64\\www\\html\\lodharevamp\\themes\\basic\\templates\\block\\block--home-testimonial.html.twig");
    }
}
