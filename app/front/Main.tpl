<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		setTimeout(function() {

			$('.load').fadeOut(500);

		}, 1700);
		


	});
</script>


<title>Project</title>
</head>

<body>
<div class = "load">

<center><img src="images/load.gif" alt=""></center>	
<center><h2>Please wait! im load</h2></center>

</div>

<div id = "top_line"></div>	
<div id = "left_line"></div>
<div id = "bottom_line"></div>
<div id = "right_line">
<i class="fa fa-bars" aria-hidden="true"></i>
<img src="images/logo.png" class = "logo">	
<ul>
	<li><a href="">Blog</a></li>
	<li><a href="">Shop</a></li>
	<li><a href="">News</a></li>
	<li><a href="">About us</a></li>
	<li><a href="">Contacts</a></li>
</ul>

</div>

<div class = "light_box">
	<a class="box_close">X</a>
	<div></div>


</div>


<div class = "main_box">




    <!-------------------->

	<div class = "product">
		
		<div class = "product_image">
			
			<img src="images/item1.jpg">

		</div>

	    <div class = "product_name">Galaxy7</div>

	     <div class = "product_price"><span class="pprice" data-uid="1">5000.00</span> <button class="toCart" data-uid="1">Buy</button></div>

	</div>





    <!----------222---------->


	<div class = "product">
		
		<div class = "product_image">
			
			<img src="images/item2.png">

		</div>

	    <div class = "product_name">Nexus7</div>

	     <div class = "product_price"><span class="pprice" data-uid="2">4000.00</span> <button class="toCart" data-uid="2">Buy</button></div>

	</div>

<!----------333---------->


	<div class = "product">
		
		<div class = "product_image">
			
			<img src="images/item3.jpg">

		</div>

	    <div class = "product_name">Nokia</div>

	     <div class = "product_price"><span class="pprice" data-uid="3">3000.00</span> <button class="toCart" data-uid="3">Buy</button></div>

	</div>




</div>






<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/Main.js"></script>
</body>
</html>
