<?php 

session_start();

?>

<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
       	<div class="container">
       		<p>ONLINE EXAMINAITON PLATFORM</p>
       	</div>
       </header>

	<main>
			<div class="container">
				<h2>Your Result</h2>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
				<?php unset($_SESSION['score']); ?>
				
			</div>

	</main>


	 <footer>
       	<div class="container">
       	Copyright©2021 Online examination platform!!All rights reserved
        </div>
    </footer>








</body>
</html>