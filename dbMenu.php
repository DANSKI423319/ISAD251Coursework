<script type="text/javascript" src="menuFunctions.js"></script>

<?php
include_once 'assets/header.php';
include_once 'dbConnection.php';

$tableName = 'trMenu';

$tblOutput = getAll($tableName);

echo
    '<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>Menu</th>
                <th>About</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>';

if ($tblOutput) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblOutput[0]);
    $tblColID = $tblCols;

    foreach ($tblOutput as $tblRow) {
        echo
            '<tr>
                <td>' . $tblRow['itemName'] . '</td>
                <td>' . $tblRow['itemDesc'] . '</td> .
                <td>£' . $tblRow['itemPrice'] . '</td>
                <td>' /* ADD VALUE OR ID TO EACH ROW, TO EXTRACT VALUES */
        ?>
        <input class="btn-success" id="btnAdd" type="button" value="+" onclick="onClickAdd()">
        <input class="btn-danger" id="btnSub" type="button" value="-" onclick="onClickSub()">
<?php
        '</tr>';
    }
}

echo '</tr></tbody></table>';

echo '<pre>';
print_r($tblOutput);
echo '</pre>';
