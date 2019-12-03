<?php

/* 
    NEXT TO DO:
    Print button outputs to a table instead of a basket box.
    Last worked on: 03/12/2019. 
    Hours spent: 3.5.
*/ 

include_once 'dbConnection.php';

?>

<script language="javascript">
    var cappucinoNum = 0;
    var cappucinoPrice = 0;

    var latteNum = 0;
    var lattePrice = 0;

    var flatWhiteNum = 0;
    var flatWhitePrice = 0;

    var teaNum = 0;
    var teaPrice = 0;

    var hotChocNum = 0;
    var hotChocPrice = 0;

    /*
    // Cappicuno add button.
    function onClick_AddItem_1() {
        if (itemID1.innerText == 1) { // If button ID is equal to ID number...
            var cappucinoString = ""; // Empty string variable,
            cappucinoNum = cappucinoNum + 1; // Add one to amount integer variable,
            cappucinoPrice = cappucinoPrice + 2.75; // Add price to integer variable,
            cappucinoString = "\n You have added " + cappucinoNum + // Create string with all variables,
                " x Cappucino, for " + cappucinoPrice + ".";
            txtBasket.innerText = txtBasket.innerText + cappucinoString; // Print created string.
        }
    }
    */

    
    function onClick_AddItem_1() {
        if (itemID1.innerText == 1) {
            basketItemID.innerText = "<?php echo $tblOutput[0]['itemID']; ?>";
            basketNameID.innerText = "<?php echo $tblOutput[0]['itemName']; ?>";
            basketQtyID.innerText = cappucinoNum + 1;
            basketPriceID.innerText = cappucinoPrice + 2.75;
        }
    }
    

    /*
    function onClick_AddItem_1() {
        if (itemID1.innerText == 1) {
            basketItemID.innerText = "jeff";
            basketNameID.innerText = "jeff";
            basketQtyID.innerText = "1";
            basketPriceID.innerText = "2.75";
        }
    }
    */


    // Cappicuno remove button.
    function onClick_SubItem_1() {
        if (itemID1.innerText == 1 && cappucinoNum <= 1) { // If button ID is equal to ID number AND amount integer variable = 1 or less...
            cappucinoString = ""; // Empty string variable.
            alert("All Cappucinos removed.");
        } else if (cappucinoNum > 0) {
            cappucinoNum = cappucinoNum - 1;
            cappucinoPrice = cappucinoPrice - 2.75;
            var cappucinoString = "\n You have added " + cappucinoNum +
                " x Cappucino, for " + cappucinoPrice + ".";
            txtBasket.innerText = txtBasket.innerText + cappucinoString;
        }
    }

    // Latte add button.
    function onClick_AddItem_2() {
        if (itemID2.innerText == 2) {
            var latteString = "";
            latteNum = latteNum + 1;
            lattePrice = lattePrice + 2.75;
            latteString = "\n You have added " + latteNum +
                " x Latte, for " + lattePrice + ".";
            txtBasket.innerText = txtBasket.innerText + latteString;
        }
    }

    // Latte remove button.
    function onClick_SubItem_2() {
        if (itemID2.innerText == 2 && latteNum <= 1) {
            txtBasket.innerText = "";
            alert("All Lattes removed.");
        } else if (latteNum > 0) {
            latteNum = latteNum - 1;
            lattePrice = lattePrice - 2.75;
            var latteString = "\n You have added " + latteNum +
                " x Latte, for " + lattePrice + ".";
            txtBasket.innerText = txtBasket.innerText + latteString;
        }
    }

</script>