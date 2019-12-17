<html>    

    <head>
        <title>The Cozy Tea Room</title>
        <?php 
        include 'assets/header.php';
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
                        <form action="VIEW_customerHome.php">
                            <input type="submit" class="btnEnter" value="Login as: Customer">
                        </form>
                        <form action="VIEW_adminHome.php">
                            <input type="submit" class="btnEnter" value="Login as: Admin">
                        </form>
                    </div>
                <div class="col-sm-4 text-center"></div>
            </div>
        </div>
    </body>
</html>
