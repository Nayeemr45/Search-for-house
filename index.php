<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search for house</title>
    <script src="js/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="main">
      <div class="nav_bar">
        <div class="logo">
         <img src="image/LOGO1.png" alt="Logo">
         </div>
        <div class="menu">
          <ul>
             <li><a style="color:black;font-weight: 600;"href="index.php">home</a></li>
<!--                 <li><a href="properties.php">properties</a></li>
 -->

                         <li ><a style="color:black;font-weight: 600;" href="contact.php">contact </a></li>
                           <li><a style="color:black;font-weight: 600;"href="about.php">About us</a></li>
                           <li id="sbutton"style='border:2px solid green;padding:5px 5px;border-radius:5px;'><a style="color:black;font-weight: 600;"href="registration.php">login or sign up</a></li>


          </ul>
        </div>

     </div>
      <div class="heading">
      <h1 style="color:black">Find Your Perfect Place</h1>
    </div>
    <div class="search-box">

      <nav class="navbar navbar-dark  justify-content-between">
      <form action="controller/search_properties2.php" METHOD="POST" class="form-inline">
      <input class="form-control mr-sm-2" type="search" id="search" name="search" placeholder="Search" autocomplete="off" size=50 aria-label="Search">
      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
      <button style="color:black;"name="search_properties"  class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit">Search</button>
      </form>
      </nav>

      <div class="col-md-5" style="position: relative;margin-top: -8px;margin-left: 1px;">
        <div class="list-group" id="show-list">
          <!-- Here autocomplete list will be display -->
        </div>
      </div>


    </div><!-- end search-box -->

    </div>

    <div class="main2">
      <div class="part1">
        <img style="margin-left:40%;margin-top:5%;"src="image/home.png" alt="yoo"><br>
        <p class="pp">"Find your home"</p><br>
        <p style="top:50%;">We provide you the best service in the town within your limit.You can get your dream house in a short period of time.So,you should grab this oppurtunity for your bright future.</p>

      </div>
      <div class="part2">
        <img style="margin-left:40%;margin-top:5%;" src="image/help.png" alt="yoo"><br>
        <p class="pp">"Query and Solution"</p><br>
        <p style="top:50%;">We answer all your queries 24/7 by personal discussion.You can share all your demands & problems through our section :client overview.Your luxury is our dignity</p>

      </div>
      <div class="part3">
        <img style="margin-left:40%;margin-top:5%;"src="image/pin.png" alt="yoo"><br>
        <p class="pp">"Location"</p><br>
        <p style="top:50%">You can find all the available apartments in your desired area (Area which cover our range).You can simply find the easiest route to your dream home & observe the location.</p>
      </div>


    </div>

    <footer>
    <div class="footer">
       <p>© Copyright 2020, All Rights Reserved</p>
    </div>
    </footer>

<script>
  $(document).ready(function () {
  // Send Search Text to the server
  $("#search").keyup(function () {
    let searchText = $(this).val();
    if (searchText != "") {
      $.ajax({
        url: "controller/action.php",
        method: "post",
        data: {
          query: searchText,
        },
        success: function (response) {
          $("#show-list").html(response);
        },
      });
    } else {
      $("#show-list").html("");
    }
  });
  // Set searched text in input field on click of search button
  $(document).on("click", "a", function () {
    $("#search").val($(this).text());
    $("#show-list").html("");
  });
});
</script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 -->        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>
