<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>

  <script src="../js/jquery-3.5.1.min.js"></script>

  <!--     <script src="../js/edit-user1.js"></script>
 -->

  <!-- Bootstrap file -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Custom Css file -->
  <link rel="stylesheet" href="../css/theme.css">
  <link rel="stylesheet" href="../css/select2.min.css">
  <link rel="stylesheet" href="../css/properties.css">
  <link rel="stylesheet" href="../css/user.css">
  <link rel="shortcut icon" href="#" type="image/x-icon">
</head>
<style>
/* .info-modal:hover{

} */
</style>
<body>

  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top main_nav">
      <a class="navbar-brand" href="#"><span style="color : #ff4a4a; margin-left:30px;">User</span> Page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto text-right">
          <li class="nav-item">
            <a class="nav-link log_reg" href="#">Logged in as <span style="color : #ff4a4a;  text-transform: uppercase;"><strong><?php echo $logged_as; ?></strong></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link log_reg" href="logout.php"><span style="color : #00346b">LogOut</span></a>
          </li>
        </ul>
      </div>
    </nav>


    <div class="sidebar" id="sidebar">
      <ul>
        <li><a href="#" id="home" class="btn">
            <span class="title">PROPERTIES</span>
          </a></li>
        <li><a href="#" id="save_file" class="btn">
            <span class="title">SEARCH PROPERTIES</span>
          </a></li>
        <li><a href="#" id="print_file" class="btn">
            <span class="title">CONFIRMATION</span>
          </a></li>
      </ul>
    </div>


    <div class="inside_part">
      <div class="part_1">
        <div class="container">
          <ul class="list-unstyled">
            <!-- Products -->
            <?php
            foreach ($property_info as $i => $p_info) : ?>
              <form action="interested_property.php" method="POST">
                <li class="card border shadow-none mb-3 mb-md-5">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img class="card-img" src="../image/<?php echo  $p_info['image']; ?>" alt="Image Description">
                    </div>

                    <div class="col-md-8">
                      <div class="card-body">
                        <div class="mb-2">
                          <a class="d-inline-block text-body small font-weight-bold mb-1" href="#"><?php echo  $p_info['house_no']; ?>/<?php echo  $p_info['street']; ?>,<?php echo  $p_info['area']; ?>,<?php echo  $p_info['thana']; ?>,<?php echo  $p_info['district']; ?></a>
                          <span class="badge badge-success badge-pill ml-1" <?php if ($p_info['status'] == "Booked") { ?> style="background-color:red;" <?php } ?> <?php if ($p_info['status'] == "Someone Interested") { ?> style="background-color:yellow; color:black;" <?php } ?>>
                            <?php
                            /*   if($p_info['status']=="Someone Interested"){
                    if($interested_people>0){
                      echo $interested_people;
                      echo " ";
                      echo "People Interested";
                    }
                    else
                    {
                      echo $p_info['status'];
                    }                   
                  }
                  else */

                            echo $p_info['status'];


                            ?>
                          </span>
                          <span class="d-block font-size-1">
                            <a class="text-inherit" href="#">Floor :<?php echo  $p_info['floor']; ?> Room no :<?php echo  $p_info['room']; ?></a><br>
                            Email :<a class="text-inherit" href="mailto:<?php echo  $p_info['email']; ?>"><?php echo  $p_info['email']; ?> </a><br>
                            Contact :<a class="text-inherit" href="tel:88 <?php echo  $p_info['contact']; ?>"><?php echo  $p_info['contact']; ?></a>

                          </span>
                          <!-- <span data-toggle="tooltip" data-placement="right" placement="right"
                          title="Water Supply: <?php  echo $p_info['water_supply'] ?> Gas Supply: <?php  echo $p_info['gas_supply'] ?>
                          Electricity Supply: <?php  echo $p_info['electricity_supply'] ?>
                          Security Guard: <?php  echo $p_info['security_guard'] ?>
                          Security Camera: <?php  echo $p_info['security_camera'] ?>
                          Garage: <?php  echo $p_info['garage'] ?>
                          "> -->
                          <?php
                        echo $p_info['rating'];
                        if($p_info['rating']){
                            if(is_float(5-$p_info['rating'])){
                              $float_val = 5-$p_info['rating'];
                              $val = strval($float_val);
                              if(!empty(explode(".", $float_val)[1])){
                                $val2 = explode(".", $float_val)[1];
                                // print_r($val2);
                                // print_r "val2----".$val2;
                              }else{
                                $val2 = 0;
                              }
                              for($i=1;$i<=$p_info['rating'];$i++){
                                  echo '<i class="fa fa-star" style="color:orange"></i>';
                              }
                              if($val2 === '5'){
                                for($i=1;$i<=1;$i++){
                                  echo '<i class="fa fa-star-half-o"" style="color:orange"></i>';
                                }
                              }
                              for($i=1;$i<=5-$p_info['rating'];$i++){
                                echo '<i class="fa fa-star-o"" style="color:orange"></i>';
                              }
                            }
                          
                        }
                        else{
                          echo "<i class='fa fa-star' style='color:orange'></i>" ;
                        }
                        ?>
                        </span>

                        <!-- Modal -->
                        <div class="modal modal-dialog modal-dialog-centered" id="<?php echo $p_info['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Star Info</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Water Supply: <?php  echo $p_info['water_supply'] ?><br>
                                Gas Supply: <?php  echo $p_info['gas_supply'] ?><br>
                                Electricity Supply: <?php  echo $p_info['electricity_supply'] ?><br>
                                Security Guard: <?php  echo $p_info['security_guard'] ?><br>
                                Security Camera: <?php  echo $p_info['security_camera'] ?><br>
                                Garage: <?php  echo $p_info['garage'] ?>"
                              </div>
                            </div>
                          </div>
                        </div>

                        <span class="info-modal" data-toggle="modal" data-target="#<?php echo $p_info['id']?>" style="cursor: pointer">
                          <i class='fa fa-info' style='
                                background: transparent;
                                color: orange;
                                border: 1px solid orange;
                                padding: 4px 9px;
                                border-radius: 30px;
                                font-size: 14px;
                                margin-left: 10px;'>
                            </i>
                          </span>
                          <div class="d-block">
                            <span class="h5">৳<?php echo  $p_info['price']; ?></span>
                            <span class="h5"><?php echo $user_id; ?></span>
                            <span class="h5"><?php echo $p_info['property_id']; ?></span>
                          </div>
                          <div class="show_map">

                            <!--                 <div id="googleMap" style="width: 700px;height:300px;"></div>
 -->
                            <input type="hidden" id="latitude" value="<?php echo $p_info['latitude']; ?>">
                            <input type="hidden" id="longitude" value="<?php echo $p_info['longitude']; ?>">

                          </div>
                          <a class="text-inherit" href="../show_map.php?latitude=<?php echo $p_info['latitude'] ?> && longitude=<?php echo $p_info['longitude'] ?>"><span style="color:red;">View Full Size Map</span></a><br>

                        </div>

                        <div class="mb-3">
                        </div>
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                        <input type="hidden" name="p_id" value="<?php echo $p_info['property_id']; ?>">
                        <!-- <input type="hidden" name="p_id" value="<?php echo $p_info['id']; ?>"> -->

                        <button type="submit" <?php if ($p_info['status'] == "Booked") {  ?> disabled="disabled" <?php } ?> <?php foreach ($check_user_id as $i => $check) :
                                                                                                                              if ($check['user_id'] == $user_id and $check['p_details_id'] == $p_info['property_id']) { ?> disabled="disabled" <?php }
                                                                                                                                                                                                                                endforeach;

                                                                                                                                                                                                                                    ?> id="submit" name="interested" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover mr-1">Interested</button>


                      </div>

                    </div>
                  </div>
                </li>
              </form>
              <!-- End Products -->
            <?php endforeach; ?>
            <!-- End Products -->
          </ul>
        </div>
      </div><!-- end part_1 -->



      <div class="part_2">
        <div class="save_file">
          <table class="table table-hover">
            <thead class="bg-info th">
              <tr>
                <th scope="col">House No</th>
                <th scope="col">House Area</th>
                <th scope="col">Thana</th>
                <th scope="col">Floor</th>
                <th scope="col">ROOM</th>
                <th scope="col">CONFIRM</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach ($confirm as $i => $show) : ?>
                <tr>
                  <td><?php echo $show['house_no'] ?></td>
                  <td><?php echo $show['area'] ?></td>
                  <td><?php echo $show['thana'] ?></td>
                  <td><?php echo $show['floor'] ?></td>
                  <td><?php echo $show['room'] ?></td>
                  <td><?php $con = $show['confirm'];
                      if ($con == "yes") {
                        echo "<span style='color:green;'>Confirmed Successfully";
                      } elseif ($con == "rejected") {
                        echo "<span style='color:red;'>Rejected";
                      } else {
                        echo "<span style='color:orange;'>Pending";
                      } ?></td>
                </tr>
              <?php endforeach; ?>


            </tbody>
          </table>
        </div><!-- end save file -->
      </div><!-- end part_2 -->

      <div class="part_3">
        <div class="search-box">

          <nav class="navbar navbar-dark bg-success justify-content-between">
            <form action="search_properties.php" method="POST" class="form-inline">
              <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" size=50 aria-label="Search">
              <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" id="">
              <button name="search_properties1" class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit">Search</button>
            </form>
          </nav>
        </div>
      </div><!-- end search-box -->
    </div><!-- end part_3 -->


  </div><!-- end inside_part -->
  </div><!-- end contaiber -->




  <script>
    function initMap() {
      "use strict"
      let latitude1 = $('#latitude').val();
      let longitude1 = $('#longitude').val();

      var latitude2 = parseFloat(latitude1);
      var longitude2 = parseFloat(longitude1);


      console.log(latitude1);
      console.log(longitude1);

      console.log(latitude2);
      console.log(longitude2);


      const uluru = {
        lat: latitude2,
        lng: longitude2
      };
      // The map, centered at Uluru
      const map = new google.maps.Map(document.getElementById("googleMap"), {
        zoom: 18,
        center: uluru,
      });
      // The marker, positioned at Uluru
      const marker = new google.maps.Marker({
        position: uluru,
        map: map,
      });
    }
  </script>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgEFd1S4iVxaQwAFrRJg5gmtYd3RW2wRc&callback=initMap"></script>

  <script type="text/javascript">
    document.getElementById('home').addEventListener("click", function() {
      document.querySelector('.part_1').style.display = "flex";
      document.querySelector('.part_2').style.display = "none";
      document.querySelector('.part_3').style.display = "none";

    });
    document.getElementById('save_file').addEventListener("click", function() {
      document.querySelector('.part_1').style.display = "none";
      document.querySelector('.part_2').style.display = "none";
      document.querySelector('.part_3').style.display = "flex";

    });
    document.getElementById('print_file').addEventListener("click", function() {
      document.querySelector('.part_1').style.display = "none";
      document.querySelector('.part_3').style.display = "none";
      document.querySelector('.part_2').style.display = "flex";

    });
  </script>


  <!--   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>