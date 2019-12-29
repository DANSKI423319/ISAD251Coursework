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

// Used by admins and customers, 
// dbQuery value swapped for different procedure calls that have specific (or all) fields from the menu table.
function getMenu($dbQuery)
{
    $dbOutput = getConnection()->prepare($dbQuery);
    $dbOutput->execute();
    
    $resultSet = $dbOutput->fetchAll(PDO::FETCH_ASSOC);
    return $resultSet;
}

// Show all fields from order table.
function getOrders()
{
    $dbQuery = "CALL viewOrders";
    $dbOutput = getConnection()->prepare($dbQuery);
    $dbOutput->execute();

    $resultSet = $dbOutput->fetchAll(PDO::FETCH_ASSOC);
    return $resultSet;
}

// Used to print all order IDs, and to get a new one for the customer menu.
function getOrderNo()
{
    $dbQuery = "SELECT orderID FROM order_table"; 
    $dbOutput = getConnection()->prepare($dbQuery);
    $dbOutput->execute();
    
    $resultSet = $dbOutput->fetchAll(PDO::FETCH_ASSOC);
    return $resultSet;
}

// Function to place an order (to order_table, this is the order without items)
function customerPlaceOrder() {
    $orderID = $_POST['newOrderID'];
    $tableID = $_POST['newTableID'];
    $totalPrice = $_POST['newTotalPrice'];

    $dbQuery = "CALL customerPlaceOrder(:orderID, :tableID, :totalPrice)";
    $dbOutput = getConnection()->prepare($dbQuery);

    $dbOutput->execute(array(
        ":orderID" => $orderID, ":tableID" => $tableID, ":totalPrice" => $totalPrice
    ));
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

    // Create SQL query, sets changing fields/parameters.
    $dbQuery = "CALL adminEditItem(:itemName, :itemDesc, :itemPrice, :itemStock, :itemID)";
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

    $dbQuery = "CALL adminAddItem(:itemID, :itemName, :itemDesc, :itemPrice, :itemStock)";
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

    $dbQuery = "CALL adminDeleteItem(:itemID)";
    $dbOutput = getConnection()->prepare($dbQuery);

    $dbOutput->execute(array(
        ":itemID" => $itemID
    ));
}

