<?php
      include ('connect.php');// Chèn trang connect
  class data 
  {
       function insert_user($name,$email,$phone,$mess)
       {
        	global $conn;//Khai báo biến kết nối
        	$sql="insert into user (Name,Email,Phone,Mess) 
                             values ('$name','$email','$phone','$mess')";
        	$run=mysqli_query($conn,$sql);//Hàm thực thi lệnh sql;
        	return $run; //Trả về kết quả thực thi được hay không
    }
}
?>