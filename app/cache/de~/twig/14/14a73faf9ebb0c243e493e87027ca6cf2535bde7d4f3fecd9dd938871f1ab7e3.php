<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_28a22eeb17682128f705314e339edeefcf05590eed6d9bfe463f3cde013a9dc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92f3ba90931731b7c173d9ef26d30739b07bfc228006cd2e3f6bab07c29aff6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f3ba90931731b7c173d9ef26d30739b07bfc228006cd2e3f6bab07c29aff6a->enter($__internal_92f3ba90931731b7c173d9ef26d30739b07bfc228006cd2e3f6bab07c29aff6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

        // line 2
        echo "\t";
        // line 3
        echo "\t<ul class=\"dropdown-menu drp-mnu\">
\t    <li>
\t        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
\t    </li>
\t    <li>
\t        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
\t    </li>
\t</ul>
";
        
        $__internal_92f3ba90931731b7c173d9ef26d30739b07bfc228006cd2e3f6bab07c29aff6a->leave($__internal_92f3ba90931731b7c173d9ef26d30739b07bfc228006cd2e3f6bab07c29aff6a_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 5,  24 => 3,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# <div class=\"well\"> #}
\t{# <ul class=\"nav nav-list\"> #}
\t<ul class=\"dropdown-menu drp-mnu\">
\t    <li>
\t        <a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a>
\t    </li>
\t    <li>
\t        <a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a>
\t    </li>
\t</ul>
{# </div> #}", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "/var/www/html/ecommerce/src/UtilisateursBundle/Resources/views/Default/modulesUsed/utilisateurs.html.twig");
    }
}
