<!DOCTYPE html>
<html>
<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="dos/finallogo.png" class="logo" style="width: 70px;">
    <ul class="nav" style="margin:  00 00 00 500px;">
    	<li class="free-prop-active" style="background-color: #1795b6; margin: 1px;">
    		<a href="#" style="color: #fff;">post property<span class="badge-font-type-4" style="background-color: yellow; color: black;"><b>FREE</b></span></a>
    	</li>
	  <li class="nav-item">
	    <a class="nav-link" href="aboutus.php">About us</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="sushil.php">main page</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="team.php">our team</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="lon.php">Login</a>
    </li>
    <li class="nav-item">
	    <a class="nav-link" href="sig.php">Sign up</a>
    </li>
 
  </ul> 
</nav>
<input type="text" name="text" class="form-group" placeholder="search here" style="margin-left: 370px; width: 400px;">

<br>

	<div class="container " style="margin: 3rem;">
		<div class="row">
			<div class="offset-sm-3 col-md-6 offset-sm-3" style="background-color: #1795b6a6;">
				<h2>LOGIN</h2>
				<?php
   $emailErr = $passwordErr = $nameErr ="";
   $email = $password = $name ="";

   	if (empty($_POST["email"])) {
   		$emailErr = "Email is required";
   	}else{
   		$email = test_input($_POST["email"]);
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      	$emailErr = "invalid email formate";
      }   
      }  

   	if(empty($_POST["password"])){
      $passwordErr = "password is required";
   	}else{
   		$password = test_input($_POST["password"]);
   	}
   	if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
     if(!preg_match("/^[a-zA-Z]*$/", $name)){
     	$nameErr = "only letters and white space allowed";
     }
  }

  

   function test_input($data){
   	$data = trim($data);
   	$data = stripcslashes($data);
   	$data = htmlspecialchars($data);
   	return $data;
   }
 ?>
				<p style="color: #fff; border-bottom: ridge;">use a local account login</p>
				<form class="form-group"  method="post" action="<?php htmlspecialchars($_SERVER["POST_SELF"]);?>"  >
					<label for="name">name:</label>
					<input type="text" class="form-control" name=" name" ><br>
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email">
					<label for="password">password</label>
					<input type="password"  class="form-control" name="password"><br>
					<button class="btn btn-success" type="submit" value="submit">log in</button>
					<p style="color: #fff;">register for new user</p>
					
				</form>
				
			</div>
		</div>
	</div>
	<?php
    echo "<h2>data base</h2>";
  
    echo $email;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $name;
    

	?>

	<div class="container-fluid" style="background-color: #2d2c4f;">
	<div class="row">
		<div class="col" style="color: #fff;">
			<h3>quick links</h3>
			<p>about us</p>
			<p>career</p>
			<p>offers</p>
				
		</div>
		<div class="col" style="color: #fff;">
			<h3>Social links</h3>
			<i class="fa fa-facebook-official">facebook</i><br>
			<i class="fa fa-instagram">instagram</i><br>
			<i class="fa fa-twitter">twitter</i><br>
			<i class="fa fa-whatsapp">whatsapp</i>
				
		</div>
		<div class="col" style="color: #fff;">
			<h3>Make money with us</h3>
			<p>privacy</p>
			<p>feedback</p>
			<p>term& condition</p>
				
		</div>
		<div class="col" style="color: #fff;">
			<h3>costomer support</h3>
			<i class="fa fa-phone">458755558</i><br>
			<i class="fa fa-envelope-o">systos @gmail.com</i>
				
		</div>



	</div>
</div>
<footer style="background-color: green; color: #fff; text-align: center;">@copyright by vinay 2021</footer>


</body>
</html>