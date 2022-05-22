<?php
function checkData($info)
{
    $info = trim($info);
    $info = stripslashes($info);
    $info = htmlspecialchars($info);
    return $info;
}
?>
