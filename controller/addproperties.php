<?php
require_once '../model.php';


if (isset($_POST['addproperties'])) {
	$data['house_no'] = $_POST['house_no'];
	$data['street'] = $_POST['street'];
	$data['area'] = $_POST['area'];
	$data['thana'] = $_POST['thana'];
	$data['district'] = $_POST['district'];
  	$data['floor'] = $_POST['floor'];
	$data['room'] = $_POST['room'];
  	$data['price'] = $_POST['price'];
	$data['id']=$_POST['id'];

	$data['water_supply'] = $_POST['water_supply'];
	$data['gas_supply'] = $_POST['gas_supply'];
	$data['electricity_supply'] = $_POST['electricity_supply'];
	$data['security_guard'] = $_POST['security_guard'];
	$data['security_camera'] = $_POST['security_camera'];
	$data['garage'] = $_POST['garage'];

  	$image2=rand(10,10000);

	$image = $_FILES['image']['name'];
	$image_tmp =$_FILES['image']['tmp_name'];
	$image3=$image2.basename($image);
  	// image file directory
	  $target = "../image/".$image3;

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	$msg = "Image uploaded successfully";
	}else{
	$msg = "Failed to upload image";
	}

	//echo "<script>location.href='welcome2.php'</script>";

  	require_once '../addmap.php';
}

else {
	echo 'You are not allowed to access this page.';
}
?>
