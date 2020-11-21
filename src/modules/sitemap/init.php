<?php 

//Security-Check
if ( !defined('APXRUN') ) die('You are not allowed to execute this file directly!');


//Modul registrieren
$module = array(0,99999,
'id' => 'sitemap',
'dependence' => array(),
'requirement' => array('main' => '1.2.0'),
'version' => '1.0.0',
'author' => 'Carsten Grings',
'contact' => 'https://grings-software.de'
);

//Aktionen registrieren      S V O R
//$action['show']     =  array(0,1,1,0);
//$action['del']      =  array(0,0,2,0);


/*
S = Sonderrechte
V = Sichtbar (Visibility)
O = Anordnung (Order)
R = Rechte für Alle
*/


//Template-Funktionen                         F           V
//$func['']=array('',false);

/*
F = Funktions-Name
V = Variablen akzeptieren
*/


?>