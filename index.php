<?php 
    require_once 'CSS_StyleSheet.php'; 
?>

<html>    
    
    <head>
        <title>
            The Cozy Tea Room
        </title>    
    </head>
    
    
    <body class="body">
        
        <h2 class="h2">
            The Cozy Tea Room
        </h2> 
        
        <form action="menu.php" class="formLayout" method="GET">
            <b>Table Number:</b><br/>
            <div>
		<input type="text" name="tableNumber" placeholder="###" class="tableNum" maxlength="3" required>
		<input type="submit" value="Enter new order" class="btnEnter">
            </div>
            <div>
		<input type="button" value="Login" class="btnLogin">
            </div>
        </form>
    
    </body>

</html>

