<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/category')) {
            // post_category_index
            if ('/category' === $pathinfo) {
                return array (  '_controller' => 'PostBundle\\Controller\\CategoryController::indexAction',  '_route' => 'post_category_index',);
            }

            // post_category_create
            if ('/category/create' === $pathinfo) {
                return array (  '_controller' => 'PostBundle\\Controller\\CategoryController::createAction',  '_route' => 'post_category_create',);
            }

            // post_category_show
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_category_show')), array (  '_controller' => 'PostBundle\\Controller\\CategoryController::showAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/post')) {
            // post_default_index
            if ('/post' === $pathinfo) {
                return array (  '_controller' => 'PostBundle\\Controller\\DefaultController::indexAction',  '_route' => 'post_default_index',);
            }

            // post_index
            if ('/post' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'post_index');
                }

                return array (  '_controller' => 'PostBundle\\Controller\\PostController::indexAction',  '_route' => 'post_index',);
            }

            // post-create
            if ('/post/create' === $pathinfo) {
                return array (  '_controller' => 'PostBundle\\Controller\\PostController::createAction',  '_route' => 'post-create',);
            }

            // post-show
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post-show')), array (  '_controller' => 'PostBundle\\Controller\\PostController::showAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/tag')) {
            // post_tag_index
            if ('/tag' === $pathinfo) {
                return array (  '_controller' => 'PostBundle\\Controller\\TagController::indexAction',  '_route' => 'post_tag_index',);
            }

            // post_tag_create
            if ('/tag/create' === $pathinfo) {
                return array (  '_controller' => 'PostBundle\\Controller\\TagController::createAction',  '_route' => 'post_tag_create',);
            }

        }

        elseif (0 === strpos($pathinfo, '/site')) {
            // site_homepage
            if ('/site' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'site_homepage');
                }

                return array (  '_controller' => 'SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'site_homepage',);
            }

            // site_show
            if (preg_match('#^/site/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_show')), array (  '_controller' => 'SiteBundle\\Controller\\DefaultController::showAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/blog')) {
            // list-blog
            if ('/blog' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'list-blog',);
            }

            // show-post
            if (preg_match('#^/blog/(?P<id>\\d+)/(?P<slug>[a-zA-Z]+)/(?P<annee>[^/\\.]++)\\.(?P<ext>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show-post')), array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::showAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
