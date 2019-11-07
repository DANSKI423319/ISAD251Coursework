<?php

// Constant variables for database connection.
const DB_SERVER   = 'proj-mysql.uopnet.plymouth.ac.uk';
const DB_USER     = 'ISAD251_DSkillman';
const DB_PASSWORD = 'ISAD251_22205389';
const DB_DATABASE = 'ISAD251_DSkillman';

$bootStrapMenu = 'col-sm-4 text-center';

// Temporary connection to database.
$dbConn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($dbConn->connect_error) {
    die ("Connection failed:". $dbConn->connect_error);
}

// Create SQL statement.
$sql = "SELECT itemName, itemDesc, itemPrice FROM trmenu";

// Output from table is executed through DB connection.
$output = $dbConn->query($sql);

// For as many rows exist, complete...
if ($output->num_rows > 0) {
    while ($row = $output->FETCH_ASSOC()) {
        echo "<div class='$bootStrapMenu'>" . 
        "<p><h3>" . $row["itemName"] . "</h3></p>" . 
        "<p>" . $row["itemDesc"] . "</p>" . 
        "<p>£" . $row["itemPrice"] . "</p></div>";
    }
    } else {
        echo "0 reults";
    }

// Close database connection.
$dbConn->close();

//function getConnection() {
//
//    $dataSrcName = 'mysql:dbname='.DB_DATABASE.';host='.DB_SERVER;
//    $dbConnection = null;
//    try
//    {
//        $dbConnection = new PDO($dataSrcName, DB_USER, DB_PASSWORD);
//    } catch (PDOException $err) {
//        echo 'Connection failed: ', $err->getMessage();
//    }
//    return $dbConnection;
//}

//function getTable($tablename) {
//    $statement = getConnection()->prepare("SELECT * FROM".$tablename);
//    $statement->execute();
//    $resultSet = $statement ->fetchTable(PDO::FETCH_ASSOC);
//    
//    return $resultSet;
//}