<!DOCTYPE HTML> 
<html lang="en">
<head>
<title>Bhavani Sales Corporation Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css">
  <!-- favicon for site icon -->
  <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<style>
.error {color: #FF0000;}

body { background: url(images/backgroundImg1.jpg) no-repeat center fixed; 
    background-size: cover;
	color:#FAFAD2;
}


</style>
</head>
<body> 

<?php

// define variables and set to empty values
$nameErr=$passwordErr ="";
$name=$password ="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["name"])) 
   {
     $nameErr = "Name not entered";
	 
   } 
   else
   {
     $name = test_input($_POST["name"]);
	  
   }

   if (empty($_POST["password"])) 
   {
     $passwordErr = "password not entered";

   }
   else
	   
   
    if($_POST["password"]==="Wholesale") 
	{
	   $password = test_input($_POST["password"]);
	    echo "<meta http-equiv=\"refresh\" content=\"0;URL=links.html\">";
    }
	else
   	   $passwordErr = "incorrect password"; 
	
 
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2 style="color:#FAFAD2;text-align:center">Login Page </h2><br><br><br><br>
<div class="row">
<div class="col-sm-4">
<h4 style="color:#FAFAD2">Welcome to <strong>Sri Bhavani Sales Corporation.</strong>Kindly Provide the login Details to Download the Price List of products of Various Categories</h4>
</div>
<div class="form-group col-sm-3">


 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 <input class="form-control" placeholder="Name" type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
  <input class="form-control" placeholder="Password" type="text" name="password" value="<?php echo $password;?>">
    <span class="error">* <?php echo $passwordErr;?></span>
   <br><br>
   <button class="btn btn-default btn-md" type="submit">Send</button>
 </form>
</div>
</div>
<div class="container-fluid footer1 text-center">
<!-- <object width="100%" height="100%" data="footer.html"></object> -->
   <a href="BhavaniWebsite.html" title="Visit Bhavani Home"><img src="images/icon-home.jpg" alt="Visit Bhavani Home" height="50px" width="50px"></a>
     <br><br>
  <a href="http://www.facebook.com" title="Visit Facebook"><img src="images/icon-facebook.jpg" alt="Visit Facebook" height="30px" width="30px"></a>
  <a href="http://www.twitter.com" title="Visit Twitter"><img src="images/icon-twitter.jpg" alt="Visit Twitter" height="30px" width="30px"></a>
  <a href="http://www.youtube.com" title="Visit Youtube"><img src="images/icon-youtube.jpg" alt="Visit Youtube" height="30px" width="30px"></a>
  <a href="http://www.gmail.com" title="Visit Gmail"><img src="images/icon-gmail.jpg" alt="Visit Gmail" height="30px" width="30px"></a>
  <a href="http://www.google.co.in" title="Visit Google"><img src="images/icon-google.jpg" alt="Visit Google" height="30px" width="30px"></a><br><br>
  <p>Theme Made By priyanka Malode  <a href="http://www.webants.com" title="Visit Webants Website">www.webants.com</a></p>

</div>
</body>
</html>