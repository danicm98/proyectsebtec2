<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <title>SignUp</title>
   
    <link href="../styles/admin.css" rel="stylesheet" type="text/css">
	
  </head>
  <body>


    

    <h1>SignUp</h1>
    

    <form action="registrar_controller" method="POST">
      <input name="name" type="text" placeholder="Enter your name">
      <input name="password" type="password" placeholder="Enter your Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
	  
	  <?php if(!empty($message)): ?>
      <center><p> <?= $message ?></p>
    <?php endif; ?>
	  
	  
	  
      <input type="submit" value="Submit">
	  
	  
	  
    </form>
	
	
	<br>
	<center><a href="../index" class="back" >Back</a><center>
		
	

  </body>
</html>
