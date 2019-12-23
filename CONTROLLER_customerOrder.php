<?php
include_once 'assets/header.php';
include_once 'MODEL_dbConnection.php';

$tableName = 'trOrders';
$tblCommand = viewOrders($tableName);

echo '
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>itemID</th>
                        <th>Quantity</th>
                        <th>itemPrice</th>
                    </tr>
                </thead>
            </tbody>';

if ($tblCommand) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblCommand[0]);
    $tblColID = $tblCols;

    foreach ($tblCommand as $tblRow) {
        echo '
                                <tr>
                                    <td id="itemID' . $tblRow['itemID'] . '">' . $tblRow['itemID'] . '</td>
                                    <td id="qtyID' . $tblRow['itemID'] . '">' . $tblRow['quantity'] . '</td>
                                    <td id="itemPrice' . $tblRow['itemID'] . '">£' . $tblRow['itemPrice'] . '</td>
                                </tr>';
    }
}

echo '
    </tbody>
    </table>
    </div>
    
    ';
