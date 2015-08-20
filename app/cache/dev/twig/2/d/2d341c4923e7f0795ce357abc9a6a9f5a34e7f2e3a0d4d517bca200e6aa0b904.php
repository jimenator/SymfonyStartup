<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_2d341c4923e7f0795ce357abc9a6a9f5a34e7f2e3a0d4d517bca200e6aa0b904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73f66fc828f19355b9683d14abc149cc8606c3cfa5e37d348ca4f7a0b8ca1c6e = $this->env->getExtension("native_profiler");
        $__internal_73f66fc828f19355b9683d14abc149cc8606c3cfa5e37d348ca4f7a0b8ca1c6e->enter($__internal_73f66fc828f19355b9683d14abc149cc8606c3cfa5e37d348ca4f7a0b8ca1c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73f66fc828f19355b9683d14abc149cc8606c3cfa5e37d348ca4f7a0b8ca1c6e->leave($__internal_73f66fc828f19355b9683d14abc149cc8606c3cfa5e37d348ca4f7a0b8ca1c6e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c0b3dafb9273fdbc41befef5a64abcc5179401854f3dee69fd9d8aa323b549e = $this->env->getExtension("native_profiler");
        $__internal_1c0b3dafb9273fdbc41befef5a64abcc5179401854f3dee69fd9d8aa323b549e->enter($__internal_1c0b3dafb9273fdbc41befef5a64abcc5179401854f3dee69fd9d8aa323b549e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Configure database";
        
        $__internal_1c0b3dafb9273fdbc41befef5a64abcc5179401854f3dee69fd9d8aa323b549e->leave($__internal_1c0b3dafb9273fdbc41befef5a64abcc5179401854f3dee69fd9d8aa323b549e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_03ce674c3c6ccc151795a1bb09771abf466a0f0ef07d1f3b2856f15c488e7b85 = $this->env->getExtension("native_profiler");
        $__internal_03ce674c3c6ccc151795a1bb09771abf466a0f0ef07d1f3b2856f15c488e7b85->enter($__internal_03ce674c3c6ccc151795a1bb09771abf466a0f0ef07d1f3b2856f15c488e7b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 9)->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver", array()), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
        
        $__internal_03ce674c3c6ccc151795a1bb09771abf466a0f0ef07d1f3b2856f15c488e7b85->leave($__internal_03ce674c3c6ccc151795a1bb09771abf466a0f0ef07d1f3b2856f15c488e7b85_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  97 => 25,  93 => 24,  87 => 21,  83 => 20,  79 => 19,  74 => 17,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
