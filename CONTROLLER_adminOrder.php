<?php

$tableName = 'trOrders';
$tblCommand = viewOrders($tableName);

if ($tblCommand) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblCommand[0]);
    $tblColID = $tblCols;

    foreach ($tblCommand as $tblRow) {
        echo '
            <tr>
                <td id="tblID' . $tblRow['itemID'] . '">' . $tblRow['tableID'] . '</td>
                <td id="orderID' . $tblRow['itemID'] . '">' . $tblRow['orderID'] . '</td>
                <td id="itemID' . $tblRow['itemID'] . '">' . $tblRow['itemID'] . '</td>
                <td id="qtyID' . $tblRow['itemID'] . '">' . $tblRow['quantity'] . '</td>
                <td id="priceID' . $tblRow['itemID'] . '">£' . $tblRow['itemPrice'] . '</td>
                <td id="completedID' . $tblRow['itemID'] . '">' . $tblRow['completed'] . '</td>
                <td>
                <input type="button" class="btn-danger" id="btnCancel' . $tblRow['itemID'] . '" value="Cancel Order" onclick="onClick_Cancel_' . $tblRow['itemID'] . '()">
                </td>
            </tr>
        ';
    }
}
