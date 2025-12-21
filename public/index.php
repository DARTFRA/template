<?php
session_start();
define('ROOT', dirname(__FILE__));
date_default_timezone_set('Europe/Paris');
ini_set('display_errors', 1);
define('ENABLE_RATE_LIMIT', false);

require_once ROOT . '/../vendor/autoload.php';
require_once ROOT . '/../config/router.php';
require_once ROOT . '/../config/define.php';
require_once ROOT . '/../src/helpers/render.php';
require_once ROOT . '/../src/helpers/url.php';
require_once ROOT . '/../src/function/check.php';

$match = $router->match();

$errorCodes = [400, 401, 403, 404, 405, 502, 503, 504];
if (!empty($_SERVER['REDIRECT_STATUS'])) {
    $code = intval($_SERVER['REDIRECT_STATUS']);

    if (in_array($code, $errorCodes)) {
        handleError($code, "Erreur serveur détectée (Apache).");
        exit;
    }
}


// ============================================================
//  FONCTION GLOBALE DE GESTION DES ERREURS
// ============================================================
function handleError(int $code, string $message = "")
{
    http_response_code($code);
    $errorView = ROOT . "/../views/error/{$code}.php";
    error_log($message);
    if (file_exists($errorView)) {
        require $errorView;
    } else {
    }

    exit;
}
if ($match) {
    if (is_array($match['target'])) {
        $controller = $match['target']['controller'];
        $method = $match['target']['method'];
        $pageTitle = $match['target']['title'] ?? 'DEV';
        $withLayout = $match['target']['withLayout'] ?? false;
    } else {
        list($controller, $method) = explode('@', $match['target']);
        $pageTitle = 'DEV';
    }
    $controllerPath = ROOT . "/../controllers/{$controller}.php";
    $isAdmin = strpos($_SERVER['REQUEST_URI'], '/admin') !== false;
    $withLayout = true;
    $withHead = true;
    if (file_exists($controllerPath)) {
        require_once $controllerPath;

        if (!class_exists($controller)) {
            handleError(500, "Une erreur est survenue");
            exit;
        }

        $controllerInstance = new $controller();
        $params = $match['params'];
        $params['pageTitle'] = $pageTitle;
        $params['isAdmin'] = $isAdmin;
        $params['withLayout'] = $withLayout;
        $params['withHead'] = $withHead;
        if (!method_exists($controllerInstance, $method)) {
            handleError(500, "Une erreur est survenue");
            exit;
        }

        $reflection = new ReflectionMethod($controllerInstance, $method);
        $arguments = [];

        foreach ($reflection->getParameters() as $param) {
            $paramName = $param->getName();

            if ($paramName === 'params') {
                $arguments[] = $params;
            } elseif (array_key_exists($paramName, $match['params'])) {
                $arguments[] = $match['params'][$paramName];
            } else {
                $arguments[] = null; // Valeur par défaut si manquante
            }
        }

        call_user_func_array([$controllerInstance, $method], $arguments);
    } else {
        handleError(500, "Une erreur est survenue");
    }
} else {
    handleError(404, "Page introuvable");
}
