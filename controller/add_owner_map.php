<?php

require_once '../model.php';

/* 
$latitude  = $_POST['lat'];
$longitude = $_POST['long'];
 */
$data['latitude'] = $_POST['lat'];
$data['longitude'] = $_POST['long'];


$data['house_no'] = $_POST['house_no'];
$data['street'] = $_POST['street'];
$data['area'] = $_POST['area'];
$data['thana'] = $_POST['thana'];
$data['district'] = $_POST['district'];
$data['floor'] = $_POST['floor'];
$data['room'] = $_POST['room'];
$data['price'] = $_POST['price'];
$data['id'] = $_POST['id'];
// Image
$image_name = $_POST['image_name'];
// ratings
$data['water_supply'] = $_POST['water_supply'];
$data['gas_supply'] = $_POST['gas_supply'];
$data['electricity_supply'] = $_POST['electricity_supply'];
$data['security_guard'] = $_POST['security_guard'];
$data['security_camera'] = $_POST['security_camera'];
$data['garage'] = $_POST['garage'];

$rating = 0;
if($data['water_supply'] === 'wasa'){
	$rating += 0.5;
}
if($data['water_supply'] === 'deep'){
	$rating += 0.5;
}
if($data['water_supply'] === 'both'){
	$rating += 1;
}
if($data['gas_supply'] === 'yes'){
  $rating += 1;
}
if($data['electricity_supply'] === 'yes'){
  $rating += 1;
}
if($data['security_guard'] === 'yes'){
  $rating += 0.5;
}
if($data['security_camera'] === 'yes'){
  $rating += 0.5;
}
if($data['garage'] === 'yes'){
  $rating += 1;
}





 addproperties($data, $image_name, $rating);
/*
if (move_uploaded_file($image_tmp, $image_target)) {
    $msg = "Image uploaded successfully";
    }else{
    $msg = "Failed to upload image";
    }
  */
//$id= $_POST['id'];

?>