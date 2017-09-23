<?php

/* EcommerceBundle:Default:produits/layouts/produits.html.twig */
class __TwigTemplate_47c6aee0f331d232d230f8dd2ab475fd173d2aa53833912501fb76b13d9b5be0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "EcommerceBundle:Default:produits/layouts/produits.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcd1370bc883ef79d53183a6306ab3dff681e081466501b3f01cac6b4a1744fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd1370bc883ef79d53183a6306ab3dff681e081466501b3f01cac6b4a1744fa->enter($__internal_bcd1370bc883ef79d53183a6306ab3dff681e081466501b3f01cac6b4a1744fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layouts/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcd1370bc883ef79d53183a6306ab3dff681e081466501b3f01cac6b4a1744fa->leave($__internal_bcd1370bc883ef79d53183a6306ab3dff681e081466501b3f01cac6b4a1744fa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_846683bf2a66be737540006af99559e6b9065c90d1622f3799bb48f73ca51a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846683bf2a66be737540006af99559e6b9065c90d1622f3799bb48f73ca51a03->enter($__internal_846683bf2a66be737540006af99559e6b9065c90d1622f3799bb48f73ca51a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "     <div class=\"banner\">
        <div class=\"w3l_banner_nav_left\">
            <nav class=\"navbar nav_bottom\">
             <!-- Brand and toggle get grouped for better mobile display -->
              <div class=\"navbar-header nav_2\">
                  <button type=\"button\" class=\"navbar-toggle collapsed navbar-toggle1\" data-toggle=\"collapse\" data-target=\"#bs-megadropdown-tabs\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                  </button>
               </div> 
               <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-megadropdown-tabs\">
                    <ul class=\"nav navbar-nav nav_1\">
                        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Categorie:menu"), array());
        // line 19
        echo "                    </ul>
                 </div><!-- /.navbar-collapse -->
            </nav>
        </div>
        <div class=\"w3l_banner_nav_right\">
                ";
        // line 24
        if ((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 24, $this->getSourceContext()); })())) {
            // line 25
            echo "                    <div class=\"w3l_banner_nav_right_banner4\">
                <h3>Meilleures offres pour les nouveaux produits<span class=\"blink_me\"></span></h3>
            </div>
            <div class=\"w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub\">
                <h3>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 29, $this->getSourceContext()); })()), "libelle", array()), "html", null, true);
            echo "</h3>
                <div class=\"w3ls_w3l_banner_nav_right_grid1\">
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 31, $this->getSourceContext()); })()), "produits", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 32
                echo "                    <div class=\"col-md-3 w3ls_w3l_banner_left\">
                        <div class=\"hover14 column\">
                        <div class=\"agile_top_brand_left_grid w3l_agile_top_brand_left_grid\">
                            <div class=\"agile_top_brand_left_grid_pos\">
                                <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/offer.png"), "html", null, true);
                echo "\" alt=\" \" class=\"img-responsive\" />
                            </div>
                            <div class=\"agile_top_brand_left_grid1\">
                                <figure>
                                    <div class=\"snipcart-item block\">
                                        <div class=\"snipcart-thumb\">
                                            <a href=\"single.html\"><img src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "image", array()), "path", array()))), "html", null, true);
                echo "\" alt=\" \" class=\"img-responsive\" /></a>
                                            <p>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "libelle", array()), "html", null, true);
                echo "</p>
                                            <h4>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
                echo " ";
                echo "</h4>
                                        </div>
                                        <div class=\"snipcart-details\">
                                            <form action=\"#\" method=\"post\">
                                                <fieldset>
                                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                                    <input type=\"hidden\" name=\"item_name\" value=\"dogs food\" />
                                                    <input type=\"hidden\" name=\"amount\" value=\"9.00\" />
                                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                    <a class=\"btn btn-primary\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
                echo "\">Détail</a>
                                                    ";
                // line 59
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["panier"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 60
                    echo "                                                        <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
                    echo "\">Acheter</a>
                                                    ";
                }
                // line 62
                echo "                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 72, $this->getSourceContext()); })()), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 73
                echo "                        <h6>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "libelle", array()), "html", null, true);
                echo "</h6>
                        ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "produits", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    // line 75
                    echo "                            <div class=\"col-md-3 w3ls_w3l_banner_left\">
                                <div class=\"hover14 column\">
                                <div class=\"agile_top_brand_left_grid w3l_agile_top_brand_left_grid\">
                                    <div class=\"agile_top_brand_left_grid_pos\">
                                        <img src=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/offer.png"), "html", null, true);
                    echo "\" alt=\" \" class=\"img-responsive\" />
                                    </div>
                                    <div class=\"agile_top_brand_left_grid1\">
                                        <figure>
                                            <div class=\"snipcart-item block\">
                                                <div class=\"snipcart-thumb\">
                                                    <a href=\"single.html\"><img src=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "image", array()), "path", array()))), "html", null, true);
                    echo "\" alt=\" \" class=\"img-responsive\" /></a>
                                                    <p>";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "libelle", array()), "html", null, true);
                    echo "</p>
                                                    <h4>";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
                    echo " ";
                    echo "</h4>
                                                </div>
                                                <div class=\"snipcart-details\">
                                                    <form action=\"#\" method=\"post\">
                                                        <fieldset>
                                                            <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                                    <input type=\"hidden\" name=\"item_name\" value=\"dogs food\" />
                                                    <input type=\"hidden\" name=\"amount\" value=\"9.00\" />
                                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                            <a class=\"btn btn-primary\" href=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
                    echo "\">Détail</a>
                                                            ";
                    // line 102
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["panier"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()), array(), "array", true, true)) {
                        // line 103
                        echo "                                                                <a class=\"btn btn-success\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
                        echo "\">Acheter</a>
                                                            ";
                    }
                    // line 105
                    echo "                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                    
                    
                    
                ";
        } else {
            // line 120
            echo "                    <section class=\"slider\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        <li>
                            <div class=\"w3l_banner_nav_right_banner\">
                                <h3>Faites vos<span>repas</span> épicés.</h3>
                                <div class=\"more\">
                                    <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Démarrer vos achats\">Démarrer vos achats</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"w3l_banner_nav_right_banner1\">
                                <h3>Commandez <span>vos</span> Fruits.</h3>
                                <div class=\"more\">
                                    <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Démarrer vos achats\">Démarrer vos achats</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"w3l_banner_nav_right_banner2\">
                                <h3>upto <i>50%</i> off.</h3>
                                <div class=\"more\">
                                    <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Démarrer vos achats\">Démarrer vos achats</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- flexSlider -->
                <link rel=\"stylesheet\" href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/css/flexslider.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" property=\"\" />
                <script defer src=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/js/jquery.flexslider.js"), "html", null, true);
            echo "\"></script>
                <script type=\"text/javascript\">
                \$(window).load(function(){
                  \$('.flexslider').flexslider({
                    animation: \"slide\",
                    start: function(slider){
                      \$('body').removeClass('loading');
                    }
                  });
                });
              </script>
            <!-- //flexSlider -->
                ";
        }
        // line 165
        echo "                
            
            
        </div>
        <div class=\"clearfix\"></div>
    </div>
<!-- banner -->
    ";
        // line 172
        if ( !(isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 172, $this->getSourceContext()); })())) {
            // line 173
            echo "        <div class=\"banner_bottom\">

                <div class=\"wthree_banner_bottom_left_grid_sub\">
                </div>
                <div class=\"wthree_banner_bottom_left_grid_sub1\">
                    <div class=\"col-md-4 wthree_banner_bottom_left\">
                        <div class=\"wthree_banner_bottom_left_grid\">
                            <img src=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/4.jpg"), "html", null, true);
            echo "\"  alt=\" \" class=\"img-responsive\" />
                            <div class=\"wthree_banner_bottom_left_grid_pos\">
                                <h4>Discount Offer <span>25%</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 wthree_banner_bottom_left\">
                        <div class=\"wthree_banner_bottom_left_grid\">
                            <img src=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/5.jpg"), "html", null, true);
            echo "\" alt=\" \" class=\"img-responsive\" />
                            <div class=\"wthree_banner_btm_pos\">
                                <h3>introducing <span>best store</span> for <i>groceries</i></h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 wthree_banner_bottom_left\">
                        <div class=\"wthree_banner_bottom_left_grid\">
                            <img src=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/6.jpg"), "html", null, true);
            echo "\" alt=\" \" class=\"img-responsive\" />
                            <div class=\"wthree_banner_btm_pos1\">
                                <h3>Save <span>Upto</span> \$10</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"clearfix\"> </div>
        </div>
        <!-- top-brands -->
    <div class=\"top-brands\">
        <div class=\"container\">
            <h3>Hot Offers</h3>
            <div class=\"agile_top_brands_grids\">
                <div class=\"col-md-3 top_brand_left\">
                    <div class=\"hover14 column\">
                        <div class=\"agile_top_brand_left_grid\">
                            <div class=\"tag\"><img src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/tag.png"), "html", null, true);
            echo "\" alt=\" \" class=\"img-responsive\" /></div>
                            <div class=\"agile_top_brand_left_grid1\">
                                <figure>
                                    <div class=\"snipcart-item block\" >
                                        <div class=\"snipcart-thumb\">
                                            <a href=\"single.html\"><img src=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/1.png"), "html", null, true);
            echo "\" title=\" \" alt=\" \" /></a>      
                                            <p>fortune sunflower oil</p>
                                            <h4>\$7.99 <span>\$10.00</span></h4>
                                        </div>
                                        <div class=\"snipcart-details top_brand_home_details\">
                                            <form action=\"checkout.html\" method=\"post\">
                                                <fieldset>
                                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                                    <input type=\"hidden\" name=\"item_name\" value=\"Fortune Sunflower Oil\" />
                                                    <input type=\"hidden\" name=\"amount\" value=\"7.99\" />
                                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                    <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                                                </fieldset>
                                                    
                                            </form>
                                    
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 top_brand_left\">
                    <div class=\"hover14 column\">
                        <div class=\"agile_top_brand_left_grid\">
                            <div class=\"agile_top_brand_left_grid1\">
                                <figure>
                                    <div class=\"snipcart-item block\" >
                                        <div class=\"snipcart-thumb\">
                                            <a href=\"single.html\"><img src=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/3.png"), "html", null, true);
            echo "\" title=\" \" alt=\" \" /></a>      
                                            <p>basmati rise (5 Kg)</p>
                                            <h4>\$11.99 <span>\$15.00</span></h4>
                                        </div>
                                        <div class=\"snipcart-details top_brand_home_details\">
                                            <form action=\"#\" method=\"post\">
                                                <fieldset>
                                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                                    <input type=\"hidden\" name=\"item_name\" value=\"basmati rise\" />
                                                    <input type=\"hidden\" name=\"amount\" value=\"11.99\" />
                                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                    <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 top_brand_left\">
                    <div class=\"hover14 column\">
                        <div class=\"agile_top_brand_left_grid\">
                            <div class=\"agile_top_brand_left_grid_pos\">
                                <img src=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/offer.png"), "html", null, true);
            echo "\" alt=\"offres\" class=\"img-responsive\"/>
                            </div>
                            <div class=\"agile_top_brand_left_grid1\">
                                <figure>
                                    <div class=\"snipcart-item block\">
                                        <div class=\"snipcart-thumb\">
                                            <a href=\"single.html\"><img src=\"";
            // line 290
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/2.png"), "html", null, true);
            echo "\"  alt=\" \" class=\"img-responsive\" /></a>
                                            <p>Pepsi soft drink (2 Ltr)</p>
                                            <h4>\$8.00 <span>\$10.00</span></h4>
                                        </div>
                                        <div class=\"snipcart-details top_brand_home_details\">
                                            <form action=\"#\" method=\"post\">
                                                <fieldset>
                                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                                    <input type=\"hidden\" name=\"item_name\" value=\"Pepsi soft drink\" />
                                                    <input type=\"hidden\" name=\"amount\" value=\"8.00\" />
                                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                    <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 top_brand_left\">
                    <div class=\"hover14 column\">
                        <div class=\"agile_top_brand_left_grid\">
                            <div class=\"agile_top_brand_left_grid_pos\">
                                <img src=\"";
            // line 320
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/offer.png"), "html", null, true);
            echo "\" alt=\" \" class=\"img-responsive\" />
                            </div>
                            <div class=\"agile_top_brand_left_grid1\">
                                <figure>
                                    <div class=\"snipcart-item block\">
                                        <div class=\"snipcart-thumb\">
                                            <a href=\"single.html\"><img src=\"";
            // line 326
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/4.png"), "html", null, true);
            echo "\" alt=\" \" class=\"img-responsive\" /></a>
                                            <p>dogs food (4 Kg)</p>
                                            <h4>\$9.00 <span>\$11.00</span></h4>
                                        </div>
                                        <div class=\"snipcart-details top_brand_home_details\">
                                            <form action=\"#\" method=\"post\">
                                                <fieldset>
                                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                                    <input type=\"hidden\" name=\"item_name\" value=\"dogs food\" />
                                                    <input type=\"hidden\" name=\"amount\" value=\"9.00\" />
                                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                    <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </div>
<!-- //top-brands -->
<!-- fresh-vegetables -->
    <div class=\"fresh-vegetables\">
        <div class=\"container\">
            <h3>Top Products</h3>
            <div class=\"w3l_fresh_vegetables_grids\">
                <div class=\"col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left\">
                    <div class=\"w3l_fresh_vegetables_grid2\">
                        <ul>
                            ";
            // line 365
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Categorie:menu"), array());
            // line 366
            echo "                        </ul>
                    </div>
                </div>
                <div class=\"col-md-9 w3l_fresh_vegetables_grid_right\">
                    <div class=\"col-md-4 w3l_fresh_vegetables_grid\">
                        <div class=\"w3l_fresh_vegetables_grid1\">
                            <img src=\"";
            // line 372
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/8.jpg"), "html", null, true);
            echo "\" alt=\" \" class=\"img-responsive\" />
                        </div>
                    </div>
                    <div class=\"col-md-4 w3l_fresh_vegetables_grid\">
                        <div class=\"w3l_fresh_vegetables_grid1\">
                            <div class=\"w3l_fresh_vegetables_grid1_rel\">
                                <img src=\"";
            // line 378
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/7.jpg"), "html", null, true);
            echo "\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3l_fresh_vegetables_grid1_rel_pos\">
                                    <div class=\"more m1\">
                                        <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Démarrer vos achats\">Démarrer vos achats</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"w3l_fresh_vegetables_grid1_bottom\">
                            <img src=\"";
            // line 387
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/10.jpg"), "html", null, true);
            echo "\" alt=\" \" class=\"img-responsive\" />
                            <div class=\"w3l_fresh_vegetables_grid1_bottom_pos\">
                                <h5>Special Offers</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 w3l_fresh_vegetables_grid\">
                        <div class=\"w3l_fresh_vegetables_grid1\">
                            <img src=\"";
            // line 395
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/9.jpg"), "html", null, true);
            echo "\" alt=\" \" class=\"img-responsive\" />
                        </div>
                        <div class=\"w3l_fresh_vegetables_grid1_bottom\">
                            <img src=\"";
            // line 398
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ecommerce/images/11.jpg"), "html", null, true);
            echo "\" alt=\" \" class=\"img-responsive\" />
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                    <div class=\"agileinfo_move_text\">
                        <div class=\"agileinfo_marquee\">
                            <h4>get <span class=\"blink_me\">25% off</span> on first order and also get gift voucher</h4>
                        </div>
                        <div class=\"agileinfo_breaking_news\">
                            <span> </span>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </div>
<!-- //fresh-vegetables -->
    ";
        } else {
            // line 418
            echo "    ";
        }
        // line 419
        echo "        

<!-- newsletter -->
    <div class=\"newsletter\">
        <div class=\"container\">
            <div class=\"w3agile_newsletter_left\">
                <h3>sign up for our newsletter</h3>
            </div>
            <div class=\"w3agile_newsletter_right\">
                <form action=\"#\" method=\"post\">
                    <input type=\"email\" name=\"Email\" value=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\" required=\"\">
                    <input type=\"submit\" value=\"subscribe now\">
                </form>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>   
";
        // line 437
        echo "
  ";
        // line 439
        echo "
";
        
        $__internal_846683bf2a66be737540006af99559e6b9065c90d1622f3799bb48f73ca51a03->leave($__internal_846683bf2a66be737540006af99559e6b9065c90d1622f3799bb48f73ca51a03_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layouts/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  629 => 439,  626 => 437,  607 => 419,  604 => 418,  581 => 398,  575 => 395,  564 => 387,  552 => 378,  543 => 372,  535 => 366,  533 => 365,  491 => 326,  482 => 320,  449 => 290,  440 => 284,  407 => 254,  369 => 219,  361 => 214,  340 => 196,  329 => 188,  318 => 180,  309 => 173,  307 => 172,  298 => 165,  282 => 152,  278 => 151,  245 => 120,  239 => 116,  233 => 115,  218 => 105,  212 => 103,  210 => 102,  206 => 101,  188 => 87,  184 => 86,  180 => 85,  171 => 79,  165 => 75,  161 => 74,  156 => 73,  151 => 72,  136 => 62,  130 => 60,  128 => 59,  124 => 58,  106 => 44,  102 => 43,  98 => 42,  89 => 36,  83 => 32,  79 => 31,  74 => 29,  68 => 25,  66 => 24,  59 => 19,  57 => 18,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/layout.html.twig' %}
{% block body %}
     <div class=\"banner\">
        <div class=\"w3l_banner_nav_left\">
            <nav class=\"navbar nav_bottom\">
             <!-- Brand and toggle get grouped for better mobile display -->
              <div class=\"navbar-header nav_2\">
                  <button type=\"button\" class=\"navbar-toggle collapsed navbar-toggle1\" data-toggle=\"collapse\" data-target=\"#bs-megadropdown-tabs\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                  </button>
               </div> 
               <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-megadropdown-tabs\">
                    <ul class=\"nav navbar-nav nav_1\">
                        {% render(controller('EcommerceBundle:Categorie:menu')) %}
                    </ul>
                 </div><!-- /.navbar-collapse -->
            </nav>
        </div>
        <div class=\"w3l_banner_nav_right\">
                {% if categorie %}
                    <div class=\"w3l_banner_nav_right_banner4\">
                <h3>Meilleures offres pour les nouveaux produits<span class=\"blink_me\"></span></h3>
            </div>
            <div class=\"w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub\">
                <h3>{{categorie.libelle}}</h3>
                <div class=\"w3ls_w3l_banner_nav_right_grid1\">
                    {% for produit in categorie.produits %}
                    <div class=\"col-md-3 w3ls_w3l_banner_left\">
                        <div class=\"hover14 column\">
                        <div class=\"agile_top_brand_left_grid w3l_agile_top_brand_left_grid\">
                            <div class=\"agile_top_brand_left_grid_pos\">
                                <img src=\"{{ asset('bundles/ecommerce/images/offer.png') }}\" alt=\" \" class=\"img-responsive\" />
                            </div>
                            <div class=\"agile_top_brand_left_grid1\">
                                <figure>
                                    <div class=\"snipcart-item block\">
                                        <div class=\"snipcart-thumb\">
                                            <a href=\"single.html\"><img src=\"{{ asset('uploads/' ~ produit.image.path) }}\" alt=\" \" class=\"img-responsive\" /></a>
                                            <p>{{ produit.libelle }}</p>
                                            <h4>{{ produit.prix }} {# <span>\$8.00</span> #}</h4>
                                        </div>
                                        <div class=\"snipcart-details\">
                                            <form action=\"#\" method=\"post\">
                                                <fieldset>
                                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                                    <input type=\"hidden\" name=\"item_name\" value=\"dogs food\" />
                                                    <input type=\"hidden\" name=\"amount\" value=\"9.00\" />
                                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                    <a class=\"btn btn-primary\" href=\"{{ path('presentation',{'id':produit.id}) }}\">Détail</a>
                                                    {% if panier[produit.id] is not defined  %}
                                                        <a class=\"btn btn-success\" href=\"{{ path('ajouter', { 'id': produit.id  }) }}\">Acheter</a>
                                                    {% endif %}
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        </div>
                    </div>
                    {% endfor %}
                    {% for cat in categorie.children %}
                        <h6>{{ cat.libelle }}</h6>
                        {% for produit in cat.produits %}
                            <div class=\"col-md-3 w3ls_w3l_banner_left\">
                                <div class=\"hover14 column\">
                                <div class=\"agile_top_brand_left_grid w3l_agile_top_brand_left_grid\">
                                    <div class=\"agile_top_brand_left_grid_pos\">
                                        <img src=\"{{ asset('bundles/ecommerce/images/offer.png') }}\" alt=\" \" class=\"img-responsive\" />
                                    </div>
                                    <div class=\"agile_top_brand_left_grid1\">
                                        <figure>
                                            <div class=\"snipcart-item block\">
                                                <div class=\"snipcart-thumb\">
                                                    <a href=\"single.html\"><img src=\"{{ asset('uploads/' ~ produit.image.path) }}\" alt=\" \" class=\"img-responsive\" /></a>
                                                    <p>{{ produit.libelle }}</p>
                                                    <h4>{{ produit.prix }} {# <span>\$8.00</span> #}</h4>
                                                </div>
                                                <div class=\"snipcart-details\">
                                                    <form action=\"#\" method=\"post\">
                                                        <fieldset>
                                                            <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                                    <input type=\"hidden\" name=\"item_name\" value=\"dogs food\" />
                                                    <input type=\"hidden\" name=\"amount\" value=\"9.00\" />
                                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                            <a class=\"btn btn-primary\" href=\"{{ path('presentation',{'id':produit.id}) }}\">Détail</a>
                                                            {% if panier[produit.id] is not defined  %}
                                                                <a class=\"btn btn-success\" href=\"{{ path('ajouter', { 'id': produit.id  }) }}\">Acheter</a>
                                                            {% endif %}
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                </div>
                            </div>
                        {% endfor %}
                    {% endfor %}
                    
                    
                    
                {% else %}
                    <section class=\"slider\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        <li>
                            <div class=\"w3l_banner_nav_right_banner\">
                                <h3>Faites vos<span>repas</span> épicés.</h3>
                                <div class=\"more\">
                                    <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Démarrer vos achats\">Démarrer vos achats</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"w3l_banner_nav_right_banner1\">
                                <h3>Commandez <span>vos</span> Fruits.</h3>
                                <div class=\"more\">
                                    <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Démarrer vos achats\">Démarrer vos achats</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"w3l_banner_nav_right_banner2\">
                                <h3>upto <i>50%</i> off.</h3>
                                <div class=\"more\">
                                    <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Démarrer vos achats\">Démarrer vos achats</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- flexSlider -->
                <link rel=\"stylesheet\" href=\"{{ asset('bundles/ecommerce/css/flexslider.css') }}\" type=\"text/css\" media=\"screen\" property=\"\" />
                <script defer src=\"{{ asset('bundles/ecommerce/js/jquery.flexslider.js') }}\"></script>
                <script type=\"text/javascript\">
                \$(window).load(function(){
                  \$('.flexslider').flexslider({
                    animation: \"slide\",
                    start: function(slider){
                      \$('body').removeClass('loading');
                    }
                  });
                });
              </script>
            <!-- //flexSlider -->
                {% endif %}
                
            
            
        </div>
        <div class=\"clearfix\"></div>
    </div>
<!-- banner -->
    {% if not categorie %}
        <div class=\"banner_bottom\">

                <div class=\"wthree_banner_bottom_left_grid_sub\">
                </div>
                <div class=\"wthree_banner_bottom_left_grid_sub1\">
                    <div class=\"col-md-4 wthree_banner_bottom_left\">
                        <div class=\"wthree_banner_bottom_left_grid\">
                            <img src=\"{{ asset('bundles/ecommerce/images/4.jpg') }}\"  alt=\" \" class=\"img-responsive\" />
                            <div class=\"wthree_banner_bottom_left_grid_pos\">
                                <h4>Discount Offer <span>25%</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 wthree_banner_bottom_left\">
                        <div class=\"wthree_banner_bottom_left_grid\">
                            <img src=\"{{ asset('bundles/ecommerce/images/5.jpg') }}\" alt=\" \" class=\"img-responsive\" />
                            <div class=\"wthree_banner_btm_pos\">
                                <h3>introducing <span>best store</span> for <i>groceries</i></h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 wthree_banner_bottom_left\">
                        <div class=\"wthree_banner_bottom_left_grid\">
                            <img src=\"{{ asset('bundles/ecommerce/images/6.jpg') }}\" alt=\" \" class=\"img-responsive\" />
                            <div class=\"wthree_banner_btm_pos1\">
                                <h3>Save <span>Upto</span> \$10</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"clearfix\"> </div>
        </div>
        <!-- top-brands -->
    <div class=\"top-brands\">
        <div class=\"container\">
            <h3>Hot Offers</h3>
            <div class=\"agile_top_brands_grids\">
                <div class=\"col-md-3 top_brand_left\">
                    <div class=\"hover14 column\">
                        <div class=\"agile_top_brand_left_grid\">
                            <div class=\"tag\"><img src=\"{{  asset('bundles/ecommerce/images/tag.png') }}\" alt=\" \" class=\"img-responsive\" /></div>
                            <div class=\"agile_top_brand_left_grid1\">
                                <figure>
                                    <div class=\"snipcart-item block\" >
                                        <div class=\"snipcart-thumb\">
                                            <a href=\"single.html\"><img src=\"{{ asset('bundles/ecommerce/images/1.png') }}\" title=\" \" alt=\" \" /></a>      
                                            <p>fortune sunflower oil</p>
                                            <h4>\$7.99 <span>\$10.00</span></h4>
                                        </div>
                                        <div class=\"snipcart-details top_brand_home_details\">
                                            <form action=\"checkout.html\" method=\"post\">
                                                <fieldset>
                                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                                    <input type=\"hidden\" name=\"item_name\" value=\"Fortune Sunflower Oil\" />
                                                    <input type=\"hidden\" name=\"amount\" value=\"7.99\" />
                                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                    <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                                                </fieldset>
                                                    
                                            </form>
                                    
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 top_brand_left\">
                    <div class=\"hover14 column\">
                        <div class=\"agile_top_brand_left_grid\">
                            <div class=\"agile_top_brand_left_grid1\">
                                <figure>
                                    <div class=\"snipcart-item block\" >
                                        <div class=\"snipcart-thumb\">
                                            <a href=\"single.html\"><img src=\"{{ asset('bundles/ecommerce/images/3.png') }}\" title=\" \" alt=\" \" /></a>      
                                            <p>basmati rise (5 Kg)</p>
                                            <h4>\$11.99 <span>\$15.00</span></h4>
                                        </div>
                                        <div class=\"snipcart-details top_brand_home_details\">
                                            <form action=\"#\" method=\"post\">
                                                <fieldset>
                                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                                    <input type=\"hidden\" name=\"item_name\" value=\"basmati rise\" />
                                                    <input type=\"hidden\" name=\"amount\" value=\"11.99\" />
                                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                    <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 top_brand_left\">
                    <div class=\"hover14 column\">
                        <div class=\"agile_top_brand_left_grid\">
                            <div class=\"agile_top_brand_left_grid_pos\">
                                <img src=\"{{ asset('bundles/ecommerce/images/offer.png') }}\" alt=\"offres\" class=\"img-responsive\"/>
                            </div>
                            <div class=\"agile_top_brand_left_grid1\">
                                <figure>
                                    <div class=\"snipcart-item block\">
                                        <div class=\"snipcart-thumb\">
                                            <a href=\"single.html\"><img src=\"{{ asset('bundles/ecommerce/images/2.png') }}\"  alt=\" \" class=\"img-responsive\" /></a>
                                            <p>Pepsi soft drink (2 Ltr)</p>
                                            <h4>\$8.00 <span>\$10.00</span></h4>
                                        </div>
                                        <div class=\"snipcart-details top_brand_home_details\">
                                            <form action=\"#\" method=\"post\">
                                                <fieldset>
                                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                                    <input type=\"hidden\" name=\"item_name\" value=\"Pepsi soft drink\" />
                                                    <input type=\"hidden\" name=\"amount\" value=\"8.00\" />
                                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                    <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 top_brand_left\">
                    <div class=\"hover14 column\">
                        <div class=\"agile_top_brand_left_grid\">
                            <div class=\"agile_top_brand_left_grid_pos\">
                                <img src=\"{{ asset('bundles/ecommerce/images/offer.png') }}\" alt=\" \" class=\"img-responsive\" />
                            </div>
                            <div class=\"agile_top_brand_left_grid1\">
                                <figure>
                                    <div class=\"snipcart-item block\">
                                        <div class=\"snipcart-thumb\">
                                            <a href=\"single.html\"><img src=\"{{ asset('bundles/ecommerce/images/4.png') }}\" alt=\" \" class=\"img-responsive\" /></a>
                                            <p>dogs food (4 Kg)</p>
                                            <h4>\$9.00 <span>\$11.00</span></h4>
                                        </div>
                                        <div class=\"snipcart-details top_brand_home_details\">
                                            <form action=\"#\" method=\"post\">
                                                <fieldset>
                                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                                    <input type=\"hidden\" name=\"item_name\" value=\"dogs food\" />
                                                    <input type=\"hidden\" name=\"amount\" value=\"9.00\" />
                                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                    <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </div>
<!-- //top-brands -->
<!-- fresh-vegetables -->
    <div class=\"fresh-vegetables\">
        <div class=\"container\">
            <h3>Top Products</h3>
            <div class=\"w3l_fresh_vegetables_grids\">
                <div class=\"col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left\">
                    <div class=\"w3l_fresh_vegetables_grid2\">
                        <ul>
                            {% render(controller('EcommerceBundle:Categorie:menu')) %}
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-9 w3l_fresh_vegetables_grid_right\">
                    <div class=\"col-md-4 w3l_fresh_vegetables_grid\">
                        <div class=\"w3l_fresh_vegetables_grid1\">
                            <img src=\"{{ asset('bundles/ecommerce/images/8.jpg') }}\" alt=\" \" class=\"img-responsive\" />
                        </div>
                    </div>
                    <div class=\"col-md-4 w3l_fresh_vegetables_grid\">
                        <div class=\"w3l_fresh_vegetables_grid1\">
                            <div class=\"w3l_fresh_vegetables_grid1_rel\">
                                <img src=\"{{ asset('bundles/ecommerce/images/7.jpg') }}\" alt=\" \" class=\"img-responsive\" />
                                <div class=\"w3l_fresh_vegetables_grid1_rel_pos\">
                                    <div class=\"more m1\">
                                        <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Démarrer vos achats\">Démarrer vos achats</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"w3l_fresh_vegetables_grid1_bottom\">
                            <img src=\"{{ asset('bundles/ecommerce/images/10.jpg') }}\" alt=\" \" class=\"img-responsive\" />
                            <div class=\"w3l_fresh_vegetables_grid1_bottom_pos\">
                                <h5>Special Offers</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 w3l_fresh_vegetables_grid\">
                        <div class=\"w3l_fresh_vegetables_grid1\">
                            <img src=\"{{ asset('bundles/ecommerce/images/9.jpg') }}\" alt=\" \" class=\"img-responsive\" />
                        </div>
                        <div class=\"w3l_fresh_vegetables_grid1_bottom\">
                            <img src=\"{{ asset('bundles/ecommerce/images/11.jpg') }}\" alt=\" \" class=\"img-responsive\" />
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                    <div class=\"agileinfo_move_text\">
                        <div class=\"agileinfo_marquee\">
                            <h4>get <span class=\"blink_me\">25% off</span> on first order and also get gift voucher</h4>
                        </div>
                        <div class=\"agileinfo_breaking_news\">
                            <span> </span>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </div>
<!-- //fresh-vegetables -->
    {% else %}
    {% endif %}
        

<!-- newsletter -->
    <div class=\"newsletter\">
        <div class=\"container\">
            <div class=\"w3agile_newsletter_left\">
                <h3>sign up for our newsletter</h3>
            </div>
            <div class=\"w3agile_newsletter_right\">
                <form action=\"#\" method=\"post\">
                    <input type=\"email\" name=\"Email\" value=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\" required=\"\">
                    <input type=\"submit\" value=\"subscribe now\">
                </form>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>   
{#  #}

  {#  #}

{% endblock %}
", "EcommerceBundle:Default:produits/layouts/produits.html.twig", "/var/www/html/ecommerce/src/EcommerceBundle/Resources/views/Default/produits/layouts/produits.html.twig");
    }
}
