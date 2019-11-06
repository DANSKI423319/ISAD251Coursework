<?php

const DB_SERVER   = 'proj-mysql.uopnet.plymouth.ac.uk';
const DB_USER     = 'ISAD251_DSkillman';
const DB_PASSWORD = 'ISAD251_22205389';
const DB_DATABASE = 'ISAD251_DSkillman';


function getConnection() {

    $dataSrcName = 'mysql:dbname='.DB_DATABASE.';host='.DB_SERVER;
    $dbConnection = null;
    try
    {
        $dbConnection = new PDO($dataSrcName, DB_USER, DB_PASSWORD);
    } catch (PDOException $err) {
        echo 'Connection failed: ', $err->getMessage();
    }
    return $dbConnection;
}

//$sql = "SELECT userID, username, userPassword, userType FROM trusers";
//$tableOut = getConnection()->query($sql);

function getTable($tablename) {
    $statement = getConnection()->prepare("SELECT * FROM".$tablename);
    $statement->execute();
    $resultSet = $statement ->fetchTable(PDO::FETCH_ASSOC);
    
    return $resultSet;
}

echo 'all excecuted';
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
