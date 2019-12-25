<?php

$tableName = 'trMenu';
$tblCommand = getCustomerMenu($tableName);

if ($tblCommand) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblCommand[0]);
    $tblColID = $tblCols;

    foreach ($tblCommand as $tblRow) {
        echo '
                <tr>
                    <td id="itemID' . $tblRow['itemID'] . '">' . $tblRow['itemID'] . '</td>
                    <td id="nameID' . $tblRow['itemID'] . '">' . $tblRow['itemName'] . '</td>
                    <td id="descID' . $tblRow['itemID'] . '">' . $tblRow['itemDesc'] . '</td>
                    <td id="priceID' . $tblRow['itemID'] . '">£' . $tblRow['itemPrice'] . '</td>
                    <td>
                        <input type="button" class="btn-success" id="btnAdd' . $tblRow['itemID'] . '" value="+" onclick="onClick_AddItem_' . $tblRow['itemID'] . '()">
                        <input type="button" class="btn-danger" id="btnSub' . $tblRow['itemID'] . '" value="-" onclick="onClick_SubItem_' . $tblRow['itemID'] . '()">
                    </td>
                    <td>
                        <input type="text" class="w3-input" id="itemQty_' . $tblRow['itemID'] . '" value="0" disabled><br>
                    </td>
                </tr>
            
                <script language="javaScript">

                // Add item to order.
                var total = 0.00;
                var numQty_' . $tblRow['itemID'] . ' = 0; 
                function onClick_AddItem_' . $tblRow['itemID'] . '() {
                    numQty_' . $tblRow['itemID'] . ' = numQty_' . $tblRow['itemID'] . ' + 1;
                    itemQty_' . $tblRow['itemID'] . '.value = numQty_' . $tblRow['itemID'] . ';
                    total = total + ' . $tblRow['itemPrice'] . ';
                    totalPrice.value = total.toFixed(2);
                }

                // Remove item from order.
                function onClick_SubItem_' . $tblRow['itemID'] . '() {
                    numQty_' . $tblRow['itemID'] . ' = numQty_' . $tblRow['itemID'] . ' - 1;
                    itemQty_' . $tblRow['itemID'] . '.value = numQty_' . $tblRow['itemID'] . ';
                    total = total - ' . $tblRow['itemPrice'] . ';
                    totalPrice.value = total.toFixed(2);
                if (totalPrice.value < 0) {
                    numQty_' . $tblRow['itemID'] . ' = 0.00;
                    itemQty_' . $tblRow['itemID'] . '.value = numQty_' . $tblRow['itemID'] . ';
                    totalPrice.value = "0.00";
                    alert("ERROR: Cannot have minus products.");
                }
            }
                
                </script>
            ';
    }
}

?>