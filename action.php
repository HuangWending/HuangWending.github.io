<?php
//检查用户是否提交了表单
if(isset($_POST['submit_button'])) {
    //设置变量存储用户输入内容
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    //写入用户评价到文件中
    $fp = fopen('來自網站訪問者的留言.txt', 'a');
    flock($fp, LOCK_EX);
    fwrite($fp, $name . ' - ' . $email . ' - ' . $title . ' - ' . $content. "\n");
    flock($fp, LOCK_UN);
    fclose($fp);

    //提示用户提交成功
    echo "你已經成功提交給Mandeng Wong（黃文定） <br />";
    echo "<a href= './Main.php'> 返回到Mandeng Wong的主頁面 </a>";
}
?>
