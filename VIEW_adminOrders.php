<?php
include 'assets/header.php';
include 'MODEL_dbConnection.php';
?>

<html>

<head>
    <title>The Cozy Tea Room</title>
</head>

<body>

    <div class="container text-center">
        <h2>The Cozy Tea Room: Current Orders</h2>
    </div>

    <div class="col-sm-12 text-center">
        View and cancel current orders.
    </div>

    <div class="container text-center">
        <!-- Admin order view -->
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Table ID</th>
                    <th>Item No.</th>
                    <th>Item ID</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include_once 'CONTROLLER_adminOrder.php' ?>
            </tbody>
        </table>
        </br></br>
        <input type="button" class="btn btn-danger" value="Return to Admin Portal" onclick="onClick_AdminMenu()">
    </div>

</body>

</html>

<script language="javaScript">
    function onClick_AdminMenu() {
        window.location.href = "VIEW_adminIndex.php";
        window.location.replace = ("VIEW_adminIndex.php");
    }
</script>