<?php
$databank = new databank();
$tblCommand = $databank->getOrderNo();

if ($tblCommand) {
    $tblCols = empty($tblResults) ? array() : array_keys($tblCommand[0]);
    $tblColID = $tblCols;

    foreach ($tblCommand as $tblRow) { // Gets most recent ID.
        echo $tblRow['orderID'] . ' ';
    }
}
