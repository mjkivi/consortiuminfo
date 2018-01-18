<?php

/* {# inline_template_start #}<div class="article-footer"><a href="{{ path_1 }}">read more</a> | Comments ({{ comment_count }}) </div> */
class __TwigTemplate_9587c78aa8a7e46c560cdcc9a069cc844aa2b8d863d3dcd051494c6d44fc2b8e extends Twig_Template
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

        // line 1
        echo "<div class=\"article-footer\"><a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["path_1"]) ? $context["path_1"] : null), "html", null, true));
        echo "\">read more</a> | Comments (";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["comment_count"]) ? $context["comment_count"] : null), "html", null, true));
        echo ") </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"article-footer\"><a href=\"{{ path_1 }}\">read more</a> | Comments ({{ comment_count }}) </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* {# inline_template_start #}<div class="article-footer"><a href="{{ path_1 }}">read more</a> | Comments ({{ comment_count }}) </div>*/
