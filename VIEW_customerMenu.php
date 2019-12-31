<?php
include 'assets/header.php';
include 'MODEL_databank.php';

$databank = new databank();

if (isset($_POST['placeOrder'])) {
    $orderID = $_POST['newOrderID'];
    $tableID = $_POST['newTableID'];
    $totalPrice = $_POST['newTotalPrice'];
    $newOrder = new order($orderID, $tableID, $totalPrice);

    $databank->customerPlaceOrder($newOrder);
    ?> <script> 
            alert("YOUR ORDER HAS BEEN PLACED! ID: <?php echo $orderID; ?> / TABLE: <?php echo $tableID; ?> / PRICE: £<?php echo $totalPrice; ?>")
            window.location.href = "VIEW_customerIndex.php";
            window.location.replace = ("VIEW_customerIndex.php");
        </script> 
    <?php
}

?>

<html>

<head>
    <title>
        The Cozy Tea Room
    </title>
</head>

<body>

    <div class="container text-center">
        <h2>The Cozy Tea Room: Menu</h2>
    </div>

    <form id="formPlaceOrder" action="VIEW_customerMenu.php" method="post">
        <div class="col-sm-12 text-center">
            Your table number is:
            <input type="number" name="newTableID" value="<?php echo $_GET['tableNumber'] ?>" class="w3-input">
        </div>

        <div class="container">
            <!-- Customer menu view. -->
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
            <div hidden><?php require 'CONTROLLER_customerOrderID.php'; ?></div>
            <b>TOTAL: £ <input type="text" id="totalPrice" name="newTotalPrice" class="w3-input" placeholder="0.00" readonly></b>
            <b>ORDER ID: <input type="number" id="txtNextOrderID" name="newOrderID" class="w3-input" value="<?php $newItemID = $tblRow['orderID'];
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

    function onClick_OrderAlert() {
        Alert("Your order has been placed, your order number is: ! Returning you to table select screen.");
    }
</script>