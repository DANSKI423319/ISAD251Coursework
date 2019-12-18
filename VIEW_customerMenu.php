<html>

<head>
    <title>The Cozy Tea Room</title>
    <?php include_once 'assets/header.php';
    include_once 'MODEL_dbMenuConnection.php'; ?>
</head>

<body>

    <div class="container text-center">
        <h2>The Cozy Tea Room: Menu</h2>
    </div>

    <div class="col-sm-12 text-center">
        <?php echo "Your order is assigned to table number<b> " . $_GET["tableNumber"] . ".</b>"; ?>
    </div>

    <div class="container">
        <div>
            <p>
                <?php require 'CONTROLLER_customerMenuLoader.php'; ?></br>
                <input type="button" class="btn btn-danger" value="Return to Table Select" 
                    onclick="onClick_TableSel()">
            </p>
        </div>
    </div>
</body>

</html>

<script>
    function onClick_TableSel() {
        window.location.href = "VIEW_customerHome.php";
        window.location.replace = ("VIEW_customerHome.php");
    }
</script>