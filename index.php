<?php

$error = ""; $successMessage = "";
if ( $_SERVER['REQUEST_METHOD'] === 'POST' )
{
if ($_POST){
    if (!$_POST["email"]){
        $error .= "An email address is required. <br>";
    }

    if (!$_POST["subject"]){
        $error .= "A subject is required. <br>";
    }
    
    if (!$_POST["message"]){
        $error .= "The message field is required. <br>";
    }

    if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    
        $error .= "The email address is not a valid. Please, check it and try again.";
    }

    if ($error != ""){
        $error = '<div class="alert alert-danger" role="alert"><strong><p>There were errors in your form.</p></strong>'.$error.'</div>';
    }else {
        $emailTo = "nght.crwlr@yahoo.com";
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $headers = "From: ".$_POST['email'];
        if (mail($emailTo, $subject, $headers, $message)){
            $successMessage = '<div class="alert alert-success" role="alert"><p> You have successfully sent a message</p></div>';
        }else {
            $error = '<div class="alert alert-danger" role="alert"><strong><p>Your message couldn\'t be sent.</p></strong></div>';
        }
    }
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="section">
        <h1>Get in touch!</h1>
        <div id="error"><? echo $error.$successMessage; ?>
        </div>
    <form method="post" action="index.php">
        <fieldset class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </fieldset>
        <fieldset class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject">
        </fieldset>
        <fieldset class="form-group">
            <label for="message">Your message</label>
            <textarea class="form-control" id="message" placeholder="What would you like to talk about?" name="message" rows="3"></textarea>
        </fieldset>
        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
    

    $("form").submit(function (e){

        var errorString = ""

        if($("#email").val() == ""){
            errorString += "<p>Please enter a valid email address.</p>"
        }

        if($("#subject").val() == ""){
            errorString += "<p>The subject field is required.</p>"
        }
                
        if($("#message").val() == ""){
            errorString += "<p>A message is required.</p>"
        }
                
        
        
        if (errorString != ""){
            $("#error").html('<div class="alert alert-danger" role="alert"><strong><p>There were errors in your form.</p></strong>' + errorString + '</div>')

            
            return false;

        }else {
            return true;
        }
    })
</script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>
</html>






