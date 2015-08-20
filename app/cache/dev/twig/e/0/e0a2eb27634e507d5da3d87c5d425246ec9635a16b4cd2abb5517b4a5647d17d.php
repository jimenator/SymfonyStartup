<?php

/* Agenda/agenda.html.twig */
class __TwigTemplate_e0a2eb27634e507d5da3d87c5d425246ec9635a16b4cd2abb5517b4a5647d17d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Agenda/agenda.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_772829c79cc99076c52867e0cbc9053745cb1e90a2a0ea54bc2a0a88068fdcda = $this->env->getExtension("native_profiler");
        $__internal_772829c79cc99076c52867e0cbc9053745cb1e90a2a0ea54bc2a0a88068fdcda->enter($__internal_772829c79cc99076c52867e0cbc9053745cb1e90a2a0ea54bc2a0a88068fdcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Agenda/agenda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_772829c79cc99076c52867e0cbc9053745cb1e90a2a0ea54bc2a0a88068fdcda->leave($__internal_772829c79cc99076c52867e0cbc9053745cb1e90a2a0ea54bc2a0a88068fdcda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3aa5140bd98dc7f693752e4d3fd838dfb7c7dcef289343b057694a533b0e3275 = $this->env->getExtension("native_profiler");
        $__internal_3aa5140bd98dc7f693752e4d3fd838dfb7c7dcef289343b057694a533b0e3275->enter($__internal_3aa5140bd98dc7f693752e4d3fd838dfb7c7dcef289343b057694a533b0e3275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table id=\"telefonTabe\">
            <tr>
                <th>Nombre</th>
                <th>Número</th>
            </tr>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["telefonNumbers"]) ? $context["telefonNumbers"] : $this->getContext($context, "telefonNumbers")));
        foreach ($context['_seq'] as $context["_key"] => $context["numberRow"]) {
            // line 10
            echo "            <tr>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["numberRow"], "name", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["numberRow"], "telefonNumber", array(), "array"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numberRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </table>
";
        
        $__internal_3aa5140bd98dc7f693752e4d3fd838dfb7c7dcef289343b057694a533b0e3275->leave($__internal_3aa5140bd98dc7f693752e4d3fd838dfb7c7dcef289343b057694a533b0e3275_prof);

    }

    public function getTemplateName()
    {
        return "Agenda/agenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  58 => 12,  54 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
