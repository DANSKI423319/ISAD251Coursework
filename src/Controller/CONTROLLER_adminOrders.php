<?php
$databank = new databank();
$tblCommand = $databank->getOrders();

if ($tblCommand) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblCommand[0]);
    $tblColID = $tblCols;

    foreach ($tblCommand as $tblRow) { // For as many rows are in the table, go through this cycle and plug in values. //
        echo '
            <tr>
                <td id="orderID' . $tblRow['orderID'] . '"> ' . $tblRow['orderID'] . '</td>
                <td id="tableID' . $tblRow['orderID'] . '"> ' . $tblRow['tableID'] . '</td>
                <td id="priceID' . $tblRow['orderID'] . '">£ ' . $tblRow['totalPrice'] . '</td>
                <td>
                    <input type="button" class="btn btn-danger" id="btnCancel' . $tblRow['orderID'] . '" 
                        value="Cancel Order" onclick="onClick_CancelOrder_' . $tblRow['orderID'] . '()">
                </td>
            </tr>
            
            <script>
                function onClick_CancelOrder_' . $tblRow['orderID'] . '() {
                    txtDeleteOrder.value = orderID' . $tblRow['orderID'] . '.innerText;
                }
            </script>
        ';
    }
}

// <td id="itemNoID' . $tblRow['orderItemNum'] . '"> ' . $tblRow['orderItemNum'] . '</td>
// <td id="itemID' . $tblRow['orderItemNum'] . '"> ' . $tblRow['itemID'] . '</td>
// <td id="quantity' . $tblRow['orderItemNum'] . '"> ' . $tblRow['quantity'] . '</td>
