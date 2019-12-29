<?php
include_once 'assets/header.php';
include_once 'MODEL_dbConnection.php';

if (isset($_POST['placeOrder'])) {
    customerPlaceOrder();
}

?>

<html>

<head>
    <title>The Cozy Tea Room</title>
</head>

<body>

    <div class="container text-center">
        <h2>The Cozy Tea Room: Menu</h2>
    </div>

    <form id="formPlaceOrder" action="VIEW_customerMenu.php" method="post">
        <div class="col-sm-12 text-center">
            Your table number is:
            <input type="text" name="newTableID" value="<?php echo $_GET["tableNumber"]; ?>" class="w3-input" readonly>
        </div>

        <div class="container"> <!-- Customer menu view. -->
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
                    <?php require 'CONTROLLER_customerMenu.php'; ?></br>
                </tbody>
            </table>
            <div hidden="true"><?php require 'CONTROLLER_customerOrderID.php'; ?></div>
            <b>TOTAL: £ <input type="text" name="newTotalPrice" id="totalPrice" class="w3-input" placeholder="0.00" readonly></b>
            <b>ORDER ID: <input type="number" name="newOrderID" id="txtNextOrderID" class="w3-input" value="<?php $newItemID = $tblRow['orderID'];
                                                                                            $newItemID = $newItemID + 1;
                                                                                            echo $newItemID; ?>" readonly></b></br></br>
            <b><input type="submit" name="placeOrder" value="Proceed" class="btn btn-primary"></b>
    </form>

</br></br>

    <input type="button" class="btn btn-danger" value="Return to Table Select" onclick="onClick_TableSel()">

    </div>

    
</body>

</html>

<script>
    function onClick_TableSel() {
        window.location.href = "VIEW_customerIndex.php";
        window.location.replace = ("VIEW_customerIndex.php");
    }

    var txtjeff;

    function onClick_Test() {
        addToList("Test");
    }
</script>

