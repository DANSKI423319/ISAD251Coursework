<?php

// Constant variables for database connection.
const DB_SERVER   = 'proj-mysql.uopnet.plymouth.ac.uk';
const DB_USER     = 'ISAD251_DSkillman';
const DB_PASSWORD = 'ISAD251_22205389';
const DB_DATABASE = 'ISAD251_DSkillman';

$bootStrap = 'col-sm-4 text-center';

function getConnection()
{
    $dataSourceName = 'mysql:dbname=' . DB_DATABASE . ';host=' . DB_SERVER;
    $dbConnection = null;
    try {
        $dbConnection = new PDO($dataSourceName, DB_USER, DB_PASSWORD);
        $sql = $dbConnection->prepare('SELECT * FROM trUsers');
        echo '<div class=$bootStrap>
        <h3>Connection Made</h3>
        <p>Connection made!</p>
        <p>Connection made!</p>
        </div>';
    } catch (PDOException $err) {
        echo 'Connection failed: ', $err->getMessage();
    }
    return $dbConnection;
}

function getAll($tablename)
{
    $statement = getConnection()->prepare("SELECT * FROM " . $tablename);
    $statement->execute();
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $resultSet;
}

// $sql = 'SELECT itemName, itemDesc, itemPrice FROM trMenu';
// $output = $dbConnection->query($sql);

// if ($output->num_rows > 0) {
//     while ($row = $output->fetch_assoc()) {
//         echo '<div class="$bootStrap>
//         <h3>' . $row['itemName'] . '</h3>
//         <p>' . $row['itemDesc'] . '</p>
//         <p>' . $row['itemPrice'] . '</p>';
//     }
// } else {
//     echo "0 results";
// }
