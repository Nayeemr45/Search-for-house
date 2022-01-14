<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Property</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!--     <link rel="stylesheet" href="../css/theme.css">
 -->
  <link rel="stylesheet" href="../css/select2.min.css">
  <link rel="stylesheet" href="../css/properties.css">
  <!--     <link rel="stylesheet" href="../css/owner.css">
 -->
</head>

<body>
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
                    <span class="d-block font-size-1">
                      <a class="text-inherit" href="#">Floor :<?php echo  $p_info['floor']; ?> Room no :<?php echo  $p_info['room']; ?></a>
                      <span class="badge badge-success badge-pill ml-1" <?php if ($p_info['status'] == "Booked") { ?> style="background-color:red;" <?php } ?> <?php if ($p_info['status'] == "Someone Interested") { ?> style="background-color:yellow; color:black;" <?php } ?>>
                        <?php
                        echo $p_info['status'];
                        ?>
                      </span><br>
                    </span>
                    <span><?php
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
                    <div class="d-block">
                      <span class="h5">৳<?php echo  $p_info['price']?></span>
                    </div>
                  </div>
                  <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                  <input type="hidden" name="p_id" value="<?php echo $p_info['id']; ?>">

                  <button type="submit" <?php
                                        if ($p_info['status'] == "Booked") { ?> disabled="disabled" <?php } ?> <?php foreach ($check_user_id as $i => $check) :
                                                                                                                  if ($check['user_id'] == $p_info['user_id'] and $check['p_details_id'] == $p_info['id']) { ?> disabled="disabled" <?php }
                                                                                                                                                                                                                                endforeach;

                                                                                                                                                                                                                                    ?> id="submit" name="interested" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover mr-1">Interested</button>
                  <!--               <button type="submit" <?php if ($p_info['status'] == "Booked") { ?> disabled="disabled" <?php } ?><?php if ($check_user_id == $user_id && $check_p_id == $p_info['id']) { ?> disabled="disabled" <?php } ?>  id="submit" name="interested" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover mr-1">Interested</button>
     -->
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>