<?php
function display_xml_nodes($xmlstr, $node)
{
    $xml = new SimpleXMLElement($xmlstr);
    foreach ($xml->staff->personnes->personne as $value) {
        if (isset($value->$node)) {
            echo $value->$node . "\n";
            $resultat = true; } else {
                 $resultat = false;
        }
    }
    return $resultat;
}