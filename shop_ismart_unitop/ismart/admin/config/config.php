<?php
session_start();//khai báo khi dùng session
ob_start();//khai báo khi dùng header();
date_default_timezone_set("Asia/Ho_Chi_Minh");//đặt thời gian theo định dạng ở hồ chí minh
/*
 * ---------------------------------------------------------
 * BASE URL
 * ---------------------------------------------------------
 * Cấu hình đường dẫn gốc của ứng dụng
 * Ví dụ: 
 * http://hocweb123.com đường dẫn chạy online 
 * http://localhost/yourproject.com đường dẫn dự án ở local
 * 
 */

$config['base_url'] = "http://shop1.chinhdv.com/ismart/admin/";


$config['default_module'] = 'home';
$config['default_controller'] = 'index';
$config['default_action'] = 'index';












