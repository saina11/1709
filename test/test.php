<?php
$i = 1;
foreach (glob("*", GLOB_ONLYDIR) as $filename) {
    echo "$i. " ."$filename"."<br>";
    $i++;
}
?>
