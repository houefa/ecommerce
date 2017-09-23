<?php

/* layout/layout.html.twig */
class __TwigTemplate_a68c158d8c515587dcea17b148cbdfe25f497a68e84087ab15a26c0ac5d2a11c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cba2adab736025a65a64228af78bc8e111a53726dfbdf81f57c2bec9c76ce11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cba2adab736025a65a64228af78bc8e111a53726dfbdf81f57c2bec9c76ce11->enter($__internal_2cba2adab736025a65a64228af78bc8e111a53726dfbdf81f57c2bec9c76ce11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout.html.twig"));

        // line 1
        echo "<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>MaProvision | Accueil</title>
<!-- for-mobile-apps -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Marché abidjan, ecmmerce, produits frais, tout pour la maison, fournitures de bureau, chaussures, vente en ligne, vêtements\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- font-awesome icons -->
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" /> 
<!-- //font-awesome icons -->
";
        // line 23
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 25
        echo "<!-- js -->
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/js/jquery.js"), "html", null, true);
        echo "\"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/js/easing.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$(\".scroll\").click(function(event){     
            event.preventDefault();
            \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
</head>
    
<body>
<!-- header -->
    <div class=\"agileits_header\">
        <div class=\"w3l_offers\">
            <a href=\"products.html\">MaProvsion</a>
        </div>
        <div class=\"w3l_search\">
            <form action=\"#\" method=\"post\">
                <input type=\"text\" name=\"Product\" value=\"Search a product...\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Rechercher un produit...';}\" required=\"\">
                <input type=\"submit\" value=\" \">
            </form>
        </div>
        <div class=\"product_list_header\">  
            <form action=\"#\" method=\"post\" class=\"last\">
                <fieldset>
                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                    <input type=\"hidden\" name=\"display\" value=\"1\" />
                    <input type=\"submit\" name=\"submit\" value=\"Votre panier\" class=\"button\" />
                    

                    ";
        // line 66
        echo "

                </fieldset>
            </form>
        </div>
        <div class=\"w3l_header_right\">
            <ul>
                <li class=\"dropdown profile_details_drop\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"caret\"></span></a>
                    <div class=\"mega-dropdown-menu\">
                        <div class=\"w3ls_vegetables\">
                            ";
        // line 77
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 78
            echo "                                ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "layout/layout.html.twig", 78)->display($context);
            echo " 
                            ";
        } else {
            // line 80
            echo "                                ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "layout/layout.html.twig", 80)->display($context);
            // line 81
            echo "                            ";
        }
        // line 82
        echo "
                            <!-- <ul class=\"dropdown-menu drp-mnu\">
                                <li><a href=\"login.html\">Login</a></li> 
                                <li><a href=\"login.html\">Sign Up</a></li>
                            </ul> -->
                        </div>                  
                    </div>  
                </li>
            </ul>
        </div>
        <div class=\"w3l_header_right1\">
            <h2><a href=\"mail.html\">Nous écrire</a></h2>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
<!-- script-for sticky-nav -->
    <script>
    \$(document).ready(function() {
         var navoffeset=\$(\".agileits_header\").offset().top;
         \$(window).scroll(function(){
            var scrollpos=\$(window).scrollTop(); 
            if(scrollpos >=navoffeset){
                \$(\".agileits_header\").addClass(\"fixed\");
            }else{
                \$(\".agileits_header\").removeClass(\"fixed\");
            }
         });
         
    });
    </script>
<!-- //script-for sticky-nav -->
    <div class=\"logo_products\">
        <div class=\"container\">
            <div class=\"w3ls_logo_products_left\">
                <h1><a href=\"index.html\"><span>Votre</span> Marché</a></h1>
            </div>
            <div class=\"w3ls_logo_products_left1\">
                <ul class=\"special_items\">
                   <!--  <li><a href=\"events.html\">Events</a><i>/</i></li> -->
                    <li><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">Accueil</a><i>/</i></li>
                    <li><a href=\"products.html\">Aide</a><i>/</i></li>
                    <li><a href=\"services.html\">Nos Services</a></li>
                </ul>
            </div>
            <div class=\"w3ls_logo_products_left1\">
                <ul class=\"phone_email\">
                    <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>(+225) 09 63 41 64</li>
                    <li><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i><a href=\"mailto:store@grocery.com\">maprovision@maprovision.ci</a></li>
                </ul>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
<!-- //header -->
<!-- banner -->
    ";
        // line 137
        $this->displayBlock('body', $context, $blocks);
        // line 139
        echo "<!-- //newsletter -->

<!-- footer -->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"col-md-3 w3_footer_grid\">
                <h3>information</h3>
                <ul class=\"w3_footer_grid_list\">
                    <li><a href=\"events.html\">Events</a></li>
                    <li><a href=\"about.html\">About Us</a></li>
                    <li><a href=\"products.html\">Best Deals</a></li>
                    <li><a href=\"services.html\">Services</a></li>
                    <li><a href=\"short-codes.html\">Short Codes</a></li>
                </ul>
            </div>
            <div class=\"col-md-3 w3_footer_grid\">
                <h3>policy info</h3>
                <ul class=\"w3_footer_grid_list\">
                    <li><a href=\"faqs.html\">FAQ</a></li>
                    <li><a href=\"privacy.html\">privacy policy</a></li>
                    <li><a href=\"privacy.html\">terms of use</a></li>
                </ul>
            </div>
            <div class=\"col-md-3 w3_footer_grid\">
                <h3>what in stores</h3>
                <ul class=\"w3_footer_grid_list\">
                    <li><a href=\"pet.html\">Pet Food</a></li>
                    <li><a href=\"frozen.html\">Frozen Snacks</a></li>
                    <li><a href=\"kitchen.html\">Kitchen</a></li>
                    <li><a href=\"products.html\">Branded Foods</a></li>
                    <li><a href=\"household.html\">Households</a></li>
                </ul>
            </div>
            <div class=\"col-md-3 w3_footer_grid\">
                <h3>twitter posts</h3>
                <ul class=\"w3_footer_grid_list1\">
                    <li><label class=\"fa fa-twitter\" aria-hidden=\"true\"></label><i>01 day ago</i><span>Non numquam <a href=\"#\">http://sd.ds/13jklf#</a>
                        eius modi tempora incidunt ut labore et
                        <a href=\"#\">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
                    <li><label class=\"fa fa-twitter\" aria-hidden=\"true\"></label><i>02 day ago</i><span>Con numquam <a href=\"#\">http://fd.uf/56hfg#</a>
                        eius modi tempora incidunt ut labore et
                        <a href=\"#\">http://fd.uf/56hfg#</a>quo nulla.</span></li>
                </ul>
            </div>
            <div class=\"clearfix\"> </div>
            <div class=\"agile_footer_grids\">
                <div class=\"col-md-3 w3_footer_grid agile_footer_grids_w3_footer\">
                    <div class=\"w3_footer_grid_bottom\">
                        <h4>100% secure payments</h4>
                        <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/card.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
                    </div>
                </div>
                <div class=\"col-md-3 w3_footer_grid agile_footer_grids_w3_footer\">
                    <div class=\"w3_footer_grid_bottom\">
                        <h5>connect with us</h5>
                        <ul class=\"agileits_social_icons\">
                            <li><a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\" class=\"google\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\" class=\"instagram\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\" class=\"dribbble\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"wthree_footer_copy\">
                <p>© 2016 Grocery Store. All rights reserved | Design by <a href=\"http://w3layouts.com/\">W3layouts</a></p>
            </div>
        </div>
    </div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script>
\$(document).ready(function(){
    \$(\".dropdown\").hover(            
        function() {
            \$('.dropdown-menu', this).stop( true, true ).slideDown(\"fast\");
            \$(this).toggleClass('open');        
        },
        function() {
            \$('.dropdown-menu', this).stop( true, true ).slideUp(\"fast\");
            \$(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            \$().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/js/minicart.js"), "html", null, true);
        echo "\"></script>
<script>
        paypal.minicart.render();

        paypal.minicart.cart.on('checkout', function (evt) {
            var items = this.items(),
                len = items.length,
                total = 0,
                i;

            // Count the number of each item in the cart
            for (i = 0; i < len; i++) {
                total += items[i].get('quantity');
            }

            // if (total < 1) {
            //     alert(\"Le nombre minimal d'articles à commander est 1.\");
            //     evt.preventDefault();
            // }
        });

    </script>
     ";
        // line 266
        $this->displayBlock('javascripts', $context, $blocks);
        // line 268
        echo "</body>
</html>
";
        
        $__internal_2cba2adab736025a65a64228af78bc8e111a53726dfbdf81f57c2bec9c76ce11->leave($__internal_2cba2adab736025a65a64228af78bc8e111a53726dfbdf81f57c2bec9c76ce11_prof);

    }

    // line 23
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_cc80ac5dd020e5044db65adf67137cd8de3889c536cd68e7e35bd9c8cda0f596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc80ac5dd020e5044db65adf67137cd8de3889c536cd68e7e35bd9c8cda0f596->enter($__internal_cc80ac5dd020e5044db65adf67137cd8de3889c536cd68e7e35bd9c8cda0f596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_cc80ac5dd020e5044db65adf67137cd8de3889c536cd68e7e35bd9c8cda0f596->leave($__internal_cc80ac5dd020e5044db65adf67137cd8de3889c536cd68e7e35bd9c8cda0f596_prof);

    }

    // line 137
    public function block_body($context, array $blocks = array())
    {
        $__internal_73c2f63a525a8599b67b9606c2750c8cfd19e4b5c2a106711cf2a7a7d0709fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c2f63a525a8599b67b9606c2750c8cfd19e4b5c2a106711cf2a7a7d0709fc5->enter($__internal_73c2f63a525a8599b67b9606c2750c8cfd19e4b5c2a106711cf2a7a7d0709fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 138
        echo "    ";
        
        $__internal_73c2f63a525a8599b67b9606c2750c8cfd19e4b5c2a106711cf2a7a7d0709fc5->leave($__internal_73c2f63a525a8599b67b9606c2750c8cfd19e4b5c2a106711cf2a7a7d0709fc5_prof);

    }

    // line 266
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a13261d8b795dcb973716b25c2f44207e6b2f4a70694a1905eed079f1ad3c83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13261d8b795dcb973716b25c2f44207e6b2f4a70694a1905eed079f1ad3c83d->enter($__internal_a13261d8b795dcb973716b25c2f44207e6b2f4a70694a1905eed079f1ad3c83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 267
        echo "     ";
        
        $__internal_a13261d8b795dcb973716b25c2f44207e6b2f4a70694a1905eed079f1ad3c83d->leave($__internal_a13261d8b795dcb973716b25c2f44207e6b2f4a70694a1905eed079f1ad3c83d_prof);

    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 267,  372 => 266,  365 => 138,  359 => 137,  348 => 23,  339 => 268,  337 => 266,  312 => 244,  277 => 212,  250 => 188,  199 => 139,  197 => 137,  178 => 121,  137 => 82,  134 => 81,  131 => 80,  125 => 78,  123 => 77,  110 => 66,  75 => 32,  71 => 31,  63 => 26,  60 => 25,  58 => 23,  53 => 21,  48 => 19,  44 => 18,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>MaProvision | Accueil</title>
<!-- for-mobile-apps -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Marché abidjan, ecmmerce, produits frais, tout pour la maison, fournitures de bureau, chaussures, vente en ligne, vêtements\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href=\"{{ asset('bundles/ecommerce/css/bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"{{ asset('bundles/ecommerce/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- font-awesome icons -->
<link href=\"{{ asset('bundles/ecommerce/css/font-awesome.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" /> 
<!-- //font-awesome icons -->
{% block stylesheet %}
{% endblock %}
<!-- js -->
<script src=\"{{ asset('bundles/ecommerce/js/jquery.js') }}\"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type=\"text/javascript\" src=\"{{ asset('bundles/ecommerce/js/move-top.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/ecommerce/js/easing.js') }}\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$(\".scroll\").click(function(event){     
            event.preventDefault();
            \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
</head>
    
<body>
<!-- header -->
    <div class=\"agileits_header\">
        <div class=\"w3l_offers\">
            <a href=\"products.html\">MaProvsion</a>
        </div>
        <div class=\"w3l_search\">
            <form action=\"#\" method=\"post\">
                <input type=\"text\" name=\"Product\" value=\"Search a product...\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Rechercher un produit...';}\" required=\"\">
                <input type=\"submit\" value=\" \">
            </form>
        </div>
        <div class=\"product_list_header\">  
            <form action=\"#\" method=\"post\" class=\"last\">
                <fieldset>
                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                    <input type=\"hidden\" name=\"display\" value=\"1\" />
                    <input type=\"submit\" name=\"submit\" value=\"Votre panier\" class=\"button\" />
                    

                    {# <a href=\"{{ path('panier') }}\" class=\"button\"><span class=\"span1\">Mon Panier</span></a>
                         {% render(controller('EcommerceBundle:Panier:menu')) %} #}


                </fieldset>
            </form>
        </div>
        <div class=\"w3l_header_right\">
            <ul>
                <li class=\"dropdown profile_details_drop\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"caret\"></span></a>
                    <div class=\"mega-dropdown-menu\">
                        <div class=\"w3ls_vegetables\">
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %} 
                            {% else %}
                                {% include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}
                            {% endif %}

                            <!-- <ul class=\"dropdown-menu drp-mnu\">
                                <li><a href=\"login.html\">Login</a></li> 
                                <li><a href=\"login.html\">Sign Up</a></li>
                            </ul> -->
                        </div>                  
                    </div>  
                </li>
            </ul>
        </div>
        <div class=\"w3l_header_right1\">
            <h2><a href=\"mail.html\">Nous écrire</a></h2>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
<!-- script-for sticky-nav -->
    <script>
    \$(document).ready(function() {
         var navoffeset=\$(\".agileits_header\").offset().top;
         \$(window).scroll(function(){
            var scrollpos=\$(window).scrollTop(); 
            if(scrollpos >=navoffeset){
                \$(\".agileits_header\").addClass(\"fixed\");
            }else{
                \$(\".agileits_header\").removeClass(\"fixed\");
            }
         });
         
    });
    </script>
<!-- //script-for sticky-nav -->
    <div class=\"logo_products\">
        <div class=\"container\">
            <div class=\"w3ls_logo_products_left\">
                <h1><a href=\"index.html\"><span>Votre</span> Marché</a></h1>
            </div>
            <div class=\"w3ls_logo_products_left1\">
                <ul class=\"special_items\">
                   <!--  <li><a href=\"events.html\">Events</a><i>/</i></li> -->
                    <li><a href=\"{{ path('produits') }}\">Accueil</a><i>/</i></li>
                    <li><a href=\"products.html\">Aide</a><i>/</i></li>
                    <li><a href=\"services.html\">Nos Services</a></li>
                </ul>
            </div>
            <div class=\"w3ls_logo_products_left1\">
                <ul class=\"phone_email\">
                    <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>(+225) 09 63 41 64</li>
                    <li><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i><a href=\"mailto:store@grocery.com\">maprovision@maprovision.ci</a></li>
                </ul>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
<!-- //header -->
<!-- banner -->
    {% block body %}
    {% endblock %}
<!-- //newsletter -->

<!-- footer -->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"col-md-3 w3_footer_grid\">
                <h3>information</h3>
                <ul class=\"w3_footer_grid_list\">
                    <li><a href=\"events.html\">Events</a></li>
                    <li><a href=\"about.html\">About Us</a></li>
                    <li><a href=\"products.html\">Best Deals</a></li>
                    <li><a href=\"services.html\">Services</a></li>
                    <li><a href=\"short-codes.html\">Short Codes</a></li>
                </ul>
            </div>
            <div class=\"col-md-3 w3_footer_grid\">
                <h3>policy info</h3>
                <ul class=\"w3_footer_grid_list\">
                    <li><a href=\"faqs.html\">FAQ</a></li>
                    <li><a href=\"privacy.html\">privacy policy</a></li>
                    <li><a href=\"privacy.html\">terms of use</a></li>
                </ul>
            </div>
            <div class=\"col-md-3 w3_footer_grid\">
                <h3>what in stores</h3>
                <ul class=\"w3_footer_grid_list\">
                    <li><a href=\"pet.html\">Pet Food</a></li>
                    <li><a href=\"frozen.html\">Frozen Snacks</a></li>
                    <li><a href=\"kitchen.html\">Kitchen</a></li>
                    <li><a href=\"products.html\">Branded Foods</a></li>
                    <li><a href=\"household.html\">Households</a></li>
                </ul>
            </div>
            <div class=\"col-md-3 w3_footer_grid\">
                <h3>twitter posts</h3>
                <ul class=\"w3_footer_grid_list1\">
                    <li><label class=\"fa fa-twitter\" aria-hidden=\"true\"></label><i>01 day ago</i><span>Non numquam <a href=\"#\">http://sd.ds/13jklf#</a>
                        eius modi tempora incidunt ut labore et
                        <a href=\"#\">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
                    <li><label class=\"fa fa-twitter\" aria-hidden=\"true\"></label><i>02 day ago</i><span>Con numquam <a href=\"#\">http://fd.uf/56hfg#</a>
                        eius modi tempora incidunt ut labore et
                        <a href=\"#\">http://fd.uf/56hfg#</a>quo nulla.</span></li>
                </ul>
            </div>
            <div class=\"clearfix\"> </div>
            <div class=\"agile_footer_grids\">
                <div class=\"col-md-3 w3_footer_grid agile_footer_grids_w3_footer\">
                    <div class=\"w3_footer_grid_bottom\">
                        <h4>100% secure payments</h4>
                        <img src=\"{{ asset('bundles/ecommerce/images/card.png') }}\" alt=\" \" class=\"img-responsive\" />
                    </div>
                </div>
                <div class=\"col-md-3 w3_footer_grid agile_footer_grids_w3_footer\">
                    <div class=\"w3_footer_grid_bottom\">
                        <h5>connect with us</h5>
                        <ul class=\"agileits_social_icons\">
                            <li><a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\" class=\"google\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\" class=\"instagram\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\" class=\"dribbble\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"wthree_footer_copy\">
                <p>© 2016 Grocery Store. All rights reserved | Design by <a href=\"http://w3layouts.com/\">W3layouts</a></p>
            </div>
        </div>
    </div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src=\"{{ asset('bundles/ecommerce/js/bootstrap.min.js') }}\"></script>
<script>
\$(document).ready(function(){
    \$(\".dropdown\").hover(            
        function() {
            \$('.dropdown-menu', this).stop( true, true ).slideDown(\"fast\");
            \$(this).toggleClass('open');        
        },
        function() {
            \$('.dropdown-menu', this).stop( true, true ).slideUp(\"fast\");
            \$(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            \$().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->
<script src=\"{{ asset('bundles/ecommerce/js/minicart.js') }}\"></script>
<script>
        paypal.minicart.render();

        paypal.minicart.cart.on('checkout', function (evt) {
            var items = this.items(),
                len = items.length,
                total = 0,
                i;

            // Count the number of each item in the cart
            for (i = 0; i < len; i++) {
                total += items[i].get('quantity');
            }

            // if (total < 1) {
            //     alert(\"Le nombre minimal d'articles à commander est 1.\");
            //     evt.preventDefault();
            // }
        });

    </script>
     {% block javascripts %}
     {% endblock %}
</body>
</html>
", "layout/layout.html.twig", "/var/www/html/ecommerce/app/Resources/views/layout/layout.html.twig");
    }
}
