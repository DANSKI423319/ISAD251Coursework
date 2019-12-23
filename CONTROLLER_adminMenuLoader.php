<?php
include_once 'assets/header.php';
include_once 'MODEL_dbConnection.php';

$tableName = 'trMenu';
$tblCommand = getAdminMenu($tableName);

echo '
    <div>
        <form>
            <table class="table">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Menu Item</th>
                        <th>About</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <tbody>';

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
                        <td id="stockID' . $tblRow['itemID'] . '">' . $tblRow['itemStock'] . '</td>
                        <td>
                            <input type="button" class="btn-success" id="btnAdd' . $tblRow['itemID'] . '" value="EDIT" onclick="onClick_EditItem_' . $tblRow['itemID'] . '()">
                            <input type="button" class="btn-danger" id="btnSub' . $tblRow['itemID'] . '" value="REMOVE" onclick="onClick_RemItem_' . $tblRow['itemID'] . '()">
                        </td>
                    </tr>

        <script language="javaScript">
            function onClick_EditItem_' . $tblRow['itemID'] . '() {
                txtEditName.value = nameID' . $tblRow['itemID'] . '.innerText;
                txtEditDesc.value = descID' . $tblRow['itemID'] . '.innerText;
                txtEditPrice.value = ' . $tblRow['itemPrice'] . ';
                btnUnlockFields.disabled = false;
            }
        </script>

        ';
    }

    echo '
            </tbody>
            </table>
        </form>
    </div>

    <script>

    </script>
    ';
}
