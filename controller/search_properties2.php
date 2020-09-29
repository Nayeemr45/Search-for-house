<?php
require_once '../model.php';


if(isset($_POST['search_properties'])){


    $data=$_POST['search'];

    $property_info=search_properties($data);

    require_once '../search_properties2.php';

       // echo "<script>location.href='../search_properties.php'</script>";
    
      
}
    
   
    


else {
	echo 'You are not allowed to access this page.';
}


?>
