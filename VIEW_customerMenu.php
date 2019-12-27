<?php
include_once 'assets/header.php';
include_once 'MODEL_dbConnection.php';
?>

<html>

<head>
    <title>The Cozy Tea Room</title>
</head>

<body>

    <div class="container text-center">
        <h2>The Cozy Tea Room: Menu</h2>
    </div>

    <form action="VIEW_customerOrder.php" method="post">
        <div class="col-sm-12 text-center">
            Your table number is:
            <input type="text" name="tableNumber2" value="<?php echo $_GET["tableNumber"]; ?>" class="w3-input" readonly>
        </div>

        <div class="container"> <!-- Customer menu view. -->
            <table class="table">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Menu Item</th>
                        <th>About</th>
                        <th>Price</th>
                        <th>Select</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require 'CONTROLLER_customerMenuLoader.php'; ?></br>
                </tbody>
            </table>
            <b>TOTAL: £ <input type="text" id="totalPrice" name="totalPrice" class="w3-input" readonly></b></br></br>
            <b><input type="submit" name="order" value="Proceed" class="btn btn-primary"></b>
    </form>

</br></br>

    <input type="button" class="btn btn-danger" value="Return to Table Select" onclick="onClick_TableSel()">
    <input type="button" class="btn btn-basic" value="test" onclick="onClick_Test()">

    <ul class="list-group" id="listTest"></ul>
    </div>

    
</body>

</html>

<script>
    function onClick_TableSel() {
        window.location.href = "VIEW_customerIndex.php";
        window.location.replace = ("VIEW_customerIndex.php");
    }

    var txtjeff;

    function onClick_Test() {
        addToList("Test");
    }

    function addToList(txtTest) {
        listID = document.getElementById('listTest'),
        listElement = document.createElement("LI"),
        listInput = document.createTextNode(txtTest);

        listElement.appendChild(listInput);
        listID.appendChild(listElement);
    }
</script>