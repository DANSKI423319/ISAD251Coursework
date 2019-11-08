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
                <div class="col-sm-4 text-center"><h3></h3><p></p><p></p></div>

                <div class="col-sm-8 text-center">
                    <form action="menu.php" class="formLayout" method="GET">
                        <div>
                            <label for="tableIn">Table Number:</label>
                            <input type="text" name="tableNumber" placeholder="###" class="tableNum" maxlength="3" id="tableIn" required><br>
                            <input type="submit" value="Enter new order" class="btnEnter">
                            <input type="button" value="Login" class="btnLogin">
                        </div>
                    </form>
                </div>

                <div class="col-sm-4 text-center"><h3></h3><p></p><p></p></div>
            </div>
        </div>

    </body>
</html>
