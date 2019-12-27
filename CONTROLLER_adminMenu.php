<?php

$tableName = 'trMenu';
$tblCommand = getAdminMenu($tableName);

if ($tblCommand) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblCommand[0]);
    $tblColID = $tblCols;

    foreach ($tblCommand as $tblRow) { // For as many rows are in the table, go through this cycle and plug in values + Javascript scripts for editing, removing and adding items //
        echo '
                <tr>
                    <td id="itemID' . $tblRow['itemID'] . '">' . $tblRow['itemID'] . '</td>
                    <td id="nameID' . $tblRow['itemID'] . '">' . $tblRow['itemName'] . '</td>
                    <td id="descID' . $tblRow['itemID'] . '">' . $tblRow['itemDesc'] . '</td>
                    <td id="priceID' . $tblRow['itemID'] . '">£' . $tblRow['itemPrice'] . '</td>
                    <td id="stockID' . $tblRow['itemID'] . '">' . $tblRow['itemStock'] . '</td>
                    <td>
                        <input type="button" class="btn-success" id="btnAdd' . $tblRow['itemID'] . '" value="EDIT" onclick="onClick_EditItem_' . $tblRow['itemID'] . '()">
                        <input type="button" class="btn-danger" id="btnSub' . $tblRow['itemID'] . '" value="REMOVE" onclick="onClick_RemItem_' . $tblRow['itemID'] . '()">
                    </td>
                </tr>

                <script language="javaScript">

                    function onClick_EditItem_' . $tblRow['itemID'] . '() {
                        txtEditID.value = itemID' . $tblRow['itemID'] . '.innerText;
                        txtEditName.value = nameID' . $tblRow['itemID'] . '.innerText;
                        txtEditDesc.value = descID' . $tblRow['itemID'] . '.innerText;
                        txtEditPrice.value = ' . $tblRow['itemPrice'] . ';
                        txtEditStock.value = ' . $tblRow['itemStock'] . ';
                        btnUnlockFields.disabled = false;
                    }

                    function onClick_RemItem_' . $tblRow['itemID'] . '() {
                        txtRemID.value = itemID' . $tblRow['itemID'] . '.innerText;
                    }
                </script>
            ';
    }
}
