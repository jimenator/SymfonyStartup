<?php

/* SensioDistributionBundle::Configurator/check.html.twig */
class __TwigTemplate_443bb54706fc2e67dc7154d58e3b388e3084104f1c0aaad327c79b850f68baac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle::Configurator/check.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bebf7026b166e3e29723ef6b7983b3033fe33e5b113c04d72d6fbb8a4d056fc = $this->env->getExtension("native_profiler");
        $__internal_8bebf7026b166e3e29723ef6b7983b3033fe33e5b113c04d72d6fbb8a4d056fc->enter($__internal_8bebf7026b166e3e29723ef6b7983b3033fe33e5b113c04d72d6fbb8a4d056fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bebf7026b166e3e29723ef6b7983b3033fe33e5b113c04d72d6fbb8a4d056fc->leave($__internal_8bebf7026b166e3e29723ef6b7983b3033fe33e5b113c04d72d6fbb8a4d056fc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9fba08cde78519f8dc0dc8dfdbf72131e6c18825b07ebb4476fdc3a9427d1cb = $this->env->getExtension("native_profiler");
        $__internal_c9fba08cde78519f8dc0dc8dfdbf72131e6c18825b07ebb4476fdc3a9427d1cb->enter($__internal_c9fba08cde78519f8dc0dc8dfdbf72131e6c18825b07ebb4476fdc3a9427d1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ( !twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
        
        $__internal_c9fba08cde78519f8dc0dc8dfdbf72131e6c18825b07ebb4476fdc3a9427d1cb->leave($__internal_c9fba08cde78519f8dc0dc8dfdbf72131e6c18825b07ebb4476fdc3a9427d1cb_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  121 => 39,  119 => 38,  116 => 37,  110 => 33,  101 => 31,  97 => 30,  91 => 26,  87 => 24,  83 => 22,  81 => 21,  76 => 18,  74 => 17,  71 => 16,  67 => 14,  58 => 12,  54 => 11,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
