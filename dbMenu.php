<?php
include_once 'assets/header.php';
include_once 'dbConnection.php';
include_once 'menuBasketFunctions.php';

$tableName = 'trMenu';
$tblOutput = getAll($tableName);

echo '
    <div>
        <form action="order.php" method="GET">
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
                        <td id="itemID'. $tblRow['itemID'] .'">'. $tblRow['itemID'] .'</td>
                        <td id="nameID'. $tblRow['itemID'] .'">'. $tblRow['itemName'] .'</td>
                        <td id="descID'. $tblRow['itemID'] .'">'. $tblRow['itemDesc'] .'</td>
                        <td id="priceID'. $tblRow['itemID'] .'">£'. $tblRow['itemPrice'] .'</td>
                        <td>
                            <input type="button" class="btn-success" id="btnAdd'. $tblRow['itemID'] .'" value="+" onclick="onClick_AddItem_'. $tblRow['itemID'] .'()">
                            <input type="button" class="btn-danger" id="btnSub'. $tblRow['itemID'] .'" value="-" onclick="onClick_SubItem_'. $tblRow['itemID'] .'()">
                        </td>
                        <td>
                            <input type="text" class="w3-input" id="itemQty_' . $tblRow['itemID'] . '" value="0" disabled><br>
                        </td>
                    </tr>
            
        <script language="javaScript">

        // Add item to order.
        var numQty_'. $tblRow['itemID'] .' = 0; 
        function onClick_AddItem_'. $tblRow['itemID'] .'() {
            numQty_'. $tblRow['itemID'] .' = numQty_'. $tblRow['itemID'] .' + 1;
            alert("You have added 1: " + nameID'. $tblRow['itemID'] .'.innerText);
            itemQty_'. $tblRow['itemID'] .'.value = numQty_'. $tblRow['itemID'] .';
        }

        // Remove item from order.
        function onClick_SubItem_'. $tblRow['itemID'] .'() {
            numQty_'. $tblRow['itemID'] .' = numQty_'. $tblRow['itemID'] .' - 1;
            alert("You have subtracted 1: " + nameID'. $tblRow['itemID'] .'.innerText);
            itemQty_'. $tblRow['itemID'] .'.value = numQty_'. $tblRow['itemID'] .';
            if (numQty_'.$tblRow['itemID'].' <= -1) {
                numQty_'.$tblRow['itemID'].' = 0;
                itemQty_'. $tblRow['itemID'] .'.value = numQty_'. $tblRow['itemID'] .';
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
        <b><input type="submit" name="order" value="Place Order" class="btn-primary"></b>
        </form>
    </div>';

/*
// echo '<pre>';
// print_r($tblOutput);
// echo '</pre>';

// echo $tblOutput[0]['itemID'];
*/
