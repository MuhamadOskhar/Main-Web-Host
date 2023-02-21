<?php

// Get data config
$tmp = file_get_contents("conf/config.json");
$dataConfig = json_decode($tmp, true);
$databaseConfig = $dataConfig['DATABASE_CONNECT'];

$widgets = "app/views/shared/widgets/";
$css = "app/utils/css/";
$css = "app/utils/js/";

// Alokasi ke halaman yang dituju
$nameFile = $_GET["page"];
if (empty($nameFile))
    $nameFile = "home";
$halaman = "app/views/pages/site/" . $nameFile . ".php";

include($halaman);

?>
