<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3cb55422fa51c686ce35fc7f7eee4a6cfdb12e01f9408ce42926b351c991918e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93bee01413eb5aa751a6c4564e1d5bac3bb8d903358b3bb11d5bff8d3dc0d831 = $this->env->getExtension("native_profiler");
        $__internal_93bee01413eb5aa751a6c4564e1d5bac3bb8d903358b3bb11d5bff8d3dc0d831->enter($__internal_93bee01413eb5aa751a6c4564e1d5bac3bb8d903358b3bb11d5bff8d3dc0d831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93bee01413eb5aa751a6c4564e1d5bac3bb8d903358b3bb11d5bff8d3dc0d831->leave($__internal_93bee01413eb5aa751a6c4564e1d5bac3bb8d903358b3bb11d5bff8d3dc0d831_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3360eca6d65fd4cb2ae9f6548b8fa975ab5f95cc113704439cb273ae7705b1bf = $this->env->getExtension("native_profiler");
        $__internal_3360eca6d65fd4cb2ae9f6548b8fa975ab5f95cc113704439cb273ae7705b1bf->enter($__internal_3360eca6d65fd4cb2ae9f6548b8fa975ab5f95cc113704439cb273ae7705b1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3360eca6d65fd4cb2ae9f6548b8fa975ab5f95cc113704439cb273ae7705b1bf->leave($__internal_3360eca6d65fd4cb2ae9f6548b8fa975ab5f95cc113704439cb273ae7705b1bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbeab1518ead5efcaf8ceee6fc8a14b6664ba84cf9dac036280ec4ff11e13812 = $this->env->getExtension("native_profiler");
        $__internal_fbeab1518ead5efcaf8ceee6fc8a14b6664ba84cf9dac036280ec4ff11e13812->enter($__internal_fbeab1518ead5efcaf8ceee6fc8a14b6664ba84cf9dac036280ec4ff11e13812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fbeab1518ead5efcaf8ceee6fc8a14b6664ba84cf9dac036280ec4ff11e13812->leave($__internal_fbeab1518ead5efcaf8ceee6fc8a14b6664ba84cf9dac036280ec4ff11e13812_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_93888d4f4211f0a227d8c549b96416733686fb9d174205b331f98e80c1debdc1 = $this->env->getExtension("native_profiler");
        $__internal_93888d4f4211f0a227d8c549b96416733686fb9d174205b331f98e80c1debdc1->enter($__internal_93888d4f4211f0a227d8c549b96416733686fb9d174205b331f98e80c1debdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_93888d4f4211f0a227d8c549b96416733686fb9d174205b331f98e80c1debdc1->leave($__internal_93888d4f4211f0a227d8c549b96416733686fb9d174205b331f98e80c1debdc1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
