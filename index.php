<?php
require_once('config/CheminsApp.php');
require_once CheminsApp::MODELES . 'gestionBDD.php';
require_once CheminsApp::VUES_PERMANENTES . 'header.inc.php';

$cas = filter_input(INPUT_GET,'cas', FILTER_UNSAFE_RAW);
$action = filter_input(INPUT_GET,'action', FILTER_UNSAFE_RAW);


if($action == "authent"){
    require CheminsApp::VUES_PAGES . 'login.inc.php';
}

switch ($cas) {

    case 'login' :
        require CheminsApp::VUES_PAGES . 'login.inc.php';
        break;

    case 'compte' :
        require CheminsApp::VUES_PAGES . 'compte.inc.php';
        break;

    case 'test' :
        require CheminsApp::VUES . 'test.inc.php';
        break;

    default:
        require CheminsApp::VUES_PERMANENTES . 'main.inc.php';
        break;
}

require_once CheminsApp::VUES_PERMANENTES . 'footer.inc.php';
?>


