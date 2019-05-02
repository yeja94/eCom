<?php $pagetitle='Form'; ?>

<a href="http://people.oregonstate.edu/~yeja/eCom/">Home</a>
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

<!----------------------- Delete Section ---------------------------->

<form action="delete.php" method="post" enctype="multipart/form-data">
    <fieldset id="drop">
        
        <legend>Type the item name to delete.</legend>

        <label for="folder">Item Number </label>
        <input type="text" name="folder" id="folder" size="30" placeholder="numbers" accesskey="u" tabindex="24" required/>
    
    <br>
         <label for="delete" class="required">
            <input type="submit" name="delete" id="delete" value="Delete" />
         </label>
         <label for="cancel">
            <input type="reset" name="cancel" id="cancel" value="Clear this form." />
         </label>
   </fieldset>
</form>

<?php
//include 'pricetag.php';
$user_is_required = 1;
$user = $_POST['user'];

$folder_is_required = 1;
$folder = $_POST['folder'];

$description_is_required = 1;
$description = $_POST['description'];

if($folder){

    $curdir = getcwd();
    $dir = $curdir."/$folder";

    //This doesn't delete folders recursively; 
    //it only works if the folder has only regular files in it.
    //if the file has file extension then it won't work.
    array_map('unlink', glob("$dir/*.*"));
    rmdir($dir);
    echo 'The item ' .$folder. ' has been deleted successfully.';

}else if ($folder == 0){
    echo 'No item ' .$folder. ' has been deleted yet.';
}

?>
<div class="text-center">	
    <div class="section-title">
        <h2>List of Furnitures Items</h2>
    </div>
</div>

<div id="portfolio">
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