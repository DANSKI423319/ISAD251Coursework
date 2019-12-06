<?php

echo '  
    <div class="text-center">
        <form action="order.php" class="basketFormLayout" method="post">
            <h3><b>BASKET</b></h3><br>
            <b><input type="submit" name="order" value="Place Order" class="btn-primary"></b>
            <table class="table">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>'
    ;

if ($tblOutput) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblOutput[0]);
    $tblColID = $tblCols;

    foreach ($tblOutput as $tblRow) {
        echo
            '<tr>
                <td name="itemID_' . $tblRow['itemID'] . '" id="basketItemID_' . $tblRow['itemID'] . '"></td>
                <td name="nameID_' . $tblRow['itemID'] . '" id="basketNameID_' . $tblRow['itemID'] . '"></td>
                <td name="gtyID_' . $tblRow['itemID'] . '" id="basketQtyID_' . $tblRow['itemID'] . '"></td>
                <td name="priceID_' . $tblRow['itemID'] . '" id="basketPriceID_' . $tblRow['itemID'] . '"></td>
            </tr>';
    }
}
echo '
</tbody></form></div>
';

echo '';