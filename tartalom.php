<?php

switch ($menu) {

    case 'phpk':
        require_once './pages/phpk.php';
        break;
    case 'phph':
        require_once './pages/phph.php';
        break;
    case 'phpn':
        require_once './pages/phpn.php';
        break;
    case 'phpo':
        require_once './pages/phpo.php';
        break;
    default:
        require_once './pages/phpe.php';
        break;
}