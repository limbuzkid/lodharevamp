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
        $tags = array("if" => 34, "set" => 327, "for" => 328);
        $filters = array("safe_join" => 47, "merge" => 329, "clean_class" => 329, "render" => 332);
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
    <!--<script type=\"text/javascript\">
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places\">
  
        var themeJSON = [
            {
                \"elementType\": \"geometry\",
                \"stylers\": [
                {
                    \"color\": \"#f5f5f5\"
                }
                ]
            },
            {
                \"elementType\": \"labels.icon\",
                \"stylers\": [
                {
                    \"visibility\": \"off\"
                }
                ]
            },
            {
                \"elementType\": \"labels.text.fill\",
                \"stylers\": [
                {
                    \"color\": \"#616161\"
                }
                ]
            },
            {
                \"elementType\": \"labels.text.stroke\",
                \"stylers\": [
                {
                    \"color\": \"#f5f5f5\"
                }
                ]
            },
            {
                \"featureType\": \"administrative.land_parcel\",
                \"elementType\": \"labels.text.fill\",
                \"stylers\": [
                {
                    \"color\": \"#bdbdbd\"
                }
                ]
            },
            {
                \"featureType\": \"poi\",
                \"elementType\": \"geometry\",
                \"stylers\": [
                {
                    \"color\": \"#eeeeee\"
                }
                ]
            },
            {
                \"featureType\": \"poi\",
                \"elementType\": \"labels.text.fill\",
                \"stylers\": [
                {
                    \"color\": \"#757575\"
                }
                ]
            },
            {
                \"featureType\": \"poi.park\",
                \"elementType\": \"geometry\",
                \"stylers\": [
                {
                    \"color\": \"#e5e5e5\"
                }
                ]
            },
            {
                \"featureType\": \"poi.park\",
                \"elementType\": \"labels.text.fill\",
                \"stylers\": [
                {
                    \"color\": \"#9e9e9e\"
                }
                ]
            },
            {
                \"featureType\": \"road\",
                \"elementType\": \"geometry\",
                \"stylers\": [
                {
                    \"color\": \"#ffffff\"
                }
                ]
            },
            {
                \"featureType\": \"road.arterial\",
                \"elementType\": \"labels.text.fill\",
                \"stylers\": [
                {
                    \"color\": \"#757575\"
                }
                ]
            },
            {
                \"featureType\": \"road.highway\",
                \"elementType\": \"geometry\",
                \"stylers\": [
                {
                    \"color\": \"#dadada\"
                }
                ]
            },
            {
                \"featureType\": \"road.highway\",
                \"elementType\": \"labels.text.fill\",
                \"stylers\": [
                {
                    \"color\": \"#616161\"
                }
                ]
            },
            {
                \"featureType\": \"road.local\",
                \"elementType\": \"labels.text.fill\",
                \"stylers\": [
                {
                    \"color\": \"#9e9e9e\"
                }
                ]
            },
            {
                \"featureType\": \"transit.line\",
                \"elementType\": \"geometry\",
                \"stylers\": [
                {
                    \"color\": \"#e5e5e5\"
                }
                ]
            },
            {
                \"featureType\": \"transit.station\",
                \"elementType\": \"geometry\",
                \"stylers\": [
                {
                    \"color\": \"#eeeeee\"
                }
                ]
            },
            {
                \"featureType\": \"water\",
                \"elementType\": \"geometry\",
                \"stylers\": [
                {
                    \"color\": \"#c9c9c9\"
                }
                ]
            },
            {
                \"featureType\": \"water\",
                \"elementType\": \"labels.text.fill\",
                \"stylers\": [
                {
                    \"color\": \"#9e9e9e\"
                }
                ]
            }
        ];
  
  
    
        //https://www.taniarascia.com/google-maps-apis-for-multiple-locations/
        
        var broadway = {
            info: '<strong>Chamarbaug Sub Post Office</strong><br>\\
            Dr. B. A. Road, Parel Post Office Lane, <br>\\Krishna Nagar, Parel East, <br>\\Krishna Nagar, Parel, Mumbai, ',
            lat: 19.0005323,
            long: 72.8360278,
        };
  
        var belmont = {
            info: '<strong>ITC Grand Central</strong><br>\\
            287, Dr Babasaheb Ambedkar Road, Parel,<br>\\ Mumbai, Maharashtra 400012',
            lat: 18.9982897,
            long: 72.8373766
        };
  
        var myIMg = '<img src=\"http://maps.marnoto.com/en/5wayscustomizeinfowindow/images/vistalegre.jpg\" alt=\"Porcelain Factory of Vista Alegre\" height=\"115\" width=\"83\">';
  
        var sheridan = {
            info: '<strong>Ratan J. Batliboi Consultants Pvt</strong><br>\\r\\
            233 D, Bharat Rice '+myIMg+'Mills, Dr S S Rao Road, <br>\\
            Near Hilla Tower, Lalbaug, Bharat Rice Mills Compound, <br>\\
            Lal Baug, Parel, Mumbai, Maharashtra 400012',
            lat: 18.9942916,
            long: 72.8348898
        };
  
        var locations = [
            [broadway.info, broadway.lat, broadway.long, 0],
            [belmont.info, belmont.lat, belmont.long, 1],
            [sheridan.info, sheridan.lat, sheridan.long, 2],
        ];
        var infowindow = new google.maps.InfoWindow({});
  
        var marker, i;
  
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon:'images/icon-location.gif'
            });
  
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
  
                
        function initMap() {
            
            var locations = [
                [broadway.info, broadway.lat, broadway.long, 0],
                [belmont.info, belmont.lat, belmont.long, 1],
                [sheridan.info, sheridan.lat, sheridan.long, 2],
            ];
  
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                maptype:'roadmap',
                size:'480x360',
                styles:themeJSON,
                center: new google.maps.LatLng(18.9981782, 72.8366256),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
  
            var infowindow = new google.maps.InfoWindow({});
  
            var marker, i;
  
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon:'images/icon-location.gif'
                });
  
                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
  
            
            applyStyleOnMap()
        }
  
  
  
        function applyStyleOnMap(){
            if( \$('#map .gm-style-pbc').length != 0 ){
            \$('#map .gm-style-pbc').addClass('__brownShade');
            \$('#map .gm-style-pbc').next().find('div').eq(0).append(\"<span class='brownShade'></span>\");
            \$( \"<span class='brownShade_'></span>\" ).insertAfter( \"#map .gm-style-pbc\" );
            }
            else{
                setTimeout(function(){
                    applyStyleOnMap();
                },500);
            }
        }
  
    </script>-->
  </head>
  ";
        // line 327
        $context["classes"] = array();
        // line 328
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? null), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 329
            echo "    ";
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => ("role--" . \Drupal\Component\Utility\Html::getClass($context["role"]))));
            // line 330
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "
  ";
        // line 332
        $context["sidebar_first"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()));
        // line 333
        echo "  ";
        $context["sidebar_second"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", array()));
        // line 334
        echo "  <body";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "homepage", 2 => (( !        // line 336
($context["is_front"] ?? null)) ? ("with-subnav") : ("")), 3 => ((        // line 337
($context["sidebar_first"] ?? null)) ? ("sidebar-first") : ("")), 4 => ((        // line 338
($context["sidebar_second"] ?? null)) ? ("sidebar-second") : ("")), 5 => ((((        // line 339
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null)) || (($context["sidebar_second"] ?? null) &&  !($context["sidebar_first"] ?? null)))) ? ("one-sidebar") : ("")), 6 => (((        // line 340
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("two-sidebars") : ("")), 7 => ((( !        // line 341
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("no-sidebar") : (""))), "method"), "html", null, true));
        // line 342
        echo ">
    <div class=\"outerWrap\">
      <!-- Header starts -->
      <div class=\"fixedHeader\">
        <a class=\"menu\" href=\"javascript:;\">MENU</a>
        <a class=\"logo\" href=\"javascript:;\"><img src=\"/";
        // line 347
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/logo-lodha.png\" alt=\"Lodha\"></a>
        <div class=\"rightSec\">
          <ul>
            <li><a href=\"javascript:;\" class=\"favourite\"><img src=\"/";
        // line 350
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/icon-favourite.png\"></a></li>
            <li><a href=\"javascript:;\" class=\"contact\"><img src=\"/";
        // line 351
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/images/icon-contact.png\"></a></li>
            <li class=\"dropdown\"><a href=\"javascript:;\">PRIVA | MY LODHA</a></li>
            <li class=\"dropdown countryLanguage\"><a href=\"javascript:;\">IND</a></li>
          </ul>
        </div>
      </div>

    ";
        // line 358
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
    ";
        // line 359
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
    ";
        // line 360
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 361
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true));
        echo "\">
    ";
        // line 362
        if ($this->getAttribute(($context["browser_sync"] ?? null), "enabled", array())) {
            // line 363
            echo "      <script id=\"__bs_script__\">
      document.write(\"<script async src='http://";
            // line 364
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["browser_sync"] ?? null), "host", array()), "html", null, true));
            echo ":";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["browser_sync"] ?? null), "port", array()), "html", null, true));
            echo "/browser-sync/browser-sync-client.js'><\\/script>\".replace(\"HOST\", location.hostname));
      </script>
    ";
        }
        // line 367
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
        return array (  464 => 367,  456 => 364,  453 => 363,  451 => 362,  447 => 361,  443 => 360,  439 => 359,  435 => 358,  425 => 351,  421 => 350,  415 => 347,  408 => 342,  406 => 341,  405 => 340,  404 => 339,  403 => 338,  402 => 337,  401 => 336,  399 => 334,  396 => 333,  394 => 332,  391 => 331,  385 => 330,  382 => 329,  377 => 328,  375 => 327,  94 => 49,  90 => 48,  86 => 47,  82 => 46,  79 => 45,  73 => 43,  68 => 41,  64 => 40,  60 => 39,  55 => 38,  53 => 37,  48 => 35,  46 => 34,  43 => 33,);
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
