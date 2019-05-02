<?php $pagetitle='Form'; ?>

<?php 
		$sitename="Xie PDX Furnitures"; 
      	$sitedescription="eCommerce Website"; 
     	$siteowner="Jason Ye";
     	$sitepath="http://xiefurnitures.com/home/"; 
?>

<link href="<?php echo $sitepath; ?>css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Custom styles for this template -->
<link href="<?php echo $sitepath; ?>css/style.css" rel="stylesheet">

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
					<a  href="<?php echo $sitepath;?>form/uploads/administrator.php">Administrator</a>
				</li>
				<li>
               <a  href="<?php echo $sitepath;?>form/uploads/artscraft/artscraft.php">Arts & Crafts</a>                   
            </li>
            <li>
					<a href="<?php echo $sitepath;?>form/uploads/household/household.php">Household</a>
				</li>
				<li>
					<a href="<?php echo $sitepath;?>form/uploads/furnitures/furnitures.php">Furnitures</a>
            </li>
            <li>
					<a href="<?php echo $sitepath;?>form/uploads/antiques/antiques.php">Antiques</a>
				</li>
			
			</ul>
		</div>
	</div>
	</div>
</nav>

<section>
<div class="text-center">	
    <div class="section">
        <h2>Upload</h2>
    </div>
</div>

<div id="portfolio">
<div class="container">


<form action="uploads.php" method="post" enctype="multipart/form-data">
<fieldset id="drop">
<legend>Browse to choose files to upload here.</legend>
<p>Choices include standard image formats such as .jpg, .jpeg, .png, .gif.</p>

<label for="user">Item Type </label>
<!-- <input type="text" name="user" id="user" size="30" placeholder="furniture or artscraft or antiques or household" accesskey="u" tabindex="24"  required /> -->
<select id="user" name="user" tabindex="19">
   <option value="">Choose...</option>
   <option value="furniture">Furniture</option>
   <option value="artscraft">Arts & Crafts</option>
   <option value="antiques">Antiques</option>
   <option value="household">Household</option>
</select>

<br>

<label for="price">Item Price</label>
<input type="text" name="price" id="price" size="30" placeholder="$" accesskey="u" tabindex="22"  required />
<br>

<label for="title">Item Title</label>
<input class="form-control" type="text" name="title" id="title" size="30" placeholder="title" accesskey="u" tabindex="21"  required />
<br>

<label for="description">Item Description </label>
<input class="form-control" type="text" name="description" id="description" maxlength="140" placeholder="Details" accesskey="u" tabindex="20"  required />
<br>

<label for="upl"><a>Browse</a></label>

<label for="folder">Item Number</label>
<input type="text" name="folder" id="folder" size="30" placeholder="number" accesskey="u" tabindex="23"  required />

<input type="file" name="upl[]" id="upl" multiple="true" tabindex="1" required/>

   <ul><!-- file list goes here -->
   
   </ul>
<label for="uploads" class="required">
<input type="submit" name="uploads" id="uploads" value="Upload." />
</label>
<label for="cancel">
<input type="reset" name="cancel" id="cancel" value="Clear this form." />
</label>
</fieldset>



</form>
</div>
</div>
</section>
