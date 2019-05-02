<?php 
		$sitename="PDX Chinese Furnitures"; 
      	$sitedescription="eCommerce Website"; 
     	$siteowner="Jason Ye";
     	$sitepath="http://people.oregonstate.edu/~yeja/eCom/"; 
?>
<link href="<?php echo $sitepath; ?>css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Custom styles for this template -->
<link href="<?php echo $sitepath; ?>css/style.css" rel="stylesheet">

<?php $pagetitle = 'Form';

//contact variables
$name = $_POST['firstlastname'];
$phone =$_POST['phonenumber'];
$email = $_POST['emailaddress'];
//$url = $_POST['webaddress'];
$bestday = $_POST['bestday'];
$besttime = $_POST['besttime'];
$message = $_POST['message'];


//check box variables
$socialmedia = isset($_POST['socialmedia']) ? $_POST['socialmedia'] : '';
$socialmedia_msg = is_array($socialmedia) ? implode(", ", $socialmedia) : '';

//radio variables
$search = $_POST['search'];

//select variables 
$shopping = $_POST['shopping'];
//$age = $_POST['age'];

//misc variables
$favoritecolor = isset($_POST['favoritecolor']) ? $_POST['favoritecolor'] : '';
$favoritecolor_msg = is_array($favoritecolor) ? implode(", ", $favoritecolor) : '';
$favoritenumber = $_POST['favoritenumber'];

//prepare for email msg
$from = $_POST['firstlastname']; 
$to = 'yeja@onid.oregonstate.edu'; 
$subject = 'Purchase Want';
$human = $_POST['human'];

//body of the email msg
$body = "$name, $email would like a call back at $phone on $bestday at $besttime.\n Message: $message\n ";

//submit and send confirmation 
   if ($_POST['submit']) {
    // if all is well build the message
        if ($name != '' && $email != '') {
        if ($human == '4') {                 
            if (mail ($to, $subject, $body, $from)) { 
				//javascript alert:
				//echo "myFunction()"; 

				echo "<p class='confirmation'>Thank you, '.$name.' Your message has been sent!</p>";
				

    // if not well, display error message
        } else { 
        echo '<p class="tryagain">Something went wrong. Please try again.</p>'; 
    }
//provide error msg
	} else if ($_POST['submit'] && $human != '4') {
   echo '<p class="tryagain">Please try answering the anti-spam question again. </p>';
   }
   } else {
   echo '<p class="tryagain">Please fill in all required fields.</p>';
        }
    }
?>

<!----------------------------------------------------------------------------------------------------------------------------------------------->

<body>
<nav class="navbar-default">
	<div class="container">
	<div class="container-nav">
		<div class="navbar-header page-scroll">
			<a class="navbar-brand page-scroll" href="<?php echo $sitepath;?>index.php">
				<img src="<?php echo $sitepath; ?>img/logo.png" alt="Title logo">
			</a>
		</div>	
		<!--Navigation bar-->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li>
					<a  href="<?php echo $sitepath;?>form/uploads/antiques/antiques.php">Antiques</a>
				</li>
				<li>
                    <a  href="<?php echo $sitepath;?>form/uploads/artscraft/artscraft.php">Arts & Crafts</a>
                    
				</li>
				<li>
					<a href="<?php echo $sitepath;?>form/uploads/furnitures/furnitures.php">Furnitures</a>
				</li>
                <li>
					<a href="<?php echo $sitepath;?>form/uploads/household/household.php">Household</a>
				</li>
				
			</ul>
		</div>
	</div>
	</div>
</nav>
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title">
					<h2>Contact Us</h2>
						<p>
							Please fill out the information below and state which category with its item number you want to purchase. Also
							if you have any questions or need help, please include them in the message box below. Thank you! 
						</p>
				</div>
			</div>
		</div>		

		<form id="contactForm" method="post" action="./contact.php" >

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="firstlastname" class="required">First and Last Name *</label>
						<input type="text" class="form-control" id="name" name="firstlastname" id="firstlastname" autofocus required size="32" placeholder="First and Last name" tabindex="1" accesskey="n" />
						<p class="help-block text-danger"></p>
					</div>
				</div>	
				<div class="col-md-6">
					<div class="form-group">
						<label for="emailaddress" class="required">Email *</label>
						<input type="email" class="form-control" id="email" name="emailaddress" id="emailaddress" autofocus required size="32" placeholder="Email" tabindex="2" accesskey="e"/>
						<p class="help-block text-danger"></p>
					</div>
				</div>
			</div>
			
			<div class="row">	
				<div class="col-md-6">
					<div class="form-group">
						<label for="bestday" class="required">Best Day and Time to Contact *</label>
						<input type="date" class="form-control"  name="bestday" id="bestday" autofocus tabindex="6" accesskey="d"/>

						<label for="besttime" class="required"></label>
						<input type="time" class="form-control"  name="besttime" id="besttime" autofocus tabindex="7" accesskey="t"/>
						<p class="help-block text-danger"></p>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">		
						<label for="phone" class="required">Phone Number *</label>
						<input type="tel" class="form-control" name="phonenumber" id="phonenumber" data-grouplength="3,3,4" autofocus required size="32" placeholder="XXX-XXX-XXXX" tabindex="5" accesskey="p"/>
						<p class="help-block text-danger"></p>
					</div>
				</div>
			</div>

			<div class="row">	
				<div class="col-md-12">
					<div class="form-group">
						<label for="message" class="required">Message *</label>
						<textarea required tabindex="8" class="form-control" accesskey="h" maxlength="240" name="message" id="message" placeholder="Write down your purchase(s) or question(s)"></textarea>
						<p class="help-block text-danger"></p>
					</div>
				</div>
			<div class="row">	
				<div class="col-md-12 text-center">
					<p>To help prevent spam, answer this mathematical equation:</p>
					<label for="human"  class="required">What is 2+2?</label>
					<input name="human" id="human" required  tabindex="21" accesskey="h" />
					<div class="clearfix"></div>
					<button class="btn">
						<input name="submit" id="submit" type="submit" value="Send"  tabindex="22" accesskey="s" />
					</button>
					
					<button class="btn">
					<input name="reset" id="reset" type="reset" value="Reset"  tabindex="23"  accesskey="y" />	
					</button>
				</div>
			</div>	 
			</form>
		</div>
	</div>
</div>
</section>

</body>
<?php include '../footer.htm'; ?>