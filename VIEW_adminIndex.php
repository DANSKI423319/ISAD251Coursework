<?php
include 'assets/header.php';
?>

<html>

<head>
    <title>The Cozy Tea Room</title>
</head>

<body>

    <div class="jumbotron text-center">
        <h1>The Cozy Tea Room: Admin Portal</h1>
    </div>

    <!-- Admin home, contains buttons to other locations. -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center"></div>
            <div class="col-sm-4 text-center">
                <input type="button" class="btn btn-primary" value="View Orders" onclick="onClick_OpenOrders()"><br><br>
                <input type="button" class="btn btn-primary" value="Ammend Menu" onclick="onClick_OpenMenu()"><br><br>
                <input type="button" class="btn btn-danger" value="Back to Home" onclick="onClick_ToHome()">
            </div>
            <div class="col-sm-4 text-center"></div>
        </div>
    </div>

</body>

</html>

<script>
    function onClick_OpenOrders() {
        window.location.href = "VIEW_adminOrders.php";
        window.location.replace("VIEW_adminOrders.php");
    }

    function onClick_OpenMenu() {
        window.location.href = "VIEW_adminMenu.php";
        window.location.replace("VIEW_adminMenu.php");
    }

    function onClick_ToHome() {
        window.location.href = "VIEW_index.php";
        window.location.replace = ("VIEW_index.php");
    }
</script>