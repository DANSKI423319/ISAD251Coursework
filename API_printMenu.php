<?php

include 'MODEL_databank.php';

$databank = new databank();
$dbQuery = "CALL adminMenu";
$tblCommand = $databank->getMenu($dbQuery);

$api = $tblCommand;

header('Content-Type: application/json');
echo json_encode($api);