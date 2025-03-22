<?php
session_start(); // شروع session

// پاک کردن session
session_unset();
session_destroy();

// هدایت به صفحه ورود
header("Location: index.html");
exit();
?>
