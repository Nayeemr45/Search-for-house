<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>

<div class="container-fluid">
  <div class="main">
    <div class="nav_bar">
      <div class="logo">
       <img src="image/LOGO1.png" alt="Logo">
       </div>
      <div class="menu">
        <ul>
           <li><a href="index.php">home</a></li>
              <li><a href="properties.php">properties</a></li>


                       <li><a href="contact.php">contact</a></li>
                         <li><a href="about.php">About us</a></li>

        </ul>
      </div>

   </div>
    <div class="heading">
  </div>
<!--- -->

<div class="main_button">
<button id="log" type="button" class="btn  btn-secondary btn-lg but_css1">Login</button>
 <button id="reg" type="button" class="btn btn-secondary btn-lg but_css">Register</button>
<a href="index.php"><button type="button" class="btn btn-secondary btn-lg but_css">Back to Home</button>
</a>

<div class="second_button">
 <label for="log2">If you are an owner then</label>
 <a href="registration2.php"><button id="log2" type="button" class="btn btn-secondary btn-lg but_css">Login or Register</button>
</a>
 </div>
</div>


 <form action="controller/createUser.php" method="POST" enctype="multipart/form-data" id="type">
<div class="register">
<div class="register_content">
<div class="left">

<div class="form-group">
 <label for="user_name">User Name :</label>
 <input type="text" id="username" name="username" class="form-control"  placeholder="Enter User Name" required>
</div>
<div class="form-group">
 <label for="email">Email :</label>
 <input type="email" id="email" name="email" class="form-control"  placeholder="Enter Email" required>
</div>
<div class="form-group">
 <label for="password">Password :</label>
 <input type="password" id="password" name="password" class="form-control"  placeholder="Enter Password" required>
</div>


</div><!-- end left -->
<div class="right">
 <div class="form-group">
   <label for="contact">Contact :</label>
   <input type="text" id="contact_no" name="contact_no" class="form-control"  placeholder="Enter mobile no" required>
 </div>

 <div class="type">
<label for="Type">Select Type :</label>

<select class="form-control  id="type" name="type" form="type">

<option value="bachelor">Bachelor</option>
<option value="family">Family</option>
</select>
</div>
<label for="Type">Select member :</label>

 <select class="form-control  id="type" name="members" form="type">

<option value="1-3">1-3</option>
<option value="1-6">1-6</option>
<option value="1-8">1-8</option>
<option value="1-10">1-10</option>
</select>


<div class="but">
<button type="submit" name = "createUser" class="btn btn-primary">Register</button>
</div>
</div><!-- end right -->
</div> <!-- end_register_content -->

</div><!-- end register -->
</form>


<div class="login_css">
<form action="controller/User_login.php" method="POST" enctype="multipart/form-data" id="type>
<div class="form-group">

<div class="form-group">
 <label for="user_name">User Name :</label>
 <input type="text" id="username" name="username" class="form-control"  placeholder="Enter User Name" required>
</div>
<div class="form-group">
 <label for="password">Password :</label>
 <input type="text" id="password" name="password" class="form-control"  placeholder="Enter Password" required>
</div>
<div class="but">
<button type="submit" name = "User_login" class="btn btn-primary">Login</button>
</div>
</form>
</div><!-- end login_css -->






 </div><!-- end container -->


<!-- -->
  </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
          document.getElementById('log').addEventListener("click", function()
          { document.querySelector('.login_css').style.display = "flex";
            document.querySelector('.register').style.display = "none";

            document.getElementById('log').style.backgroundColor ="#007bff";
           document.getElementById('log').style.borderColor ="#007bff";
           document.getElementById('reg').style.borderColor ="#6c757d";
           document.getElementById('reg').style.backgroundColor ="#6c757d";
         });
           document.getElementById('reg').addEventListener("click", function()
           { document.querySelector('.register').style.display = "flex";
           document.getElementById('reg').style.backgroundColor ="#007bff";
           document.getElementById('reg').style.borderColor ="#007bff";
           document.getElementById('log').style.borderColor ="#6c757d";
           document.getElementById('log').style.backgroundColor ="#6c757d";
            document.querySelector('.login_css').style.display = "none";
         });
        </script>
</body>
</html>
