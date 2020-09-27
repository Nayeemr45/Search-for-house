<?php
require_once '../model.php';


if (isset($_POST['interested'])) {
	$data['user_id']=$_POST['user_id'];
	$data['p_id']=$_POST['p_id'];

    $p_id= $data['p_id'];
	  //echo $image;
   if (interested_properties($data , $p_id)) {
 $status="Someone Interested";
    $change_status=change_status($status, $p_id);

    echo "Successfully Added";
    echo "<script>location.href='welcome.php'</script>";


  }
}

else {
	echo 'You are not allowed to access this page.';
}


?>
