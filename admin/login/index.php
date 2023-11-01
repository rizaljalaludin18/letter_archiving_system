
<!DOCTYPE html>
<?php
	session_start();
	include "ceksessionn.php";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Bootstrap Login Form Example</title>
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
      <link rel="stylesheet" href="../../css/style-login.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="../../css/demo.css">
  
  </head>
  <body>

  
 <main>
  <article>
  <div class="wrapper">
    <form action="proses_login.php" id="login" name="login" method="post" class="form-signin">
      <h2 class="form-signin-heading">Login Admin</h2>
      <input type="text" class="form-control" id="username" name="username_admin" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required=""/>      
     
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>  
      <br/> 
      <label >
        <a href="../../index.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</button></a>
      </label>
    </form>
  </div>
  </article>
 </main>
 
  </body>
</html>