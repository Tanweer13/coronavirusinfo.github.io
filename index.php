<!DOCTYPE html>
<html>
<head>
     <title></title>
     <?php include 'link/links.php';?>
     <?php include 'css/style.php';?>


     


     </head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg navbar-light bg-info p-3 ">
  <a class="navbar-brand pl-4" href="#">CORONA VIRUS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse font-weight-bold" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-4 ">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">SYMPTOMS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">PREVANTION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">CONTACT US</a>
      </li>
    </ul>
    
  </div>
</nav>
<div class="main_header">
	<div class="row  w-300 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/coro.jpg" width="300" height="300">
			</div>
			
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>"We need to fight it,We should not fear the Cor <span class="corona_rot"> <img src="images/rot.png" width="75"></span>  na Virus"</h1>
				
			</div>
			
		</div>
		
	</div>

	<!--****************** corona latest uptades*******************--->

	<section class="corona_update  container-fluid ">
	  <div class="mb-3">
	     <h3 class="text-uppercase text-center font-weight-bold ">COVID-19 Updates</h3>
	 	
	 </div>	

   <div class="table-responsive">
     
     <table class="table table-bordered table-striped text-center" id="tbval">
       <tr>
             <th>Country</th>
             <th>TotalConfirmed</th>
             <th>TotalRecovered</th>
             <th>TotalDeaths</th>
             <th>NewConfirmed</th>
             <th>NewRecovered</th>
             <th>NewDeaths</th>
       </tr>
       

     </table>

	 
	 	</div>

	</section>
	
 <!---****************about section********************--->

 <div class="container-fluid sub_section  pt-1 pb-3 " id="aboutid">
 	<div class="section_header  text-center  mb-3 mt-5 about_style">
 		<h1 > About COVID-19</h1>
 		
 	</div>

 	 <div class="row pt-3">
 	 	<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
 	 		<img src="images/12.jpg" width="400" height="230">
 	 		
 	 	</div>

 	 	<div class="col-lg-6 col-md-6 col-12 about_res2">
 	 		<h2>What is Corona Virus(Covid-19) </h2>
 	 		<p> Coronaviruses are a group of related RNA viruses that cause diseases in mammals and birds. In humans and birds, they cause respiratory tract infections that can range from mild to lethal. Mild illnesses in humans include some cases of the common cold (which is also caused by other viruses, predominantly rhinoviruses).</p>
 	 		<p> The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p>
 	 		
 	 	</div> 
 	 	
 	 </div>
 	
 </div>

 
<!---//////*************** corona symptoms----/////*****************---->


 <div class="container-fluid sb_section  pt-5 pb-5 " id="sympid">
 	<div class="section_header text-center mb-5 mt-4">
 		<h1> Coronavirus Symptoms</h1>	
 	</div>

 	<div class="container">
 		<div class="row">
 			<div class="col-lg-4 col-md-4 col-12 ">
 				<figure class="text-center">
 				<img src="images/a7.png" class="img-fluid bg-info" width="120" height="120" >
 				<figcaption>COUGH</figcaption>
 				</figure>
 			</div>

 			<div class="col-lg-4 col-md-4 col-12 ">
 				<figure class="text-center">
 				<img src="images/a8.jpg " class="img-fluid bg-info "  width="120" height="120" >
 				<figcaption>FEVER</figcaption>
 				</figure>
 			</div>
 			<div class="col-lg-4 col-md-4 col-12 ">
 				<figure class="text-center">
 				<img src="images/a2.png" class="img-fluid bg-info" width="120" height="120" >
 				<figcaption>RUNNY NOSE</figcaption>
 				</figure>
 			</div>
 			<div class="col-lg-4 col-md-4 col-12 ">
 				<figure class="text-center">
 				<img src="images/a5.jpg" class="img-fluid bg-info" width="120" height="120" >
 				<figcaption>TIREDNESS</figcaption>
 				</figure>
 			</div>
 			<div class="col-lg-4 col-md-4 col-12 ">
 				<figure class="text-center">
 				<img src="images/a1.jpg" class="img-fluid bg-info" width="120" height="180" >
 				<figcaption>COLD</figcaption>
 				</figure>
 			</div>
 			<div class="col-lg-4 col-md-4 col-12 ">
 				<figure class="text-center">
 				<img src="images/a9.png" class="img-fluid bg-info" width="120" height="120" >
 				<figcaption>BREATHING ISSUES</figcaption>
 				</figure>
 			</div>
 			
 		</div>
 		
 	</div>
  

 </div>


 <!---//////*************** prevention against coronavirus----/////*****************---->


 <div class="container-fluid sub_section pt-5 pb-5 " id="preventid">
 	<div class="section_header text-center mb-5 mt-4">
 		<h1> 6 Steps Prevention Against Coronavirus</h1>	
 	</div>

 	<div class="container ">
 		<div class="row">
 			<div class="col-lg-4 col-md-4 col-12">
 				<div class="row">
 					<div class="col-lg-4 col-md-4 col-12">

 						<figure class="text-center">
 				<img src="images/b6.jpg" class="img-fluid bg-info" width="110" height="110" >
 				
 				</figure>
 						
 					</div>
 					<div class="col-lg-8 col-md-8 col-12">
 						<p>Wash your hand regularly for 30 seconds, with soup and water or alcohol-based hand rub</p>
 						
 					</div>
 					
 				</div>
 				
 			</div>
 			<div class="col-lg-4 col-md-4 col-12">
 				<div class="row">
 					<div class="col-lg-4 col-md-4 col-12">

 						<figure class="text-center">
 				<img src="images/b3.jpg" class="img-fluid bg-info" width="110" height="110" >
 				
 				</figure>
 						
 					</div>
 					<div class="col-lg-8 col-md-8 col-12">
 						<p>Cover your nose and mouth with a disposabale tissu or flexed elbow when you cough or sneeze </p>
 						
 					</div>
 					
 				</div>

 				
 			</div>
 			<div class="col-lg-4 col-md-4 col-12">
 				<div class="row">
 					<div class="col-lg-4 col-md-4 col-12">

 						<figure class="text-center">
 				<img src="images/b4.jpg" class="img-fluid bg-info" width="110" height="110" >
 				
 				</figure>
 						
 					</div>
 					<div class="col-lg-8 col-md-8 col-12">
 						<p>Avoid close contact (2 meter or 3 feet) with people who are unwell </p>
 						
 					</div>
 					
 				</div>
 				
 				
 			</div>
 			<div class="col-lg-4 col-md-4 col-12">
 				<div class="row">
 					<div class="col-lg-4 col-md-4 col-12">

 						<figure class="text-center">
 				<img src="images/b1.jpg" class="img-fluid bg-info" width="110" height="110" >
 				
 				</figure>
 						
 					</div>
 					<div class="col-lg-8 col-md-8 col-12">
 						<p>If you have fever, cough and difficulty in breathing.seek medical care early</p>
 						
 					</div>
 					
 				</div>
 				
 				
 			</div>
 			<div class="col-lg-4 col-md-4 col-12">
 				<div class="row">
 					<div class="col-lg-4 col-md-4 col-12">

 						<figure class="text-center">
 				<img src="images/b2.jpg" class="img-fluid bg-info" width="110" height="110" >
 				
 				</figure>
 						
 					</div>
 					<div class="col-lg-8 col-md-8 col-12">
 						<p>Use hand sanitizer frequently, stay home and self-isolate from others in the household if you feel unwell</p>
 						
 					</div>
 					
 				</div>
 				
 				
 			</div>
 			<div class="col-lg-4 col-md-4 col-12">
 				<div class="row">
 					<div class="col-lg-4 col-md-4 col-12">

 						<figure class="text-center">
 				<img src="images/b5.jpg" class="img-fluid bg-info" width="110" height="110" >
 				
 				</figure>
 						
 					</div>
 					<div class="col-lg-8 col-md-8 col-12">
 						<p>Use mask regularly, stay informed by watching news & follow the recommended practice </p>
 						
 					</div>
 					
 				</div>
 				
 			</div>
 			
 		</div>
 		
 	</div>

 </div>


 <!---//////*************** contact us ----/////*****************---->


 <div class="container-fluid sb_section pt-2 pb-4 " id="contactid">
 	<div class="section_header text-center mb-3 mt-3">
 		<h1> Contact Us For Any Information</h1>	
 	</div>

 	<div class="container">
 		<div class="row">
 			<div class="col-lg-8 offset-lg-2 col-12">
 				
 				<form action="" method="POST">

  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Name" required autocomplete="off">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off" >
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="Mobile" required autocomplete="off" >
  </div>

  <div class="form-groupr">
  	<label>Select Symptoms</label> <br>

  	<div class="custom-control custom-checkbox  ">
  		<input type="checkbox" class="custom-checkbox-input" id="customcheckbox1" name="coronasym[]" value="COLD">
  		<label class="custom-control-lebel " for="customcheckbox1">COLD</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-checkbox-inline ">
  		<input type="checkbox" class="custom-checkbox-input" id="customcheckbox2" name="coronasym[]" value="FEVER">
  		<label class="custom-control-lebel" for="customcheckbox2">FEVER</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-checkbox-inline ">
  		<input type="checkbox" class="custom-checkbox-input" id="customcheckbox3" name="coronasym[]" value="BREATHING ISSUES">
  		<label class="custom-control-lebel" for="customcheckbox3">BREATHING ISSUES</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-checkbox-inline ">
  		<input type="checkbox" class="custom-checkbox-input" id="customcheckbox4" name="coronasym[]" value="FEELING WEAK">
  		<label class="custom-control-lebel" for="customcheckbox4">FEELING WEAK</label>
  	</div>


  </div>
  
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="messages"></textarea>
  </div>

  <button type="submit" class="btn btn-outline-success" name="submit">SUBMIT</button>
</form>
 			</div>
 			
 		</div>
 		
 	</div>
 
</div>

 <!---//////*************** top cursor ----/////*****************---->

<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
	
</div>

 <!---//////*************** footer ----/////*****************---->

 <footer class="mt-5 sub_section">
 	  <div class="footer_style text-white text-center container-fluid">
 	  	<p>Copyright by TanweerAlam</p>
 	  	
 	  </div>
 </footer>


 <script type="text/javascript">


 	
 	mybutton = document.getElementById("myBtn");
 	//when the user scrolls down 20px from the top of the document, show the button
 	window.onscroll = function() {scrollFunction()};
 	function scrollFunction() {
 		if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)
 		{
 			mybutton.style.display = "block";
 		}
 		else{
 			mybutton.style.display = "none";
 		}
 	}
 	//when the user clicks on the button, scroll to the top of the document
 	function topFunction() {
 		document.body.scrollTop = 0; // for safari
 		document.documentElement.scrollTop = 0;//for crome firefox, ie and opera
 	}


  function fetch(){
    $.get("https://api.covid19api.com/summary",
      function (data){
        //console.log(data['countries'].length);
        var tbval = document.getElementById('tbval');

        for(var i=1; i<(data['Countries'].length); i++){
            var x=tbval.insertRow();
          
          x.insertCell(0);
          tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
          tbval.rows[i].cells[0].style.background='#7a4a91';
          tbval.rows[i].cells[0].style.color='#fff';

          x.insertCell(1);
          tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
          tbval.rows[i].cells[1].style.background='#4bb7d8';


          x.insertCell(2);
          tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
          tbval.rows[i].cells[2].style.background='#7a4a91';

          x.insertCell(3);
          tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
          tbval.rows[i].cells[3].style.background='#4bb7d8';

          x.insertCell(4);
          tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
          tbval.rows[i].cells[4].style.background='#7a4a91';

          x.insertCell(5);
          tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
          tbval.rows[i].cells[5].style.background='#4bb7d8';

          x.insertCell(6);
          tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
          tbval.rows[i].cells[6].style.background='#7a4a91';

          }

         }
      );
  }</script>



 
</body>
</html>


<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symptoms = $_POST['coronasym'];
    $messages = $_POST['messages'];

    $chk = "";

    foreach ($symptoms as $chk1) {
    	$chk .= $chk1.",";
    }

    $insertquery =" insert into coronacase(username, email, mobile, symptoms, messages) values('$username', '$email', '$mobile', '$chk', '$messages' )";

    $query = mysqli_query($con, $insertquery);

    if($con){
	?>
	<script>
		alert("inserted successful");
	</script>
	<?php
}
else {
	?>
	<script>
		alert("No inserted");
	</script>
	<?php
}


}





?>