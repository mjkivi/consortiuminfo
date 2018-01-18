<?php

/* modules/responsive_menu/templates/responsive-menu-block-wrapper.html.twig */
class __TwigTemplate_01a58be30ad4173e62b54aa680c2ecbbcc18cd26cfed3e5ed2196f6321e445f6 extends Twig_Template
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

        // line 10
        echo "<nav class=\"responsive-menu-block-wrapper\">
  ";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
</nav>";
    }

    public function getTemplateName()
    {
        return "modules/responsive_menu/templates/responsive-menu-block-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  43 => 10,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template to wrap the output of the menu.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The menu content to be rendered.*/
/*  *//* */
/* #}*/
/* <nav class="responsive-menu-block-wrapper">*/
/*   {{ content }}*/
/* </nav>*/
