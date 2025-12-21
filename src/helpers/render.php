<?php
function render($view, $data = [], $isAdmin = false, $withLayout = true, $withHead = true)
{
    extract($data);
    if ($withHead) {
        require_once __DIR__ . '/../../views/partials/head.php';
    }
    if ($withLayout) {
        require_once __DIR__ . '/../../views/partials/header.php';
        // if ($isAdmin) {
        //     require_once __DIR__ . '/../../views/admin/partials/header.php';
        // } else {
        // }
    }

    require_once __DIR__ . '/../../views/' . $view . '.php';

    if ($withLayout) {
        require_once __DIR__ . '/../../views/partials/footer.php';
        // if ($isAdmin) {
        //     require_once __DIR__ . '/../../views/admin/partials/footer.php';
        // } else {
        // }
    }
}
