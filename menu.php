<html>

<head>
    <title>The Cozy Tea Room</title>
    <?php 
    include_once 'assets/header.php';
    include_once 'dbConnection.php';

    $tableName = 'trUsers'

    ?>
</head>

<body>

    <div class="container text-center">
        <h2>The Cozy Tea Room Menu</h2>
    </div>

    <div class="col-sm-12 text-center">
        <?php echo "<b>Your order is assigned to table number " . $_GET["tableNumber"] . ".</b>"; ?>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-sm-4 text-center">
                <h3>placeholder</h3>
                <p>placeholder</p>
                <p>placeholder</p>
            </div>

            <div class="col-sm-4 text-center">
                <p>
                <?php
                    $tblOutput = getAll($tableName);
                    if ($tblOutput)
                    {
                        $tblCols = empty($tableResults) ? array() : array_keys($tblOutput[0]);
                        $tblColID = $tblCols[0];

                        $tblString = '<table border="1"><tr>';
                        $tblInputString = '';
                        $tblInsertString = '';
                        foreach ($tblCols as $tblCol)
                        {
                            $tblString .= '<th>' . $tblCol . '</th>';
                            $tblInputString .= '<th>' . $tblCol . '</th>';
                            $tblInsertString .= '<td><input type=\'text\' name\'' . $tblCol . '\'/></td>';
                        }
                        foreach ($tblOutput as $tblRow)
                        {
                            echo '<tr></br>';

                            foreach ($tblRow as $tblCell)
                            {
                                echo '<td>Row1:' . $tblCell . '</td></br>';
                            }
                        }
                        echo '</table>';
                    }
                ?>
                </
            </div>

            <div class="col-sm-4 text-center">
                <h3>placeholder</h3>
                <p>placeholder</p>
                <p>placeholder</p>
            </div>

        </div>
    </div>

</body>

</html>