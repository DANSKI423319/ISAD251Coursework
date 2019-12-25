<?php

$dbCon = getConnection();

$itemID = $_POST['addItemID'];
$itemName = $_POST['addItemName'];
$itemDesc = $_POST['addItemDesc'];
$itemPrice = $_POST['addItemPrice'];
$itemStock = $_POST['addItemStock'];

$dbQuery = "INSERT INTO trmenu (itemID, itemName, itemDesc, itemPrice, itemStock)
        VALUES (:itemID, :itemName, :itemDesc, :itemPrice, :itemStock)";

$dbOutput = $dbCon->prepare($dbQuery);

$dbExe = $dbOutput->execute(array(
    ":itemID" => $itemID, ":itemName" => $itemName,
    ":itemDesc" => $itemDesc, ":itemPrice" => $itemPrice, ":itemStock" => $itemStock,
));

if ($dbExe) {
    echo 'Accepted!';
} else {
    echo 'Declined!';
}
