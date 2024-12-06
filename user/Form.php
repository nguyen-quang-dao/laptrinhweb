<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" >
        <input type="text" name="name" placeholder="Full Name" />
        <input type="email" name="email" placeholder="Email" />
        <input type="text" name="phone" placeholder="Phone Number" />
        <input type="text" name="mess" class="message_input" placeholder="Message" />
        <button type="submit" name="sub"> Send </button>
    </form>    
<?php
    if(isset($_POST['sub']))// Thực thị sau khi nhấn nút submit
    {
      include('control.php');//Chèn trang control vào bài
      $get_data=new data();//Gọi đến class data
      $insert=$get_data->insert_user($_POST['name'],
                                      $_POST['email'],
                                      $_POST['phone'],
                                      $_POST['mess']);
     if($insert) echo "<script>alert('Cám ơn bạn đã liên hệ')</script>";
    else echo "<script>alert('Không thực thi được')</script>";
    }
?>
</body>
</html>

