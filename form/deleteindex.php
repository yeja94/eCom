<?php $pagetitle='Form'; ?>

<a href="http://people.oregonstate.edu/~yeja/eCom/">Home</a>
<!----------------------- Delete Section ---------------------------->

<form action="deleteindex.php" method="post" enctype="multipart/form-data">
    <fieldset id="drop">
        <legend>Type the folder name to delete.</legend>


        <label for="user">Item Type </label>
        <input type="text" name="user" id="user" size="30" placeholder="furniture or artscraft or antiques" accesskey="u" tabindex="24"  required />

    <br>
        <label for="folder">Folder Number </label>
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
include '../form/uploads/furnitures/pricetag.php';


if($user == 'furniture' && $folder){

    $curdir = getcwd();
    $dir = $curdir."/uploads/furnitures/$folder";

    echo 'Your file ' .$folder. ' and ' .$user. 'is being deleted.';


    //This doesn't delete folders recursively; 
    //it only works if the folder has only regular files in it.
    //if the file has file extension then it won't work.
    array_map('unlink', glob("$dir/*.*"));
    rmdir($dir);
    //delete_directory($folder);
}

?>