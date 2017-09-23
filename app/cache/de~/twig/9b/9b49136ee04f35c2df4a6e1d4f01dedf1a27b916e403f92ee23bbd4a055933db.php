<?php

/* EcommerceBundle:Default:categorie/modulesUsed/menu.html.twig */
class __TwigTemplate_6af6a0cb230834e0e170b9ce9e54e52c37e3635cd1115d0f21c58ed28e20f845 extends Twig_Template
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
        $__internal_7990e43ba038f39a3b565264c6d44437fb500a56a8a50053fe1a0af2dd6ef585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7990e43ba038f39a3b565264c6d44437fb500a56a8a50053fe1a0af2dd6ef585->enter($__internal_7990e43ba038f39a3b565264c6d44437fb500a56a8a50053fe1a0af2dd6ef585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:categorie/modulesUsed/menu.html.twig"));

        // line 16
        echo "
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 18
            echo "\t";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "children", array())) > 0)) {
                // line 19
                echo "\t\t<li class=\"dropdown\" >
\t\t<a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduits", array("categorie" => twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "id", array()))), "html", null, true);
                echo "\" class=\"dropdown-toggle\" data-toggle=\"\">
\t\t";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "libelle", array()), "html", null, true);
                echo "
\t\t<span class=\"caret\"></span>
\t\t\t<div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
                <div class=\"w3ls_vegetables\">
                    <ul>
                    \t";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 27
                    echo "\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduits", array("categorie" => twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "libelle", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                    // line 31
                    echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    // line 33
                    echo "\t\t\t\t\t\t\t\t";
                    // line 34
                    echo "
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "
                        
                    </ul>
                </div>                  
            </div>
\t\t\t
\t\t</a>
\t\t";
                // line 44
                echo "\t\t
\t\t";
                // line 46
                echo "

\t</li>

\t";
            } else {
                // line 51
                echo "\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduits", array("categorie" => twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "libelle", array()), "html", null, true);
                echo "</a></li>
\t";
            }
            // line 53
            echo "


\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
";
        
        $__internal_7990e43ba038f39a3b565264c6d44437fb500a56a8a50053fe1a0af2dd6ef585->leave($__internal_7990e43ba038f39a3b565264c6d44437fb500a56a8a50053fe1a0af2dd6ef585_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categorie/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 58,  97 => 53,  89 => 51,  82 => 46,  79 => 44,  70 => 36,  63 => 34,  61 => 33,  58 => 31,  51 => 27,  47 => 26,  39 => 21,  35 => 20,  32 => 19,  29 => 18,  25 => 17,  22 => 16,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% for categorie in categories %}
\t<li class=\"dropdown\"><a href=\"{{path('categorieProduits',{'categorie':categorie.id})}}\">{{categorie.libelle}}<span class=\"caret\"></span></a>
\t\t

\t</li>
{% endfor %}


\t{% block javascripts %}
\t\t<script type=\"javascript\">
\t\t\tjQuery(document).on('click', '.mega-dropdown', function(e) {
  e.stopPropagation()
})
\t\t</script>
    {% endblock %} #}

{% for categorie in categories %}
\t{% if categorie.children|length > 0 %}
\t\t<li class=\"dropdown\" >
\t\t<a href=\"{{path('categorieProduits',{'categorie':categorie.id})}}\" class=\"dropdown-toggle\" data-toggle=\"\">
\t\t{{categorie.libelle}}
\t\t<span class=\"caret\"></span>
\t\t\t<div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
                <div class=\"w3ls_vegetables\">
                    <ul>
                    \t{% for cat in categorie.children %}
\t\t\t\t\t\t\t<li><a href=\"{{path('categorieProduits',{'categorie':cat.id})}}\">{{cat.libelle}}</a>
\t\t\t\t\t\t\t\t{# <ul class=\"\">
\t\t\t\t\t\t\t\t\t{{ render(controller('EcommerceBundle:Categorie:sousmenu', { 'id':cat.id })) }}
\t\t\t\t\t\t\t\t</ul> #}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{# ici #}
\t\t\t\t\t\t\t\t{# ici  #}

\t\t\t\t\t\t{% endfor %}

                        
                    </ul>
                </div>                  
            </div>
\t\t\t
\t\t</a>
\t\t{# ici #}
\t\t
\t\t{# ici  #}


\t</li>

\t{% else %}
\t\t<li><a href=\"{{path('categorieProduits',{'categorie':categorie.id})}}\">{{categorie.libelle}}</a></li>
\t{% endif %}



\t
{% endfor %}

", "EcommerceBundle:Default:categorie/modulesUsed/menu.html.twig", "/var/www/html/ecommerce/src/EcommerceBundle/Resources/views/Default/categorie/modulesUsed/menu.html.twig");
    }
}
