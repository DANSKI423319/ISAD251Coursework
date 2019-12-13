<?php

?>

<script language="javascript">

    // var drinkPriceArr = new Array(<?php // $tblOutput[0]['itemPrice'] ?>);
    var foodPriceArr = new Array(2.99, 3.29, 1.99, 1.99, 2.99);
    var drinkPriceArr = new Array(2.79, 2.79, 2.79, 2.49, 2.49);
    var defPrice = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

    // Drink Variables.
    var cappucinoNum = 0;
    var latteNum = 0;
    var flatWhiteNum = 0;
    var teaNum = 0;
    var hotChocNum = 0;

    // Food Variables.
    var lemCakeNum = 0;
    var chocCakeNum = 0;
    var shortNum = 0;
    var sconeNum = 0;
    var doughNum = 0;

    /*
        function onClick_AddItem_1() {
            if (itemID1.innerText == 1) {
              basketItemID_1.innerText = <?php // $tblOutput[0]['itemID'] ?>
              basketNameID_1.innerText = <?php // $tblOutput[0]['itemName'] ?>
              basketQtyID_1.innerText = cappucinoNum + 1;
              defPrice[0] = defPrice[0] + drinkPriceArr[0];
              var newPrice = 0;
              newPrice = defPrice[0].toFixed(2);
              basketQtyID_2.innerText = cappucinoNum;
              basketPriceID_2.innerText = "£." + newPrice;
            }
        }
    */

    /*
    // ADD TO BASKET FUNCTIONS.
    // Add Cappucino.
    function onClick_AddItem_1() {
        if (itemID1.innerText == 1) {                           // if ItemID is equal to value 1...
            basketItemID_1.innerText = itemID1.innerText;       // Basket item ID = 1 too,
            basketNameID_1.innerText = "Cappucino";             // Basket itemName = Cappucino,
            cappucinoNum = cappucinoNum + 1;                    // Add one to the quantity,
            defPrice[0] = drinkPriceArr[0] * cappucinoNum;      // Price = price from array * quantity of items,
            var newPrice = 0;                                   // Initialise new price,
            newPrice = defPrice[0].toFixed(2);                  // New price is corrected to two decimal points,
            basketQtyID_1.innerText = cappucinoNum;             // Quantity text box equals the quantity variable,
            basketPriceID_1.innerText = "£." + newPrice;        // Price box equals the newPrice varaible.
        }
    }
    

    // Add Latte.
    function onClick_AddItem_2() {
        if (itemID2.innerText == 2) {
            basketItemID_2.innerText = itemID2.innerText;
            basketNameID_2.innerText = "Latte";
            latteNum = latteNum + 1;
            defPrice[1] = defPrice[1] + drinkPriceArr[1];
            var newPrice = 0;
            newPrice = defPrice[1].toFixed(2);
            basketQtyID_2.innerText = latteNum;
            basketPriceID_2.innerText = "£." + newPrice;
        }
    }

    // Add Flat White.
    function onClick_AddItem_3() {
        if (itemID3.innerText == 3) {
            basketItemID_3.innerText = itemID3.innerText;
            basketNameID_3.innerText = "Flat White";
            flatWhiteNum = flatWhiteNum + 1;
            defPrice[2] = defPrice[2] + drinkPriceArr[2];
            var newPrice = 0;
            newPrice = defPrice[2].toFixed(2);
            basketQtyID_3.innerText = flatWhiteNum;
            basketPriceID_3.innerText = "£." + newPrice;
        }
    }

    // Add Tea.
    function onClick_AddItem_4() {
        if (itemID4.innerText == 4) {
            basketItemID_4.innerText = itemID4.innerText;
            basketNameID_4.innerText = "Tea";
            teaNum = teaNum + 1;
            defPrice[3] = defPrice[3] + drinkPriceArr[3];
            var newPrice = 0;
            newPrice = defPrice[3].toFixed(2);
            basketQtyID_4.innerText = teaNum;
            basketPriceID_4.innerText = "£." + newPrice;
        }
    }

    // Add Hot Chocolate.
    function onClick_AddItem_5() {
        if (itemID5.innerText == 5) {
            basketItemID_5.innerText = itemID5.innerText;
            basketNameID_5.innerText = "Hot Chocolate";
            hotChocNum = hotChocNum + 1;
            defPrice[4] = defPrice[4] + drinkPriceArr[4];
            var newPrice = 0;
            newPrice = defPrice[4].toFixed(2);
            basketQtyID_5.innerText = hotChocNum;
            basketPriceID_5.innerText = "£." + newPrice;
        }
    }

    // Add Lemon sponge cake.
    function onClick_AddItem_6() {
        if (itemID6.innerText == 6) {
            basketItemID_6.innerText = itemID6.innerText;
            basketNameID_6.innerText = "Lemon Sponge Cake";
            lemCakeNum = lemCakeNum + 1;
            defPrice[5] = defPrice[5] + foodPriceArr[0];
            var newPrice = 0;
            newPrice = defPrice[5].toFixed(2);
            basketQtyID_6.innerText = lemCakeNum;
            basketPriceID_6.innerText = "£." + newPrice;
        }
    }

    // Add Chocolate cake.
    function onClick_AddItem_7() {
        if (itemID7.innerText == 7) {
            basketItemID_7.innerText = itemID7.innerText;
            basketNameID_7.innerText = "Chocolate Cake";
            chocCakeNum = chocCakeNum + 1;
            defPrice[6] = defPrice[6] + foodPriceArr[1];
            var newPrice = 0;
            newPrice = defPrice[6].toFixed(2);
            basketQtyID_7.innerText = chocCakeNum;
            basketPriceID_7.innerText = "£." + newPrice;
        }
    }     

    // Add Shortbread.
    function onClick_AddItem_8() {
        if (itemID8.innerText == 8) {
            basketItemID_8.innerText = itemID8.innerText;
            basketNameID_8.innerText = "Shortbread";
            shortNum = shortNum + 1;
            defPrice[7] = defPrice[7] + foodPriceArr[2];
            var newPrice = 0;
            newPrice = defPrice[7].toFixed(2);            
            basketQtyID_8.innerText = shortNum;
            basketPriceID_8.innerText = "£." + newPrice;
        }
    }

    // Add Scone.
    function onClick_AddItem_9() {
        if (itemID9.innerText == 9) {
            basketItemID_9.innerText = itemID9.innerText;
            basketNameID_9.innerText = "Scone";
            sconeNum = sconeNum + 1;
            defPrice[8] = defPrice[8] + foodPriceArr[3];
            var newPrice = 0;
            newPrice = defPrice[8].toFixed(2);  
            basketQtyID_9.innerText = sconeNum;
            basketPriceID_9.innerText = "£." + newPrice;
        }
    }   

    // Add Doughnut.
    function onClick_AddItem_10() {
        if (itemID10.innerText == 10) {
            basketItemID_10.innerText = itemID10.innerText;
            basketNameID_10.innerText = "Doughnut";
            doughNum = doughNum + 1;
            defPrice[9] = defPrice[9] + foodPriceArr[4];
            var newPrice = 0;
            newPrice = defPrice[9].toFixed(2);              
            basketQtyID_10.innerText = doughNum;
            basketPriceID_10.innerText = "£." + newPrice;
        }
    }

    // REMOVE FROM BASKET FUNCTIONS.
    // Remove Cappucino.
    function onClick_SubItem_1() {
        if (basketQtyID_1.innerText <= 1) {
            alert("You have removed a Cappucino from your basket.")
            basketItemID_1.innerText = "";
            basketNameID_1.innerText = "";
            basketQtyID_1.innerText = "";
            basketPriceID_1.innerText = "";
        } else if (itemID1.innerText == 1) {
            cappucinoNum = cappucinoNum - 1;
            defPrice[0] = drinkPriceArr[0] * cappucinoNum;
            var newPrice = 0;
            newPrice = defPrice[0].toFixed(2);
            basketQtyID_1.innerText = cappucinoNum;
            basketPriceID_1.innerText = "£." + newPrice;
        }

    }

    // Remove Latte.
    function onClick_SubItem_2() {
        if (basketQtyID_2.innerText <= 1) {
            alert("You have removed a Latte from your basket.")
            basketItemID_2.innerText = "";
            basketNameID_2.innerText = "";
            basketQtyID_2.innerText = "";
            basketPriceID_2.innerText = "";
        } else if (itemID2.innerText == 2) {
            latteNum = latteNum - 1;
            defPrice[1] = drinkPriceArr[1] * latteNum;
            var newPrice = 0;
            newPrice = defPrice[1].toFixed(2);
            basketQtyID_2.innerText = latteNum;
            basketPriceID_2.innerText = "£." + newPrice;
        }
    }

    // Remove Flat White.
    function onClick_SubItem_3() {
        if (basketQtyID_3.innerText <= 1) {
            alert("You have removed a Flat White from your basket.")
            basketItemID_3.innerText = "";
            basketNameID_3.innerText = "";
            basketQtyID_3.innerText = "";
            basketPriceID_3.innerText = "";
        } else if (itemID3.innerText == 3) {
            flatWhiteNum = flatWhiteNum - 1;
            defPrice[2] = drinkPriceArr[2] * flatWhiteNum;
            var newPrice = 0;
            newPrice = defPrice[2].toFixed(2);
            basketQtyID_3.innerText = flatWhiteNum;
            basketPriceID_3.innerText = "£." + newPrice;
        }
    }

    // Remove Tea.
    function onClick_SubItem_4() {
        if (basketQtyID_4.innerText <= 1) {
            alert("You have removed Tea from your basket.")
            basketItemID_4.innerText = "";
            basketNameID_4.innerText = "";
            basketQtyID_4.innerText = "";
            basketPriceID_4.innerText = "";
        } else if (itemID4.innerText == 4) {
            teaNum = teaNum - 1;
            defPrice[3] = drinkPriceArr[3] * teaNum;
            var newPrice = 0;
            newPrice = defPrice[3].toFixed(2);
            basketQtyID_4.innerText = teaNum;
            basketPriceID_4.innerText = "£." + newPrice;
        }
    }

    // Remove Hot Chocolate.
    function onClick_SubItem_5() {
        if (basketQtyID_5.innerText <= 1) {
            alert("You have removed Hot Chocolate from your basket.")
            basketItemID_5.innerText = "";
            basketNameID_5.innerText = "";
            basketQtyID_5.innerText = "";
            basketPriceID_5.innerText = "";
        } else if (itemID5.innerText == 5) {
            hotChocNum = hotChocNum - 1;
            defPrice[4] = drinkPriceArr[4] * hotChocNum;
            var newPrice = 0;
            newPrice = defPrice[4].toFixed(2);
            basketQtyID_5.innerText = hotChocNum;
            basketPriceID_5.innerText = "£." + newPrice;
        }
    }

    // Remove Lemon Sponge Cake.
    function onClick_SubItem_6() {
        if (basketQtyID_6.innerText <= 1) {
            alert("You have removed Lemon Sponge Cake from your basket.")
            basketItemID_6.innerText = "";
            basketNameID_6.innerText = "";
            basketQtyID_6.innerText = "";
            basketPriceID_6.innerText = "";
        } else if (itemID6.innerText == 6) {
            lemCakeNum = lemCakeNum - 1;
            defPrice[5] = foodPriceArr[0] * lemCakeNum;
            var newPrice = 0;
            newPrice = defPrice[5].toFixed(2);
            basketQtyID_6.innerText = lemCakeNum;
            basketPriceID_6.innerText = "£." + newPrice;
        }
    }

    // Remove Chocolate Cake.
    function onClick_SubItem_7() {
        if (basketQtyID_7.innerText <= 1) {
            alert("You have removed Chocolate Cake from your basket.")
            basketItemID_7.innerText = "";
            basketNameID_7.innerText = "";
            basketQtyID_7.innerText = "";
            basketPriceID_7.innerText = "";
        } else if (itemID7.innerText == 7) {
            chocCakeNum = ChocCakeNum - 1;
            defPrice[6] = foodPriceArr[1] * ChocCakeNum;
            var newPrice = 0;
            newPrice = defPrice[6].toFixed(2);
            basketQtyID_7.innerText = lemCakeNum;
            basketPriceID_7.innerText = "£." + newPrice;
        }
    }

    // Remove Shortbread.
    function onClick_SubItem_8() {
        if (basketQtyID_8.innerText <= 1) {
            alert("You have removed Shortbread from your basket.")
            basketItemID_8.innerText = "";
            basketNameID_8.innerText = "";
            basketQtyID_8.innerText = "";
            basketPriceID_8.innerText = "";
        } else if (itemID8.innerText == 8) {
            shortNum = shortNum - 1;
            defPrice[7] = foodPriceArr[2] * shortNum;
            var newPrice = 0;
            newPrice = defPrice[7].toFixed(2);
            basketQtyID_8.innerText = shortNum;
            basketPriceID_8.innerText = "£." + newPrice;
        }
    }

    // Remove Scone.
    function onClick_SubItem_9() {
        if (basketQtyID_9.innerText <= 1) {
            alert("You have removed Scones from your basket.")
            basketItemID_9.innerText = "";
            basketNameID_9.innerText = "";
            basketQtyID_9.innerText = "";
            basketPriceID_9.innerText = "";
        } else if (itemID9.innerText == 9) {
            sconeNum = sconeNum - 1;
            defPrice[8] = foodPriceArr[3] * sconeNum;
            var newPrice = 0;
            newPrice = defPrice[8].toFixed(2);
            basketQtyID_8.innerText = sconeNum;
            basketPriceID_8.innerText = "£." + newPrice;
        }
    }

    // Remove Doughnut.
    function onClick_SubItem_10() {
        if (basketQtyID_10.innerText <= 1) {
            alert("You have removed Doughnuts from your basket.")
            basketItemID_10.innerText = "";
            basketNameID_10.innerText = "";
            basketQtyID_10.innerText = "";
            basketPriceID_10.innerText = "";
        } else if (itemID10.innerText == 10) {
            doughNum = doughNum - 1;
            defPrice[9] = foodPriceArr[4] * sconeNum;
            var newPrice = 0;
            newPrice = defPrice[9].toFixed(2);
            basketQtyID_10.innerText = doughNum;
            basketPriceID_10.innerText = "£." + newPrice;
        }
    }
    */

    // CODE NOT IN USE. CODE NOT IN USE. CODE NOT IN USE. //
</script>