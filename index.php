<?php
require_once('config/CheminsApp.php');
require_once CheminsApp::MODELES . 'gestionBDD.php';
require_once CheminsApp::VUES_PERMANENTES . 'header.inc.php';

$cas = filter_input(INPUT_GET,'cas', FILTER_UNSAFE_RAW);


switch ($cas) {

    default:
        require CheminsApp::VUES_PERMANENTES . 'main.inc.php';
        break;

    case 'test' :
        require CheminsApp::VUES . 'test.inc.php';
        break;
}

require_once CheminsApp::VUES_PERMANENTES . 'footer.inc.php';
?>

