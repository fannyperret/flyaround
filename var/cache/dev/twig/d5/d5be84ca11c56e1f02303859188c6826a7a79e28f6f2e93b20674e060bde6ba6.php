<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0941549a687752909af15c9a5fdb30eaff916449eee8e879b9fb2f0441812886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0941549a687752909af15c9a5fdb30eaff916449eee8e879b9fb2f0441812886->enter($__internal_0941549a687752909af15c9a5fdb30eaff916449eee8e879b9fb2f0441812886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f98b44f929030a9a81a1d66bb29e6e48412c56a65826f484dc98229766b107f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98b44f929030a9a81a1d66bb29e6e48412c56a65826f484dc98229766b107f0->enter($__internal_f98b44f929030a9a81a1d66bb29e6e48412c56a65826f484dc98229766b107f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0941549a687752909af15c9a5fdb30eaff916449eee8e879b9fb2f0441812886->leave($__internal_0941549a687752909af15c9a5fdb30eaff916449eee8e879b9fb2f0441812886_prof);

        
        $__internal_f98b44f929030a9a81a1d66bb29e6e48412c56a65826f484dc98229766b107f0->leave($__internal_f98b44f929030a9a81a1d66bb29e6e48412c56a65826f484dc98229766b107f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_62d32d81522eebe50b778cfe67a6be5cb9d458e2a565045ac05d45e71aa17f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d32d81522eebe50b778cfe67a6be5cb9d458e2a565045ac05d45e71aa17f47->enter($__internal_62d32d81522eebe50b778cfe67a6be5cb9d458e2a565045ac05d45e71aa17f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dee4871ec7a88b4ace5afbcaab181f453c42a647fcd78fd687ca7fac454d5c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee4871ec7a88b4ace5afbcaab181f453c42a647fcd78fd687ca7fac454d5c57->enter($__internal_dee4871ec7a88b4ace5afbcaab181f453c42a647fcd78fd687ca7fac454d5c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dee4871ec7a88b4ace5afbcaab181f453c42a647fcd78fd687ca7fac454d5c57->leave($__internal_dee4871ec7a88b4ace5afbcaab181f453c42a647fcd78fd687ca7fac454d5c57_prof);

        
        $__internal_62d32d81522eebe50b778cfe67a6be5cb9d458e2a565045ac05d45e71aa17f47->leave($__internal_62d32d81522eebe50b778cfe67a6be5cb9d458e2a565045ac05d45e71aa17f47_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43a0b979324676f3cbe65dd39bac1ed82b34195a87f583c934ff7315bbe18683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a0b979324676f3cbe65dd39bac1ed82b34195a87f583c934ff7315bbe18683->enter($__internal_43a0b979324676f3cbe65dd39bac1ed82b34195a87f583c934ff7315bbe18683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a03ca075354a0b30db9f7aa223aa196e1b379f956f40bf0827212e47cebbc593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03ca075354a0b30db9f7aa223aa196e1b379f956f40bf0827212e47cebbc593->enter($__internal_a03ca075354a0b30db9f7aa223aa196e1b379f956f40bf0827212e47cebbc593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a03ca075354a0b30db9f7aa223aa196e1b379f956f40bf0827212e47cebbc593->leave($__internal_a03ca075354a0b30db9f7aa223aa196e1b379f956f40bf0827212e47cebbc593_prof);

        
        $__internal_43a0b979324676f3cbe65dd39bac1ed82b34195a87f583c934ff7315bbe18683->leave($__internal_43a0b979324676f3cbe65dd39bac1ed82b34195a87f583c934ff7315bbe18683_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6874fce8b6bfd4eeb1c34689b005cf64f2b1deeb0f346cc7bf4fb9fcf32d2de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6874fce8b6bfd4eeb1c34689b005cf64f2b1deeb0f346cc7bf4fb9fcf32d2de1->enter($__internal_6874fce8b6bfd4eeb1c34689b005cf64f2b1deeb0f346cc7bf4fb9fcf32d2de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c1adc22098fab3d695758b331b07dec801ccafe311ade44bc2302094dd7616af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1adc22098fab3d695758b331b07dec801ccafe311ade44bc2302094dd7616af->enter($__internal_c1adc22098fab3d695758b331b07dec801ccafe311ade44bc2302094dd7616af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c1adc22098fab3d695758b331b07dec801ccafe311ade44bc2302094dd7616af->leave($__internal_c1adc22098fab3d695758b331b07dec801ccafe311ade44bc2302094dd7616af_prof);

        
        $__internal_6874fce8b6bfd4eeb1c34689b005cf64f2b1deeb0f346cc7bf4fb9fcf32d2de1->leave($__internal_6874fce8b6bfd4eeb1c34689b005cf64f2b1deeb0f346cc7bf4fb9fcf32d2de1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/fannyperret/Desktop/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
