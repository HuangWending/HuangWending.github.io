<html>
    <Linkrel="shortcut icon"href="favicon.ico" href="favicon.ico" />
<head>
    <title>Mandeng Wong(Huang Wending)</title>
    <meta charset="utf-8">
    <style type="text/css">
        body {--insert CSS codes--}
    </style>
</head>
<body>

</div>
     <img src="The%20People's%20Republic%20of%20China.png" />
<div>

<div>
    <h1>Mandeng Wong的個人網站</h1>
    <h2>網址:https://www.mandengwong.com</h2>
</div>
<div>
    2023年2月7日 今天是這個網站的創建日期，也是我開始開發這個網站和網頁的開始，今天是網站和網頁的生日
</div>
<div>
    <img src="favicon.ico" alt="Mandeng Wong象徵性圖示" />
</div>
    <div>
        <form action="About Me.php" method="post">
            <input type="submit" name="submit_button" value="關於我（Mandeng Wong）">
        </form>
    </div>
<div>
    <form action="My developers and friends.php" method="post">
        <input type="submit" name="submit_button" value="MandengWong的開發者/朋友/其他關係名稱清單">
    </form>
</div>
<div>
    <form action="My contact details.php" method="post">
        <input type="submit" name="submit_button" value="聯繫/加入我">
    </form>
</div>
<div>
    <form action="The comments that users give me.php" method="post">
        <input type="submit" name="submit_button" value="給MandengWong的留言（如加入我，評價我，建議我... ）">
    </form>
</div>

<div>
    <form action="Quick access to my Douyin account.php" method="post">
        <input type="submit" name="submit_button" value="快速進入我的抖音通道">
    </form>
</div>

<div>
    <form action="Mandeng Wong's updates and latest information releases.php" method="post">
        <input type="submit" name="submit_button" value="Mandeng Wong的動態和最新資訊發佈">
    </form>
</div>

<div>
    <form action="Alipay public welfare donations.php" method="post">
        <input type="submit" name="submit_button" value="MandengWong發起的支付寶公益捐款">
    </form>
</div>

<div>
    <?php
    date_default_timezone_set('Asia/Shanghai');
    echo "現在的時間為(需要刷新來更新當前時間):". date("Y-m-d h:i:sa");
    ?>
    <script>
        window.setInterval(function(){
            document.write(date('Y-m-d h:i:s A'));
        }, 1000);
    </script>

</div>

<div>
    <?php
    $filename="統計訪問網站的總人數（Mandeng Wong來清零）.txt";
    $count=file($filename);
    $count=$count[0];

    $count=$count+1;

    $fp=fopen($filename,"w");
    flock($fp, LOCK_EX);
    fwrite($fp, $count);
    flock($fp, LOCK_UN);
    fclose($fp);

    echo "訪問Mandeng Wong的網站的總人數為：".$count;
    ?>
</div>

<div>

    <?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $details = json_decode(file_get_contents("http://ip-api.com/json/?lang=zh-CN{$ip}"));
    echo "實時檢測你當前所在的國家或地區的名稱：{$details->country}，{$details->regionName}，{$details->city}";
    ?>

</div>

<div>

    &copy; 2023- MandengWong版權所有 MandengWong技術支援

</div>

</body>
</html>