<?php
require_once '../model.php';

require_once 'welcome.php';

if(isset($_POST['search_properties'])){


    $data=$_POST['search'];

    $property_info=search_properties($data);

    $check_user_id=user_id_interested_property($user_id);

        require_once '../search_properties.php';

       // echo "<script>location.href='../search_properties.php'</script>";
    
      
}
    
   
    


else {
	echo 'You are not allowed to access this page.';
}


?>
