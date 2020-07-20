<?php
$connect = @mysqli_connect('www', 'root', 'root', 'blog_db') or die('Not connect DB');
mysqli_set_charset($connect, "utf8") or die('Not set charset');