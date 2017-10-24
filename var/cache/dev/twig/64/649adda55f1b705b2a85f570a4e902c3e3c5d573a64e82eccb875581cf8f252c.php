<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_44c5857888a149698001aa323bce41e77257ff0cd4fadd7bc5791515662b3bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c5857888a149698001aa323bce41e77257ff0cd4fadd7bc5791515662b3bae->enter($__internal_44c5857888a149698001aa323bce41e77257ff0cd4fadd7bc5791515662b3bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_61e83f3b786f022b728804ee52b2e7265cf005adb4cf087b69ae21b46494d464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e83f3b786f022b728804ee52b2e7265cf005adb4cf087b69ae21b46494d464->enter($__internal_61e83f3b786f022b728804ee52b2e7265cf005adb4cf087b69ae21b46494d464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44c5857888a149698001aa323bce41e77257ff0cd4fadd7bc5791515662b3bae->leave($__internal_44c5857888a149698001aa323bce41e77257ff0cd4fadd7bc5791515662b3bae_prof);

        
        $__internal_61e83f3b786f022b728804ee52b2e7265cf005adb4cf087b69ae21b46494d464->leave($__internal_61e83f3b786f022b728804ee52b2e7265cf005adb4cf087b69ae21b46494d464_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_575eccacb21340e89dfc70258bd30d4c6ad3d2aaf33c8ee9510f99156990d7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575eccacb21340e89dfc70258bd30d4c6ad3d2aaf33c8ee9510f99156990d7a2->enter($__internal_575eccacb21340e89dfc70258bd30d4c6ad3d2aaf33c8ee9510f99156990d7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a8c280a4be998ecfebfa7f937bd7f8c408731c02c19b521f90ec4113df0a9497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c280a4be998ecfebfa7f937bd7f8c408731c02c19b521f90ec4113df0a9497->enter($__internal_a8c280a4be998ecfebfa7f937bd7f8c408731c02c19b521f90ec4113df0a9497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a8c280a4be998ecfebfa7f937bd7f8c408731c02c19b521f90ec4113df0a9497->leave($__internal_a8c280a4be998ecfebfa7f937bd7f8c408731c02c19b521f90ec4113df0a9497_prof);

        
        $__internal_575eccacb21340e89dfc70258bd30d4c6ad3d2aaf33c8ee9510f99156990d7a2->leave($__internal_575eccacb21340e89dfc70258bd30d4c6ad3d2aaf33c8ee9510f99156990d7a2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88a71407c10470d6960f64210d840749f62d9b68875db1f962edddd57951d4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a71407c10470d6960f64210d840749f62d9b68875db1f962edddd57951d4f7->enter($__internal_88a71407c10470d6960f64210d840749f62d9b68875db1f962edddd57951d4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7854cce4c1b9b4c6a62ca4e693ad0d21204763fd19d00cab75a7dac523ec3bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7854cce4c1b9b4c6a62ca4e693ad0d21204763fd19d00cab75a7dac523ec3bf3->enter($__internal_7854cce4c1b9b4c6a62ca4e693ad0d21204763fd19d00cab75a7dac523ec3bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7854cce4c1b9b4c6a62ca4e693ad0d21204763fd19d00cab75a7dac523ec3bf3->leave($__internal_7854cce4c1b9b4c6a62ca4e693ad0d21204763fd19d00cab75a7dac523ec3bf3_prof);

        
        $__internal_88a71407c10470d6960f64210d840749f62d9b68875db1f962edddd57951d4f7->leave($__internal_88a71407c10470d6960f64210d840749f62d9b68875db1f962edddd57951d4f7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_328e086f42ab63d73aeeec033839a02287f8d0591fd4d58374e60cb429056843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328e086f42ab63d73aeeec033839a02287f8d0591fd4d58374e60cb429056843->enter($__internal_328e086f42ab63d73aeeec033839a02287f8d0591fd4d58374e60cb429056843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_15fd39e6d842247ef42c88bc333d51c6e0505a73406c62bfd41f84e99f5e49f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fd39e6d842247ef42c88bc333d51c6e0505a73406c62bfd41f84e99f5e49f3->enter($__internal_15fd39e6d842247ef42c88bc333d51c6e0505a73406c62bfd41f84e99f5e49f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_15fd39e6d842247ef42c88bc333d51c6e0505a73406c62bfd41f84e99f5e49f3->leave($__internal_15fd39e6d842247ef42c88bc333d51c6e0505a73406c62bfd41f84e99f5e49f3_prof);

        
        $__internal_328e086f42ab63d73aeeec033839a02287f8d0591fd4d58374e60cb429056843->leave($__internal_328e086f42ab63d73aeeec033839a02287f8d0591fd4d58374e60cb429056843_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/fannyperret/Desktop/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
