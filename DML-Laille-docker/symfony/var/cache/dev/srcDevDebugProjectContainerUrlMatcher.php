<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/admin' => array(array('_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'), null, null, null),
                    '/deconnexion' => array(array('_route' => 'deconnexion', '_controller' => 'App\\Controller\\AdminController::logout'), null, null, null),
                    '/admin/dashboard' => array(array('_route' => 'dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'), null, null, null),
                    '/admin/manifestation/add' => array(array('_route' => 'manifestationCreate', '_controller' => 'App\\Controller\\AdminController::manifestationCreate'), null, null, null),
                    '/admin/niveau/add' => array(array('_route' => 'niveauCreate', '_controller' => 'App\\Controller\\AdminController::niveauCreate'), null, null, null),
                    '/admin/cours/add' => array(array('_route' => 'coursSuppCreate', '_controller' => 'App\\Controller\\AdminController::coursSuppCreate'), null, null, null),
                    '/' => array(array('_route' => 'index', '_controller' => 'App\\Controller\\PublicController::index'), null, null, null),
                    '/danse' => array(array('_route' => 'danse', '_controller' => 'App\\Controller\\PublicController::danse'), null, null, null),
                    '/manifestation' => array(array('_route' => 'manifestation', '_controller' => 'App\\Controller\\PublicController::manifestation'), null, null, null),
                    '/adherent' => array(array('_route' => 'adherent', '_controller' => 'App\\Controller\\PublicController::adherent'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/admin/(?'
                        .'|danse/(?'
                            .'|modify/([^/]++)(*:41)'
                            .'|add(?:/([^/]++))?(*:65)'
                            .'|delete/([^/]++)(*:87)'
                        .')'
                        .'|manifestation/(?'
                            .'|modify/([^/]++)(*:127)'
                            .'|delete/([^/]++)(*:150)'
                        .')'
                        .'|niveau/(?'
                            .'|modify/([^/]++)(*:184)'
                            .'|delete/([^/]++)(*:207)'
                        .')'
                        .'|cours(?'
                            .'|/modify/([^/]++)(*:240)'
                            .'|Supp/delete/([^/]++)(*:268)'
                        .')'
                    .')'
                    .'|/danse/([^/]++)(*:293)'
                    .'|/([^/]++)/([^/]++)(*:319)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:358)'
                        .'|wdt/([^/]++)(*:378)'
                        .'|profiler/(?'
                            .'|search(?'
                                .'|(*:407)'
                                .'|_bar(*:419)'
                            .')'
                            .'|phpinfo(*:435)'
                            .'|([^/]++)/search/results(*:466)'
                            .'|open(*:478)'
                            .'|([^/]++)(?'
                                .'|(*:497)'
                                .'|/(?'
                                    .'|router(*:515)'
                                    .'|exception(?'
                                        .'|(*:535)'
                                        .'|\\.css(*:548)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            41 => array(array('_route' => 'danceModify', '_controller' => 'App\\Controller\\AdminController::danceCreate'), array('id'), null, null),
                            65 => array(array('_route' => 'danceCreate', 'n' => 1, '_controller' => 'App\\Controller\\AdminController::danceCreate'), array('n'), null, null),
                            87 => array(array('_route' => 'danceDelete', '_controller' => 'App\\Controller\\AdminController::danceDelete'), array('id'), null, null),
                            127 => array(array('_route' => 'manifestationModify', '_controller' => 'App\\Controller\\AdminController::manifestationCreate'), array('id'), null, null),
                            150 => array(array('_route' => 'manifestationDelete', '_controller' => 'App\\Controller\\AdminController::manifestationDelete'), array('id'), null, null),
                            184 => array(array('_route' => 'niveauModify', '_controller' => 'App\\Controller\\AdminController::niveauCreate'), array('id'), null, null),
                            207 => array(array('_route' => 'niveauDelete', '_controller' => 'App\\Controller\\AdminController::niveauDelete'), array('id'), null, null),
                            240 => array(array('_route' => 'coursSuppModify', '_controller' => 'App\\Controller\\AdminController::coursSuppCreate'), array('id'), null, null),
                            268 => array(array('_route' => 'coursSuppDelete', '_controller' => 'App\\Controller\\AdminController::coursSuppDelete'), array('id'), null, null),
                            293 => array(array('_route' => 'danseShow', '_controller' => 'App\\Controller\\PublicController::danseShow'), array('id'), null, null),
                            319 => array(array('_route' => 'redirection', '_controller' => 'App\\Controller\\PublicController::redirection'), array('id', 'iid'), null, null),
                            358 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            378 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            407 => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), array(), null, null),
                            419 => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), null, null),
                            435 => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), null, null),
                            466 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            478 => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), array(), null, null),
                            497 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            515 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            535 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            548 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (548 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
