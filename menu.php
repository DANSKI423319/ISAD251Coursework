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
                <table class="menuTable">
                    <tbody>
                        <tr align="center">
                            <td>
                                <img src="img/italianEspresso.jpg" alt="Italian Espresso" class="img"/><br>
                                <input type="button" value="+" class="btnAdd">
                                <input type="button" value="-" class="btnRemove">
                            </td>                 
                            <td>
                                <img src="img/latte.jpg" alt="Latte" class="img"/><br>
                                <input type="button" value="+" class="btnAdd">
                                <input type="button" value="-" class="btnRemove">
                            </td>
                            <td>
                                <img src="img/flatWhite.jpg" alt="Flat White" class="img"/><br>
                                <input type="button" value="+" class="btnAdd">
                                <input type="button" value="-" class="btnRemove">                                
                            </td>
                            <td>
                                <img src="img/teaCup.jpg" alt="Tea" class="img"/><br>
                                <input type="button" value="+" class="btnAdd">
                                <input type="button" value="-" class="btnRemove">
                            </td>
                            <td>
                                <img src="img/hotChocolate.jpg" alt="Hot Chocolate" class="img"/><br>
                                <input type="button" value="+" class="btnAdd">
                                <input type="button" value="-" class="btnRemove">
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <img src="img/lemonCake.jpg" alt="Lemon Cake" class="img"/><br>
                                <input type="button" value="+" class="btnAdd">
                                <input type="button" value="-" class="btnRemove">
                            </td>
                            <td>
                                <img src="img/chocolateCake.jpg" alt="Chocolate Cake" class="img"/><br>
                                <input type="button" value="+" class="btnAdd">
                                <input type="button" value="-" class="btnRemove">
                            </td>
                            <td>
                                <img src="img/shortbread.jpg" alt="Shortbread" class="img"/><br>
                                <input type="button" value="+" class="btnAdd">
                                <input type="button" value="-" class="btnRemove">
                            </td>
                            <td>
                                <img src="img/scone.jpg" alt="Scone" class="img"/><br>
                                <input type="button" value="+" class="btnAdd">
                                <input type="button" value="-" class="btnRemove">
                            </td>
                            <td>
                                <img src="img/doughnut.jpg" alt="Doughnut" class="img"/><br>
                                <input type="button" value="+" class="btnAdd">
                                <input type="button" value="-" class="btnRemove">
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </form>
        
    </body>
    
</html>

