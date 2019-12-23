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


function addToMenu()
{
    $statement = getConnection()->prepare("INSERT INTO trMenu (itemID, itemType, itemName, itemDesc, itemPrice, ItemStock)
        VALUES (:itemID, :itemType, :itemName, :itemDesc, :itemPrice, :itemStock)");

    $statement->bindParam(':itemID', $itemID, PDO::PARAM_INT);
    $statement->bindParam(':itemName', $itemName, PDO::PARAM_STR);
    $statement->bindParam(':itemDesc', $itemDesc, PDO::PARAM_STR);
    $statement->bindParam(':itemPrice', $itemPrice, PDO::PARAM_STR);
    $statement->bindParam(':itemStock', $itemStock, PDO::PARAM_INT);

    $statement->execute();
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
}
