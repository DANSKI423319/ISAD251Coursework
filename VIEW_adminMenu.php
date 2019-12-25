<?php
include 'assets/header.php';
include 'MODEL_dbConnection.php';

if (isset($_POST['insertData'])) {
    include_once 'CONTROLLER_adminAddItem.php';
}

if (isset($_POST['changeData'])) {
    include_once 'CONTROLLER_adminEditItem.php';
}
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
            <form>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Menu Item</th>
                            <th>About</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php require 'CONTROLLER_adminMenu.php' ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    </div>

    <div class="text-center">
        <b> EDIT MENU ITEM </b>
        <form action="VIEW_adminMenu.php" method="post">
            <input type="text" name="editItemID" id="txtEditID" class="w3-input" disabled="true" placeholder="Item ID... ">
            <input type="text" name="editItemName" id="txtEditName" class="w3-input" disabled="true" placeholder="Item Name...">
            <input type="text" name="editItemDesc" id="txtEditDesc" class="w3-input" disabled="true" placeholder="Item Description..." style="width: 20%">
            <input type="text" name="editItemPrice" id="txtEditPrice" class="w3-input" disabled="true" placeholder="Item Price...">
            <input type="button" id="btnUnlockFields" class="btn btn-warning" disabled="true" value="Unlock Fields" onclick="onClick_UnlockFields()">
            <input type="submit" name="changeData" id="btnAcceptChanges" class="btn btn-primary" value="Confirm Changes" onclick="onClick_AcceptChanges()">
        </form>

        <b> ADD MENU ITEM </b>
        <form action="VIEW_adminMenu.php" method="post">
            <label for="txtAddItemID">New Item ID</label>
            <input type="number" name="addItemID" id="txtAddItemID" class="w3-input" value="<?php $newItemID = $tblRow['itemID'];
                                                                                            $newItemID = $newItemID + 1;
                                                                                            echo $newItemID; ?>">
            <input type="text" name="addItemName" id="txtAddItem" class="w3-input" placeholder=" Name..." required>
            <input type="text" name="addItemDesc" id="txtAddDesc" class="w3-input" placeholder=" Description..." style="width: 20%" required>
            <input type="text" name="addItemPrice" id="txtAddPrice" class="w3-input" placeholder=" Price..." required>
            <input type="text" name="addItemStock" id="txtAddStock" class="w3-input" placeholder=" Stock..." required>
            <input type="submit" name="insertData" id="btnAddItem" class="btn btn-primary" value="Add Item to Menu" required>
        </form>

        <input type="button" class="btn btn-danger" value="Return to Admin Portal" onclick="onClick_AdminMenu()">

    </div>

</body>

</html>

<script language="javaScript">
    function onClick_AdminMenu() {
        window.location.href = "VIEW_adminIndex.php";
        window.location.replace = ("VIEW_adminIndex.php");
    }

    function onClick_UnlockFields() {
        txtEditID.disabled = false;
        txtEditName.disabled = false;
        txtEditDesc.disabled = false;
        txtEditPrice.disabled = false;
    }
</script>