<?php // Prints API / JSON.

include '../Model/MODEL_databank.php';

$databank = new databank();
$dbQuery = "CALL adminMenu";
$tblCommand = $databank->getOrders($dbQuery);

$api = $tblCommand;

header('Content-Type: application/json');
echo json_encode($api);