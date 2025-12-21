<?php
require_once ROOT . '/../config/db.php';

class HomeController
{
    public function index($params)
    {
        $pageTitle = "Accueil";
        render('home', compact('pageTitle'), true, true, true);
    }
}
