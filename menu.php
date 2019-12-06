<html>

<head>
    <title>The Cozy Tea Room</title>
    <?php
    include_once 'assets/header.php';
    include_once 'dbConnection.php';
    ?>
</head>

<body>

    <div class="container text-center">
        <h2>The Cozy Tea Room Menu</h2>
    </div>

    <div class="col-sm-12 text-center">
        <?php echo "Your order is assigned to table number<b> " . $_GET["tableNumber"] . ".</b>"; ?>
    </div>

    <div class="container">
        <div>
            <p>
                <?php
                require 'dbMenu.php';
                ?>
                <?php 
                require_once 'menuBasket.php';
                ?>
            </p>
        </div>
    </div>
</body>

</html>