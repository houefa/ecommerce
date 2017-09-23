<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8aa9d5dc474c3fb0cfc5ef8f50e0948779733fd61e5fd49acfe62c4b67a087fc extends Twig_Template
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
        $__internal_7e8743ad2f0d7280f15c69159a9cf3ad310117bd61da8ae3021a746f8112d7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8743ad2f0d7280f15c69159a9cf3ad310117bd61da8ae3021a746f8112d7ab->enter($__internal_7e8743ad2f0d7280f15c69159a9cf3ad310117bd61da8ae3021a746f8112d7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e8743ad2f0d7280f15c69159a9cf3ad310117bd61da8ae3021a746f8112d7ab->leave($__internal_7e8743ad2f0d7280f15c69159a9cf3ad310117bd61da8ae3021a746f8112d7ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26d02aadf2990a9d6d885e8a7348a9cb8b24ff1e8bc57be70081efde43efa3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d02aadf2990a9d6d885e8a7348a9cb8b24ff1e8bc57be70081efde43efa3ba->enter($__internal_26d02aadf2990a9d6d885e8a7348a9cb8b24ff1e8bc57be70081efde43efa3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_26d02aadf2990a9d6d885e8a7348a9cb8b24ff1e8bc57be70081efde43efa3ba->leave($__internal_26d02aadf2990a9d6d885e8a7348a9cb8b24ff1e8bc57be70081efde43efa3ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9934fd08e59a91e712500cd46c7bed6d9fd50258543c26b488dc14402192587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9934fd08e59a91e712500cd46c7bed6d9fd50258543c26b488dc14402192587->enter($__internal_d9934fd08e59a91e712500cd46c7bed6d9fd50258543c26b488dc14402192587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9934fd08e59a91e712500cd46c7bed6d9fd50258543c26b488dc14402192587->leave($__internal_d9934fd08e59a91e712500cd46c7bed6d9fd50258543c26b488dc14402192587_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_799dfc0389e253eab3ea49ffb76ab442d0e3def7bac2aef6d17377e7df6ee44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799dfc0389e253eab3ea49ffb76ab442d0e3def7bac2aef6d17377e7df6ee44e->enter($__internal_799dfc0389e253eab3ea49ffb76ab442d0e3def7bac2aef6d17377e7df6ee44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_799dfc0389e253eab3ea49ffb76ab442d0e3def7bac2aef6d17377e7df6ee44e->leave($__internal_799dfc0389e253eab3ea49ffb76ab442d0e3def7bac2aef6d17377e7df6ee44e_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/ecommerce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
