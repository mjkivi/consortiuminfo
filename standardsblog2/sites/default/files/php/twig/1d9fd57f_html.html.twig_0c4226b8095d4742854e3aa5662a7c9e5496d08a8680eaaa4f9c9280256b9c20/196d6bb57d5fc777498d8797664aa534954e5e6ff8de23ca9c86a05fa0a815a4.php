<?php

/* themes/basic/templates/html.html.twig */
class __TwigTemplate_40a2442ac49323daaf4da718bd13b2990c2acaa6a35980f8ddea3dcef1183810 extends Twig_Template
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
        $tags = array("if" => 34, "set" => 58, "for" => 59);
        $filters = array("safe_join" => 47, "merge" => 60, "clean_class" => 60, "render" => 63, "t" => 76);
        $functions = array("attach_library" => 35);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('safe_join', 'merge', 'clean_class', 'render', 't'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

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
        if ($this->getAttribute((isset($context["ie_enabled_versions"]) ? $context["ie_enabled_versions"] : null), "ie8", array())) {
            // line 35
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("basic/ie8"), "html", null, true));
            echo "
";
        }
        // line 37
        if (($this->getAttribute((isset($context["ie_enabled_versions"]) ? $context["ie_enabled_versions"] : null), "ie9", array()) || $this->getAttribute((isset($context["ie_enabled_versions"]) ? $context["ie_enabled_versions"] : null), "ie8", array()))) {
            // line 38
            echo "  <!--[if lt IE 7]>     <html";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["html_attributes"]) ? $context["html_attributes"] : null), "addClass", array(0 => "no-js", 1 => "lt-ie9", 2 => "lt-ie8", 3 => "lt-ie7"), "method"), "html", null, true));
            echo "><![endif]-->
  <!--[if IE 7]>        <html";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["html_attributes"]) ? $context["html_attributes"] : null), "removeClass", array(0 => "lt-ie7"), "method"), "html", null, true));
            echo "><![endif]-->
  <!--[if IE 8]>        <html";
            // line 40
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["html_attributes"]) ? $context["html_attributes"] : null), "removeClass", array(0 => "lt-ie8"), "method"), "html", null, true));
            echo "><![endif]-->
  <!--[if gt IE 8]><!--><html";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["html_attributes"]) ? $context["html_attributes"] : null), "removeClass", array(0 => "lt-ie9"), "method"), "html", null, true));
            echo "><!--<![endif]-->
";
        } else {
            // line 43
            echo "<html";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
            echo ">
";
        }
        // line 45
        echo "  <head>
    <head-placeholder token=\"";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
    <title>";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
    <js-placeholder token=\"";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
    <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js\"></script>
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" href=\"/favicon-32x32.png\" sizes=\"32x32\">
    <link rel=\"icon\" type=\"image/png\" href=\"/favicon-16x16.png\" sizes=\"16x16\">
    <link rel=\"manifest\" href=\"/manifest.json\">
    <link rel=\"mask-icon\" href=\"/safari-pinned-tab.svg\" color=\"#5bbad5\">
    <meta name=\"theme-color\" content=\"#ffffff\">
  </head>
  ";
        // line 58
        $context["classes"] = array();
        // line 59
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 60
            echo "    ";
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => ("role--" . \Drupal\Component\Utility\Html::getClass($context["role"]))));
            // line 61
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
  ";
        // line 63
        $context["sidebar_first"] = $this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()));
        // line 64
        echo "  ";
        $context["sidebar_second"] = $this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()));
        // line 65
        echo "  <body";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => (( !        // line 66
(isset($context["is_front"]) ? $context["is_front"] : null)) ? ("with-subnav") : ("")), 2 => ((        // line 67
(isset($context["is_front"]) ? $context["is_front"] : null)) ? ("front") : ("")), 3 => ((        // line 68
(isset($context["sidebar_first"]) ? $context["sidebar_first"] : null)) ? ("sidebar-first") : ("")), 4 => ((        // line 69
(isset($context["sidebar_second"]) ? $context["sidebar_second"] : null)) ? ("sidebar-second") : ("")), 5 => ((((        // line 70
(isset($context["sidebar_first"]) ? $context["sidebar_first"] : null) &&  !(isset($context["sidebar_second"]) ? $context["sidebar_second"] : null)) || ((isset($context["sidebar_second"]) ? $context["sidebar_second"] : null) &&  !(isset($context["sidebar_first"]) ? $context["sidebar_first"] : null)))) ? ("one-sidebar") : ("")), 6 => (((        // line 71
(isset($context["sidebar_first"]) ? $context["sidebar_first"] : null) && (isset($context["sidebar_second"]) ? $context["sidebar_second"] : null))) ? ("two-sidebars") : ("")), 7 => ((( !        // line 72
(isset($context["sidebar_first"]) ? $context["sidebar_first"] : null) &&  !(isset($context["sidebar_second"]) ? $context["sidebar_second"] : null))) ? ("no-sidebar") : (""))), "method"), "html", null, true));
        // line 73
        echo ">
    <div id=\"skip\">
      <a href=\"#main-menu\" class=\"visually-hidden focusable skip-link\">
        ";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main navigation")));
        echo "
      </a>
    </div>
    ";
        // line 79
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 80
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["placeholder_token"]) ? $context["placeholder_token"] : null), "html", null, true));
        echo "\">
    ";
        // line 83
        if ($this->getAttribute((isset($context["browser_sync"]) ? $context["browser_sync"] : null), "enabled", array())) {
            // line 84
            echo "      <script id=\"__bs_script__\">
      document.write(\"<script async src='http://";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["browser_sync"]) ? $context["browser_sync"] : null), "host", array()), "html", null, true));
            echo ":";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["browser_sync"]) ? $context["browser_sync"] : null), "port", array()), "html", null, true));
            echo "/browser-sync/browser-sync-client.js'><\\/script>\".replace(\"HOST\", location.hostname));
      </script>
    ";
        }
        // line 88
        echo "  </body>
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
        return array (  180 => 88,  172 => 85,  169 => 84,  167 => 83,  163 => 82,  159 => 81,  155 => 80,  151 => 79,  145 => 76,  140 => 73,  138 => 72,  137 => 71,  136 => 70,  135 => 69,  134 => 68,  133 => 67,  132 => 66,  130 => 65,  127 => 64,  125 => 63,  122 => 62,  116 => 61,  113 => 60,  108 => 59,  106 => 58,  94 => 49,  90 => 48,  86 => 47,  82 => 46,  79 => 45,  73 => 43,  68 => 41,  64 => 40,  60 => 39,  55 => 38,  53 => 37,  48 => 35,  46 => 34,  43 => 33,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the basic structure of a single Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - logged_in: A flag indicating if user is logged in.*/
/*  * - root_path: The root path of the current page (e.g., node, admin, user).*/
/*  * - node_type: The content type for the current node, if the page is a node.*/
/*  * - css: A list of CSS files for the current page.*/
/*  * - head: Markup for the HEAD element (including meta tags, keyword tags, and*/
/*  *   so on).*/
/*  * - head_title: A modified version of the page title, for use in the TITLE tag.*/
/*  * - head_title_array: List of text elements that make up the head_title*/
/*  *   variable. May contain or more of the following:*/
/*  *   - title: The title of the page.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site.*/
/*  * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/*  * - page: The rendered page markup.*/
/*  * - page_bottom: Closing rendered markup. This variable should be printed after*/
/*  *   'page'.*/
/*  * - styles: Style tags necessary to import all necessary CSS files in the head.*/
/*  * - scripts: Script tags necessary to load the JavaScript files and settings*/
/*  *   in the head.*/
/*  * - db_offline: A flag indicating if the database is offline.*/
/*  **/
/*  * @see template_preprocess_html()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <!DOCTYPE html>*/
/* {% if ie_enabled_versions.ie8 %}*/
/*   {{- attach_library('basic/ie8') }}*/
/* {% endif %}*/
/* {% if ie_enabled_versions.ie9 or ie_enabled_versions.ie8 %}*/
/*   <!--[if lt IE 7]>     <html{{ html_attributes.addClass('no-js', 'lt-ie9', 'lt-ie8', 'lt-ie7') }}><![endif]-->*/
/*   <!--[if IE 7]>        <html{{ html_attributes.removeClass('lt-ie7') }}><![endif]-->*/
/*   <!--[if IE 8]>        <html{{ html_attributes.removeClass('lt-ie8') }}><![endif]-->*/
/*   <!--[if gt IE 8]><!--><html{{ html_attributes.removeClass('lt-ie9') }}><!--<![endif]-->*/
/* {% else -%}*/
/*   <html{{ html_attributes }}>*/
/* {% endif %}*/
/*   <head>*/
/*     <head-placeholder token="{{ placeholder_token }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <css-placeholder token="{{ placeholder_token }}">*/
/*     <js-placeholder token="{{ placeholder_token }}">*/
/*     <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js"></script>*/
/*     <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">*/
/*     <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">*/
/*     <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">*/
/*     <link rel="manifest" href="/manifest.json">*/
/*     <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">*/
/*     <meta name="theme-color" content="#ffffff">*/
/*   </head>*/
/*   {% set classes = [] %}*/
/*   {% for role in user.roles %}*/
/*     {% set classes = classes|merge(['role--' ~ role|clean_class]) %}*/
/*   {% endfor %}*/
/* */
/*   {% set sidebar_first = page.sidebar_first|render %}*/
/*   {% set sidebar_second = page.sidebar_second|render %}*/
/*   <body{{ attributes.addClass(classes,*/
/*     not is_front ? 'with-subnav',*/
/*     is_front ? 'front',*/
/*     sidebar_first ? 'sidebar-first',*/
/*     sidebar_second ? 'sidebar-second',*/
/*     (sidebar_first and not sidebar_second) or (sidebar_second and not sidebar_first) ? 'one-sidebar',*/
/*     (sidebar_first and sidebar_second) ? 'two-sidebars',*/
/*     (not sidebar_first and not sidebar_second) ? 'no-sidebar'*/
/*   ) }}>*/
/*     <div id="skip">*/
/*       <a href="#main-menu" class="visually-hidden focusable skip-link">*/
/*         {{ 'Skip to main navigation'|t }}*/
/*       </a>*/
/*     </div>*/
/*     {{ page_top }}*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/*     <js-bottom-placeholder token="{{ placeholder_token }}">*/
/*     {% if browser_sync.enabled %}*/
/*       <script id="__bs_script__">*/
/*       document.write("<script async src='http://{{ browser_sync.host }}:{{ browser_sync.port }}/browser-sync/browser-sync-client.js'><\/script>".replace("HOST", location.hostname));*/
/*       </script>*/
/*     {% endif %}*/
/*   </body>*/
/* </html>*/
/* */
