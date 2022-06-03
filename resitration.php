<!DOCTYPE html>
<html>
<head>
	<title>resitrattion</title>
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
       	   	  <h2>Student's Resitration Form</h2>

       	   	  <form method="post">
       	   	  	
       	   	  	<p>
       	   	  		<label>NAME:</label>
       	   	  		<input type="text" name="name">
       	   	  	</p>
       	   	  	<p>
       	   	  		<label>Contact No:</label>
       	   	  		<input type="text" name="contact">
       	   	  	</p>
       	   	  	<p>
       	   	  		<label>Email:</label>
       	   	  		<input type="email" name="email">
       	   	  	</p>
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
      $a=$_POST["name"];
      $b=$_POST["contact"];
      $c=$_POST["email"];
      $d=$_POST["user"];
      $e=$_POST["pass"];
      
      $con=mysqli_connect("localhost","root","","quize");
      if($con)
      {
            $q="INSERT INTO `resitration` (`vname`, `vcontact`, `vemail`, `vusername`, `vpassword`) VALUES ('$a', '$b', '$c', '$d', '$e');";
            $r=mysqli_query($con,$q);
           if($r)
           {
             echo "New User Added";
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