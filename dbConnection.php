<?php

const DB_SERVER   = 'proj-mysql.uopnet.plymouth.ac.uk';
const DB_USER     = 'ISAD251_DSkillman';
const DB_PASSWORD = 'ISAD251_22205389';
const DB_DATABASE = 'ISAD251_DSkillman';


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

$dbConn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
if($dbConn->connect_error) {
    die("Connection failed:". $dbConn->connect_error);
}

$sql = "SELECT userID, username, userPassword, userType FROM trusers";
$output = $dbConn->query($sql);

if ($output->num_rows > 0) {
    while($row = $output->FETCH_ASSOC()) {
        echo "UserID: " . $row["userID"] . " / Username: " . $row["username"] . 
                " / Password: " . $row["userPassword"] . " / User Type: " . 
                $row["userType"] . ".<br>";
    }
    }else {
        echo "0 reults";
    }

    

//
//if ($tableOut->num_rows > 0) {
//    // output data of each row
//    while($row = $tableOut->FETCH_ASSOC()) {
//        echo "<br> id: ". $row["userID"]. " - Username: ". $row["username"]. 
//                " - Password: " . $row["userPassword"] . " - User type: "
//                . $row["userType"] . ".";
//    }
//} else {
//    echo "0 results";
