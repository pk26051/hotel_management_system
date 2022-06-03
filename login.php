<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
       	   	  <h2>Student's Login</h2>

       	   	  <form method="post">
       	   	  	
       	   	  	
       	   	  	<p>
       	   	  		<label>Username:</label>
       	   	  		<input type="text" name="user">
       	   	  	</p>
       	   	  	<p>
       	   	  		<label>Password:</label>
       	   	  		<input type="password" name="pass">
       	   	  	</p>
       	   	  	
       	   	  	<input type="submit" name="submit" value="submit">
       	   	  </form>
       	   	</div>
       	   </main>

      <footer>
        <div class="container">
        Copyright©2021 Online examination platform!!All rights reserved
        </div>
    </footer>

<?php
if(isset($_POST["submit"]))
{
$a=$_POST["user"];
$b=$_POST["pass"];
$con=mysqli_connect("localhost","root","","quize");
            if($con)
        {
           $q="select * from resitration where vusername ='$a' and vpassword='$b'";
          $r=mysqli_query($con,$q);
         
           if($r)
           {
             
             header("Location:quize.php");
           }
           else
           {
             echo "Not Added";
           }

        }
           else
          {
            echo "Not connect";
          }
    }
?>


</body>
</html>