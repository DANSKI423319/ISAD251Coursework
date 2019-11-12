<?php
include_once 'assets/header.php';
include_once 'dbConnection.php';
$tableName = 'trMenu';

$tblOutput = getAll($tableName);

echo
    '<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>Menu</th>
                <th>About</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
    ';

if ($tblOutput) {
    $tblCols = empty($tableResults) ? array() : array_keys($tblOutput[0]);
    $tblColID = $tblCols;

    foreach ($tblOutput as $tblRow) {
        echo
            '<tr>
                <td>' . $tblRow['itemName'] . '</td>
                <td>' . $tblRow['itemDesc'] . '</td> .
                <td>£' . $tblRow['itemPrice'] . '</td>
                <td>
                    <input class="btn-success" id="btnAdd" type="button" value="+">
                    <input class="btn-danger" id="btnSub" type="button" value="-">
                </tr>';
    }
}

echo '</tr></tbody></table>';
