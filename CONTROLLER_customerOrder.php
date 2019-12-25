<?php

$tableName = 'trOrders';
$tblCommand = viewOrders($tableName);

if ($tblCommand) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblCommand[0]);
    $tblColID = $tblCols;

    foreach ($tblCommand as $tblRow) {
        echo '
            <tr>
                <td id="itemID' . $tblRow['itemID'] . '">' . $tblRow['itemID'] . '</td>
                <td id="qtyID' . $tblRow['itemID'] . '">' . $tblRow['quantity'] . '</td>
                <td id="itemPrice' . $tblRow['itemID'] . '">£' . $tblRow['itemPrice'] . '</td>
            </tr>
        ';
    }
}
