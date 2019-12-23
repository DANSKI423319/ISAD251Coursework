<?php
include_once 'assets/header.php';
include_once 'MODEL_dbConnection.php';
?>


<html>

<head>
    <title>The Cozy Team Room</title>
</head>

<body>

    <div class="container text-center">
        <h2>The Cozy Tea Room: Admin Menu</h2>
    </div>

    <div class="col-sm-12 text-center">
        View and ammend the menu.
    </div>

    <div class="container text-center">
        <div>
            <?php require 'CONTROLLER_adminMenuLoader.php' ?>
        </div>
    </div>

    <div class="text-center">
        <b> EDIT MENU ITEM </b>

        <form class="form-inline" action="" method="post">
            <div class="col-sm-12">
                <input type="text" id="txtEditName" class="w3-input" disabled="true" placeholder=" Name...">
                <input type="text" id="txtEditDesc" class="w3-input" disabled="true" placeholder=" Description..." style="width: 20%">
                <input type="text" id="txtEditPrice" class="w3-input" disabled="true" placeholder=" Price...">
                <input type="button" id="btnUnlockFields" class="btn btn-warning" disabled="true" value="Unlock Fields" onclick="onClick_UnlockFields()">
                <input type="submit" id="btnAcceptChanges" class="btn btn-primary" value="Confirm Changes" onclick="onClick_AcceptChanges()">
            </div>
        </form>

        <b> ADD MENU ITEM </b>
        <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="col-sm-12">
                <input type="text" name="itemID" id="txtAddItemID" class="w3-input" value="<?php $newItemID = $tblRow['itemID'];
                                                                                            $newItemID = $newItemID + 1;
                                                                                            echo $newItemID; ?>" disabled>
                <input type="text" name="itemName" id="txtAddItem" class="w3-input" placeholder=" Name..." required>
                <input type="text" name="itemDesc" id="txtAddDesc" class="w3-input" placeholder=" Description..." style="width: 20%" required>
                <input type="text" name="itemPrice" id="txtAddPrice" class="w3-input" placeholder=" Price..." required>
                <input type="text" name="itemStock" id="txtAddStock" class="w3-input" placeholder=" Stock..." required>
                <input type="submit" name="ADDITEM" id="btnAddItem" class="btn btn-primary" value="Add Item to Menu" required>
            </div>
        </form>

        </br></br><input type="button" class="btn btn-danger" value="Return to Admin Portal" onclick="onClick_AdminMenu()">

    </div>

    <?php
    if (isset($_POST['ADDITEM'])) {
        $itemID =  $_POST['itemID'];
        $itemName = $_POST['postcode'];
        $email = $_POST['email'];
    }

    ?>

</body>

</html>

<script language="javaScript">
    function onClick_AdminMenu() {
        window.location.href = "VIEW_adminHome.php";
        window.location.replace = ("VIEW_adminHome.php");
    }

    function onClick_UnlockFields() {
        txtEditName.disabled = false;
        txtEditDesc.disabled = false;
        txtEditPrice.disabled = false;
    }

    function onClick_AcceptChanges() {
        btnUnlockFields.disabled = true;
    }
</script>