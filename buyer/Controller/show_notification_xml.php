<?php
    $XMLData1 =
    "<?xml version='1.0' encoding='UTF-8'?>
    <notification>
        <seller>Lal mia</seller>
        <message>send you selling request.</message>
    </notification>";

    $XMLData2 =
    "<?xml version='1.0' encoding='UTF-8'?>
    <notification>
        <seller>mizan</seller>
        <message>send you selling request.</message>
    </notification>";



    $xml1=simplexml_load_string($XMLData1) or die("Error: Cannot create object");
    $xml2=simplexml_load_string($XMLData2) or die("Error: Cannot create object");

?>