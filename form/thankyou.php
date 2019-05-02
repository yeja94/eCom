
<?php

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