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
        <h2>The Cozy Tea Room: Menu</h2>
    </div>

    <div class="col-sm-12 text-center">
        <?php echo "Your order is assigned to table number<b> " . $_GET["tableNumber"] . ".</b>"; ?>
    </div>

    <div class="container">
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
                <tbody>
                    <?php require 'CONTROLLER_customerMenuLoader.php'; ?></br>
                </tbody>
            </table>
            <b>TOTAL: £ <input type="text" id="totalPrice" name="totalPrice" class="w3-input" disabled></b></br></br>
            <b><input type="submit" name="order" value="Proceed" class="btn btn-primary"></b>
        </form>

        <input type="button" class="btn btn-danger" value="Return to Table Select" onclick="onClick_TableSel()">
    </div>
</body>

</html>

<script>
    function onClick_TableSel() {
        window.location.href = "VIEW_customerIndex.php";
        window.location.replace = ("VIEW_customerIndex.php");
    }
</script>