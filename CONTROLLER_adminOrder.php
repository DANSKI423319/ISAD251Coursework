<?php

$tblCommand = viewOrders();

if ($tblCommand) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblCommand[0]);
    $tblColID = $tblCols;

    foreach ($tblCommand as $tblRow) { // For as many rows are in the table, go through this cycle and plug in values. //
        echo '
            <tr>
                <td id="orderID' . $tblRow['orderID'] . '">' . $tblRow['orderID'] . '</td>
                <td id="tblID' . $tblRow['orderID'] . '">' . $tblRow['tableID'] . '</td>
                <td id="priceID' . $tblRow['orderID'] . '">£' . $tblRow['totalPrice'] . '</td>
                <td>
                    <input type="button" class="btn-danger" id="btnCancel' . $tblRow['orderID'] . '" value="Cancel Order" onclick="onClick_Cancel_' . $tblRow['orderID'] . '()">
                </td>
            </tr>
        ';
    }
}
