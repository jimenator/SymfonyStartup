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
        $__internal_e99197a7afa4a83763ace80c7e0ab85b706796a7c17973b6e38aa1c15d25c3e6 = $this->env->getExtension("native_profiler");
        $__internal_e99197a7afa4a83763ace80c7e0ab85b706796a7c17973b6e38aa1c15d25c3e6->enter($__internal_e99197a7afa4a83763ace80c7e0ab85b706796a7c17973b6e38aa1c15d25c3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Agenda/agenda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e99197a7afa4a83763ace80c7e0ab85b706796a7c17973b6e38aa1c15d25c3e6->leave($__internal_e99197a7afa4a83763ace80c7e0ab85b706796a7c17973b6e38aa1c15d25c3e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a95a9de17e05a725e21008f4f3b097bb15e2816a61d25725aa546f195d1b5ff3 = $this->env->getExtension("native_profiler");
        $__internal_a95a9de17e05a725e21008f4f3b097bb15e2816a61d25725aa546f195d1b5ff3->enter($__internal_a95a9de17e05a725e21008f4f3b097bb15e2816a61d25725aa546f195d1b5ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "
    <table id=\"telefonTabe\">
            <tr>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("Agenda.name")), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("Agenda.telephone")), "html", null, true);
        echo "</th>
            </tr>
        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["telefonNumbers"]) ? $context["telefonNumbers"] : $this->getContext($context, "telefonNumbers")));
        foreach ($context['_seq'] as $context["_key"] => $context["numberRow"]) {
            // line 11
            echo "            <tr>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["numberRow"], "name", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["numberRow"], "telefonNumber", array(), "array"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numberRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </table>
";
        
        $__internal_a95a9de17e05a725e21008f4f3b097bb15e2816a61d25725aa546f195d1b5ff3->leave($__internal_a95a9de17e05a725e21008f4f3b097bb15e2816a61d25725aa546f195d1b5ff3_prof);

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
        return array (  76 => 16,  67 => 13,  63 => 12,  60 => 11,  56 => 10,  51 => 8,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
