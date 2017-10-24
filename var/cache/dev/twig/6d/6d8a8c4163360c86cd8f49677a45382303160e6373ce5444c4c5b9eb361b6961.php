<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
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
        $__internal_b6526defb32ff4f660474d718a22b20e0ced0eac42c9ff6ccdddb4f4363a4ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6526defb32ff4f660474d718a22b20e0ced0eac42c9ff6ccdddb4f4363a4ea8->enter($__internal_b6526defb32ff4f660474d718a22b20e0ced0eac42c9ff6ccdddb4f4363a4ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a7cc0297bc1b2eb9de06afc5deaea894032df74b085e501d021615a59e544ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cc0297bc1b2eb9de06afc5deaea894032df74b085e501d021615a59e544ecf->enter($__internal_a7cc0297bc1b2eb9de06afc5deaea894032df74b085e501d021615a59e544ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_b6526defb32ff4f660474d718a22b20e0ced0eac42c9ff6ccdddb4f4363a4ea8->leave($__internal_b6526defb32ff4f660474d718a22b20e0ced0eac42c9ff6ccdddb4f4363a4ea8_prof);

        
        $__internal_a7cc0297bc1b2eb9de06afc5deaea894032df74b085e501d021615a59e544ecf->leave($__internal_a7cc0297bc1b2eb9de06afc5deaea894032df74b085e501d021615a59e544ecf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f556bb34d25fd0ba7be6aa45c0b110a1ff26d47a23274275e1a5620c5192d0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f556bb34d25fd0ba7be6aa45c0b110a1ff26d47a23274275e1a5620c5192d0d9->enter($__internal_f556bb34d25fd0ba7be6aa45c0b110a1ff26d47a23274275e1a5620c5192d0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e19ac5c7abbca32ce26465e4c4fea26fd9d0730d8cfe3d56d16d7d6aa76bf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e19ac5c7abbca32ce26465e4c4fea26fd9d0730d8cfe3d56d16d7d6aa76bf8b->enter($__internal_2e19ac5c7abbca32ce26465e4c4fea26fd9d0730d8cfe3d56d16d7d6aa76bf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2e19ac5c7abbca32ce26465e4c4fea26fd9d0730d8cfe3d56d16d7d6aa76bf8b->leave($__internal_2e19ac5c7abbca32ce26465e4c4fea26fd9d0730d8cfe3d56d16d7d6aa76bf8b_prof);

        
        $__internal_f556bb34d25fd0ba7be6aa45c0b110a1ff26d47a23274275e1a5620c5192d0d9->leave($__internal_f556bb34d25fd0ba7be6aa45c0b110a1ff26d47a23274275e1a5620c5192d0d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ac2fdb691cfedfa230f04e2e95e3ef2a400db95fd6f14804f7f679d997da17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac2fdb691cfedfa230f04e2e95e3ef2a400db95fd6f14804f7f679d997da17f->enter($__internal_5ac2fdb691cfedfa230f04e2e95e3ef2a400db95fd6f14804f7f679d997da17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d90cdbff936dd5b70005e5afa3b9fee8dc01b69ab26734b3bcaaa4eaff817cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90cdbff936dd5b70005e5afa3b9fee8dc01b69ab26734b3bcaaa4eaff817cd2->enter($__internal_d90cdbff936dd5b70005e5afa3b9fee8dc01b69ab26734b3bcaaa4eaff817cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d90cdbff936dd5b70005e5afa3b9fee8dc01b69ab26734b3bcaaa4eaff817cd2->leave($__internal_d90cdbff936dd5b70005e5afa3b9fee8dc01b69ab26734b3bcaaa4eaff817cd2_prof);

        
        $__internal_5ac2fdb691cfedfa230f04e2e95e3ef2a400db95fd6f14804f7f679d997da17f->leave($__internal_5ac2fdb691cfedfa230f04e2e95e3ef2a400db95fd6f14804f7f679d997da17f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a013db708a332906129492a812b3548c7951b94fc03064847098a83648ff34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a013db708a332906129492a812b3548c7951b94fc03064847098a83648ff34a->enter($__internal_8a013db708a332906129492a812b3548c7951b94fc03064847098a83648ff34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9db701d97df8b1eb294057bec5415a5d9a0bb6cc510bc43ba912fb1780ce3afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db701d97df8b1eb294057bec5415a5d9a0bb6cc510bc43ba912fb1780ce3afe->enter($__internal_9db701d97df8b1eb294057bec5415a5d9a0bb6cc510bc43ba912fb1780ce3afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9db701d97df8b1eb294057bec5415a5d9a0bb6cc510bc43ba912fb1780ce3afe->leave($__internal_9db701d97df8b1eb294057bec5415a5d9a0bb6cc510bc43ba912fb1780ce3afe_prof);

        
        $__internal_8a013db708a332906129492a812b3548c7951b94fc03064847098a83648ff34a->leave($__internal_8a013db708a332906129492a812b3548c7951b94fc03064847098a83648ff34a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8949a66d669c0c29c483d750db4e81ba09cca521508cd362453e4283e1f2e911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8949a66d669c0c29c483d750db4e81ba09cca521508cd362453e4283e1f2e911->enter($__internal_8949a66d669c0c29c483d750db4e81ba09cca521508cd362453e4283e1f2e911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7cf1d9962bfddf58a055b65aabf5dce43270e895f01b01af1427b2527f12990e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf1d9962bfddf58a055b65aabf5dce43270e895f01b01af1427b2527f12990e->enter($__internal_7cf1d9962bfddf58a055b65aabf5dce43270e895f01b01af1427b2527f12990e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7cf1d9962bfddf58a055b65aabf5dce43270e895f01b01af1427b2527f12990e->leave($__internal_7cf1d9962bfddf58a055b65aabf5dce43270e895f01b01af1427b2527f12990e_prof);

        
        $__internal_8949a66d669c0c29c483d750db4e81ba09cca521508cd362453e4283e1f2e911->leave($__internal_8949a66d669c0c29c483d750db4e81ba09cca521508cd362453e4283e1f2e911_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/fannyperret/Desktop/flyaround/app/Resources/views/base.html.twig");
    }
}
