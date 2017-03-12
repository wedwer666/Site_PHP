<?php
  require("head.php");
?>

<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

	
	<div style="clear:both;"></div>
	
<button class="button green">
	<div class="title">Adauga in cos</div>
	<div class="price">0 lei</div>
</button>
  
<button class="button green">
	<div class="title">Adauga in cos</div>
	<div class="price">0 lei</div>
</button>

<button class="button green">
	<div class="title">Adauga in cos</div>
	<div class="price">0 lei</div>
</button>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="kin@kinskards.com">

    <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
    <input type="hidden" name="cmd" value="_card">
    <input type="hidden" name="Adauga" value="1">

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="Birthday Card - Cake and Candle">
    <input type="hidden" name="amount" value="3.95">
    <input type="hidden" name="currency_code" value="USD">

    <!-- Continue shopping on the web page for birthday cards -->
    <input type="hidden" name="shopping_url" value="http://www.kinskards.com/birthday_cards">

    <!-- Display the payment button. -->
    <input type="image" name="submit"
        src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
        alt="Adauga in Cos">
    <img alt="" width="1" height="1"
        src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>

</article>

<?php
  require("footer.php");
?>