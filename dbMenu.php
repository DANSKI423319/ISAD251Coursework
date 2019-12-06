<?php
include_once 'assets/header.php';
include_once 'dbConnection.php';
include_once 'menuBasketFunctions.php';

$tableName = 'trMenu';

$tblOutput = getAll($tableName);

echo '
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Menu Item</th>
                    <th>About</th>
                    <th>Price</th>
                </tr>
            </thead>
        <tbody>';

if ($tblOutput) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblOutput[0]);
    $tblColID = $tblCols;

    foreach ($tblOutput as $tblRow) {
        echo '
            <tr>
                <td id="itemID' . $tblRow['itemID'] . '">' . $tblRow['itemID'] . '</td>
                <td id="nameID">' . $tblRow['itemName'] . '</td>
                <td id="descID">' . $tblRow['itemDesc'] . '</td>
                <td id="priceID' . $tblRow['itemID'] . '">£'
                . $tblRow['itemPrice'] . '</td>
                <td>
                    <input class="btn-success" id="btnAdd' . $tblRow['itemID'] . '" 
                        type="button" value="+" onclick="onClick_AddItem_' . $tblRow['itemID'] . '()">
                    <input class="btn-danger" id="btnSub' . $tblRow['itemID'] . '"
                        type="button" value="-" onclick="onClick_SubItem_' . $tblRow['itemID'] . '()">
                </td>
            </tr>';
    }
}

echo '</tr></tbody></table></div>';

// echo '<pre>';
// print_r($tblOutput);
// echo '</pre>';

// echo $tblOutput[0]['itemID'];
