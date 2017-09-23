<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_55c63ee126b44076af177c886da1db77972c97ef9436be2bc24d216c4bf96eea extends Twig_Template
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
        $__internal_586ba6683b5d840e41169e5ed5b717a1ad0db9b5ff88186e0ba205963c79dd12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_586ba6683b5d840e41169e5ed5b717a1ad0db9b5ff88186e0ba205963c79dd12->enter($__internal_586ba6683b5d840e41169e5ed5b717a1ad0db9b5ff88186e0ba205963c79dd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

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
        
        $__internal_586ba6683b5d840e41169e5ed5b717a1ad0db9b5ff88186e0ba205963c79dd12->leave($__internal_586ba6683b5d840e41169e5ed5b717a1ad0db9b5ff88186e0ba205963c79dd12_prof);

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
