<?php
    header("Content-Type:text/html; charset=utf-8");
    include("connect.php");
    $sql="SELECT * from food where kind='烤箱'";
    $result=mysqli_query($con,$sql);
    $number_of_rows = mysqli_num_rows($result);
  
          $temp_array  = array();
  
          if($number_of_rows > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                          $temp_array[] = $row;
                          $data =$row;
                  }
          }else{
			  echo "Failed";
		  }
    echo json_encode($temp_array);
    mysqli_close($con);

?>
