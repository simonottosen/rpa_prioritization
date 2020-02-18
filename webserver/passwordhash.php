<?php

if(isset($_POST['submit'])){

$password_string = trim($_POST['password']);


$password_hash = password_hash($password_string, PASSWORD_DEFAULT);



}
 ?>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <link href="signin.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form-signin" style="width:300px;">
<h4> Indtast det password som skal hashes herunder </h4>
   <input type="text" name="password" value="" placeholder="Password" class = "form-control">
   <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Submit</button>

<br/><br/>
<h5> Password-hash: <?php echo $password_hash; ?> <br/> Password: <?php echo $password_string; ?> </h5>

 </form>
