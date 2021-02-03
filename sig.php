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

	<style >
		.error{
			color: red;
		}
		.dd{
      margin-top: 50px;
			margin-left: 300px;
			font-size: 20px;
		}
    input{
      padding: 5px;
      box-sizing: border-box;
      border:1px solid lightblue;
      

    }

	</style>
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

<div class="container " style="margin: 3rem;">
    <div class="row">
      <div class="offset-sm-3 col-md-6 offset-sm-3" style="background-color: #1795b6a6;">
        <h2>REGISTER</h2>
        <?php
   $emailErr = $passwordErr = $confpasswordErr = $nameErr = $addressErr = $cityErr = $stateErr = $zipcodeErr = $countryErr = " ";
   $email = $password = $confpassword = $name = $address =  $city = $state = $zipcode = $country = "";

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
    if(empty($_POST["conf.password"])){
      $passwordErr = "password is required";
    }else{
      $password = test_input($_POST["password"]);
    }
    if (empty($_POST["city"])) {
    $cityErr = "city is required";
  } else {
    $city = test_input($_POST["name"]);
     if(!preg_match("/^[a-zA-Z]*$/", $city)){
      $cityErr = "only letters and white space allowed";
     }
  }
  if (empty($_POST["state"])) {
    $stateErr = "state is required";
  } else {
    $state = test_input($_POST["state"]);
     if(!preg_match("/^[a-zA-Z]*$/", $state)){
      $stateErr = "only letters and white space allowed";
     }
  }
  if (empty($_POST["usertype"])) {
    $usertypeErr = "usertype is required";
  } else {
    $usertype = test_input($_POST["usertype"]);
     if(!preg_match("/^[a-zA-Z]*$/", $usertype)){
      $usertypeErr = "only letters and white space allowed";
     }
  }
  if (empty($_zipcode["zipcode"])) {
    $zipcodeErr = "zipcode is required";
  } else {
    $zipcode = test_input($_POST["address"]);
     if(!preg_match("/^[a-zA-Z]*$/", $zipcode)){
      $zipcodeErr = "only letters and white space allowed";
     }
  }
  if (empty($_POST["country"])) {
    $countryErr = "country is required";
  } else {
    $country = test_input($_POST["country"]);
     if(!preg_match("/^[a-zA-Z]*$/", $country)){
      $countryErr = "only letters and white space allowed";
     }
  }

  

   function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   }
 ?>
        <p style="color: #fff; border-bottom: ridge;">create a new account</p>
        <form class="form-group"  method="post" action=""  >
          <label for="name">name:</label>
          <input type="text" class="form-control" name=" name" ><br>
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email">
          <label for="password">password</label>
          <input type="password"  class="form-control" name="password"><br>
          <label for="user">user type</label>
          <select name="user" class="form-control">
          <option value="">please sellect</option>
          <option value="new user">new user</option>
          <option value="employe">employe</option>
          <option value="admin">admin</option>
          
          </select>
          <label for="address">address</label>
          <input type="text" name="address" class="form-control"><br>
          <label for="city"> city</label>
          <input type="text" name="city" class="form-control"><br>
          <label for="state">state</label>
          <select name="state" class="form-control">
          <option value="">please sellect</option>
          <option value="madhyapradesh">madhya pradesh</option>
          <option value="uttarpradesh">uttarpradesh</option>
          <option value="rajasthan">rajasthan</option>
          <option value="kerla">kerla</option>
          <option value="uttrakhand">uttrakhand</option>
          <option value="maharastra">maharastra</option>
          
          </select>
          <label for="zip code">zip code</label>
          <input type="number" name="zipcode" class="form-control"><br>
          <label for="country">country</label>
          <input type="text" name="country" class="form-control"><br>

          <button class="btn btn-success" type="submit" name="save" value="submit">sign in</button>
          
          
        </form>
        
      </div>
    </div>
  </div>
  
	<?php
  echo "<h2>your data</h2>";
  if(isset($_POST['save']))
  {
   echo $name = $_POST['name'];
   echo "<br>";
  echo $email = $_POST['email'];
  echo "<br>";
  echo $password = $_POST['password'];
  echo "<br>";
  echo $user = $_POST['user'];
  echo "<br>";
  echo $address = $_POST['address'];
  echo "<br>";
  echo $city = $_POST['city'];
  echo "<br>";
  echo $zipcode = $_POST['zipcode'];
  echo "<br>";
  echo $country = $_POST['country'];
  echo "<br>";
  echo $state   = $_POST['state']  ;

  }
    

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