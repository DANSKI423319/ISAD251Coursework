<?php
include_once 'assets/header.php';
include_once 'dbConnection.php';
include_once 'menuFunctions.php';

$tableName = 'trMenu';
$TEST = 'Tea';

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
                <td>'
        ?>
        <input class="btn-success" id="btnAdd" type="button" value="+" onclick="onClickAdd()">
        <input class="btn-danger" id="btnSub" type="button" value="-" onclick="onClickSub()">
<?php
        '</tr>';
    }
}

echo '</tr></tbody></table>            
<div class="panel panel-default">
    <div class="panel-heading"><b>Basket</b></div>
    <div class="panel=body">Basket Content</div>
</div>';

echo '<pre>';
print_r($tblOutput);
echo '</pre>';
