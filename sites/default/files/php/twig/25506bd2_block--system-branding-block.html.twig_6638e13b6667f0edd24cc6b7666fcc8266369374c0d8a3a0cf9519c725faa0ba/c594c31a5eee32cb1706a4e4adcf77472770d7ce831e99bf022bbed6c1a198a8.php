<?php

/* themes/custom/startupgrowth_lite/templates/block--system-branding-block.html.twig */
class __TwigTemplate_bcb9162fca2dfcc0689a376340ee9bb536a899283b0f1d39f5618f1328ef1cf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/startupgrowth_lite/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 16, "if" => 19);
        $filters = array("t" => 21);
        $functions = array("path" => 21);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
                array('path')
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

        // line 16
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "site-branding"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "  <div class=\"logo-and-site-name-wrapper clearfix\">
    ";
        // line 19
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 20
            echo "      <div class=\"logo\">
        <a href=\"";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" class=\"site-branding__logo\">
          <img src=\"";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
        </a>
      </div>
    ";
        }
        // line 26
        echo "    ";
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 27
            echo "      <div class=\"site-name site-branding__name\">
        <a href=\"";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "</a>
      </div>
    ";
        }
        // line 31
        echo "    ";
        if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
            // line 32
            echo "      <div class=\"site-slogan site-branding__slogan\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
            echo "</div>
    ";
        }
        // line 34
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/startupgrowth_lite/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  100 => 32,  97 => 31,  87 => 28,  84 => 27,  81 => 26,  72 => 22,  66 => 21,  63 => 20,  61 => 19,  58 => 18,  55 => 17,  51 => 1,  49 => 16,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Startup Growth Lite's theme implementation for a branding block.*/
/*  **/
/*  * Each branding element variable (logo, name, slogan) is only available if*/
/*  * enabled in the block configuration.*/
/*  **/
/*  * Available variables:*/
/*  * - site_logo: Logo for site as defined in Appearance or theme settings.*/
/*  * - site_name: Name for site as defined in Site information settings.*/
/*  * - site_slogan: Slogan for site as defined in Site information settings.*/
/*  *//* */
/* #}*/
/* {% set attributes = attributes.addClass('site-branding') %}*/
/* {% block content %}*/
/*   <div class="logo-and-site-name-wrapper clearfix">*/
/*     {% if site_logo %}*/
/*       <div class="logo">*/
/*         <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home" class="site-branding__logo">*/
/*           <img src="{{ site_logo }}" alt="{{ 'Home'|t }}" />*/
/*         </a>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if site_name %}*/
/*       <div class="site-name site-branding__name">*/
/*         <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if site_slogan %}*/
/*       <div class="site-slogan site-branding__slogan">{{ site_slogan }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
