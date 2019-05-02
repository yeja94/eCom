<?php $pagetitle="Admin Page"; ?>

<?php 
$sitename="Xie PDX Furnitures"; 
$sitedescription="eCommerce Website"; 
$siteowner="Jessica Jang";
$sitepath="http://xiefurnitures.com/home/"; 
?>

<link href="<?php echo $sitepath; ?>css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Custom styles for this template -->
<link href="<?php echo $sitepath; ?>css/style.css" rel="stylesheet">

<body>
<div id="portfolio">
    <div class="text-center">	
            <div class="section-title">
                <h1><?php echo $pagetitle; ?></h1>
                <h2>List of household Items</h2>
            </div>
        </div>

        <div class="col-lg-12 text-center">
			<a href="<?php echo $sitepath;?>form/index.php"><button class="btn">Uploads</button></a>
            <a href="delete.php"><button class="btn">Delete</button></a>
            <a href="household.php"><button class="btn">household</button></a>
            <a href="<?php echo $sitepath;?>form/uploads/antiques/admin_info.php"><button class="btn">Antiques</button></a>
            <a href="<?php echo $sitepath;?>form/uploads/artscraft/admin_info.php"><button class="btn">Art&Craft</button></a>
            <a href="<?php echo $sitepath;?>form/uploads/furnitures/admin_info.php"><button class="btn">Furnitures</button></a>
            <a href="<?php echo $sitepath;?>index.php"><button class="btn">Home</button></a>
		<div>   

<div class="container">         	     
    <?php

        $d = dir(".");
        //$d_p = dir("../furnitures/");
    
        while (false !== ($entry = $d->read()))
        {
            $dir_path="$entry/";
            //echo "$dir_path";

            if (is_dir($entry) && ($entry != '.') && ($entry != '..'))

                echo "
                              
                    <li class=\"li-margin\">
                                                       
                        {$entry}
                                       
                    </li>                  
                    
                ";
    
            
        }
    ?>
     
  </div>
</div>


</section>



    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
