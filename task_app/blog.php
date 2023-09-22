<?php
    require_once "ClassAutoLoad.php";

$details["sendToEmail"] = "jeremyokuto231@gmail.com";
$details["sendToName"] = "Jerry";
$details["emailSubjectLine"] = "Test 1";
$details["emailMessage"] = "Hi there this is another tests";

$OBJ_SendMail->SendeMail($details, $conf);

header("Location: ./");
exit();