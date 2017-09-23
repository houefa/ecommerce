<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f38d43e9985d0a5f6fc4a44b06c0bf10052ebdd919301ad23a47f4b277fb7f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_678faa720b21a922cb29efb303f22b75201eb7ccea04a176f9f087c25ad077d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678faa720b21a922cb29efb303f22b75201eb7ccea04a176f9f087c25ad077d5->enter($__internal_678faa720b21a922cb29efb303f22b75201eb7ccea04a176f9f087c25ad077d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_678faa720b21a922cb29efb303f22b75201eb7ccea04a176f9f087c25ad077d5->leave($__internal_678faa720b21a922cb29efb303f22b75201eb7ccea04a176f9f087c25ad077d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67a1a15a7a02e0846591337af3108f5c991c56866919cfaf7dbad4024c00d867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a1a15a7a02e0846591337af3108f5c991c56866919cfaf7dbad4024c00d867->enter($__internal_67a1a15a7a02e0846591337af3108f5c991c56866919cfaf7dbad4024c00d867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67a1a15a7a02e0846591337af3108f5c991c56866919cfaf7dbad4024c00d867->leave($__internal_67a1a15a7a02e0846591337af3108f5c991c56866919cfaf7dbad4024c00d867_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e99bb2ccb438066eb15b8cf291e0166ff22cb53d1a20dbf02bb9160b59957b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e99bb2ccb438066eb15b8cf291e0166ff22cb53d1a20dbf02bb9160b59957b1->enter($__internal_6e99bb2ccb438066eb15b8cf291e0166ff22cb53d1a20dbf02bb9160b59957b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_6e99bb2ccb438066eb15b8cf291e0166ff22cb53d1a20dbf02bb9160b59957b1->leave($__internal_6e99bb2ccb438066eb15b8cf291e0166ff22cb53d1a20dbf02bb9160b59957b1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_56c0a9afc5f298ee8f971a1ac8559c6d338f455731aca5f354fb0a212530439e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c0a9afc5f298ee8f971a1ac8559c6d338f455731aca5f354fb0a212530439e->enter($__internal_56c0a9afc5f298ee8f971a1ac8559c6d338f455731aca5f354fb0a212530439e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_56c0a9afc5f298ee8f971a1ac8559c6d338f455731aca5f354fb0a212530439e->leave($__internal_56c0a9afc5f298ee8f971a1ac8559c6d338f455731aca5f354fb0a212530439e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/ecommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
