<?php

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

    // Cappicuno add button.
    function onClick_AddItem_1() {
        if (itemID1.innerText == 1) {
            cappucinoNum = cappucinoNum + 1;
            cappucinoPrice = cappucinoPrice + 2.75;
            var cappucinoString = "You have added " + cappucinoNum +
                " x Cappucino, for " + cappucinoPrice + ".";
            txtBasket.innerText = cappucinoString;
        }
    }

    // Cappicuno remove button.
    function onClick_SubItem_1() {
        if (itemID1.innerText == 1 && cappucinoNum <= 1) {
            txtBasket.innerText = "";
            alert("All Cappucinos removed.");
        } else if (cappucinoNum > 0) {
            cappucinoNum = cappucinoNum - 1;
            cappucinoPrice = cappucinoPrice - 2.75;
            var cappucinoString = "You have added " + cappucinoNum +
                " x Cappucino, for " + cappucinoPrice + ".";
            txtBasket.innerText = cappucinoString;
        }
    }

    // Latte add button.
    function onClick_AddItem_2() {
        if (itemID2.innerText == 2) {
            latteNum = latteNum + 1;
            lattePrice = lattePrice + 2.75;
            var latteString = "You have added " + latteNum +
                " x Latte, for " + lattePrice + ".";
            txtBasket.innerText = latteString;
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
            var latteString = "You have added " + latteNum +
                " x Latte, for " + lattePrice + ".";
            txtBasket.innerText = latteString;
        }
    }

</script>