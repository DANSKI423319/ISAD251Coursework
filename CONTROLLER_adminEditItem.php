<?php

$dbCon = getConnection();

$itemID = $_POST['editItemID'];
$itemName = $_POST['editItemName'];
$itemDesc = $_POST['editItemDesc'];
$itemPrice = $_POST['editItemPrice'];

$dbQueury = "UPDATE trmenu SET itemName=:itemName, itemDesc=:itemDesc, itemPrice=:itemPrice WHERE itemID=:itemID";

$dbOutput = $dbCon->prepare($dbQueury);

$dbExe = $dbOutput->execute(array(
    ":itemID" => $itemID, ":itemName" => $itemName,
    ":itemDesc" => $itemDesc, ":itemPrice" => $itemPrice
));

if ($dbExe) {
    echo 'Accepted!';
} else {
    echo 'Declined!';
}
