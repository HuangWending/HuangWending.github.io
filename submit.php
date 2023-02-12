<?php
$name = $_POST["name"];
$contact = $_POST["contact"];
$content = $_POST["content"];
$info = $name . " " . $contact . " " . $content . "\n";
$file = fopen("xinxi.txt", "a");
fwrite($file, $info);
fclose($file);
echo "提交成功！";
?>