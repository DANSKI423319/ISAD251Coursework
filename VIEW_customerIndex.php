<?php
include 'assets/header.php';
?>

<html>

<head>
    <title>The Cozy Tea Room</title>
</head>

<body>

    <div class="jumbotron text-center">
        <h1>The Cozy Tea Room</h1>
    </div>

    <div class="container text-center">
        <form action="VIEW_customerMenu.php" class="form" method="GET"> <!-- Table number form. -->
            <label for="tableIn">Table Number (1 - 100):</label></br>
            <input type="number" class="small-text" placeholder="###" name="tableNumber" maxlength="3" id="tableIn" min="1" max="100" required>
            <input type="submit" class="btn btn-primary" value="Enter new order">
        </form>
        <input type="button" value="Previous Orders" class="btn btn-primary" onclick="onClick_PreviousOrders()"></br></br>
        <input type="button" value="Back to Home" class="btn btn-danger" onclick="onClick_ToHome()">
    </div>
</body>

</html>

<script>
    function onClick_PreviousOrders() {
        window.location.href = "VIEW_customerPreviousOrders.php";
        window.location.replace = ("VIEW_customerPreviousOrders.php");
    }

    function onClick_ToHome() {
        window.location.href = "VIEW_index.php";
        window.location.replace = ("VIEW_index.php");
    }
</script>