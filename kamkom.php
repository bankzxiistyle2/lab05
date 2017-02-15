<?php
$a = array(
    "Test1"
);
$random_key = array_rand($a,1);
echo "<p>" . $a[$random_key] . "</p>";