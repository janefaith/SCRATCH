<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link href="css/login.css" rel="stylesheet" type="text/css" media="screen" />
<link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />

<title>Login</title>

<script src="lib/jquery.js" type="text/javascript"></script>
 <script src="facebox/facebox.js" type="text/javascript"></script>

 
<br><br><br><br><br><br><br><br>

<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'facebox/loading.gif',
        closeImage   : 'facebox/closelabel.png'
      })
    })
  </script>
  
<body background="images/diagonal.jpg">
<form>
          <div class="box">
            <h1>STUDENT'S LOGIN</h1>
            <label>
               <span>Username:</span>
               <input type="text" class="input_text" name="username" id="username"/><br><br>
            
               <span>Password:</span>
               <input type="text" class="input_text" name="password" id="password"/><br><br>
			     <input type="button" class="button" value="LOGIN" style="font: bold 14px Arial"/>				 
            </label>
			
             <label>
			 <div class="left">
               <span>Need an account?</span>
			   <a rel="facebox" href="register-form.php"> 
			   <input type="button" class="submit" value="REGISTRATION" style="font: bold 14px Arial;"/>
			   </a>
			   </div>
            </label>
            
             		         
            
         </div>
    </form>

</body>
</html>

