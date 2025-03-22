<?php
// اطلاعات ورودی از فرم
$username = $_POST['username'];
$password = $_POST['password'];

// اطلاعات صحیح (مثال)
$correct_username = "admin";
$correct_password = "1234";

// بررسی اطلاعات
if ($username === $correct_username && $password === $correct_password) {
    // هدایت به داشبورد
    header("Location: dashboard.php");
    exit();
} else {
    // نمایش پیام خطا
    echo "نام کاربری یا کلمه عبور اشتباه است!";
}
?>
