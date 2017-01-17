<?php
header('Content-Type: text/html; charset=UTF-8');
$doc = new DOMDocument('1.0', 'UTF-8');
$doc->load('employes.xml');

if ($doc->schemaValidate('employes.xsd')) {    
    echo 'fichier valide';
} else { 
    echo 'fichier invalide';   
}