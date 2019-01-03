<?php
// Tạo cookie
   setcookie('cart',"TEST", time()+3600,'/');
//Truy cập lấy giá trị cookie
 echo "giá trị của cookie" .$_COOKIE['cart'];
 //Huy cookie
 setcookie('cart',"",time()-3600,"/");
 echo'<br> Giá trị của cookie là : ' .$_COOKIE['cart'];
?>