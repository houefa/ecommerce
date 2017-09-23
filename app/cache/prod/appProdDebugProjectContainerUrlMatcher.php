<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/unitemesure')) {
                // adminUnitemesure_index
                if (rtrim($pathinfo, '/') === '/admin/unitemesure') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adminUnitemesure_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adminUnitemesure_index');
                    }

                    return array (  '_controller' => 'EcommerceBundle\\Controller\\UnitemesureAdminController::indexAction',  '_route' => 'adminUnitemesure_index',);
                }
                not_adminUnitemesure_index:

                // adminUnitemesure_show
                if (preg_match('#^/admin/unitemesure/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adminUnitemesure_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminUnitemesure_show')), array (  '_controller' => 'EcommerceBundle\\Controller\\UnitemesureAdminController::showAction',));
                }
                not_adminUnitemesure_show:

                // adminUnitemesure_new
                if ($pathinfo === '/admin/unitemesure/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_adminUnitemesure_new;
                    }

                    return array (  '_controller' => 'EcommerceBundle\\Controller\\UnitemesureAdminController::newAction',  '_route' => 'adminUnitemesure_new',);
                }
                not_adminUnitemesure_new:

                // adminUnitemesure_edit
                if (preg_match('#^/admin/unitemesure/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_adminUnitemesure_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminUnitemesure_edit')), array (  '_controller' => 'EcommerceBundle\\Controller\\UnitemesureAdminController::editAction',));
                }
                not_adminUnitemesure_edit:

                // adminUnitemesure_delete
                if (preg_match('#^/admin/unitemesure/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_adminUnitemesure_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminUnitemesure_delete')), array (  '_controller' => 'EcommerceBundle\\Controller\\UnitemesureAdminController::deleteAction',));
                }
                not_adminUnitemesure_delete:

            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                // CommandeAdmin_index
                if (rtrim($pathinfo, '/') === '/admin/commande') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_CommandeAdmin_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'CommandeAdmin_index');
                    }

                    return array (  '_controller' => 'EcommerceBundle\\Controller\\CommandeAdminController::indexAction',  '_route' => 'CommandeAdmin_index',);
                }
                not_CommandeAdmin_index:

                if (0 === strpos($pathinfo, '/admin/categorie')) {
                    // categorieAdmin_index
                    if (rtrim($pathinfo, '/') === '/admin/categorie') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_categorieAdmin_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'categorieAdmin_index');
                        }

                        return array (  '_controller' => 'EcommerceBundle\\Controller\\CategorieAdminController::indexAction',  '_route' => 'categorieAdmin_index',);
                    }
                    not_categorieAdmin_index:

                    // categorieAdmin_show
                    if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_categorieAdmin_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieAdmin_show')), array (  '_controller' => 'EcommerceBundle\\Controller\\CategorieAdminController::showAction',));
                    }
                    not_categorieAdmin_show:

                    // categorieAdmin_new
                    if ($pathinfo === '/admin/categorie/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_categorieAdmin_new;
                        }

                        return array (  '_controller' => 'EcommerceBundle\\Controller\\CategorieAdminController::newAction',  '_route' => 'categorieAdmin_new',);
                    }
                    not_categorieAdmin_new:

                    // categorieAdmin_edit
                    if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_categorieAdmin_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieAdmin_edit')), array (  '_controller' => 'EcommerceBundle\\Controller\\CategorieAdminController::editAction',));
                    }
                    not_categorieAdmin_edit:

                    // categorieAdmin_delete
                    if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_categorieAdmin_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieAdmin_delete')), array (  '_controller' => 'EcommerceBundle\\Controller\\CategorieAdminController::deleteAction',));
                    }
                    not_categorieAdmin_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/produits')) {
                // produitAdmin_index
                if (rtrim($pathinfo, '/') === '/admin/produits') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_produitAdmin_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'produitAdmin_index');
                    }

                    return array (  '_controller' => 'EcommerceBundle\\Controller\\ProduitAdminController::indexAction',  '_route' => 'produitAdmin_index',);
                }
                not_produitAdmin_index:

                // produitAdmin_show
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_produitAdmin_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produitAdmin_show')), array (  '_controller' => 'EcommerceBundle\\Controller\\ProduitAdminController::showAction',));
                }
                not_produitAdmin_show:

                // produitAdmin_new
                if ($pathinfo === '/admin/produits/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_produitAdmin_new;
                    }

                    return array (  '_controller' => 'EcommerceBundle\\Controller\\ProduitAdminController::newAction',  '_route' => 'produitAdmin_new',);
                }
                not_produitAdmin_new:

                // produitAdmin_edit
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_produitAdmin_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produitAdmin_edit')), array (  '_controller' => 'EcommerceBundle\\Controller\\ProduitAdminController::editAction',));
                }
                not_produitAdmin_edit:

                // produitAdmin_delete
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_produitAdmin_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produitAdmin_delete')), array (  '_controller' => 'EcommerceBundle\\Controller\\ProduitAdminController::deleteAction',));
                }
                not_produitAdmin_delete:

            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/panier')) {
                // supprimer
                if (0 === strpos($pathinfo, '/panier/supprimer') && preg_match('#^/panier/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'EcommerceBundle\\Controller\\PanierController::supprimerAction',));
                }

                // ajouter
                if (0 === strpos($pathinfo, '/panier/ajouter') && preg_match('#^/panier/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter')), array (  '_controller' => 'EcommerceBundle\\Controller\\PanierController::ajouterAction',));
                }

                // panier
                if (rtrim($pathinfo, '/') === '/panier') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'panier');
                    }

                    return array (  '_controller' => 'EcommerceBundle\\Controller\\PanierController::panierAction',  '_route' => 'panier',);
                }

                // livraison
                if ($pathinfo === '/panier/livraison') {
                    return array (  '_controller' => 'EcommerceBundle\\Controller\\PanierController::livraisonAction',  '_route' => 'livraison',);
                }

                // validation
                if ($pathinfo === '/panier/validation') {
                    return array (  '_controller' => 'EcommerceBundle\\Controller\\PanierController::validationAction',  '_route' => 'validation',);
                }

                // livraisonAdresseSupprimer
                if (0 === strpos($pathinfo, '/panier/adresse/supprimer') && preg_match('#^/panier/adresse/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraisonAdresseSupprimer')), array (  '_controller' => 'EcommerceBundle\\Controller\\PanierController::supprimerAdresseAction',));
                }

            }

            if (0 === strpos($pathinfo, '/produit')) {
                // produits
                if ($pathinfo === '/produits') {
                    return array (  '_controller' => 'EcommerceBundle\\Controller\\ProduitsController::produitsAction',  '_route' => 'produits',);
                }

                // presentation
                if (preg_match('#^/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation')), array (  '_controller' => 'EcommerceBundle\\Controller\\ProduitsController::presentationAction',));
                }

            }

        }

        // ajout
        if ($pathinfo === '/test/ajout') {
            return array (  '_controller' => 'EcommerceBundle\\Controller\\TestController::testFormulaireAction',  '_route' => 'ajout',);
        }

        // categorieProduits
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieProduits')), array (  '_controller' => 'EcommerceBundle\\Controller\\ProduitsController::produitsAction',));
        }

        // rechercheProduits
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'EcommerceBundle\\Controller\\ProduitsController::rechercheTraitementAction',  '_route' => 'rechercheProduits',);
        }

        // validationCommande
        if (0 === strpos($pathinfo, '/validationCommande') && preg_match('#^/validationCommande/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'validationCommande')), array (  '_controller' => 'EcommerceBundle\\Controller\\CommandeController::validationCommandeAction',));
        }

        if (0 === strpos($pathinfo, '/admin/utilisateur')) {
            // utilisateurAdmin_index
            if (rtrim($pathinfo, '/') === '/admin/utilisateur') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateurAdmin_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateurAdmin_index');
                }

                return array (  '_controller' => 'UtilisateursBundle\\Controller\\UtilisateursAdminController::indexAction',  '_route' => 'utilisateurAdmin_index',);
            }
            not_utilisateurAdmin_index:

            // utilisateurAdminAdresses
            if (preg_match('#^/admin/utilisateur/(?P<id>[^/]++)/adresses$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateurAdminAdresses;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurAdminAdresses')), array (  '_controller' => 'UtilisateursBundle\\Controller\\UtilisateursAdminController::utilisateurAction',));
            }
            not_utilisateurAdminAdresses:

            // utilisateurAdminFactures
            if (preg_match('#^/admin/utilisateur/(?P<id>[^/]++)/factures$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateurAdminFactures;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurAdminFactures')), array (  '_controller' => 'UtilisateursBundle\\Controller\\UtilisateursAdminController::utilisateurAction',));
            }
            not_utilisateurAdminFactures:

        }

        // factures
        if ($pathinfo === '/profile/factures') {
            return array (  '_controller' => 'UtilisateursBundle\\Controller\\UtilisateursController::facturesAction',  '_route' => 'factures',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin/pages')) {
            // adminPages_index
            if (rtrim($pathinfo, '/') === '/admin/pages') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_adminPages_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminPages_index');
                }

                return array (  '_controller' => 'PagesBundle\\Controller\\PagesAdminController::indexAction',  '_route' => 'adminPages_index',);
            }
            not_adminPages_index:

            // adminPages_show
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_adminPages_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_show')), array (  '_controller' => 'PagesBundle\\Controller\\PagesAdminController::showAction',));
            }
            not_adminPages_show:

            // adminPages_new
            if ($pathinfo === '/admin/pages/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_adminPages_new;
                }

                return array (  '_controller' => 'PagesBundle\\Controller\\PagesAdminController::newAction',  '_route' => 'adminPages_new',);
            }
            not_adminPages_new:

            // adminPages_edit
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_adminPages_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_edit')), array (  '_controller' => 'PagesBundle\\Controller\\PagesAdminController::editAction',));
            }
            not_adminPages_edit:

            // adminPages_delete
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_adminPages_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_delete')), array (  '_controller' => 'PagesBundle\\Controller\\PagesAdminController::deleteAction',));
            }
            not_adminPages_delete:

        }

        // pages
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pages')), array (  '_controller' => 'PagesBundle\\Controller\\PagesController::pageAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
