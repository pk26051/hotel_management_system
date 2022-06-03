<?php 
	include 'db.php';
	session_start(); 
	//Set Question Number
	$number = $_GET['n'];

	//Query for the Question
	$query = "SELECT * FROM questions WHERE question_number = $number";

	// Get the question
	$result = mysqli_query($connection,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM options WHERE question_number = $number";
	$choices = mysqli_query($connection,$query);
	// Get Total questions
	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
 	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
                  <div class="current">Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>
                  <p class="question"><?php echo $question['question_text']; ?> </p>
                  <form method="post" action="process.php">
                  	<ul class="choicess">
						<?php while($row=mysqli_fetch_assoc($choices)){ ?>
						<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['coption']; ?></li>
						<?php } ?>
						
						
					</ul>
                  	<input type="hidden" name="number" value="<?php echo $number; ?>">
					<input type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </main>

    <footer>
       	<div class="container">
       	Copyright©2021 Online examination platform!!All rights reserved
        </div>
    </footer>

</body>
</html>