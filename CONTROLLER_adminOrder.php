<?php

$tblCommand = getOrders();

if ($tblCommand) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblCommand[0]);
    $tblColID = $tblCols;

    foreach ($tblCommand as $tblRow) { // For as many rows are in the table, go through this cycle and plug in values. //
        echo '
            <tr>
                <td id="orderID' . $tblRow['orderItemNum'] . '"> ' . $tblRow['orderID'] . '</td>
                <td id="tblID' . $tblRow['orderItemNum'] . '"> ' . $tblRow['tableID'] . '</td>
                <td id="itemNoID' . $tblRow['orderItemNum'] . '"> ' . $tblRow['orderItemNum'] . '</td>
                <td id="itemID' . $tblRow['orderItemNum'] . '"> ' . $tblRow['itemID'] . '</td>
                <td id="priceID' . $tblRow['orderItemNum'] . '">£ ' . $tblRow['totalPrice'] . '</td>
                <td id="quantity' . $tblRow['orderItemNum'] . '"> ' . $tblRow['quantity'] . '</td>
                <td>
                    <input type="button" class="btn btn-danger" id="btnCancel' . $tblRow['orderItemNum'] . '" value="Cancel Order">
                </td>
            </tr>
        ';
    }
}
