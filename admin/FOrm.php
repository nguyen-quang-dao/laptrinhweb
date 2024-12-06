<?php
            include ('control.php');//Gọi trang Control
            $getdata=new data();//Gọi lớp data
            $select=$getdata->select_all();//Gọi function select trong trang control
   ?>
                  <table style="" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th>Message</th>
                         <th colspan= “2”>Option</th>
                         
                    </tr>
                   </thead>
           <?php 
                   foreach($select as $se_pro)//Duyệt dữ liệu trả về từ database
                {// Duyệt dữ liệu đến đâu rồi thực hiện in vào các hàng trong bảng
            ?>
        <tr>
                   <td><?php echo $se_pro['ID_contact']?></td>
                   <td><?php echo $se_pro['Name']?></td>
                   <td><?php echo $se_pro['Email']?></td>
                   <td><?php echo $se_pro['Phone']?></td>
                   <td><?php echo $se_pro['Mess']?></td>
                   <td><a href="delete.php?del=<?php echo $se_pro['ID_contact']?>" onClick=     
                         “if(confirm(‘Bạn có chắc chắn muốn xoa’)) return true; else return false”
                    >Delete</a></td>
       </tr>
            <?php } ?>
       </tbody>
       </table>
