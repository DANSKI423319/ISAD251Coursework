<?php
    require_once 'CSS_StyleSheet.php'
?>

<html>
    <body class="body">
        
        <h2 class="h2">
            The Cozy Tea Room Menu
        </h2> 
        
        <?php
            echo "<h3>Your order is assigned to table number ".$_GET["tableNumber"].".<h3>";
        ?>
        
        <form class="formLayout">
            <div>
                <table border="1">
                    <thead>
                        <tr>
                            <th>
                                <b>Tea / £3.30</b><br>
                                <img src="img/tea.jpg" width="200"><br>
                                <input type="button" value="+" class="btnAdd">
                                <input type="button" value="-" class="btnRemove">
                            </th>
                            <th><img src="img/tea.jpg" width="200"></th>
                            <th><img src="img/tea.jpg" width="200"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="img/tea.jpg" width="200"></td>
                            <td><img src="img/tea.jpg" width="200"></td>
                            <td><img src="img/tea.jpg" width="200"></td>
                        </tr>
                        <tr>
                            <td><img src="img/tea.jpg" width="200"></td>
                            <td><img src="img/tea.jpg" width="200"></td>
                            <td><img src="img/tea.jpg" width="200"></td>
                        </tr>
                        <tr>
                            <td><img src="img/tea.jpg" width="200"></td>
                            <td><img src="img/tea.jpg" width="200"></td>
                            <td><img src="img/tea.jpg" width="200"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </form>
        
    </body>
    
</html>

