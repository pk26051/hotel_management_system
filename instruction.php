<?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>



<!DOCTYPE html>
<html>
<head>
	<title>instruction</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
       <header>
       	<div class="container">
       		<p>ONLINE EXAMINAITON FLATFORM</p>
       	</div>
       </header>

       <main>

       	    <div class="container">
       	    	<h2>Test Your PHP Knowledge</h2>
       	    	<p>This is a multiple choice quize to test your PHP knowledge.</p>
       	    	<ul>
       	    		<li><Strong>Number of Question:</Strong><?php echo $total_questions; ?></li>
       	    		<li><Strong>Type:</Strong>Multiple Choice</li>
       	    		<li><Strong>Estimated Time:</Strong><?php echo $total_questions*1.5; ?></li>
       	    	</ul>

       	    	<a href="question.php?n=1" class="start">Start Quize</a>
       	    </div>
       	</main>

    <footer>
        <div class="container">
        Copyright©2021 Online examination platform!!All rights reserved
        </div>
    </footer>


  
</body>
</html>