<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_913825cc4b9fe0cce7bce6ab8bcb73c4b1ff1c2567baba0e8ccc80eb2508d803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a198eb9bf558fc259b8eeca2e2a91731fe54ed28d52d4697d44ba120a5543717 = $this->env->getExtension("native_profiler");
        $__internal_a198eb9bf558fc259b8eeca2e2a91731fe54ed28d52d4697d44ba120a5543717->enter($__internal_a198eb9bf558fc259b8eeca2e2a91731fe54ed28d52d4697d44ba120a5543717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a198eb9bf558fc259b8eeca2e2a91731fe54ed28d52d4697d44ba120a5543717->leave($__internal_a198eb9bf558fc259b8eeca2e2a91731fe54ed28d52d4697d44ba120a5543717_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b75f0ddf4925470ea59c6632ab9c15fc10ad60a26127e05ce165338ffdca38fd = $this->env->getExtension("native_profiler");
        $__internal_b75f0ddf4925470ea59c6632ab9c15fc10ad60a26127e05ce165338ffdca38fd->enter($__internal_b75f0ddf4925470ea59c6632ab9c15fc10ad60a26127e05ce165338ffdca38fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b75f0ddf4925470ea59c6632ab9c15fc10ad60a26127e05ce165338ffdca38fd->leave($__internal_b75f0ddf4925470ea59c6632ab9c15fc10ad60a26127e05ce165338ffdca38fd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f23ce0f6f5d56d74f9368f2a2d376fc5df2b1cef09ef9dd4df13e1e9c81e21a1 = $this->env->getExtension("native_profiler");
        $__internal_f23ce0f6f5d56d74f9368f2a2d376fc5df2b1cef09ef9dd4df13e1e9c81e21a1->enter($__internal_f23ce0f6f5d56d74f9368f2a2d376fc5df2b1cef09ef9dd4df13e1e9c81e21a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f23ce0f6f5d56d74f9368f2a2d376fc5df2b1cef09ef9dd4df13e1e9c81e21a1->leave($__internal_f23ce0f6f5d56d74f9368f2a2d376fc5df2b1cef09ef9dd4df13e1e9c81e21a1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_51740bfc456c3c88259cfcd3e96c8a54866d514e1ba3020e6237af58565a47be = $this->env->getExtension("native_profiler");
        $__internal_51740bfc456c3c88259cfcd3e96c8a54866d514e1ba3020e6237af58565a47be->enter($__internal_51740bfc456c3c88259cfcd3e96c8a54866d514e1ba3020e6237af58565a47be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_51740bfc456c3c88259cfcd3e96c8a54866d514e1ba3020e6237af58565a47be->leave($__internal_51740bfc456c3c88259cfcd3e96c8a54866d514e1ba3020e6237af58565a47be_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e020f0a3d5e63b15ae80408388b4f831bd8b68dcae20b2f0dbd750f6a9d5d02 = $this->env->getExtension("native_profiler");
        $__internal_5e020f0a3d5e63b15ae80408388b4f831bd8b68dcae20b2f0dbd750f6a9d5d02->enter($__internal_5e020f0a3d5e63b15ae80408388b4f831bd8b68dcae20b2f0dbd750f6a9d5d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5e020f0a3d5e63b15ae80408388b4f831bd8b68dcae20b2f0dbd750f6a9d5d02->leave($__internal_5e020f0a3d5e63b15ae80408388b4f831bd8b68dcae20b2f0dbd750f6a9d5d02_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
