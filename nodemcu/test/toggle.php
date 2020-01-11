<?php

    if (isset($_GET['current'])) {
        $file = "data.txt";
        $fp = fopen($file, "r") or die("Not good - coukd not open");
        echo fgets($fp);
        fclose($fp);
    }


    if(isset($_GET['state'])) {
        $fp = fopen("data.txt", "w") or die("failed, man");
        fwrite($fp, $_GET['state']);
        echo $_GET['state'];

        $fp = fopen("log.txt", "a") or die("failed, man");
        $state = $_GET['state'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $now = date("F j, Y, g:i a");

        $message = $state.'-'.$ip.'-'.$now."\r\n";
        fwrite($fp, $message);
        fclose($fp);
    }
?>
