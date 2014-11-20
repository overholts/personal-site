<?php
    // Getting the information
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $page = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
    $page .= (!empty($_SERVER['QUERY_STRING']) ? "?{$_SERVER['QUERY_STRING']}" : "");
    $datetime = time();
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $remotehost = @getHostByAddr($ipaddress);

    // Create log line
    $logline = $ipaddress . " | " . $datetime . " | " . $useragent . " | " . $remotehost . " | " . $page . "\n";

    // Write to log file:
    $logfile = './log/logfile.txt';

    // Open the log file in “Append” mode
    if (!$handle = fopen($logfile, 'a+')) {
        die("Failed to open log file");
    }

    // Write $logline to our logfile.
    if (fwrite($handle, $logline) === FALSE) {
        die("Failed to write to log file");
    }

    fclose($handle);
?>
