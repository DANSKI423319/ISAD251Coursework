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

// Select specific fields from the menu table.
function getCustomerMenu()
{
    $dbQuery = "SELECT itemID, itemName, itemDesc, itemPrice FROM menu_table";

    $dbOutput = getConnection()->prepare($dbQuery);
    $dbOutput->execute();
    $resultSet = $dbOutput->fetchAll(PDO::FETCH_ASSOC);

    return $resultSet;
}

// Select all fields from the menu table.
function getAdminMenu()
{
    $dbQuery = "SELECT * FROM menu_table";

    $dbOutput = getConnection()->prepare($dbQuery);
    $dbOutput->execute();
    $resultSet = $dbOutput->fetchAll(PDO::FETCH_ASSOC);

    return $resultSet;
}
 
// Show all fields from order table.
function viewOrders()
{
    $dbQuery = "SELECT * FROM order_table";

    $dbOutput = getConnection()->prepare($dbQuery);
    $dbOutput->execute();
    $resultSet = $dbOutput->fetchAll(PDO::FETCH_ASSOC);

    return $resultSet;
}

// Function for admins to edit items.
function adminEditItem()
{
    // Assign POST global variables to function variables.
    $itemID = $_POST['editItemID']; 
    $itemName = $_POST['editItemName'];
    $itemDesc = $_POST['editItemDesc'];
    $itemPrice = $_POST['editItemPrice'];
    $itemStock = $_POST['editItemStock'];

    // Create SQL query, sets changing fields.
    $dbQuery = "UPDATE menu_table SET itemName=:itemName, itemDesc=:itemDesc, itemPrice=:itemPrice, itemStock=:itemStock WHERE itemID=:itemID"; 

    $dbOutput = getConnection()->prepare($dbQuery);

    // Executes the SQL query, assigns variable values to the changing fields.
    $dbOutput->execute(array( 
        ":itemID" => $itemID, ":itemName" => $itemName,
        ":itemDesc" => $itemDesc, ":itemPrice" => $itemPrice, ":itemStock" => $itemStock
    ));
}

// Function for admins to add items.
function adminAddItem()
{
    $itemID = $_POST['addItemID'];
    $itemName = $_POST['addItemName'];
    $itemDesc = $_POST['addItemDesc'];
    $itemPrice = $_POST['addItemPrice'];
    $itemStock = $_POST['addItemStock'];

    $dbQuery = "INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, itemStock)
        VALUES (:itemID, :itemName, :itemDesc, :itemPrice, :itemStock)";

    $dbOutput = getConnection()->prepare($dbQuery);

    $dbOutput->execute(array(
        ":itemID" => $itemID, ":itemName" => $itemName,
        ":itemDesc" => $itemDesc, ":itemPrice" => $itemPrice, ":itemStock" => $itemStock
    ));
}

// Function for admins to delete items.
function adminDeleteItem()
{
    $itemID = $_POST['remItemID'];

    $dbQuery = "DELETE FROM menu_table WHERE itemID = :itemID";

    $dbOutput = getConnection()->prepare($dbQuery);

    $dbOutput->execute(array(":itemID" => $itemID));
}
