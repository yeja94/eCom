<?php $pagetitle='Form'; 
// Original method provided at tutorialzine.com/2013/05/mini-ajax-file-upload-form

include 'index.php';

//include '../form/uploads/furnitures/pricetag.php';
//include '../form/uploads/furnitures/.php';

$user_is_required = 1;
$user = $_POST['user'];

$folder_is_required = 1;
$folder = $_POST['folder'];

$description_is_required = 1;
$description = $_POST['description'];

$price_is_required = 1;
$price = $_POST['price'];

$title_is_required = 1;
$title = $_POST['title'];

//Reply page is created file was uploaded successfully.  
function thankyou($pagetitle, $user, $folder, $price){
    $pagetitle="Thank you, " .$user. "."; 

    echo 'Your file ' .$folder. ' was uploaded successfully.';
    echo '<br>'; 
}

// Define function to create an error page. 
function sorry($pagetitle, $user, $folder){
    $pagetitle="Sorry, " .$user. "." ;
    
        echo 'Your file '.$folder.' was not uploaded. Please do the follow to fix the error: <br>
            1. Try uploading a smaller .png, .jpg, .gif, or .zip file. <br>  
            2. Type the correct item type (furniture, artscraft, or antiques). <br>
            3. Folder number may already exist. Enter different folder number. <br>
            ';
}

// Check file and item type.  

$allowed = array('png', 'jpg', 'jpeg', 'gif', 'PNG', 'JPG');
if(isset($_FILES['upl']) && $_FILES['upl']['error'][0] == 0){         
    $extension = pathinfo($_FILES['upl']['name'][0], PATHINFO_EXTENSION);


    if(!in_array(strtolower($extension), $allowed)){
        //return the sorry page
        sorry($pagetitle, $user, $folder, $price); //see this function defined above.
        exit;
    }
    //====================================Furniture==============================================
    if($user == 'furniture'){
        
        $curdir = getcwd();
        $dir = $curdir."/uploads/furnitures";
        //$uploadDir = "../form/uploads/furnitures/";

        if(mkdir($curdir."/uploads/furnitures/".$folder, 0777)){
            
            //copy("$dir/info.php", "$dir/$folder/info.php");
        
            
            $item_descrip = fopen("$dir/$folder/description.txt", "w") or die("unable to open file"); 
            fwrite($item_descrip, $description);
            fclose($item_descrip);

            $item_price = fopen("$dir/$folder/price.txt", "w") or die("unable to open file"); 
            fwrite($item_price, $price);
            fclose($item_price);

            $item_title = fopen("$dir/$folder/title.txt", "w") or die("unable to open file"); 
            fwrite($item_title, $title);
            fclose($item_title);

            copy("uploads/info.php", "$dir/$folder/info.php");
            
            
            for($i=0; $i < count($_FILES['upl']['name']); $i++ ){

                $ext = substr(strrchr($_FILES['upl']['name'][$i], "."), 1);

                $fpath = $_FILES['upl']['name'][$i] . ".$ext";
                

                //echo "FILE names: ".$_FILES['upl']['tmp_name'][$i]. "<br>";
                $result = move_uploaded_file($_FILES['upl']['tmp_name'][$i], "$dir/$folder/".$fpath);

                if(strlen($ext) > 0){
                    echo "Upload ". $_FILES['upl']['name'][$i] ." succuessfully <br>";
                }
            }
            

            //if(move_uploaded_file($_FILES['upl']['tmp_name'], "$dir/$folder/" . $_FILES["upl"]["name"])){

            thankyou($pagetitle, $user, $folder, $price); //see this function defined above.
            //print_r ($a);
            echo"Directory created! <br>";
            echo "Upload complete! <br>";
            echo "The item $title cost $price dollars <br>";
            echo "This item is descriped as: $description <br>";      
            exit ;
            
        }
    }
//====================================Artscraft==============================================
    else if($user == 'artscraft'){
        $curdir = getcwd();
        $dir = $curdir."/uploads/artscraft";
        

        if(mkdir($curdir."/uploads/artscraft/".$folder, 0777)){
            
            //copy("$dir/info.php", "$dir/$folder/info.php");
        
            
            $item_descrip = fopen("$dir/$folder/description.txt", "w") or die("unable to open file"); 
            fwrite($item_descrip, $description);
            fclose($item_descrip);

            $item_price = fopen("$dir/$folder/price.txt", "w") or die("unable to open file"); 
            fwrite($item_price, $price);
            fclose($item_price);

            $item_title = fopen("$dir/$folder/title.txt", "w") or die("unable to open file"); 
            fwrite($item_title, $title);
            fclose($item_title);


            //creates a new .txt file
            //$display_img = fopen("$dir/$folder/display.php", "w") or die("unable to open file!");
            copy("uploads/info.php", "$dir/$folder/info.php");
            //fwrite($display_img, $copy_info);
            //fclose($display_img);

            for($i=0; $i < count($_FILES['upl']['name']); $i++ ){


                //echo "FILE names: ".$_FILES['upl']['name'][$i]. "<br>";
                $ext = substr(strrchr($_FILES['upl']['name'][$i], "."), 1);

                $fpath = $_FILES['upl']['name'][$i] . ".$ext";
                

                //echo "FILE names: ".$_FILES['upl']['tmp_name'][$i]. "<br>";
                $result = move_uploaded_file($_FILES['upl']['tmp_name'][$i], "$dir/$folder/".$fpath);

                if(strlen($ext) > 0){
                    echo "Upload ". $_FILES['upl']['name'][$i] ." succuessfully <br>";
                    
                    
                }
            }
            -
            thankyou($pagetitle, $user, $folder, $price); //see this function defined above.
            //print_r ($a);
            echo"Directory created! <br>";
            echo "Upload complete! <br>";
            echo "The item $title cost $price dollars <br>";
            echo "This item is descriped as: $description <br>";
            exit ;
        }
    }
    //====================================Antiques==============================================
    else if($user == 'antiques'){

        $curdir = getcwd();
        $dir = $curdir."/uploads/antiques";
        

        if(mkdir($curdir."/uploads/antiques/".$folder, 0777)){
            
            //copy("$dir/info.php", "$dir/$folder/info.php");
        
            
            $item_descrip = fopen("$dir/$folder/description.txt", "w") or die("unable to open file"); 
            fwrite($item_descrip, $description);
            fclose($item_descrip);

            $item_price = fopen("$dir/$folder/price.txt", "w") or die("unable to open file"); 
            fwrite($item_price, $price);
            fclose($item_price);

            $item_title = fopen("$dir/$folder/title.txt", "w") or die("unable to open file"); 
            fwrite($item_title, $title);
            fclose($item_title);

            //creates a new .txt file
            //$display_img = fopen("$dir/$folder/display.php", "w") or die("unable to open file!");
            copy("uploads/info.php", "$dir/$folder/info.php");
            //fwrite($display_img, $copy_info);
            //fclose($display_img);

            for($i=0; $i < count($_FILES['upl']['name']); $i++ ){


                //echo "FILE names: ".$_FILES['upl']['name'][$i]. "<br>";
                $ext = substr(strrchr($_FILES['upl']['name'][$i], "."), 1);

                $fpath = $_FILES['upl']['name'][$i] . ".$ext";
                

                //echo "FILE names: ".$_FILES['upl']['tmp_name'][$i]. "<br>";
                $result = move_uploaded_file($_FILES['upl']['tmp_name'][$i], "$dir/$folder/".$fpath);

                if(strlen($ext) > 0){
                    echo "Upload ". $_FILES['upl']['name'][$i] ." succuessfully <br>";
                    
                    
                }
            }
            
            thankyou($pagetitle, $user, $folder, $price); //see this function defined above.
            //print_r ($a);
            echo"Directory created! <br>";
            echo "Upload complete! <br>";
            echo "The item $title cost $price dollars <br>";
            echo "This item is descriped as: $description <br>";
            exit ;
        }
    }
    //====================================Household==============================================
    else if($user == 'household'){

        $curdir = getcwd();
        $dir = $curdir."/uploads/household";
        

        if(mkdir($curdir."/uploads/household/".$folder, 0777)){
            
            //copy("$dir/info.php", "$dir/$folder/info.php");
        
            
            $item_descrip = fopen("$dir/$folder/description.txt", "w") or die("unable to open file"); 
            fwrite($item_descrip, $description);
            fclose($item_descrip);
            
            $item_price = fopen("$dir/$folder/price.txt", "w") or die("unable to open file"); 
            fwrite($item_price, $price);
            fclose($item_price);

            $item_title = fopen("$dir/$folder/title.txt", "w") or die("unable to open file"); 
            fwrite($item_title, $title);
            fclose($item_title);

            //creates a new .txt file
            //$display_img = fopen("$dir/$folder/display.php", "w") or die("unable to open file!");
            copy("uploads/info.php", "$dir/$folder/info.php");
            //fwrite($display_img, $copy_info);
            //fclose($display_img);

            for($i=0; $i < count($_FILES['upl']['name']); $i++ ){


                //echo "FILE names: ".$_FILES['upl']['name'][$i]. "<br>";
                $ext = substr(strrchr($_FILES['upl']['name'][$i], "."), 1);

                $fpath = $_FILES['upl']['name'][$i] . ".$ext";
                

                //echo "FILE names: ".$_FILES['upl']['tmp_name'][$i]. "<br>";
                $result = move_uploaded_file($_FILES['upl']['tmp_name'][$i], "$dir/$folder/".$fpath);

                if(strlen($ext) > 0){
                    echo "Upload ". $_FILES['upl']['name'][$i] ." succuessfully <br>";
                    
                    
                }
            }
            
            thankyou($pagetitle, $user, $folder, $price); //see this function defined above.
            //print_r ($a);
            echo"Directory created! <br>";
            echo "Upload complete! <br>";
            echo "The item $title cost $price dollars <br>";
            echo "This item is descriped as: $description <br>";
            exit ;
        }
    }
}

//return the sorry page
sorry($pagetitle, $user, $folder); //see this function defined above.
exit;
?>
