<?php

$strJsonFileContents = file_get_contents("E:\stage2020\Sample.json");
// Convert to array
$arrJson = json_decode($strJsonFileContents, true);
$a = array();
foreach ($arrJson['briefs'] as $brief) {
    if ($brief['cnxState'] == 'DISC' and $brief['healthState'] == 'BACKHAUL_CNX_ERROR') {
        if (!is_null($brief['lat']) and !is_null($brief['lon'])) {
            $ar = array($brief['lat'], $brief['lon']);
        }
        array_push($a, $ar);
    }
}
?>

<!DOCTYPE html>
<!-- saved from url=(0021)http://iotafrica.com/ -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>IoTAfrica - Tunisia Coverage Map</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico"/>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
            integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
            crossorigin=""></script>

    <link rel="shortcut icon" type="image/x-icon" href="http://iotafrica.com/docs/images/favicon.ico">


</head>
<body>

OpenStreetMap

<div id="mapid" style="width: 100vw; height: 80vh; position: relative; outline: none;"
     class="leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
     tabindex="0">
    <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(-63px, 663px, 0px);">
        <div class="leaflet-pane leaflet-tile-pane">
            <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                <div class="leaflet-tile-container leaflet-zoom-animated"
                     style="z-index: 17; transform: translate3d(-63px, -212px, 0px) scale(0.5);"></div>
                <div class="leaflet-tile-container leaflet-zoom-animated"
                     style="z-index: 18; transform: translate3d(246px, 2px, 0px) scale(1);"><img alt=""
                                                                                                 role="presentation"
                                                                                                 src="./IoTAfrica - Tunisia Coverage Map_files/100.png"
                                                                                                 class="leaflet-tile leaflet-tile-loaded"
                                                                                                 style="width: 256px; height: 256px; transform: translate3d(366px, -369px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/100(1).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(622px, -369px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/101.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(366px, -113px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/101(1).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(622px, -113px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/100(2).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(110px, -369px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/100(3).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(878px, -369px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/101(2).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(110px, -113px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/101(3).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(878px, -113px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/102.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(366px, 143px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/102(1).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(110px, 143px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/102(2).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(622px, 143px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/101(4).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-146px, -113px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/100(4).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-146px, -369px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/102(3).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-146px, 143px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/102(4).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(878px, 143px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/101(5).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-402px, -113px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/101(6).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(1134px, -113px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/100(5).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-402px, -369px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/100(6).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(1134px, -369px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/102(5).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-402px, 143px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/102(6).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(1134px, 143px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/99.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(110px, -625px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/99(1).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(366px, -625px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/99(2).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-146px, -625px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/99(3).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(622px, -625px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/99(4).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-402px, -625px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/99(5).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(878px, -625px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/98.png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(110px, -881px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/98(1).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-146px, -881px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/98(2).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(366px, -881px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/98(3).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-402px, -881px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/98(4).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(622px, -881px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/99(6).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-658px, -625px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/100(7).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-658px, -369px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/98(5).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-658px, -881px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/98(6).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(878px, -881px, 0px); opacity: 1;"><img
                            alt="" role="presentation" src="./IoTAfrica - Tunisia Coverage Map_files/101(7).png"
                            class="leaflet-tile leaflet-tile-loaded"
                            style="width: 256px; height: 256px; transform: translate3d(-658px, -113px, 0px); opacity: 1;">
                </div>
            </div>
        </div>
        <div class="leaflet-pane leaflet-shadow-pane"></div>
        <div class="leaflet-pane leaflet-overlay-pane">
            <svg pointer-events="none" class="leaflet-zoom-animated" width="1109" height="694"
                 viewBox="-29 -721 1109 694" style="transform: translate3d(-29px, -721px, 0px);">
                <g>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M412.89190382933157,-418.031199398185a7,7 0 1,0 14,0 a7,7 0 1,0 -14,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M421.2859385742195,-421.73277110044364a7,7 0 1,0 14,0 a7,7 0 1,0 -14,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M410.61154048000026,-412.22603461503604a7,7 0 1,0 14,0 a7,7 0 1,0 -14,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M401.9204305919993,-405.42961777731034a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M427.35763916799624,-430.0083301878476a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M424.70932940799685,-416.39475414891785a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M395.9631262719995,-422.33780383009434a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M408.1145201777763,-433.50675089174183a10,10 0 1,0 20,0 a10,10 0 1,0 -20,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M411.63143901866715,-425.7088134300866a7,7 0 1,0 14,0 a7,7 0 1,0 -14,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M399.0909356373304,-444.6217954733802a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M425.14709577955364,-424.5473592000926a7,7 0 1,0 14,0 a7,7 0 1,0 -14,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M427.09975546311034,-405.6947200769064a7,7 0 1,0 14,0 a7,7 0 1,0 -14,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M418.13099184355815,-401.99540812615305a7,7 0 1,0 14,0 a7,7 0 1,0 -14,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M397.91408748088725,-385.54768963505194a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M409.1850251946671,-393.6247894172484a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M432.36329341155215,-396.61957005366276a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M403.74936923022324,-376.1584300798386a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M422.5606551893361,-385.6101124773413a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M338.1119147349309,-419.24543668287515a18,18 0 1,0 36,0 a18,18 0 1,0 -36,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M386.37768851911096,-471.708919823257a18,18 0 1,0 36,0 a18,18 0 1,0 -36,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M374.02381027555384,-437.38304530506866a18,18 0 1,0 36,0 a18,18 0 1,0 -36,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M397.50037737244566,-413.24355007886334a7,7 0 1,0 14,0 a7,7 0 1,0 -14,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M372.0603495537798,-403.45105346396304a16,16 0 1,0 32,0 a16,16 0 1,0 -32,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M396.7163975111107,-419.14304150433236a7,7 0 1,0 14,0 a7,7 0 1,0 -14,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M356.8798621240858,-424.167138609806a16,16 0 1,0 32,0 a16,16 0 1,0 -32,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M347.215028087463,-392.75015222848015a16,16 0 1,0 32,0 a16,16 0 1,0 -32,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd" d="M0 0"></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd" d="M0 0"></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd" d="M0 0"></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd" d="M0 0"></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd" d="M0 0"></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M481.22358721421915,-321.3924714567693a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M471.49649743644113,-323.65329640857817a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M494.75503633066546,-329.3589870050055a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M502.9484617386697,-334.89183803796186a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M348.42167656675156,-518.9030695702386a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M345.2727291107585,-523.0029093993799a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M344.83349191110756,-512.0251976937252a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M331.8308893696012,-493.8235729277658a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M221.1304689777753,-395.5979431146625a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M221.81368177777767,-399.59507581016805a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M395.465149155556,-322.8458917796888a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M405.84630823822226,-309.26713920130715a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M255.00275057777617,-251.071777015306a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M562.8112159288867,-120.87038285967719a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M557.4887096888851,-124.82109733545803a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M502.90151975821937,-177.1008026870186a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M515.480457728001,-180.04180348999944a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M520.8395949511105,-180.8399024764076a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M517.4666299733362,-170.12924820424087a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M483.69699413333,-190.90761613393988a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M491.7573760000014,-184.1958548135408a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M478.398044444446,-199.88025607726013a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M474.35174257777544,-210.04559251675528a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M134.33877760000178,-272.5207429915281a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#0f0" fill-opacity="0.25"
                          fill-rule="evenodd"
                          d="M137.58699662222352,-273.1166184447211a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#f03" fill-opacity="0.15"
                          fill-rule="evenodd"
                          d="M148.57319680000364,-345.4307579636734a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#f03" fill-opacity="0.15"
                          fill-rule="evenodd"
                          d="M387.9509006222215,-158.21926733167493a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                    <path class="leaflet-interactive" stroke="red" stroke-opacity="1" stroke-width="0"
                          stroke-linecap="round" stroke-linejoin="round" fill="#f03" fill-opacity="0.15"
                          fill-rule="evenodd"
                          d="M275.7660117333362,-16.627535696112318a15,15 0 1,0 30,0 a15,15 0 1,0 -30,0 "></path>
                </g>
            </svg>
        </div>
        <div class="leaflet-pane leaflet-marker-pane"></div>
        <div class="leaflet-pane leaflet-tooltip-pane"></div>
        <div class="leaflet-pane leaflet-popup-pane">
            <div class="leaflet-popup  leaflet-zoom-animated"
                 style="opacity: 1; transform: translate3d(639px, -32px, 0px); bottom: -7px; left: -161px;">
                <div class="leaflet-popup-content-wrapper">
                    <div class="leaflet-popup-content" style="width: 282px;">You clicked the map at LatLng(35.10557,
                        11.400774)
                    </div>
                </div>
                <div class="leaflet-popup-tip-container">
                    <div class="leaflet-popup-tip"></div>
                </div>
                <a class="leaflet-popup-close-button" href="http://iotafrica.com/#close">×</a></div>
        </div>
        <div class="leaflet-proxy leaflet-zoom-animated"
             style="transform: translate3d(34729px, 25593px, 0px) scale(128);"></div>
    </div>
    <div class="leaflet-control-container">
        <div class="leaflet-top leaflet-left">
            <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in"
                                                                             href="http://iotafrica.com/#"
                                                                             title="Zoom in" role="button"
                                                                             aria-label="Zoom in">+</a><a
                        class="leaflet-control-zoom-out" href="http://iotafrica.com/#" title="Zoom out" role="button"
                        aria-label="Zoom out">−</a></div>
        </div>
        <div class="leaflet-top leaflet-right"></div>
        <div class="leaflet-bottom leaflet-left"></div>
        <div class="leaflet-bottom leaflet-right">
            <div class="leaflet-control-attribution leaflet-control"><a href="http://leafletjs.com/"
                                                                        title="A JS library for interactive maps">Leaflet</a>
                | 3S
            </div>
        </div>
    </div>
</div>
<script>

    var mymap = L.map('mapid').setView([35.975147, 10.228271], 8);


    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', {
        foo: 'bar',
        attribution: '3S'
    }).addTo(mymap);

    /*
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: '3S',
            id: 'mapbox.streets'
        }).addTo(mymap);
    */

    /*
    L.marker([36.820850,10.192153]).addTo(mymap)
        .bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();
    */

    /*
    //3S
    L.circle([36.820850,10.192153], 7500, {
        color: 'red',
        fillColor: '#f03',
        weight: 0,fillOpacity: 0.15
    }).addTo(mymap).bindPopup("3S");
    */

    //BACKHAUL_CNX_ERROR
    <?php foreach ($a as $cor){ ?>
    L.marker([ <?php echo $cor['0'];?> , <?php echo $cor['1'];?>    ]).addTo(mymap).bindPopup("BACKHAUL_CNX_ERROR");
    <?php } ?>




    //Montplaisir

    // TUNIS
    L.circle([36.82260833, 10.19471871], 3500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Montplaisir");
    L.circle([36.83888333, 10.24082852], 3500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Berges du Lac");
    L.circle([36.79707732, 10.1821923], 3500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Hached");
    L.circle([36.76715278, 10.17839592], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Ouardia");
    L.circle([36.87523333, 10.31812668], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Marsa");
    L.circle([36.81538889, 10.30357908], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Goulette");


    // ARIANA
    L.circle([36.84151993, 10.14567147], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Manar");
    L.circle([36.89062116, 10.18495525], 5000, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Parc Technologique");
    L.circle([36.85636126, 10.18779477], 3500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Ariana");
    L.circle([36.93942108, 10.16285304], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Borj Touil");
    L.circle([36.85125614, 10.26203849], 3500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Aouina");

    // BEN AROUS
    L.circle([36.76834254, 10.27276477], 3500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Rades");
    L.circle([36.75206249, 10.22349788], 3500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Ben Arous");
    L.circle([36.67961389, 10.15638842], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Mhamdia");
    L.circle([36.71518889, 10.21830153], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Mourouj IV");
    L.circle([36.728375, 10.34562356], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Hammam Lif");
    L.circle([36.63823889, 10.18844258], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Khlidia");
    L.circle([36.67988889, 10.29177606], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Mornag");

    // MANOUBA
    L.circle([36.82791111, 9.844364766], 9000, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Tebourba");
    L.circle([37.05824167, 10.10949658], 9000, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Kalaat Landalous");
    L.circle([36.90761944, 10.0416347], 9000, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Sidi Thabet");
    L.circle([36.80155295, 10.11017053], 3500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Den Den");
    L.circle([36.75844167, 10.01986276], 8000, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Mornaguia");
    L.circle([36.82749722, 10.105864], 3500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Tadhamen");
    L.circle([36.84955745, 9.936473852], 8000, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Jedaida");
    L.circle([36.71133333, 9.883383333], 8000, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Borj El Amri");

    // SFAX
    L.circle([34.76039731, 10.7622879], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Sfax - Nord");
    L.circle([34.81860429, 10.7944449], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Sfax - Essbai");
    L.circle([34.82693376, 10.7569255], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Sfax - Essedra");
    L.circle([34.78226039, 10.7125603], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Sfax - Gremda");
    L.circle([34.72085836, 10.7202582], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Sfax - Cite Habib");

    // NABEUL
    L.circle([36.39646281, 10.61402117], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Hammamet LGD");
    L.circle([36.40645865, 10.56058867], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Barraket Essahel");
    L.circle([36.43167964, 10.68835164], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Nabeul Sionville");
    L.circle([36.4561288, 10.73335947], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Nabeul LGD");

    // BIZERTE
    L.circle([37.264856, 9.884518487], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Zarzouna CCL");
    L.circle([37.28277714, 9.867220802], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Palais des Congrès");
    L.circle([37.234782, 9.864808], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Menzel Abderrahman");
    L.circle([37.15513616, 9.793382571], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Menzel Bourguiba");

    // BEJA
    L.circle([36.723877, 9.185287], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Beja Central");
    L.circle([36.741474, 9.189040], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Beja Suzel");

    // ZAGHOUAN
    L.circle([36.402889, 10.142936], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Zaghouan");
    L.circle([36.34283085, 10.19996141], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Zaghouan Zriba");

    // SILIANA
    L.circle([36.084911, 9.371353], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Siliana");

    // MAHDIA
    L.circle([35.50479215, 11.0621954], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Mahdia Central");
    L.circle([35.522457, 11.032958], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Mahdia Hiboun");
    // L.circle([35.50475471	,11.03366291	],	7500,{color:'red', fillColor:'#f03', weight: 0, fillOpacity: 0.15}).addTo(mymap).bindPopup("Mahdia CTT");

    // MONASTIR
    L.circle([35.75584914, 10.73310161], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Monastir Aéroport");
    L.circle([35.76895838, 10.80219978], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Monastir Skanes");
    L.circle([35.77251546, 10.8316384], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Monastir LGD");
    L.circle([35.72476545, 10.81311015], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Monastir CCL");
    // L.circle([35.68670885	,10.84421606	],	7500,{color:'red', fillColor:'#f03', weight: 0, fillOpacity: 0.15}).addTo(mymap).bindPopup("Ksibet Mediouni");
    // L.circle([35.66840503	,10.89085684	],	7500,{color:'red', fillColor:'#f03', weight: 0, fillOpacity: 0.15}).addTo(mymap).bindPopup("Sayada CTT");
    // L.circle([35.63953903	,10.89374339	],	7500,{color:'red', fillColor:'#f03', weight: 0, fillOpacity: 0.15}).addTo(mymap).bindPopup("Ksar Helal");

    // SOUSSE
    L.circle([35.817373, 10.627608], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Sousse 2 Catacombes");
    L.circle([35.787471, 10.671885], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Sousse Sidi Abdelhamid");
    L.circle([35.857330, 10.598500], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Sousse Hammam Sousse");
    L.circle([35.902574, 10.576273], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Sousse Gandouz");
    // L.circle([36.08380547	,10.43407455	],	7500,{color:'red', fillColor:'#f03', weight: 0, fillOpacity: 0.15}).addTo(mymap).bindPopup("Enfidha Aéroport");
    // L.circle([36.02807643	,10.51022927	],	7500,{color:'red', fillColor:'#f03', weight: 0, fillOpacity: 0.15}).addTo(mymap).bindPopup("Hergla");
    // L.circle([35.94730857	,10.54649633	],	7500,{color:'red', fillColor:'#f03', weight: 0, fillOpacity: 0.15}).addTo(mymap).bindPopup("Chott Meriem");
    // L.circle([35.89499356	,10.589995		],	7500,{color:'red', fillColor:'#f03', weight: 0, fillOpacity: 0.15}).addTo(mymap).bindPopup("Kantaoui Central");
    // L.circle([35.8296803	,10.63886105	],	7500,{color:'red', fillColor:'#f03', weight: 0, fillOpacity: 0.15}).addTo(mymap).bindPopup("Sousse Centre");

    // KEF
    L.circle([36.180071, 8.708526], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Kef 1");
    L.circle([36.182713, 8.726369], 7500, {
        color: 'red',
        fillColor: '#0f0',
        weight: 0,
        fillOpacity: 0.25
    }).addTo(mymap).bindPopup("Kef Eddir");

    // JENDOUBA
    L.circle([36.502678, 8.786718], 7500, {
        color: 'red',
        fillColor: '#f03',
        weight: 0,
        fillOpacity: 0.15
    }).addTo(mymap).bindPopup("Jendouba");

    // KAIROUAN
    L.circle([35.671635, 10.101659], 7500, {
        color: 'red',
        fillColor: '#f03',
        weight: 0,
        fillOpacity: 0.15
    }).addTo(mymap).bindPopup("Kairouan");

    // SIDI BOUZID
    L.circle([35.037289, 9.485409], 7500, {
        color: 'red',
        fillColor: '#f03',
        weight: 0,
        fillOpacity: 0.15
    }).addTo(mymap).bindPopup("Sidi Bouzid");

    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    }

    mymap.on('click', onMapClick);

</script>
<style>
    .table {
        width: 500px;
    }

    .table-dark {
        width: 500px;
    }
</style>
<br>
<table class="table table-dark">
    <tbody>
    <td style="text-align: center"><strong style="color: #00ff00;">Tunis</strong></td>
    <tr>
        <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
        <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Hached</span></td>
        <td><span style="color: #00ff00;">08/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Ouardia</span></td>
        <td><span style="color: #00ff00;">10/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Goulette</span></td>
        <td><span style="color: #00ff00;">17/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Marsa Chtioui</span></td>
        <td><span style="color: #00ff00;">17/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Lac (TT Mobile)</span></td>
        <td><span style="color: #00ff00;">21/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">ONT Montplaisir</span></td>
        <td><span style="color: #00ff00;">21/10/2019</span></td>
    </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <tr>
        <td style="color: #00ff00; text-align: center"><strong>Ariana</strong></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
        <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Manar</span></td>
        <td><span style="color: #00ff00;">22/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Parc Technologique</span></td>
        <td><span style="color: #00ff00;">23/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Borj Touil</span></td>
        <td><span style="color: #00ff00;">23/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Aouina</span></td>
        <td><span style="color: #00ff00;">24/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Ariana</span></td>
        <td><span style="color: #00ff00;">24/10/2019</span></td>
    </tr>
    </tbody>
</table>
<table class="table table-dark">
    <tbody>
    <tr>
        <th style="color: #00ff00;text-align: center"><strong>Ben Arous</strong></th>
    </tr>
    <tr>
        <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
        <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Ben Arous</span></td>
        <td><span style="color: #00ff00;">29/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Hammam Lif</span></td>
        <td><span style="color: #00ff00;">29/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Khlidia</span></td>
        <td><span style="color: #00ff00;">30/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Mhamdia</span></td>
        <td><span style="color: #00ff00;">30/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Mornag</span></td>
        <td><span style="color: #00ff00;">31/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Rades</span></td>
        <td><span style="color: #00ff00;">31/10/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Mourouj</span></td>
        <td><span style="color: #00ff00;">01/11/2019</span></td>
    </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #00ff00; text-align: center"><strong>Manouba</strong></td>
    <tr>
        <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
        <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Den Den</span></td>
        <td><span style="color: #00ff00;">04/11/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Tadhamen</span></td>
        <td><span style="color: #00ff00;">04/11/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Jedaida</span></td>
        <td><span style="color: #00ff00;">05/11/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Tebourba</span></td>
        <td><span style="color: #00ff00;">05/11/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Sidi Thabet</span></td>
        <td><span style="color: #00ff00;">06/11/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Kalaat Landalous</span></td>
        <td><span style="color: #00ff00;">06/11/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Borj El Amri</span></td>
        <td><span style="color: #00ff00;">07/11/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Mornaguia</span></td>
        <td><span style="color: #00ff00;">07/11/2019</span></td>
    </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #00ff00; text-align: center"><strong>Sfax</strong></td>
    <tr>
        <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
        <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Sfax - Nord</span></td>
        <td><span style="color: #00ff00;">19/11/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Sfax - Sebai</span></td>
        <td><span style="color: #00ff00;">20/11/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Sfax - Essedra</span></td>
        <td><span style="color: #00ff00;">20/11/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Sfax - Gremda</span></td>
        <td><span style="color: #00ff00;">21/11/2019</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Sfax - Cite Habib</span></td>
        <td><span style="color: #00ff00;">21/11/2019</span></td>
    </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #00ff00;text-align: center"><strong>Nabeul</strong></td>
    <tr>
        <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
        <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Hammamet LGD</span></td>
        <td><span style="color: #00ff00;">14/05/2020</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Barraket Essahel</span></td>
        <td><span style="color: #00ff00;">14/05/2020</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Sionville</span></td>
        <td><span style="color: #00ff00;">13/05/2020</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Nabeul LGD</span></td>
        <td><span style="color: #00ff00;">13/05/2020</span></td>
    </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #00ff00;text-align: center"><strong>Bizerte</strong>
        <tr>
            <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
            <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
        </tr>
        <tr>
            <td><span style="color: #00ff00;">Zarzouna CCL</span></td>
            <td><span style="color: #00ff00;">18/05/2020</span></td>
        </tr>
        <tr>
            <td><span style="color: #00ff00;">Palais des Congrès</span></td>
            <td><span style="color: #00ff00;">18/05/2020</span></td>
        </tr>
        <tr>
            <td><span style="color: #00ff00;">Menzel Abderrahman</span></td>
            <td><span style="color: #00ff00;">28/05/2020</span></td>
        </tr>
        <tr>
            <td><span style="color: #00ff00;">Menzel Bourguiba
</span></td>
            <td><span style="color: #00ff00;">28/05/2020</span></td>
        </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #00ff00;text-align: center"><strong>Beja</strong></td>
    <tr>
        <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
        <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Beja Central</span></td>
        <td><span style="color: #00ff00;">01/06/2020</span></td>
    </tr>
    <tr>
        <td><span style="color: #ff0000;">Beja Suzel</span></td>
        <td><span style="color: #ff0000;">__/__/2020</span></td>
    </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #00ff00; text-align: center"><strong>Zaghouan</strong>
        <tr>
            <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
            <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
        </tr>
        <tr>
            <td><span style="color: #00ff00;">Zaghouan</span></td>
            <td><span style="color: #00ff00;">03/06/2020</span></td>
        </tr>
        <tr>
            <td><span style="color: #00ff00;">Hammam Zriba</span></td>
            <td><span style="color: #00ff00;">03/06/2020</span></td>
        </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #00ff00;text-align: center"><strong>Siliana</strong></td>
    <tr>
        <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
        <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Siliana</span></td>
        <td><span style="color: #00ff00;">04/06/2020</span></td>
    </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #00ff00; text-align: center;"><strong>Mahdia</strong>
        <tr>
            <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
            <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
        </tr>
        <tr>
            <td><span style="color: #00ff00;">Mahdia Central</span></td>
            <td><span style="color: #00ff00;">08/06/2020</span></td>
        </tr>
        <tr>
            <td><span style="color: #00ff00;">Mahdia Hiboun</span></td>
            <td><span style="color: #00ff00;">08/06/2020</span></td>
        </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #00ff00;text-align: center"><strong>Monastir</strong></td>
    <tr>
        <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
        <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Monastir CCL</span></td>
        <td><span style="color: #00ff00;">09/06/2020</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Monastir LGD</span></td>
        <td><span style="color: #00ff00;">09/06/2020</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Monastir Skanes</span></td>
        <td><span style="color: #00ff00;">10/06/2020</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Monastir Aéroport</span></td>
        <td><span style="color: #00ff00;">10/06/2020</span></td>
    </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #00ff00;text-align: center"><strong>Sousse</strong></td>
    <tr>
        <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
        <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Sousse 2 Catacombes</span></td>
        <td><span style="color: #00ff00;">11/06/2020</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Sousse Sidi Abdelhamid</span></td>
        <td><span style="color: #00ff00;">11/06/2020</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Hammam Sousse CTT</span></td>
        <td><span style="color: #00ff00;">12/06/2020</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Sousse Gandouz</span></td>
        <td><span style="color: #00ff00;">12/06/2020</span></td>
    </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #00ff00;text-align: center"><strong>Kef</strong></td>
    <tr>
        <td><span style="color: #00ff00;"><strong>Site</strong></span></td>
        <td><span style="color: #00ff00;"><strong>Date Installation</strong></span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Kef 1</span></td>
        <td><span style="color: #00ff00;">23/06/2020</span></td>
    </tr>
    <tr>
        <td><span style="color: #00ff00;">Kef Eddir</span></td>
        <td><span style="color: #00ff00;">23/06/2020</span></td>
    </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #ff0000;text-align: center"><strong>Jendouba</strong></td>
    <tr>
        <td><span style="color: #ff0000;"><strong>Site</strong></span></td>
        <td><span style="color: #ff0000;"><strong>Date Installation</strong></span></td>
    </tr>
    <tr>
        <td><span style="color: #ff0000;">Jendouba</span></td>
        <td><span style="color: #ff0000;">__/__/2020</span></td>
    </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #ff0000;text-align: center"><strong>Kairouan</strong>
        <tr>
            <td><span style="color: #ff0000;"><strong>Site</strong></span></td>
            <td><span style="color: #ff0000;"><strong>Date Installation</strong></span></td>
        </tr>
        <tr>
            <td><span style="color: #ff0000;">Kairouan</span></td>
            <td><span style="color: #ff0000;">__/__/2020</span></td>
        </tr>
    </tbody>
</table>
<br>
<table class="table table-dark">
    <tbody>
    <td style="color: #ff0000;text-align: center"><strong>Sidi Bouzid</strong>
        <tr>
            <td><span style="color: #ff0000;"><strong>Site</strong></span></td>
            <td><span style="color: #ff0000;"><strong>Date Installation</strong></span></td>
        </tr>
        <tr>
            <td><span style="color: #ff0000;">Sidi Bouzid</span></td>
            <td><span style="color: #ff0000;">__/__/2020</span></td>
        </tr>
    </tbody>
</table>


<p>&nbsp;</p>


</body>
</html>
