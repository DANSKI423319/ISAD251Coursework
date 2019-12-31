<?php
include 'assets/header.php';
include 'MODEL_dbConnection.php';

$databank = new databank();

// Function to begin addition of data.
if (isset($_POST['btnAddData'])) {
    $itemID = $_POST['addItemID'];
    $itemName = $_POST['addItemName'];
    $itemDesc = $_POST['addItemDesc'];
    $itemPrice = $_POST['addItemPrice'];
    $itemStock = $_POST['addItemStock'];
    $newMenuItem = new menuItem($itemID, $itemName, $itemDesc, $itemPrice, $itemStock);

    $databank->adminAddItem($newMenuItem);
}

// Function to begin edit of data.
if (isset($_POST['btnEditData'])) {
    $itemID = $_POST['editItemID'];
    $itemName = $_POST['editItemName'];
    $itemDesc = $_POST['editItemDesc'];
    $itemPrice = $_POST['editItemPrice'];
    $itemStock = $_POST['editItemStock'];
    $editedMenuItem = new menuItem($itemID, $itemName, $itemDesc, $itemPrice, $itemStock);

    $databank->adminEditItem($editedMenuItem);
}

// Function to begin deletion of data.
if (isset($_POST['btnDeleteData'])) {
    $itemID = $_POST['remItemID'];

    $databank->adminDeleteItem($itemID);
}
?>

<html>

<head>
    <title>
        The Cozy Team Room
    </title>
</head>

<!-- Admin Menu view, contains multiple forms for editing, adding and removing from the menu. -->
<body>

    <div class="container text-center">
        <h2>The Cozy Tea Room: Admin Menu</h2>
    </div>

    <div class="col-sm-12 text-center">
        View and ammend the menu.
    </div>

    <div class="container text-center">
        <div>
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
        </div>
    </div>
    </div>

    <div class="text-center">
        <b> ADD MENU ITEM </b> <!-- Add item form. -->
        <form id="formAdd" action="VIEW_adminMenu.php" method="post">
            <label for="txtAddItemID">New Item ID</label>
            <input type="number" name="addItemID" id="txtAddItemID" class="w3-input" value="<?php $newItemID = $tblRow['itemID'];
                                                                                            $newItemID = $newItemID + 1;
                                                                                            echo $newItemID; ?>" readonly>
            <input type="text" name="addItemName" id="txtAddItem" class="w3-input" placeholder="Name..." required>
            <input type="text" name="addItemDesc" id="txtAddDesc" class="w3-input" placeholder="Description..." style="width: 20%" required>
            <input type="text" name="addItemPrice" id="txtAddPrice" class="w3-input" placeholder="Price..." required>
            <input type="text" name="addItemStock" id="txtAddStock" class="w3-input" placeholder="Stock..." required>
            <input type="submit" name="btnAddData" class="btn btn-primary" value="Add Item to Menu" required>
        </form>

        <b> EDIT MENU ITEM </b> <!-- Edit item form. -->
        <form id="formEdit" action="VIEW_adminMenu.php" method="post">
            <input type="text" name="editItemID" id="txtEditID" class="w3-input" disabled="true" placeholder="Item ID... " readonly>
            <input type="text" name="editItemName" id="txtEditName" class="w3-input" disabled="true" placeholder="Item Name...">
            <input type="text" name="editItemDesc" id="txtEditDesc" class="w3-input" disabled="true" placeholder="Item Description..." style="width: 20%">
            <input type="text" name="editItemPrice" id="txtEditPrice" class="w3-input" disabled="true" placeholder="Item Price...">
            <input type="text" name="editItemStock" id="txtEditStock" class="w3-input" disabled="true" placeholder="Stock...">
            <input type="button" id="btnUnlockFields" class="btn btn-warning" disabled="true" value="Unlock Fields" onclick="onClick_UnlockFields()">
            <input type="submit" name="btnEditData" id="btnEditData" class="btn btn-primary" value="Confirm Changes" onclick="onClick_AcceptChanges()">
        </form>

        <b> REMOVE MENU ITEM </b> <!-- Remove item form. -->
        <form id="formRemove" action="VIEW_adminMenu.php" method="post">
            <input type="number" name="remItemID" id="txtRemID" class="w3-input" placeholder="ID..." readonly>
            <input type="submit" name="btnDeleteData" id="btnDeleteData" class="btn btn-primary" value="Confirm Removal">
        </form>

        <input type="button" class="btn btn-danger" value="Return to Admin Portal" onclick="onClick_AdminMenu()">

    </div>

</body>

</html>

<script>
    function onClick_AdminMenu() {
        window.location.href = "VIEW_adminIndex.php";
        window.location.replace = ("VIEW_adminIndex.php");
    }

    function onClick_UnlockFields() {
        txtEditID.disabled = false;
        txtEditName.disabled = false;
        txtEditDesc.disabled = false;
        txtEditPrice.disabled = false;
        txtEditStock.disabled = false;
    }
</script>