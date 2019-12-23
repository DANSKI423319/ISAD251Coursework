<html>

<head>
    <title>The Cozy Tea Room</title>
    <?php include 'assets/header.php';
    ?>
</head>

<body>

    <div class="jumbotron text-center">
        <h1>The Cozy Tea Room</h1>
    </div>

    <div class="container">
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
        window.location.href = "VIEW_customerHome.php";
        window.location.replace("VIEW_customerHome.php");
    }

    function onClick_LoginAdmin() {
        window.location.href = "VIEW_adminHome.php";
        window.location.replace("VIEW_adminHome.php");
    }
</script>