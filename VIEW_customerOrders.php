<?php
include 'assets/header.php';
include 'MODEL_dbConnection.php'
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

    <div class="container text-center">
        <form action="VIEW_customerOrders.php" class="form" method="GET">
            <label for="orderInput">Order ID:</label></br>
            <input type="number" name="orderNumber" class="small-text" placeholder="###" id="orderInput" min=0 required>
            <input type="submit" name="search" class="btn btn-primary" value="Find Order">
        </form>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Table ID</th>
                        <th>Item No.</th>
                        <!-- <th>Item ID</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Function not working.
                    // if (isset($_POST['search'])) {
                    //     include 'CONTROLLER_customerOrders.php';
                    // } 
                    ?>
                </tbody>
            </table>
        </div>
        <input type="button" value="Back to Home" class="btn btn-danger" onclick="onClick_TableSel()">
    </div>
</body>

</html>

<script>
    function onClick_TableSel() {
        window.location.href = "VIEW_customerIndex.php";
        window.location.replace = ("VIEW_customerIndex.php");
    }
</script>