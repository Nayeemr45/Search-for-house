<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!--     <link rel="stylesheet" href="../css/theme.css">
 -->    <link rel="stylesheet" href="../css/select2.min.css">
    <link rel="stylesheet" href="../css/properties.css">
<!--     <link rel="stylesheet" href="../css/owner.css">
 -->
</head>
<body>
<div class="container">
        
      


        <ul class="list-unstyled">
          <!-- Products -->
          <?php 
          foreach ($property_info as $i => $p_info):?>
        <form action="interested_property.php" method="POST">                         
          <li class="card border shadow-none mb-3 mb-md-5">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img class="card-img" src="../image/<?php echo  $p_info['image'];?>" alt="Image Description">
              </div>
    
              <div class="col-md-8">
                <div class="card-body">
                  <div class="mb-2">
                    <a class="d-inline-block text-body small font-weight-bold mb-1" href="#"><?php echo  $p_info['house_no'];?>/<?php echo  $p_info['street'];?>,<?php echo  $p_info['area'];?>,<?php echo  $p_info['thana'];?>,<?php echo  $p_info['district'];?></a>
                    <span class="d-block font-size-1">
                      <a class="text-inherit" href="#">Floor :<?php echo  $p_info['floor'];?> Room no :<?php echo  $p_info['room'];?></a>
                      <span class="badge badge-success badge-pill ml-1" <?php if($p_info['status'] =="Booked") {?> style="background-color:red;" <?php } ?> <?php if($p_info['status'] =="Someone Interested") {?> style="background-color:yellow; color:black;" <?php } ?> >
                      <?php 
                      echo $p_info['status'];
                      ?>
                      </span>
                      </span>
                      <div class="d-block">
                      <span class="h5">৳<?php echo  $p_info['price'];?></span>
                    </div>
                  </div>
    
                  <div class="mb-3">
                    <a class="d-inline-flex align-items-center small" href="#">
                      <div class="text-warning mr-2">
                        <i class="far fa-star text-muted"></i>
                        <i class="far fa-star text-muted"></i>
                        <i class="far fa-star text-muted"></i>
                        <i class="far fa-star text-muted"></i>
                        <i class="far fa-star text-muted"></i>
                      </div>
                    </a>
                  </div>
                  <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                  <input type="hidden" name="p_id" value="<?php echo $p_info['id']; ?>">
    
                  <button type="submit" <?php if($p_info['status'] =="Booked") {?> disabled="disabled" <?php } ?> <?php
          foreach ($check_user_id as $i => $check):
            if($check['user_id'] == $user_id and $check['p_details_id'] == $p_info['id']) {?>
    
    
     disabled="disabled" 
    
    <?php }
           endforeach;
    
     ?>  id="submit" name="interested" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover mr-1">Interested</button>
    <!--               <button type="submit" <?php if($p_info['status'] =="Booked") {?> disabled="disabled" <?php } ?><?php if($check_user_id == $user_id && $check_p_id == $p_info['id']) {?> disabled="disabled" <?php } ?>  id="submit" name="interested" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover mr-1">Interested</button>
     -->            </div>
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