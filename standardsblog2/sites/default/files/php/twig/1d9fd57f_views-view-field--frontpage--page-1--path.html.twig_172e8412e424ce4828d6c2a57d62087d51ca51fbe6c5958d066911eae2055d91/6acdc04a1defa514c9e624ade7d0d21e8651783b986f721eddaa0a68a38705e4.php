<?php

/* themes/basic/templates/views-view-field--frontpage--page-1--path.html.twig */
class __TwigTemplate_233ae1967bb39f7f3ccfbdcdae4f87f3bd1ead53a00534160751cdfb2aa1c3ad extends Twig_Template
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
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 21
        echo "
<div class=\"addthis_toolbox addthis_default_style addthis_32x32_style\" addthis:url=\"http://www.consortiuminfo.org/standardsblog/article.php?story=";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "field", array()), "field_geeklog_sid", array()), "original_value", array()), "html", null, true));
        echo "\" addthis:title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "field", array()), "title_1", array()), "original_value", array()), "html", null, true));
        echo "\">
    <a class=\"addthis_button_preferred_1\"></a>
    <a class=\"addthis_button_preferred_2\"></a>
    <a class=\"addthis_button_preferred_3\"></a>
    <a class=\"addthis_button_preferred_4\"></a>
    <a class=\"addthis_button_compact\"></a>
    <a class=\"addthis_counter addthis_bubble_style\"></a>
</div>

<div style=\"margin: 8px 0; overflow: visible;\">
   <iframe src=\"//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.consortiuminfo.org%2Fstandardsblog%2Farticle.php%3Fstory%3D";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "field", array()), "field_geeklog_sid", array()), "original_value", array()), "html", null, true));
        echo "&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=35\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:450px; height:35px;\" allowTransparency=\"true\"></iframe>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/views-view-field--frontpage--page-1--path.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 32,  46 => 22,  43 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a single field in a view.*/
/*  **/
/*  * Available variables:*/
/*  * - view: The view that the field belongs to.*/
/*  * - field: The field handler that can process the input.*/
/*  * - row: The raw result of the database query that generated this field.*/
/*  * - output: The processed output that will normally be used.*/
/*  **/
/*  * When fetching output from the row this construct should be used:*/
/*  * data = row[field.field_alias]*/
/*  **/
/*  * The above will guarantee that you'll always get the correct data, regardless*/
/*  * of any changes in the aliasing that might happen if the view is modified.*/
/*  **/
/*  * @see template_preprocess_views_view_field()*/
/*  *//* */
/* #}*/
/* */
/* <div class="addthis_toolbox addthis_default_style addthis_32x32_style" addthis:url="http://www.consortiuminfo.org/standardsblog/article.php?story={{ view.field.field_geeklog_sid.original_value }}" addthis:title="{{ view.field.title_1.original_value }}">*/
/*     <a class="addthis_button_preferred_1"></a>*/
/*     <a class="addthis_button_preferred_2"></a>*/
/*     <a class="addthis_button_preferred_3"></a>*/
/*     <a class="addthis_button_preferred_4"></a>*/
/*     <a class="addthis_button_compact"></a>*/
/*     <a class="addthis_counter addthis_bubble_style"></a>*/
/* </div>*/
/* */
/* <div style="margin: 8px 0; overflow: visible;">*/
/*    <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.consortiuminfo.org%2Fstandardsblog%2Farticle.php%3Fstory%3D{{ view.field.field_geeklog_sid.original_value }}&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe>*/
/* </div>*/
/* */
/* */
