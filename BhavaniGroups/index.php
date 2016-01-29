<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
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
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<style>
  .buttonLogin{ background-color:#DC143C;
                width:120px;
				height:40px;
                margin-top:18px;
				margin-left:0px;
				float:right;
				
  }
  



.demoInputBox{padding:10px; border:#F0F0F0 1px solid; border-radius:4px;background-color:#FFF;width:50%;}
.error{background-color: #FF6600;border:#AA4502 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.success{background-color: #12CC1A;border:#0FA015 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.info{font-size:.8em;color: #FF6600;letter-spacing:2px;padding-left:2px;}
.btnAction{background-color:#2FC332;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
  
  </style>
  
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function (e){
$("#frmContact").on('submit',(function(e){
	e.preventDefault();
	$('#loader-icon').show();
	var valid;	
	valid = validateContact();
	if(valid) {
		$.ajax({
		url: "contact_mail.php",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		$("#mail-status").html(data);
		$('#loader-icon').hide();
		},
		error: function(){} 	        
		
		});
	}
}));

function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	if(!$("#userName").val()) {
		$("#userName-info").html("(required)");
		$("#userName").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val()) {
		$("#userEmail-info").html("(required)");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#userEmail-info").html("(invalid)");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#subject").val()) {
		$("#subject-info").html("(required)");
		$("#subject").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#content").val()) {
		$("#content-info").html("(required)");
		$("#content").css('background-color','#FFFFDF');
		valid = false;
	}
	
	return valid;
}

});
</script>
 </head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- Container for header  -->
 <div  class="container-fluid text-center" >
   <div class="row">
    <div class="col-sm-11">
	 <img src="images/BhavaniLogo.jpg" alt="Shop Image" width="260" height="120">
    </div>
	<div class="col-sm-1">
	 <form action="loginPage.php">	
	  <button type="submit" class="btn btn-primary btn-md buttonLogin" >Customer Login</button>
     </form>
    </div>	 
   </div>  
 </div>
	  
 <div>
    <h3 style ="background-color:#DC143C; color:white; padding-top:5px"><marquee width="35%" height="50%" direction="left"><b>Sri Bhavani Sales Corporation</b></marquee>
     <span class="glyphicon glyphicon-earphone" style="font-size:15px; padding-bottom:10px"></span>
     <b style="font-size:15px;padding-bottom:10px">  9845333531,</b>  <b style="font-size:15px;padding-bottom:10px">9742577532</b>  
     <span class="glyphicon glyphicon-phone-alt" style="font-size:15px;padding-bottom:10px"></span>  <b style="font-size:15px;padding-bottom:10px"> 08375-235938</b>
     <marquee width="37%" height="50%" direction="right"><b>Jai Bhavani Machineries</b></marquee></h3>
 
 </div>


<nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div id="home" class="container" >
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	   <a class="navbar-brand" href="#myPage">Sri Bhavani Groups</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#myPage">HOME</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PIPES & FITTINGS<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#pipesfittings">PVC PIPES AND FITTINGS</a></li>
            <li><a href="#pipesfittings">GI PIPES AND FITTINGS</a></li>
			<li><a href="#pipesfittings">UPVC PIPES AND FITTINGS</a></li>
			<li><a href="#pipesfittings">CPVC PIPES AND FITTINGS</a></li>
			<li><a href="#pipesfittings">HDPE PIPES AND FITTINGS</a></li>
			<li><a href="#pipesfittings">SPRINKLER PIPES AND FITTINGS</a></li> 
			<li><a href="#pipesfittings">UPVC COLUMN PIPE </a></li> 
			<li><a href="#pipesfittings">SECTION PIPE FITTINGS </a></li> 
			<li><a href="#pipesfittings">PVC GARDEN PIPES </a></li> 
			<li><a href="#pipesfittings">DRIP IRRIGATION </a></li> 
		  </ul>
        </li>
        <li><a href="#yaxha">YAXHA</a></li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SANITARY<span class="caret"></span></a>
          <ul class="dropdown-menu">
		    <li><a href="#sanitary">SANITARY WARES</a></li>
		    <li><a href="#watertanks">WATER TANKS</a></li>
		  </ul>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#machinaries">MACHINARIES<span class="caret"></span></a>
          <ul class="dropdown-menu">
		   <li><a href="#generators">GENERATORS</a></li>
		   <li><a href="#powertools">POWER TOOLS</a></li>
		  </ul>
		  
          
		 <li><a href="#motorpump">MOTORS & PUMPS</a></li>
		 <li><a href="#contact">ENQUIRY</a></li>
      </ul>
    </div>
  </div>
</nav> 
<!-- Container (Main Content Section) -->
<div id="about" class="container-fluid" style ="background-color:#E0FFFF">
  <div class="row">
    <div class="col-sm-6" style=" border:3px outset " >
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
       <!-- Indicators -->
         <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
	      
         </ol>

       <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">
          <div class="item active">
           <img src="images/homeImage.jpg" alt="shop image" height="300px" width="360px">
            <div class="carousel-caption">
             <br><h3>Bhavani Outlet</h3>
             <p>We have different departments to deal each category of products.</p>
            </div> 
          </div>

	      
         <div class="item">
           <img src="images/homephoto.jpg" alt="shop image" height="300px" width="360px">
            <div class="carousel-caption">
             <h3>Jai Bhavani Machineries</h3>
             <p>We have expanded our business with different machinary products</p>
            </div> 
          </div>
       </div>

       <!-- Left and right controls -->
       <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
    </div>
   </div>
    <div class="col-sm-6" style=" border:3px outset ">
      <h2 style="text-align:center">About Bhavani Sales Corporation</h2>
        <h4 style="text-indent: 50px"><b>Sri Bhavani Sales Corporation</b> has been delivering results since we opened in the year 2000. 
	       Our goal is to provide both a superior customer experience and tremendous value for our customers.

           <br>Prashant Malode, founder of Sri Bhavani Sales Corporation has over 18 years of experience in Hardware & Machinery business and 
		   is passionate about exceeding Customer expectations.
		  <br>Bhavani Sales corporation have extended its business with machinery prooducts as a seperate branch,called as <b>Jai bhavani Machinaries</b>. 

           <br>This Corporation has already been operating its business in <b>8 Districts </b>and having <b>360 Sub Dealers </b>of this Business. 
		   It has around <b>3000 inventory items </b>to deal with all types of Customers. 
		   Bhavani Sales Corporation is having the premises of <b>18000 sq ft </b>for its business.

           <br><br>We love our customers and welcome you feedback and suggestions. 
		   Use our Contact Us page to tell us what we’re doing right or what we can improve on.
        </h4>
    </div>
    
 </div>
</div>



<!-- Container (Vision and Customer review Section) -->
 <div class="container-fluid text-center" style ="background-color:#E0FFFF">
   <div class="row slideanim">
     <div class="col-sm-7" style="border:3px">
      <h2 style="text-align:center">Our Values</h2>
      <h4><strong>MISSION:</strong> Our mission is to build quality hardware business infrastructure and providing quality product delivery to customers and End users </h4>
      <h4><strong>VISION:</strong>Our vision is to provide Ultimate Customer Satisfaction,product availability and delivery.An infrastructure for wide range of products
	  with different brands to deal with subdealers and endusers or customers</h4>
     </div>
     <div class="col-sm-5" style="border:3px">
	   <h2 style="margin-bottom:1px;padding-bottom:1px;text-align:center">What our customers say</h2>
       <div id="myCarousel1" class="carousel slide text-center" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
          <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel1" data-slide-to="1"></li>
          <li data-target="#myCarousel1" data-slide-to="2"></li>
	      <li data-target="#myCarousel1" data-slide-to="3"></li>
         </ol>

         <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
           <div class="item active">
            <h4>"Bhavani Sales corporation is the best. I am so happy with the products!"<br><span style="font-style:normal;">
			Vinayak malode, Vice President, Comment Box</span></h4>
           </div>
           <div class="item">
		     <h4>"One word... WOW!!"<br><span style="font-style:normal;">Kamalesh, Salesman, Rep Inc</span></h4>
           </div>
           <div class="item">
            <h4>"Great infrastructure great service "<br><span style="font-style:normal;">Prasanna kumar, Business Dealer</span></h4>
           </div>
	       <div class="item">
		   <h4>"All products given at the lowest price possible"<br><span style="font-style:normal;">durgesh, Customer</span></h4>
           </div>
          </div>
		
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
	   </div>
     </div>
  </div>
</div>
 
<!-- Container (Products Section) -->
<div id="products" class="container-fluid text-center"  style ="background-color:#E0FFFF ">
  <h2><b>Products</b></h2><br>
  <h4>Products image gallery</h4>
  <div class="row slideanim ">
    <div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize img-circle" src="images/MotorsPumps2.jpg" alt="Motors and Pumps">
        <p><strong>Motors and Pumps</strong></p>
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
       <img class="resize img-circle" src="images/pipes.jpg"   alt="Pipes" >
        <p><strong>Pipes</strong></p> 
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize img-circle" src="images/sintex.jpg"  alt="Sintex">
        <p><strong>Sintex</strong></p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize img-circle" src="images/electricals1.jpg"  alt="Electricals" >
        <p><strong>Electricals</strong></p>
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize img-circle" src="images/SolarHeaters3.jpg"  alt="Solar Heaters">
        <p><strong>Solar Heaters</strong></p>
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
       <img class="resize img-circle" src="images/power3.jpg"  alt="Power Tools" >
        <p><strong>Power Tools</strong></p> 
      </div>
    </div>  
  </div> 
  <br>
  
  
   <div class="row slideanim ">
    <div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize img-circle" src="images/generators2.jpg"  alt="Generators" >
        <p><strong>Generators</strong></p>
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize img-circle" src="images/PipesFittings1.jpg" alt="Pipes and Fittings" >
        <p><strong>Pipes and Fittings</strong></p>
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize img-circle" src="images/Sanitary4.jpg"  alt="Sanitary" >
        <p><strong>Sanitary</strong></p>
		
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize img-circle" src="images/ElectricHeater.jpg"  alt="Electric Heaters" >
        <p><strong>Electric Heaters</strong></p>
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize img-circle" src="images/Motors.jpg"  alt="Motors">
        <p><strong>Motors</strong></p>
		
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize img-circle" src="images/Sanitary6.jpg"  alt="Sanitary" >
        <p><strong>Sanitary</strong></p>
      </div>
    </div>  
    
  </div>
</div><br><br>


<!-- Container (Sanitary Section) --> 

<div id="sanitary" class="container-fluid text-center"  style ="background-color:#E0FFFF;border:2px solid #DC143C ">
  <h2><b>Sanitary</b></h2><br>
  <br>
  <div class="row slideanim ">
    <div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize" src="images/sanitary1.jpg"   alt="Sanitary Wares">
        <p><strong>Sanitary Wares</strong></p>
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
       <img class="resize" src="images/sanitary2.jpg"   alt="Sanitary Fittings" >
        <p><strong>Sanitary Fittings</strong></p> 
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize" src="images/sanitary3.jpg" alt="Sanitary Taps">
        <p><strong>Sanitary Taps</strong></p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize" src="images/sanitary5.jpg" alt="Sanitary Hangers" >
        <p><strong>Sanitary Hangers</strong></p>
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img  class="resize" src="images/sanitary7.jpg"  alt="Sanitary Wares">
        <p><strong>Sanitary Wares</strong></p>
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
       <img class="resize"  src="images/sanitary8.jpg"  alt="Sanitary Wares" >
        <p><strong>Sanitary Wares</strong></p> 
      </div>
    </div>  
  </div> 
  <div class="row slideanim"><br>
  <h4 style="text-align:left">The demand for high value sanitary ware is growing very fast,Sri Bhavani Sales Corporation 
  has been providing wide range of products and fittings of Sanitary Wares to all of its customers.kindly provide your details in the 
  Enquiry Section of Bhavani Groups if you need any further details on products and services we provide for our Customers </h4><br><br><br><br>
  </div>
</div>


<!-- Container (Water tanks Section) --> 
<div id="watertanks" class="container-fluid" style ="background-color:#E0FFFF ">
  <div class="row slideanim">
    <div class="col-sm-6" style=" border:3px" >
      <div id="myCarousel2" class="carousel slide" data-ride="carousel">
       <!-- Indicators -->
       <ol class="carousel-indicators">
        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel2" data-slide-to="1"></li>
        <li data-target="#myCarousel2" data-slide-to="2"></li>
	    <li data-target="#myCarousel2" data-slide-to="3"></li>
       </ol>

       <!-- Wrapper for slides -->
       <div class="carousel-inner" role="listbox">
         <div class="item active">
           <img src="images/sintex.jpg" alt="Water Tanks" height="400px" width="300px">
           <div class="carousel-caption">
           <p>Water tanks</p>
           </div> 
         </div>

         <div class="item">
           <img src="images/sintex1.jpg" alt="Water Tanks" height="400px" width="300px">
           <div class="carousel-caption">
            <p>Water tanks</p>
           </div> 
         </div>

	     <div class="item">
          <img src="images/sintex2.jpg" alt="Water Tanks" height="400px" width="300px">
           <div class="carousel-caption">
            <p>Water tanks</p>
           </div>  
         </div>
         <div class="item">
           <img src="images/sintex3.jpg" alt="Water Tanks" height="400px" width="300px">
           <div class="carousel-caption">
            <p>Water tanks</p>
           </div> 
          </div>		   
         <div class="item">
           <img src="images/sintex4.jpg" alt="Water Tanks" height="400px" width="300px">
           <div class="carousel-caption">
            <p>Water tanks</p>
           </div>  
		 </div>
		</div>

         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
         </a>
        </div>
   </div>

    <div class="col-sm-6" style=" border:3px">
      <h2>About Water tanks</h2>
        <h4 style="text-indent: 50px"> We deal with different varieties of water tanks of all sizes. To place orders kindly provide your details on Contact page.</h4>
    </div>
    
  </div>
</div>


<!-- Container (Sanitary Section) --> 

<div id="motorpump" class="container-fluid text-center"  style ="background-color:#E0FFFF;border:2px solid #DC143C ">
  <h2><b>Motors And Pumping Systems</b></h2><br>
  <br>
  <div class="row slideanim ">
    <div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize" src="images/motorpump1.jpg"   alt="Electric Motor">
        <p><strong>Electric Motor</strong></p>
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
       <img class="resize" src="images/motorpump2.png"   alt="Electric Motor" >
        <p><strong>Electric Motor</strong></p> 
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize" src="images/motorpump3.jpeg" alt="Motors">
        <p><strong>Motors</strong></p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img class="resize" src="images/motorpump4.png" alt="Motor Series" >
        <p><strong>Motor Series</strong></p>
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
        <img  class="resize" src="images/waterpump.jpg"  alt="UnderWater Pumps">
        <p><strong>UnderWater Pumps</strong></p>
      </div>
    </div>
	<div class="col-sm-2">
      <div class="thumbnail bg-1">
       <img class="resize"  src="images/borepump.jpg"  alt="Bore Pumps" >
        <p><strong>Bore Pumps</strong></p> 
      </div>
    </div>  
  </div> 
  <div class="row slideanim"><br>
  <h4 style="text-align:left">Sri Bhavani Sales Corporation deal with wide range of products in Motors and Pumps category to all of its customers.
  All Varieties of Electric Motors and bore pumps,Submersible water pumping systems are available.kindly provide your details in the 
  Enquiry Section of Bhavani Groups if you need any further details on products and services we provide for our Customers </h4><br><br><br><br>
  </div>
</div>



<!-- Container (Contact Section) -->



<div id="contact" class="container-fluid " style ="background-color:#4DD2D5">
  <h2 class="text-center">CONTACT</h2>
  <div class="row slideanim">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Ashwini Nagar, 1st Cross,Haveri</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9845333531</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@SriBhavanigroups.com</p>	   
    </div>
    <div class="col-sm-7 slideanim">
     
	   <form id="frmContact" action="" method="post">
       <div id="mail-status" style ="background-color:#87CEFA" ></div>
	   
       <div class="col-sm-6 form-group">
        <span id="userName-info" class="info"></span><br/>
        <input class="form-control " type="text" name="userName" id="userName" placeholder="Name">
       </div>
       <div class="col-sm-6 form-group">
        <span id="userEmail-info" class="info"></span><br/>
        <input class="form-control " type="text" name="userEmail" id="userEmail"  placeholder="Email">
       </div>
       <div class="col-sm-6 form-group"> <br/>
        <input class="form-control " type="file" name="attachmentFile" id="attachmentFile" placeholder="Attachment" >
       </div>
       <div class="col-sm-6 form-group">
        <span id="subject-info" class="info"></span>
       <input class="form-control " type="text" name="subject" id="subject" placeholder="subject">
       </div>
       <div class="col-sm-12 form-group">
        <span id="content-info" class="info"></span><br/>
       <textarea  class="form-control " name="content" id="content" placeholder="content"  rows="6"></textarea><br>
       </div>
       <div class="col-sm-12 form-group">
        <input type="submit" value="Send" class="btn btn-default pull-right btnAction" >
       </div>
     </form>
     <div id="loader-icon" style="display:none;"><img src="LoaderIcon.gif" ></div>	  
    </div>
  </div>
</div>





<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(14.794784, 75.394028);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="container-fluid text-center" style="background-color:#4DD2D5">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <a href="http://www.facebook.com" title="Visit Facebook"><img src="images/icon-facebook.jpg" alt="Visit Facebook" height="30px" width="30px"></a>
  <a href="http://www.twitter.com" title="Visit Twitter"><img src="images/icon-twitter.jpg" alt="Visit Twitter" height="30px" width="30px"></a>
  <a href="http://www.youtube.com" title="Visit Youtube"><img src="images/icon-youtube.jpg" alt="Visit Youtube" height="30px" width="30px"></a>
  <a href="http://www.gmail.com" title="Visit Gmail"><img src="images/icon-gmail.jpg" alt="Visit Gmail" height="30px" width="30px"></a>
  <a href="http://www.google.co.in" title="Visit Google"><img src="images/icon-google.jpg" alt="Visit Google" height="30px" width="30px"></a><br><br>
  <p>Theme Made By priyanka Malode  <a href="http://www.webants.com" title="Visit Webants Website">www.webants.com</a><br><br><br></p>		
</div>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  // Slide in elements on scroll
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


</body>
</html>
