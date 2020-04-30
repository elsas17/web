<?php
//apakah submit sudah di pencet
   if( isset($_POST["kirim"]) ){
   	
   	//cek user dan pass
		if( $_POST ["user"] == "hendra" && 
		 $_POST["pass"] == "ganteng"){
		 	
		 	//jika benar redirect
  header("Location: admin.php");
  exit;
  
}
//jika salah tampilkan kesalahan
else{
 $error = true;
 }
}
?>

<html>
	<head>
<title> LOGIN PAGE </title>
<style>
   .tengah {
      background-color: blue;
      color: white;
      border : 5px solid red;
      width: 200px ;
      height: 200px ;
      margin: 10% auto;
      padding : 10px 10px 40px 10px ;
      
     
   }
   body{
      background-color: yellow;
     
   }

</style>
    </head>
<body>

	
	
            <form action="" method="POST" class="tengah">
           <h1> SILAHKAN LOGIN </h1>
           <?php if(isset($error)) : ?>
		<p style="color : red; font-style : italic" ><strong>username/password salah</strong></p>
		<?php endif; ?>
              <label for="username"> <strong>username</strong> </label>
              <input type="text" name="user" id="username">
              <br>
              <label for="password" ><strong>password</strong></label>
              <input type="password" name="pass" id="password">
              <br>

              <button type="submit" name="kirim" >LOGIN</button>
            </form>
  </body>
</html>