<?php
include_once 'assets/header.php';
include_once 'MODEL_dbConnection.php';
?>

<html>

<head>
    <title>The Cozy Tea Room</title>
</head>

<body>

    <div class="container text-center">
        <h2>The Cozy Tea Room: Order Details</h2>
    </div>

    <div class="col-sm-12 text-center">
        <?php echo "Your order is assigned to the table number <b>X</b> and your order ID is <b>X</b>"; ?></br>
        <?php echo "<b>YOUR ORDER:</b>" ?>
    </div>

    <div class="container">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>itemID</th>
                        <th>Quantity</th>
                        <th>itemPrice</th>
                    </tr>
                </thead>
                </tbody>'
                <?php require 'CONTROLLER_customerOrder.php'; ?>

                /tbody>
            </table>
        </div>
    </div>
</body>

</html>