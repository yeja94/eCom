<!DOCTYPE html>
<head>
	<?php 
		$sitename="PDX Chinese Furnitures"; 
      	$sitedescription="eCommerce Website"; 
     	$siteowner="Jason Ye";
     	$sitepath="http://people.oregonstate.edu/~yeja/eCom/"; 
	?>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

	<meta name="description" content="<?php echo $sitedescription; ?>" />
	<meta name="author" content="<?php echo $siteowner; ?>" />
	<meta name="Robots" content="noindex, nofollow, noarchive" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta name="keywords" content="<?php echo $sitedescription; ?>" />


	<title>Project1</title>
	
	<meta name="description" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<!--<link rel="stylesheet" type="text/css" href="http://people.oregonstate.edu/~yeja/eCom/css/main.css"/> -->

	<link href="<?php echo $sitepath; ?>css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Custom styles for this template -->
	<link href="<?php echo $sitepath; ?>css/style.css" rel="stylesheet">
	
	</head>	
	
	
	
<body>
<main class="main">
<h1><?php echo $pagetitle; ?></h1>
			
<div class="text-center">	
        <div class="section-title">
            <h2>List of Sale Items</h2>
        </div>


    <div id="portfolio">
        <div class="container">
                            
        <?php  

        //include '../uploads/furnitures/pricetag.php';
    
            $d = dir(".");
            //$d_p = dir("../furnitures/");

            while (false !== ($entry = $d->read()))
            {
                $dir_path="$entry/";
                //echo "$dir_path";

                if (is_dir($entry) && ($entry != '.') && ($entry != '..'))
                
                echo "
                                
                        <li class=\"li-margin\">
                        <a href=\"$dir_path/admin_info.php\" data-toggle=\"modal\" data-target=\"#modal\">               
                            {$entry}
                        </a>                  
                        </li>
                    
                    ";
                $extensions_array=array('jpg','png','jpeg');  
                if(is_dir($dir_path)){
                    $files=scandir($dir_path);

                    //$folder=scandir($dir_path);
                    //echo $folder['filename'], "\n";

                    //echo "$file";

            
                    for($i=0; $i < count($files) - 8; $i++){
                        
                        if($files[$i] != '.' && $files[$i] != '..'){
                            
                            //get file extension
                            $file=pathinfo($files[$i]);
                            $extension=$file['extension'];
                            
                            //check file extension
                            if(in_array($extension, $extensions_array)){
                            $num = $i - 1;
                            //$info = 'info.html';
                            echo "
                            <div class=\"item-col-md-3\">
                                <div class=\"team-item\">

                                    
                                    <a href=\"info.php\" data-toggle=\"modal\" data-target=\"#modal\">
                                                <figure class=\"effect-bubba\">
                                                    <div class=\"team-image\">
                                                        <div class=\"image-container\">
                                                                                                    
                                                            <img src='$dir_path$files[$i]' class=\"img-responsive\" alt=\"author\">
                                                        </div>
                                                    </div>    
                                                    <figcaption>                                                  
                                                        <h2>$entry</h2>
                                                                                                    
                                                        

                                                    </figcaption>
                                                </figure>
                                    </a>                                                        
                                </div>
                            </div>
                            
                            ";
                
                        }
                    }
                }
            }
        
        }
    ?>

        
    </div>
    </div>
</div>	
																	
		

		
	

	<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/SmoothScroll.js"></script>
		<script src="js/theme-scripts.js"></script>

    

</body>
</html>