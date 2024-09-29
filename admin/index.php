<!DOCTYPE html>
<html>
<head>
  <title>Media Pembelajaran</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
 
 <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/font-awesome.css" rel="stylesheet">
   <script src="asset/js/jquery.min.js"></script>
   <link href="fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">
   <script src="assets/js/bootstraps.min.js"></script>
 </head>
 <body id="Login">
  <div class="Login-logo">
  </div>
  <h2 class="form-heading">login admin</h2>
  <div class="app-cam">
    <form name="submit" method="post" class="form-horizontal" id="form_login" action="loginproses.php">
      <input type="text" class="text" value="Username" name="username" onfocus="this.value = '';" onblur="if (this.value == '')">
      <input type="password" value="password" name="password" onfocus="this.value = '';" onblur="if (this.value =='')">
      <div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
    </form>
  </div>
  <div class="copy_layout login">
    <p>Copyright & copy; Media Pembelajaran</p>
  </div>
</body>
</html>

