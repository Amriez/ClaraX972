<!DOCTYPE html>
<html>
<head>
<title>ClaraX9-7-2</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<script type="text/javascript"src="demo.js"></script>
</head>
<body>
	<div class="banner">
		ClaraX9-7-2
		</div>
<nav>
    <ul>
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="#">Link1</a>
            <ul>
                <li><a href="#">Link1</a></li>
                <li><a href="#">Link2</a></li>
                <li><a href="#">Link3</a></li>
                <li><a href="#">Link4</a></li>
                <li><a href="#">Link5</a></li>
                <li><a href="#">Link6</a></li>
                <li><a href="#">Link7</a></li>
            </ul>
        </li>
        <li><a href="#">Link2</a>
            <ul>
                <li><a href="#">Link1</a></li>
                <li><a href="#">Link2</a></li>
                <li><a href="#">Link3</a></li>
                <li><a href="#">Link4</a></li>
                <li><a href="#">Link5</a></li>
                <li><a href="#">Link6</a></li>
                <li><a href="#">Link7</a></li>
            </ul>
        </li>
        <li><a href="#">Link3</a>
        	<ul>
        		<li><a href="#">Link1</a></li>
        		<li><a href="#">Link2</a></li>
        		<li><a href="#">Link3</a></li>
        		<li><a href="#">Link4</a></li>
        		<li><a href="#">Link5</a></li>
        		<li><a href="#">Link6</a></li>
        		<li><a href="#">Link7</a></li>
        	</ul>
        </li>
        	<li><a href="index.php?page=about">About us</a></li>
        	<li><a href="index.php?page=contact">Contact us</a></li>
    </ul>
</nav>
	<div class="content">
		  <div class="entry">
		  	<h1>ClaraX 9-7-2</h1>
		  	</div>
		  		<div class="bend">
		  		 <p>Free Design Website</p>
		  		 </div>
	</div>
		
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	 
		switch ($page) {
			case 'home':
				include "content/home.php";
				break;
			case 'about':
				include "content/about.php";
				break;
			case 'contact':
				include "content/contact.php";
				break;			
			default:
				echo "<center><h3>404 page not found!!!</h3></center>";
				break;
		}
	}else{
		include "content/home.php";
	}
	 
	 ?>
</body>
<br>
<div class="xccui">
<p>Author By Amriez | Atmux9 </p>
</div>
</html>