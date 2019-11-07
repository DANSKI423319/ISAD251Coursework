<html>

<head>
    <title>The Cozy Tea Room</title>
    <?php include_once 'assets/header.php';
    include_once 'dbConnection.php';
    ?>
</head>

<body>

    <div class="container text-center">
        <h2>The Cozy Tea Room Menu</h2>
    </div>

    <div class="col-sm-12 text-center">
        <?php echo "<b>Your order is assigned to table number " . $_GET["tableNumber"] . ".</b>"; ?>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-sm-4 text-center">
                <h3>placeholder</h3>
                <p>placeholder</p>
                <p>placeholder</p>
            </div>

            <div class="col-sm-4 text-center">
                <?php
                    getConnection();
                ?>
            </div>

            <div class="col-sm-4 text-center">
                <h3>placeholder</h3>
                <p>placeholder</p>
                <p>placeholder</p>
            </div>

        </div>
    </div>

</body>

</html>