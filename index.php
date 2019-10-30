<?php include 'starter.php'; ?>
<?php
	

  	if(filter_has_var(INPUT_POST, 'submit')){
      $name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['msg']);
      
    $to="shuklaharshit516@gmail.com,shuklaharshit515@gmail.com";

    $msg ="$message \n Name:$name \n email: $email";

    $subject ='For research purposes';

    $headers = "From $name email:  $email \r\n";
    $headers .= "Content-type: text/html \r\n";

    //send mail

   if(mail($to,$subject,$msg,$headers)){
     echo "success";
   }else{
     echo "failed";
   }
    }
?>

<div class="container mt-5">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="test" class="form-control" name="name" id="name" required>
  </div>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>

  <div class="form-group">
    <label for="msg">Message:</label>
    <textarea type="email" class="form-control" id="msg" name="msg" ></textarea>
  </div>
 
  <button type="submit" name="submit" class="btn btn-outline-secondary">Submit</button>
</form>
</div>

<?php include 'ending.php'; ?>


 