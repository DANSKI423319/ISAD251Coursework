<?php
include_once 'assets/header.php';
include_once 'MODEL_dbMenuConnection.php';

$tableName = 'trMenu';
$tblOutput = getAll($tableName);

echo '
    <div>
        <form action="VIEW_customerOrder.php" method="GET">
            <table class="table">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Menu Item</th>
                        <th>About</th>
                        <th>Price</th>
                        <th>Select</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
            <tbody>';

if ($tblOutput) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblOutput[0]);
    $tblColID = $tblCols;

    foreach ($tblOutput as $tblRow) {
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
            if (numQty_' . $tblRow['itemID'] . ' <= -1) {
                numQty_' . $tblRow['itemID'] . ' = 0.00;
                itemQty_' . $tblRow['itemID'] . '.value = numQty_' . $tblRow['itemID'] . ';
                totalPrice.value = 0;
                alert("ERROR: Cannot have minus products.");
            }
        }
        </script>
        ';
    }
}
echo '
                    </tr>
                </tbody>
            </table>
        </form>
        <b>TOTAL: £ <input type="text" id="totalPrice" name="totalPrice" class="w3-input" disabled></b></br></br>
        <b><input type="button" name="order" value="Proceed" class="btn btn-primary" onclick="onClick_PlaceOrder()"></b>
    </div>';

?>

<script>
    function onClick_PlaceOrder() {
        window.location.href = "VIEW_customerOrder.php";
        window.location.replace("VIEW_customerOrder.php");
    }
</script>