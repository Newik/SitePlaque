<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // user_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_default_index');
            }

            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_default_index',);
        }

        // liste_client
        if ($pathinfo === '/admin/client/liste') {
            return array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'liste_client',);
        }

        // user_utilisateur_warning
        if ($pathinfo === '/utilisateur/suppression') {
            return array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::warningAction',  '_route' => 'user_utilisateur_warning',);
        }

        // user_utilisateur_warningadmin
        if ($pathinfo === '/admin/utilisateur/suppression') {
            return array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::warningAdminAction',  '_route' => 'user_utilisateur_warningadmin',);
        }

        // user_utilisateur_delete
        if ($pathinfo === '/utilisateur/suppression/valider') {
            return array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::deleteAction',  '_route' => 'user_utilisateur_delete',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // user_utilisateur_client
            if (0 === strpos($pathinfo, '/admin/ListeClient/Client') && preg_match('#^/admin/ListeClient/Client/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_utilisateur_client')), array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::clientAction',));
            }

            // user_utilisateur_deleteclient
            if (0 === strpos($pathinfo, '/admin/suppression/Client') && preg_match('#^/admin/suppression/Client/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_utilisateur_deleteclient')), array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::deleteClientAction',));
            }

            if (0 === strpos($pathinfo, '/admin/liste')) {
                // siteplaque_admin_listclient
                if ($pathinfo === '/admin/listeClient') {
                    return array (  '_controller' => 'SitePlaqueBundle\\Controller\\AdminController::listClientAction',  '_route' => 'siteplaque_admin_listclient',);
                }

                // siteplaque_admin_listdevis
                if ($pathinfo === '/admin/listeDevis') {
                    return array (  '_controller' => 'SitePlaqueBundle\\Controller\\AdminController::listDevisAction',  '_route' => 'siteplaque_admin_listdevis',);
                }

            }

        }

        // siteplaque_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'siteplaque_default_index');
            }

            return array (  '_controller' => 'SitePlaqueBundle\\Controller\\DefaultController::indexAction',  '_route' => 'siteplaque_default_index',);
        }

        if (0 === strpos($pathinfo, '/devis')) {
            // siteplaque_devis_addall
            if ($pathinfo === '/devis/ajout/totalite/plaques') {
                return array (  '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::addAllAction',  '_route' => 'siteplaque_devis_addall',);
            }

            // siteplaque_devis_delete
            if (0 === strpos($pathinfo, '/devis/suppression') && preg_match('#^/devis/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'siteplaque_devis_delete')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::deleteAction',));
            }

            // siteplaque_devis_view
            if (0 === strpos($pathinfo, '/devis/mondevis') && preg_match('#^/devis/mondevis/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'siteplaque_devis_view')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::viewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/plaques')) {
            // siteplaque_plaque_single
            if (0 === strpos($pathinfo, '/plaques/maplaque') && preg_match('#^/plaques/maplaque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'siteplaque_plaque_single')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::singleAction',));
            }

            // siteplaque_plaque_add
            if ($pathinfo === '/plaques/ajout') {
                return array (  '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::addAction',  '_route' => 'siteplaque_plaque_add',);
            }

            // siteplaque_plaque_edit
            if (0 === strpos($pathinfo, '/plaques/edit') && preg_match('#^/plaques/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'siteplaque_plaque_edit')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::editAction',));
            }

            // siteplaque_plaque_delete
            if (0 === strpos($pathinfo, '/plaques/suppression') && preg_match('#^/plaques/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'siteplaque_plaque_delete')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // siteplaque_prixunitaire_edit
            if (0 === strpos($pathinfo, '/admin/prixUnitaire/edit') && preg_match('#^/admin/prixUnitaire/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'siteplaque_prixunitaire_edit')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\PrixUnitaireController::editAction',));
            }

            // accueil_platform
            if ($pathinfo === '/accueil') {
                return array (  '_controller' => 'SitePlaqueBundle\\Controller\\AccueilController::indexAction',  '_route' => 'accueil_platform',);
            }

        }

        if (0 === strpos($pathinfo, '/plaques')) {
            // plaque_platform
            if ($pathinfo === '/plaques') {
                return array (  '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::indexAction',  '_route' => 'plaque_platform',);
            }

            // plaque_single
            if (0 === strpos($pathinfo, '/plaques/maplaque') && preg_match('#^/plaques/maplaque/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plaque_single')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::singleAction',));
            }

            // plaque_edit
            if (0 === strpos($pathinfo, '/plaques/edit') && preg_match('#^/plaques/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'plaque_edit')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::editAction',));
            }

            if (0 === strpos($pathinfo, '/plaques/ajout')) {
                // plaque_creation
                if ($pathinfo === '/plaques/ajout') {
                    return array (  '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::addAction',  '_route' => 'plaque_creation',);
                }

                // plaque_succes
                if ($pathinfo === '/plaques/ajoutvalide') {
                    return array (  '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::succesAction',  '_route' => 'plaque_succes',);
                }

            }

            if (0 === strpos($pathinfo, '/plaques/suppr')) {
                // plaque_supprime
                if (0 === strpos($pathinfo, '/plaques/supprimer') && preg_match('#^/plaques/supprimer/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plaque_supprime')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::deleteAction',));
                }

                // plaque_supprime_valide
                if ($pathinfo === '/plaques/suppressionvalide') {
                    return array (  '_controller' => 'SitePlaqueBundle\\Controller\\PlaqueController::deletevalideAction',  '_route' => 'plaque_supprime_valide',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/devis')) {
            // devis_platform
            if ($pathinfo === '/devis') {
                return array (  '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::indexAction',  '_route' => 'devis_platform',);
            }

            // devis_view
            if (0 === strpos($pathinfo, '/devis/mondevis') && preg_match('#^/devis/mondevis/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'devis_view')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::viewAction',));
            }

            // devis_ajout
            if (0 === strpos($pathinfo, '/devis/ajout') && preg_match('#^/devis/ajout/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'devis_ajout')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::addAction',));
            }

            if (0 === strpos($pathinfo, '/devis/suppression')) {
                // devis_supprime
                if (preg_match('#^/devis/suppression/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'devis_supprime')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::deleteAction',));
                }

                // devis_supprime_valide
                if ($pathinfo === '/devis/suppressionvalide') {
                    return array (  '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::deletevalideAction',  '_route' => 'devis_supprime_valide',);
                }

            }

            // devis_all_plaques
            if ($pathinfo === '/devis/ajout/totalite/plaques') {
                return array (  '_controller' => 'SitePlaqueBundle\\Controller\\DevisController::addAllAction',  '_route' => 'devis_all_plaques',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/liste')) {
                // admin_listeUser
                if ($pathinfo === '/admin/listeClient') {
                    return array (  '_controller' => 'SitePlaqueBundle\\Controller\\AdminController::listUserAction',  '_route' => 'admin_listeUser',);
                }

                // admin_listedevis
                if ($pathinfo === '/admin/listeDevis') {
                    return array (  '_controller' => 'SitePlaqueBundle\\Controller\\AdminController::listDevisAction',  '_route' => 'admin_listedevis',);
                }

            }

            // admin_oneuser
            if (0 === strpos($pathinfo, '/admin/ListeClient/Client') && preg_match('#^/admin/ListeClient/Client/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_oneuser')), array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::clientAction',));
            }

            // admin_warning
            if ($pathinfo === '/admin/utilisateur/suppression') {
                return array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::warningAdminAction',  '_route' => 'admin_warning',);
            }

            // admin_supprim_client
            if (0 === strpos($pathinfo, '/admin/suppression/Devis') && preg_match('#^/admin/suppression/Devis/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_supprim_client')), array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::deleteClientAction',));
            }

            if (0 === strpos($pathinfo, '/admin/prixunitaires')) {
                // admin_prix_list
                if ($pathinfo === '/admin/prixunitaires') {
                    return array (  '_controller' => 'SitePlaqueBundle\\Controller\\PrixUnitaireController::listAction',  '_route' => 'admin_prix_list',);
                }

                // admin_prix_edit
                if (0 === strpos($pathinfo, '/admin/prixunitaires/edit') && preg_match('#^/admin/prixunitaires/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_prix_edit')), array (  '_controller' => 'SitePlaqueBundle\\Controller\\PrixUnitaireController::editAction',));
                }

                // prix_success
                if ($pathinfo === '/admin/prixunitaires/modificationValide') {
                    return array (  '_controller' => 'SitePlaqueBundle\\Controller\\PrixUnitaireController::succesAction',  '_route' => 'prix_success',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/utilisateur/suppression')) {
            // user_warning
            if ($pathinfo === '/utilisateur/suppression') {
                return array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::warningAction',  '_route' => 'user_warning',);
            }

            // user_delete
            if ($pathinfo === '/utilisateur/suppression/valider') {
                return array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::deleteAction',  '_route' => 'user_delete',);
            }

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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
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

            // fos_user_resetting_request
            if ($pathinfo === '/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

        }

        // fos_user_resetting_send_email
        if ($pathinfo === '/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if ($pathinfo === '/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/reset') && preg_match('#^/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if ($pathinfo === '/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
