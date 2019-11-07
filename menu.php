<html>    

    <head>
        <title>The Cozy Tea Room</title>
        <?php include_once 'assets/header.php'; ?>
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

                <?php include 'dbConnection.php'; ?>

            </div>
        </div>

    </body>

</html>

