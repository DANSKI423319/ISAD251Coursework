<?php
$databank = new databank();
$dbQuery = "CALL customerMenu";
$tblCommand = $databank->getMenu($dbQuery);

if ($tblCommand) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblCommand[0]);
    $tblColID = $tblCols;

    foreach ($tblCommand as $tblRow) { // For as many rows are in the table, go through this cycle and plug in values + Javascript scripts for adding and removing items. //
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
                        <input type="number" class="w3-input" id="itemQty_' . $tblRow['itemID'] . '" value="0" readonly><br>
                    </td>
                </tr>
            
                <script>
                // Add item to order.
                var total = 0.00;
                var numQty_' . $tblRow['itemID'] . ' = 0;
                var indiTotal_' . $tblRow['itemID'] . ' = 0.00;
                
                function onClick_AddItem_' . $tblRow['itemID'] . '() {
                    var basketString_' . $tblRow['itemID'] . ' = ""
                    numQty_' . $tblRow['itemID'] . ' = numQty_' . $tblRow['itemID'] . ' + 1;
                    itemQty_' . $tblRow['itemID'] . '.value = numQty_' . $tblRow['itemID'] . ';
                    total = total + ' . $tblRow['itemPrice'] . ';
                    totalPrice.value = total.toFixed(2);
                    indiTotal_' . $tblRow['itemID'] . ' = indiTotal_' . $tblRow['itemID'] . ' + ' . $tblRow['itemPrice'] . ';
                    addToList("' . $tblRow['itemID'] . '");
                }

                // Remove item from order.
                function onClick_SubItem_' . $tblRow['itemID'] . '() {
                    numQty_' . $tblRow['itemID'] . ' = numQty_' . $tblRow['itemID'] . ' - 1;
                    itemQty_' . $tblRow['itemID'] . '.value = numQty_' . $tblRow['itemID'] . ';
                    total = total - ' . $tblRow['itemPrice'] . ';
                    totalPrice.value = total.toFixed(2);
                if (totalPrice.value < -0.00) {
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
