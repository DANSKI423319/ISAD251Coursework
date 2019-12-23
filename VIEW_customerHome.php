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

    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-center">
                <form action="VIEW_customerMenu.php" class="formLayout" method="GET">
                    <div>
                        <label for="tableIn">Table Number:</label></br>
                        <input type="text" class="small-text" placeholder="###" name="tableNumber" maxlength="3" id="tableIn" required>
                        <input type="submit" class="btn btn-primary" value="Enter new order">
                    </div>
                </form>
                <input type="button" value="Previous Orders" class="btn btn-primary" onclick="onClick_PreviousOrders()"></br></br>
                <input type="button" value="Back to Home" class="btn btn-danger" onclick="onClick_ToHome()">
            </div>
            <div class="col-sm-4 text-center"></div>
        </div>
    </div>
</body>

</html>

<script>
    function onClick_PreviousOrders() {
        window.location.href = "VIEW_customerPreviousOrders.php";
        window.location.replace = ("VIEW_customerPreviousOrders.php");
    }

    function onClick_ToHome() {
        window.location.href = "index.php";
        window.location.replace = ("index.php");
    }
</script>