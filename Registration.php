<!DOCTYPE html>
<html>
<title>Registration</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="login/images/icons/favicon.png"/>

</head>
<?php 
  include("sub/db.php");
  include("func.php");

// Default Value Set
 
  $company="";
  $contact_person="";
  $address="";
  $city="";
  $state="";
  $zip="";
  $email="";
  $password = "";
  $feedback="";

if(isset($_POST['submit']))
{
  $company=$_POST['company'];
  $contact_person=$_POST['contact_person'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $zip=$_POST['zip'];
  $password = $_POST['password'];
  $feedback=$_POST['feedback'];

  if($feedback == "")
  {
    $feedback="None";
  }
  
  $email = $_POST['email'];

  $q=mysqli_query($con,"select * from registration where email='$email'");
  $num=mysqli_num_rows($q);

  if($num>0)
  {
    $msg="** E-mail is already in use";
  }
  else{
         
    $code=rand(1000,5000);
    
    
    setcookie('gen_otp',$code);
    setcookie('company',$company);
    setcookie('contact_person',$contact_person);
    setcookie('address',$address);
    setcookie('city',$city);
    setcookie('state',$state);
    setcookie('zip',$zip);
    setcookie('email',$email);
    setcookie('password',$password);
    setcookie('feedback',$feedback);

    // require 'PHPMailer/PHPMailerAutoload.php';
    // sendmail($code,$email);
    ?>
    <script type=text/javascript>
    var simple = '<?php echo $email; ?>';
    alert("OTP is send to "+simple );
    </script> <?php
  }
}
    
if(isset($_POST['verify']))
{
    $company=$_COOKIE['company'];
    $contact_person=$_COOKIE['contact_person'];
    $address=$_COOKIE['address'];
    $city=$_COOKIE['city'];
    $state=$_COOKIE['state'];
    $zip=$_COOKIE['zip'];
    $email=$_COOKIE['email'];
    $password =$_COOKIE['password']; 
    $feedback=$_COOKIE['feedback'];
    
    $enter_otp=$_POST['otp'];
    //echo "<pre>";
    //print_r($_COOKIE);
   // print_r($_POST);
    //echo $enter_otp;
    //exit();
    if($_COOKIE['gen_otp'] == $enter_otp)
    {
      $a = "insert into registration(company,contact_person,address,city,state,zip,email,password,feedback) values('$company','$contact_person','$address','$city','$state','$$zip','$email','$password','$feedback') ";
      mysqli_query($con,$a);
      
      header("location:login.php") ;

    }
    else
    {
      $wrong_otp="Incorrect OTP !";
    }
}

?>



    <!-- Nav -->
  

<a class="btn " href="index.php"><i class="fa fa-home" ></i></a>
<h1 style="text-align:center;color:#006;">Sign Up</h1>
<center><p style="color:#F00;"><?php if(@$wrong_otp){ echo $wrong_otp; } ?></p></center>
                <center><p style="color:#F00;"><?php if(@$msg){ echo $msg; }?></p></center>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form  method="post" enctype="multipart/form-data">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user" ></i>Company</label>
            <input type="text" id="fname" name="company" value="<?php echo $company; ?>" placeholder="Enter company name" pattern="[a-zA-Z]+" required>
            <label for="fname"><i class="fa fa-user"></i>Contact Person</label>
            <input type="text" id="fname" name="contact_person" value="<?php echo $contact_person; ?>" placeholder="Enter contact person">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" value="<?php echo $address; ?>" placeholder="Enter address">
           

            <div class="row">
              <div class="col-25">
              	<label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" value="<?php echo $city; ?>" placeholder="Enter city">
              </div>
              <div class="col-25">
                <label for="state">State</label>
                <input type="text" id="state" name="state" value="<?php echo $state; ?>" placeholder="Enter state">
              </div>
              <div class="col-25">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" value="<?php echo $zip; ?>" placeholder="Enter zipcode">
              </div>
            </div>
            <div class="row">
				<div class="col-50">
                 <label for="email"><i class="fa fa-envelope"></i> Email</label>
            	<input type="text" id="email" name="email" value="<?php echo $email; ?>" placeholder="@example.com" required="">
            	</div>
                <div class="col-50">
                 <label for="password"><i class="fa fa-eye"/></i> Password</label>
            	<input type="text" id="password" name="password" value="<?php echo $password; ?>" placeholder="Enter password" required>
            	</div>
            </div>
          </div>
          
          
          
        </div>
        <input type="text" name="feedback" value="<?php echo $feedback; ?>" placeholder="How did you hear about us?"/>
        
        <label>
          *All fields are mandatory
        </label>

        <input type="submit" value="Register" name="submit" class="btn">
        
      </form>
      <form method="post" enctype="multipart/form-data">
        
        <input type="text" name="otp" placeholder="Enter OTP">
        <input type="submit" value="Verify OTP" name="verify"  class="btn">
      </form>
    </div>
  </div>
  
</div>

</body>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100px;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  background-color:#3d3dc3;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</html>
