<?php 
$ketnoi['host'] = 'localhost'; 
$ketnoi['dbname'] = 'data'; // Tên database 
$ketnoi['username'] = 'root'; // Tên user mặc định là root 
$ketnoi['password'] = ''; // Password để trống 
@mysql_connect( "{$ketnoi['host']}", "{$ketnoi['username']}", "{$ketnoi['password']}") or die("Không thể kết nối database"); @mysql_select_db( "{$ketnoi['dbname']}") or die("Không thể chọn database"); 
?>