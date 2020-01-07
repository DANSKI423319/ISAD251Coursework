<?php
include 'assets/header.php';
include 'MODEL_databank.php';

$databank = new databank();

// Function to delete an order.
if (isset($_POST['btnDelOrder'])) {
    $orderID = $_POST['delOrderID'];

    $databank->adminDeleteOrder($orderID);
}
?>

<html>

<head>
    <title>
        The Cozy Tea Room
    </title>
</head>

<!-- Admin order table view that gives viewing access to all past and current orders -->
<body>

    <div class="container text-center">
        <h2>The Cozy Tea Room: Current Orders</h2>
    </div>

    <div class="col-sm-12 text-center">
        View and cancel current orders.
    </div>

    <div class="container text-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Table ID</th>
                    <th>Price</th>                   
               <!-- <th>Item No.</th>
                    <th>Item ID</th>
                    <th>Quantity</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include_once 'CONTROLLER_adminOrders.php' ?>
            </tbody>
        </table>
        <form id="formOrderRemove" action="VIEW_adminOrders.php" method="post">
            <input type="number" name="delOrderID" id="txtDeleteOrder" class="w3-input" placeholder="ID..." readonly>
            <input type="submit" name="btnDelOrder" id="btnDeleteOrder" class="btn btn-primary" value="Confirm Removal">
        </form>
        </br></br>
        <input type="button" class="btn btn-danger" value="Return to Admin Portal" onclick="onClick_AdminMenu()">
    </div>

</body>

</html>

<script>
    function onClick_AdminMenu() {
        window.location.href = "VIEW_adminIndex.php";
        window.location.replace = ("VIEW_adminIndex.php");
    }
</script>