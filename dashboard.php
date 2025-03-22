<?php
session_start(); // شروع session

// بررسی آیا کاربر وارد سیستم شده است یا نه
if (!isset($_SESSION['username'])) {
    // اگر کاربر وارد نشده باشد، به صفحه ورود هدایت شود
    header("Location: index.html");
    exit();
}

$username = $_SESSION['username']; // دریافت نام کاربری از session
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .dashboard-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .dashboard-box h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .dashboard-box a {
            color: #dc3545;
            text-decoration: none;
        }
        .dashboard-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="dashboard-box">
        <h2>خوش آمدید، <?php echo $username; ?>!</h2>
        <p>شما با موفقیت وارد شدید.</p>
        <a href="logout.php">خروج از سیستم</a>
    </div>
</body>
</html>
