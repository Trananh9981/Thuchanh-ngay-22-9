<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="style.css"/> 
</head> 
<body> 
<form action='login.php' class="dangnhap" method='POST'> 
Tên đăng nhập : <input type='text' name='username' /> 
Mật khẩu : <input type='password' name='password' /> 
<input type='submit' class="button" name="dangnhap" value='Đăng nhập' />
<?php
                // Nếu người dùng click vào button Gửi Dữ Liệu
                // Vì button đó tên là form_click nên đó cũng là
                // tên của key nằm trong biến $_POST
                if (isset($_POST['dangnhap'])){
                    echo 'Tên đăng nhập là: ' . $_POST['username'];
                    echo '<br/>';
                    echo 'Mật khẩu là: ' . $_POST['password'];
                }
           ?>
<br>
<a href='register.php' title='Đăng ký'>Đăng ký</a> 
<?php require 'xuly.php';?> 
<form> 
</body> 
</html>