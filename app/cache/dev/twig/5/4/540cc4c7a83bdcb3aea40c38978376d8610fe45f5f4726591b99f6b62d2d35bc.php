<?php

/* base.html.twig */
class __TwigTemplate_540cc4c7a83bdcb3aea40c38978376d8610fe45f5f4726591b99f6b62d2d35bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a843054aae52f53487951ac95d6e9ac6dd1c68c301902ac4aa94793f34236406 = $this->env->getExtension("native_profiler");
        $__internal_a843054aae52f53487951ac95d6e9ac6dd1c68c301902ac4aa94793f34236406->enter($__internal_a843054aae52f53487951ac95d6e9ac6dd1c68c301902ac4aa94793f34236406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a843054aae52f53487951ac95d6e9ac6dd1c68c301902ac4aa94793f34236406->leave($__internal_a843054aae52f53487951ac95d6e9ac6dd1c68c301902ac4aa94793f34236406_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b6574a5c45aee2b0998a525ec5a1261c8a6905e2efb3b096ac9eb25b871d422 = $this->env->getExtension("native_profiler");
        $__internal_3b6574a5c45aee2b0998a525ec5a1261c8a6905e2efb3b096ac9eb25b871d422->enter($__internal_3b6574a5c45aee2b0998a525ec5a1261c8a6905e2efb3b096ac9eb25b871d422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3b6574a5c45aee2b0998a525ec5a1261c8a6905e2efb3b096ac9eb25b871d422->leave($__internal_3b6574a5c45aee2b0998a525ec5a1261c8a6905e2efb3b096ac9eb25b871d422_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7afe237ca37d842dd4471b4a94846bb07dce125ef3516ac6de48ac6f096a81a5 = $this->env->getExtension("native_profiler");
        $__internal_7afe237ca37d842dd4471b4a94846bb07dce125ef3516ac6de48ac6f096a81a5->enter($__internal_7afe237ca37d842dd4471b4a94846bb07dce125ef3516ac6de48ac6f096a81a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7afe237ca37d842dd4471b4a94846bb07dce125ef3516ac6de48ac6f096a81a5->leave($__internal_7afe237ca37d842dd4471b4a94846bb07dce125ef3516ac6de48ac6f096a81a5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ee786ec1d96e21739bfee1c71c6db089fc4d3e4c6c657d057c9312a58a2deda = $this->env->getExtension("native_profiler");
        $__internal_2ee786ec1d96e21739bfee1c71c6db089fc4d3e4c6c657d057c9312a58a2deda->enter($__internal_2ee786ec1d96e21739bfee1c71c6db089fc4d3e4c6c657d057c9312a58a2deda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ee786ec1d96e21739bfee1c71c6db089fc4d3e4c6c657d057c9312a58a2deda->leave($__internal_2ee786ec1d96e21739bfee1c71c6db089fc4d3e4c6c657d057c9312a58a2deda_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_abce4bbb0485dcd28ca7969cdd8d65d71433f40d7c2add0ffecf44ad5097a573 = $this->env->getExtension("native_profiler");
        $__internal_abce4bbb0485dcd28ca7969cdd8d65d71433f40d7c2add0ffecf44ad5097a573->enter($__internal_abce4bbb0485dcd28ca7969cdd8d65d71433f40d7c2add0ffecf44ad5097a573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_abce4bbb0485dcd28ca7969cdd8d65d71433f40d7c2add0ffecf44ad5097a573->leave($__internal_abce4bbb0485dcd28ca7969cdd8d65d71433f40d7c2add0ffecf44ad5097a573_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
