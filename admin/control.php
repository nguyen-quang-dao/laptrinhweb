<?php

include ('connect.php');// Chèn trang connect
        class data 
        {
                function select_all()
                {
                    global $conn;
                    $sql="select * from user";// Lấy hết các bản ghi trong table thuộc database
                    $run=mysqli_query($conn,$sql);
                    return $run;
                }
                function delete_contact($id)
                        {
                        global $conn;
                        $sql="delete from user where ID_contact='$id'";
                        $run=mysqli_query($conn, $sql);
                        return $run;
                        }

        }
?>

