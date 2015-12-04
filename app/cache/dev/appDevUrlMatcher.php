<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // fr_log_homepage
        if (preg_match('#^/(?P<_locale>en|fr)/log$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_log_homepage')), array (  '_controller' => 'Fr\\LogBundle\\Controller\\LogController::addAction',));
        }

        // fr_log_view_all
        if (preg_match('#^/(?P<_locale>en|fr)/admin/log$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_log_view_all')), array (  '_controller' => 'Fr\\LogBundle\\Controller\\LogController::viewallAction',));
        }

        // fr_log_log_as
        if (preg_match('#^/(?P<_locale>en|fr)/admin/log_as/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_log_log_as')), array (  '_controller' => 'Fr\\LogBundle\\Controller\\LogasController::logasAction',));
        }

        // fr_log_log_back
        if (preg_match('#^/(?P<_locale>en|fr)/log_back$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_log_log_back')), array (  '_controller' => 'Fr\\LogBundle\\Controller\\LogasController::logbackAction',));
        }

        // fr_forum_toto
        if (preg_match('#^/(?P<_locale>en|fr)/forum/toto$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_toto')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\CategorieController::totoAction',));
        }

        // fr_forum_home
        if (preg_match('#^/(?P<_locale>en|fr)/forum/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fr_forum_home');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_home')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\CategorieController::indexAction',));
        }

        // fr_forum_categorie_view
        if (preg_match('#^/(?P<_locale>en|fr)/forum/categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_categorie_view')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\CategorieController::viewAction',));
        }

        // fr_forum_categorie_add
        if (preg_match('#^/(?P<_locale>en|fr)/forum/categorie_add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_categorie_add')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\CategorieController::addAction',));
        }

        // fr_forum_categorie_edit
        if (preg_match('#^/(?P<_locale>en|fr)/forum/categorie_edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_categorie_edit')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\CategorieController::editAction',));
        }

        // fr_forum_categorie_delete
        if (preg_match('#^/(?P<_locale>en|fr)/forum/categorie_delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_categorie_delete')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\CategorieController::deleteAction',));
        }

        // fr_forum_sous_categorie_view
        if (preg_match('#^/(?P<_locale>en|fr)/forum/sous_categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_sous_categorie_view')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\SousCategorieController::viewAction',));
        }

        // fr_forum_sous_categorie_add
        if (preg_match('#^/(?P<_locale>en|fr)/forum/sous_categorie_add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_sous_categorie_add')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\SousCategorieController::addAction',));
        }

        // fr_forum_sous_categorie_edit
        if (preg_match('#^/(?P<_locale>en|fr)/forum/sous_categorie_edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_sous_categorie_edit')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\SousCategorieController::editAction',));
        }

        // fr_forum_sous_categorie_delete
        if (preg_match('#^/(?P<_locale>en|fr)/forum/sous_categorie_delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_sous_categorie_delete')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\SousCategorieController::deleteAction',));
        }

        // fr_forum_threads_add_in_categorie
        if (preg_match('#^/(?P<_locale>en|fr)/forum/threads_add_in_categorie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_threads_add_in_categorie')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\ThreadsController::add_in_categorieAction',));
        }

        // fr_forum_threads_add
        if (preg_match('#^/(?P<_locale>en|fr)/forum/threads_add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_threads_add')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\ThreadsController::addAction',));
        }

        // fr_forum_threads_edit
        if (preg_match('#^/(?P<_locale>en|fr)/forum/threads_edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_threads_edit')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\ThreadsController::editAction',));
        }

        // fr_forum_threads_delete
        if (preg_match('#^/(?P<_locale>en|fr)/forum/threads_delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_threads_delete')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\ThreadsController::deleteAction',));
        }

        // fr_forum_threads_view
        if (preg_match('#^/(?P<_locale>en|fr)/forum/threads/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_threads_view')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\ThreadsController::viewAction',));
        }

        // fr_forum_answer_add
        if (preg_match('#^/(?P<_locale>en|fr)/forum/answer_add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_answer_add')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\AnswerController::addAction',));
        }

        // fr_forum_answer_delete
        if (preg_match('#^/(?P<_locale>en|fr)/forum/answer_delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_answer_delete')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\AnswerController::deleteAction',));
        }

        // fr_forum_commentaire_add
        if (preg_match('#^/(?P<_locale>en|fr)/forum/commentaire_add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_commentaire_add')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\CommentaireController::addAction',));
        }

        // fr_forum_commentaire_delete
        if (preg_match('#^/(?P<_locale>en|fr)/forum/commentaire_delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_forum_commentaire_delete')), array (  '_controller' => 'Fr\\ForumBundle\\Controller\\CommentaireController::deleteAction',));
        }

        // fr_reponse_homepage
        if (preg_match('#^/(?P<_locale>en|fr)/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_reponse_homepage')), array (  '_controller' => 'Fr\\ReponseBundle\\Controller\\DefaultController::indexAction',));
        }

        // fr_reponse_user_add_reponse
        if (preg_match('#^/(?P<_locale>en|fr)/user_add_reponse/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_reponse_user_add_reponse')), array (  '_controller' => 'Fr\\ReponseBundle\\Controller\\ReponseController::user_add_reponseAction',));
        }

        // fr_reponse_admin_add_reponse
        if (preg_match('#^/(?P<_locale>en|fr)/user_admin_reponse/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_reponse_admin_add_reponse')), array (  '_controller' => 'Fr\\ReponseBundle\\Controller\\ReponseController::admin_add_reponseAction',));
        }

        // fr_projet_homepage
        if (preg_match('#^/(?P<_locale>en|fr)/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_projet_homepage')), array (  '_controller' => 'FrProjetBundle:Default:index',));
        }

        // fr_projet_home
        if (preg_match('#^/(?P<_locale>en|fr)/home$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_projet_home')), array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::indexAction',));
        }

        // fr_projet_logout
        if (preg_match('#^/(?P<_locale>en|fr)/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_projet_logout')), array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::logoutAction',));
        }

        // fr_projet_login
        if (preg_match('#^/(?P<_locale>en|fr)/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_projet_login')), array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::loginAction',));
        }

        // fr_projet_registed
        if (preg_match('#^/(?P<_locale>en|fr)/registed$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_projet_registed')), array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::registedAction',));
        }

        // fr_projet_profile
        if (preg_match('#^/(?P<_locale>en|fr)/profile$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_projet_profile')), array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::profileAction',));
        }

        // fr_projet_admin
        if (preg_match('#^/(?P<_locale>en|fr)/admin$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_projet_admin')), array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::adminAction',));
        }

        // fr_projet_delete_user
        if (preg_match('#^/(?P<_locale>en|fr)/admin/delete_user/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_projet_delete_user')), array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::deleteAction',));
        }

        // fr_projet_set_email
        if (preg_match('#^/(?P<_locale>en|fr)/set_email/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_projet_set_email')), array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::setmailAction',));
        }

        // fr_projet_mail
        if (preg_match('#^/(?P<_locale>en|fr)/projet/mail$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_projet_mail')), array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::mailAction',));
        }

        // fr_projet_add_roles
        if (preg_match('#^/(?P<_locale>en|fr)/admin/add_roles/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_projet_add_roles')), array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::addrolesAction',));
        }

        // fr_projet_setLocale
        if (preg_match('#^/(?P<_locale>en|fr)/setLocale/(?P<language>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_projet_setLocale')), array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::setLocaleAction',));
        }

        // fr_tickets_homepage
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fr_tickets_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_homepage')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::indexAction',));
        }

        // fr_tickets_new_tickets
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/new_tickets$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_new_tickets')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::newticketsAction',));
        }

        // fr_tickets_my_tickets
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/my_tickets$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_my_tickets')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::myticketsAction',));
        }

        // fr_tickets_close_tickets
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/closetickets$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_close_tickets')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::closeticketsAction',));
        }

        // fr_tickets_etat_tickets
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/etat_tickets/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_etat_tickets')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::etatticketsAction',));
        }

        // fr_tickets_open_tickets
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/open_tickets/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_open_tickets')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::openticketsAction',));
        }

        // fr_tickets_spool
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/admin/spool$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_spool')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::spoolAction',));
        }

        // fr_tickets_admin_open_tickets
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/admin/spool/admin_tickets$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_admin_open_tickets')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::adminopenticketsAction',));
        }

        // fr_tickets_admin_all_open_tickets
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/admin/spool/admin_all_open_tickets$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_admin_all_open_tickets')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::admin_all_open_ticketsAction',));
        }

        // fr_tickets_admin_all_close_tickets
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/admin/spool/admin_all_close_tickets$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_admin_all_close_tickets')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::admin_all_close_ticketsAction',));
        }

        // fr_tickets_admin_destinataire
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/admin/spool/admin_destinataire/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_admin_destinataire')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::admin_destinataireAction',));
        }

        // fr_tickets_admin_close
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/admin/admin_close/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_admin_close')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::admin_closeAction',));
        }

        // fr_tickets_admin_open
        if (preg_match('#^/(?P<_locale>en|fr)/tickets/admin/admin_open/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_tickets_admin_open')), array (  '_controller' => 'Fr\\TicketsBundle\\Controller\\TicketsController::admin_openAction',));
        }

        // fr_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr_user_homepage')), array (  '_controller' => 'Fr\\UserBundle\\Controller\\DefaultController::indexAction',));
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

                    return array (  '_controller' => 'Fr\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Fr\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Fr\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Fr\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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
        if ($pathinfo === '/projet/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fr_projet_after_login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fr_projet_after_login');
            }

            return array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::loginAction',  '_route' => 'fr_projet_after_login',);
        }

        // fr_projet_register
        if ($pathinfo === '/register/confirmed') {
            return array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::indexAction',  '_route' => 'fr_projet_register',);
        }

        // fr_projet_home_en
        if ($pathinfo === '/en/home') {
            return array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::indexAction',  '_route' => 'fr_projet_home_en',);
        }

        // fr_projet_home_fr
        if ($pathinfo === '/fr/home') {
            return array (  '_controller' => 'Fr\\ProjetBundle\\Controller\\ProjetController::indexAction',  '_route' => 'fr_projet_home_fr',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
