<?php

const DB_SERVER = 'Proj-mysql.uopnet.plymouth.ac.uk';
const DB_USER = 'ISAD251_DSkillman';
const DB_PASSWORD = 'ISAD251_22205389';
const DB_DATABASE = 'ISAD251_DSkillman';

function getConnection()
{
    $dataSourceName = 'mysql:dbname=' . DB_DATABASE . ';host=' . DB_SERVER;
    $dbConnection = null;
    try {
        $dbConnection = new PDO($dataSourceName, DB_USER, DB_PASSWORD);
    } catch (PDOException $err) {
        echo 'Connection failed: ', $err->getMessage();
    }
    return $dbConnection;
}

function getCustomerMenu($tablename)
{
    $statement = getConnection()->prepare("SELECT itemID, itemName, itemDesc, itemPrice FROM " . $tablename);
    $statement->execute();
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $resultSet;
}

function getAdminMenu($tablename)
{
    $statement = getConnection()->prepare("SELECT * FROM " . $tablename);
    $statement->execute();
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $resultSet;
}

function viewOrders($tablename)
{
    $statement = getConnection()->prepare("SELECT itemID, quantity, itemPrice FROM " . $tablename);
    $statement->execute();
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $resultSet;
}

function adminEditItem()
{
    $dbCon = getConnection();

    $itemID = $_POST['editItemID'];
    $itemName = $_POST['editItemName'];
    $itemDesc = $_POST['editItemDesc'];
    $itemPrice = $_POST['editItemPrice'];
    $itemStock = $_POST['editItemStock'];

    $dbQueury = "UPDATE trmenu SET itemName=:itemName, itemDesc=:itemDesc, itemPrice=:itemPrice, itemStock=:itemStock WHERE itemID=:itemID";

    $dbOutput = $dbCon->prepare($dbQueury);

    $dbOutput->execute(array(
        ":itemID" => $itemID, ":itemName" => $itemName,
        ":itemDesc" => $itemDesc, ":itemPrice" => $itemPrice, ":itemStock" => $itemStock
    ));
}

function adminAddItem()
{
    $dbCon = getConnection();

    $itemID = $_POST['addItemID'];
    $itemName = $_POST['addItemName'];
    $itemDesc = $_POST['addItemDesc'];
    $itemPrice = $_POST['addItemPrice'];
    $itemStock = $_POST['addItemStock'];

    $dbQuery = "INSERT INTO trmenu (itemID, itemName, itemDesc, itemPrice, itemStock)
        VALUES (:itemID, :itemName, :itemDesc, :itemPrice, :itemStock)";

    $dbOutput = $dbCon->prepare($dbQuery);

    $dbOutput->execute(array(
        ":itemID" => $itemID, ":itemName" => $itemName,
        ":itemDesc" => $itemDesc, ":itemPrice" => $itemPrice, ":itemStock" => $itemStock
    ));
}

function adminDeleteItem() 
{
    $dbCon = getConnection();

    $itemID = $_POST['remItemID'];

    $dbQuery = "DELETE FROM trMenu WHERE itemID = :itemID";

    $dbOutput = $dbCon->prepare($dbQuery);

    $dbOutput->execute(array(":itemID" => $itemID));
}