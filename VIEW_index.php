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

    <div class="jumbotron text-center">
        <h1>The Cozy Tea Room</h1>
    </div>

    <div class="container">
        <!-- Hoem page that shows portals to either being an Admin or Customer. -->
        <div class="row">
            <div class="col-sm-4 text-center"></div>
            <div class="col-sm-4 text-center">
                <input type="button" class="btn btn-primary" value="Login as: Customer" onclick="onClick_LoginCustomer()"><br><br>
                <input type="button" class="btn btn-primary" value="Login as: Admin" onclick="onClick_LoginAdmin()">
            </div>
            <div class="col-sm-4 text-center"></div>
        </div>
    </div>

</body>

</html>

<script>
    function onClick_LoginCustomer() {
        window.location.href = "VIEW_customerIndex.php";
        window.location.replace("VIEW_customerIndex.php");
    }

    function onClick_LoginAdmin() {
        window.location.href = "VIEW_adminIndex.php";
        window.location.replace("VIEW_adminIndex.php");
    }
</script>