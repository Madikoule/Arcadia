<?php

namespace App\Controllers;

class AccueilController {
    public function index() {
        require_once '../Views/accueil.php';
        $content = 'bienvenue sur Arcadia';
    }
}